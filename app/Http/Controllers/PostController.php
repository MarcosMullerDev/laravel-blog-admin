<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::latest();

        if ($request->search) {

            $query->where('title', 'like', '%' . $request->search . '%');

        }

        $posts = $query->paginate(6);

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')
                ->store('posts', 'public');

        }

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'image' => $imagePath,
            'status' => $request->status,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post criado com sucesso');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'status' => $request->status,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post atualizado');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deletado');
    }
}