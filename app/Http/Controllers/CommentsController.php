<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    //
    
    public function store(Post $post)
    {
        $this->validate(request(),[
            'body' => 'required|min:2'
        ]);
        $post->addComment(request('body'),auth()->user()->id);
        /*
        Comment::create(['body' => request('body'),
                         'post_id' => $post->id]);
                         */
        return back();
    }
}
