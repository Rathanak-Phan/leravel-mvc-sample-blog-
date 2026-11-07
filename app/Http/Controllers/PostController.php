<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit($id) {
        $post = Post::findOrFail($id);

        return view('posts.update', compact('post'));
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            "title" =>"required|string",
            "description" => "required|string|max:255",
            "status" => "required|in:published,draft",
            "image" => "nullable|image|mimes:jpg,jpeg,png,webp|max:2048"
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            // Upload new image
            $imagePath = $request->file('image')->store('posts', 'public');

            // Update image path
            $validated['image'] = $imagePath;
        }

        $post->update($validated);

        return redirect()->route('blog');
    }
}
