<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

use Auth;

class LikeController extends Controller
{

    public function index(Post $post){
        return view('index')->with(['posts' => $post->get()]);
    }

    public function store($postId)
    {
        Auth::user()->like($postId);
        return 'ok!'; //レスポンス内容
    }

    public function destroy($postId)
    {
        Auth::user()->unlilikeke($postId);
        return 'ok!'; //レスポンス内容
    }
}