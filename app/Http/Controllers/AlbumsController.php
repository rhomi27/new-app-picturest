<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlbumsController extends Controller
{
    //
    public function index(Request $request)
    {
        $photo = Album::where('user_id', $request->id)->latest()->get();
        return response()->json([
            'data' => $photo
        ]);
    }
    public function create(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'error' => $validator->errors(),
            ]);
        } else {
            $photo = $request->file('thumbnail');
            $extension = $photo->getClientOriginalExtension();
            $namePhoto = 'thumbnail-' . now()->timestamp . '.' . $extension;
            $photo->move('thumbnail', $namePhoto);

            $data = Album::create([
                'user_id' => auth()->id(),
                'thumbnail' => $namePhoto,
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return response()->json([
                'status' => 'success',
                'data' => $data,
            ], 200);
        }

    }
}
