<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        $posts = Post::latest();
        if($month = request('month')) {
            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if($year = request('year')) {
            $posts->whereYear('created_at',$year);
        }
        $posts = $posts->get();
        //$posts = Post::paginate(2);
        return view('posts.index',compact('posts'));
    }
    
    public function create()
    {
        //$posts = post::all();
        $posts = Post::latest();
        $posts = $posts->get();
        return view('posts.create');
    }
    
    public function store()
    {
        /*
        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->save(); */
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->user()->id
        ]);
        session()->flash('message','Your post has been posted successfully');
        return redirect('/');
    }
    
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
    
    public function userposts($user)
    {
        $users = User::select('id')->where('name', $user)->first();
        $posts = Post::latest()->where('user_id',$users->id)->get();
        return view('posts.index',compact('posts'));
    }
}