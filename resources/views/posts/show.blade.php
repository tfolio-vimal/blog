@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
<div class="blog-post">
    <h2 class="blog-post-title">{{$post->title}}</h2>
    @if ($post->tags)
    <ul>
        @foreach ($post->tags as $tag)
        <li><a href="/posts/tags/{{$tag->name}}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>
    @endif
    <p class="blog-post-meta">
        {{ $post->created_at->toDayDateTimeString() }}
    </p>
    <p>{{$post->body}}</p>
    
    <div class="comments">
        <h3>Comments : </h3>
        <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                {{ $comment->body }}&nbsp;
                <small>{{ $comment->created_at->diffForHumans() }}</small>
            </li>
        @endforeach
        </ul>
    </div>
    
    <hr>
    <div class="card">
        <div class="card-block">
            Write a comment here
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea type="text" name="body" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    @include ('layouts.errors')
</div>
</div>
@endsection