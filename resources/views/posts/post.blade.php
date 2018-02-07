<div class="blog-post">
        @foreach ($posts as $post)
            <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{$post->title}}</a></h2>
            <p class="blog-post-meta">
                by {{ $post->user->name }}, on 
                {{ $post->created_at->toDayDateTimeString() }}
            </p>
            <p>{{$post->body}}</p>
            <hr>
        @endforeach
    </div>

{{-- {{ $posts->links() }} --}}