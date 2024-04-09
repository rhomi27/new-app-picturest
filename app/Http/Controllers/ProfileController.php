<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    //
    public function index(User $user)
    {
        $data = $user;
        return view("page.profile.profil", compact("data"));
    }

    public function show()
    {
        return view("page.profile.edit-profil");
    }

    public function editAvatar(Request $request)
    {
        $user = auth()->user();
        if ($request->has('avatar')) {
            $avatarData = $request->avatar;
            $avatarName = 'avatar' . time() . '.jpg';
            $croppedImagePath = public_path('avatar/') . $avatarName;
            file_put_contents($croppedImagePath, base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $avatarData)));
            if ($user->avatar !== 'userdefault.jpg') {
                File::delete(public_path('avatar/' . $user->avatar));
            }
            $user->update([
                'avatar' => $avatarName
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Photo profil berhasil diperbaharui',
                'avatar' => $avatarName
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Tidak ada data gambar yang diterima.'
            ], 400);
        }
    }

    public function deleteAvatar()
    {
        $user = auth()->user();
        if ($user->avatar !== 'userdefault.jpg') {
            File::delete(public_path('avatar/' . $user->avatar));
        }
        $user->update([
            'avatar' => 'userdefault.jpg'
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Photo profil berhasil dihapus'
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->name;
        $user->full_name = $request->full_name;
        $user->gender = $request->gender;
        $user->bio = $request->bio;
        $user->save();

        return response()->json([
            'status'=> 200,
            'message'=> 'Berhasil diperbarui'
        ]);
    }

    public function photoPrivate(Request $request){
        $photo = Photo::where('user_id', $request->id)->where('private','private')->where('photo_draft','off')->latest()->paginate(10);
        return view('page.profile.data.private',compact('photo'));
    }

    public function photoPublish(Request $request){
        $photo = Photo::where('user_id', $request->id)->where('private','public')->where('photo_draft','off')->latest()->paginate(10);
        return view('page.profile.data.publish',compact('photo'));
    }

}
