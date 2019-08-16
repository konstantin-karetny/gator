<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
      $post = new Post([
        'title' => $request->get('title'),
        'body' => $request->get('body')
      ]);

      $post->save();

      return response()->json('successfully added');
    }

    public function index()
    {
      return new PostResource(Post::all());
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return response()->json($post);
    }

    public function update($id, Request $request)
    {
      $post = Post::findOrNew($id);

      $post->fill($request->all());
      $post->save();

      return response()->json('successfully updated');
    }

    public function destroy($id)
    {
      $post = Post::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }
}
