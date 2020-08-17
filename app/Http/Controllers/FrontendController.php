<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Laravel\Ui\Presets\React;

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

    public function article(Post $post)
    {
        return view('room.article', compact('post'));
    }

    public function comment(Request $request)
    {
        return response()->json(["message" => $request], 200);
    }
}
