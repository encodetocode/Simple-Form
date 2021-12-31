<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $data = $request->collect()->toArray();
        $post->create($data);

        return redirect('/');
    }

    //deletes selected id
    public function destroyed(Request $request, Post $post)
    {
        if ($post) {
            $post->delete();
        };
        return redirect()->route('posts');
    }

    public function index(Request $request, Post $post)
    {
        //this is for the the posts view
        if ($request->route()->named('all')) {
            return view('posts', [
                'posts' => Post::all()
            ]);
        };

        //this is for edit view
        if ($request->route()->named('editform')) {
            return view('edit', [
                'post' => $post
            ]);
        }
    }

    // to edit a post
    public function edit(Request $request, Post $post)
    {
        if ($post) {
            $data = $request->collect()->toArray();
            $post->update($data);
            return redirect()->route('all');
        }
    }

    public function show(Post $post)
    {
        if ($post) {
            return view('post', [
                    'post' => $post
            ]);
        }
    }
}
