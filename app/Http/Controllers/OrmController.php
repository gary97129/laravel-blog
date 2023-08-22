<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class OrmController extends Controller
{

    public function create()
    {
        Post::create([
            'title' => 'Post Title',
            'content' => 'Post Content',
        ]);
    }

    public function index()
    {
        $posts = Post::all();
        return($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return($post);
    }

    public function update($id)
    {
        $post = Post::find($id)
            ->update([
               'title' => 'Updated Title',
               'content' => 'Updated Content',
            ]);
    }

    public function destroy($id)
    {
        Post::destroy($id);
    }

}
