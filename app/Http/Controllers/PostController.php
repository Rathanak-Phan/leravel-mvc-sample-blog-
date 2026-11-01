<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home() {
        return view('page.home');
    }

    public function blog() {
        $posts = Post::where('status', 'published')
                 ->latest()
                 ->get();

        return view('posts.index', compact('posts'));
    }

    public function contact() {
        return view('page.contact');
    }

    public function create(Request $request) {
        $post = $request->validate([
            "title" =>"required|string",
            "description" => "required|string|max:255",
            "status" => "required|in:published,draft",
            "image" => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048"
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');

            $post['image'] = $imagePath;
        }

        Post::create($post);

        return redirect()->route('blog');
    }
}
