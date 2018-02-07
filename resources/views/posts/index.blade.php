@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
    @include ('posts.post')
    
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
    <div id="app">@{{message}}</div>
    <script type="text/javascript" src="/js/mainjs.js"></script>

</div><!-- /.blog-main -->
@endsection