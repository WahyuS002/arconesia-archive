<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

use Carbon\Carbon;
use DateTime;
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
        $comments = Comment::all();
        return view('room.article', compact('post', 'comments'));
    }

    public function comment(Request $request)
    {
        $data = $request->all();
        $data['tanggal'] = Carbon::now();

        // dd($data);
        // I don't know what mean of this line code
        Comment::create($request->all());

        // return response()->json(["message" => $request], 200);
        return response()->json(true);
    }
}
