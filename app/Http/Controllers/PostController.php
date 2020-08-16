<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $tags = Tag::all();

        return view('post.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $data = auth()->user()->posts()->create($request->all());

        $nama_foto = $request->file('foto')->getClientOriginalName();
        $foto = $request->file('foto');
        $data['foto'] = $foto->storeAs("images/post", $nama_foto);

        dd($data['foto']);

        $post = $data;

        $post->tags()->attach($request->tags);

        return redirect()->back()->with('status', 'Berhasil Menambahkan Postingan');
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $post->update($request->all());

        return redirect()->back();
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('success', 'The post has been deleted');

        return redirect()->back();
    }
}
