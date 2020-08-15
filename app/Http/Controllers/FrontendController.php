<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function room()
    {
        $posts = Post::latest()->get();

        return view('room.index', compact('posts'));
    }

    public function article()
    {
        return view('room.article');
    }
}
