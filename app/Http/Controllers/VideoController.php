<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoController extends Controller
{
    public function index() {
        return view('/video/index');
    }

    public function getVideo(Request $request)
    {
        $userId = Auth::user()->id;
        $img_info = $request->file('file')->hashName();
        $path_img = $request->file('file')->store('/public/img');
        Video::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "file"=>$path_img,
            "user_id"=>$userId,
        ]);
  
        return redirect()->to('/video/');
    }
}
