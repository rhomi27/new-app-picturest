<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    //
    public function index()
    {
        return view("page.home.home");
    }
    public function create()
    {   
            return view("page.create.create");   
    }

    public function update(Photo $photo){
        
        $photos = Photo::where("uuid", $photo->uuid)->first();
        return view("page.draft.upload-draft", compact("photos"));
    }
    public function getdataHome(){
        $photos = Photo::with('users')->where("private","public")->where("photo_draft","off")->orderBy("created_at","desc")->paginate(10);
        return view("page.home.data.data", compact("photos"));
    }

    public function detail(Photo $photo){
        $photos = Photo::with('users')->where("photo_draft","off")->where('uuid',$photo->uuid)->first();
        return view("page.home.detail", compact("photos"));
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:30',
            'image' => 'required|mimes:png,jpg,jpeg|image|max:7000',
            'deskription' => 'max:500',
            'private'=> 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => $validator->errors(),
            ]);
        } else {
            $photo = $request->file('image');
            $extension = $photo->getClientOriginalExtension();
            $namePhoto = 'photos-' . now()->timestamp . '.' . $extension;
            $photo->move('photo', $namePhoto);

            $expired = null;
            if ($request->drafphoto == 'on') {
                $expired = now()->addDays(7);
            }

            $data = Photo::create([
                'image' => $namePhoto,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
                'album_id' => $request->album_id,
                'title' => $request->title,
                'deskription' => $request->deskription,
                'private' => $request->private,
                'on_comments' => $request->on_comments,
                'photo_draft' => $request->drafphoto,
                'expired_at'=> $expired
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        }
    }

    public function photoDraf(Request $request){
        $photos = Photo::where('user_id',auth()->id())->where("photo_draft","on")->latest()->get();
        return view('page.draft.draft', compact('photos'));
    }
}
