<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        Post::create($request->all());

        return redirect()->back()->with('status', 'Berhasil Menambahkan Postingan');
    }
}
