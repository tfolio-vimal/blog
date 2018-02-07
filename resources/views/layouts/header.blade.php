<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
            @if (Request::path() == '/')
                <a class="nav-link active" href="/">Home</a>
            @else
                <a class="nav-link" href="/">Home</a>
            @endif
            
            @if (Request::path() == 'posts/create')
                <a class="nav-link active" href="/posts/create">Create New Blog Post</a>
            @else
                <a class="nav-link" href="/posts/create">Create New Blog Post</a>
            @endif
          
        
          @if (Auth::check())
            <a class="nav-link ml-auto" href="/posts/user/{{Auth::user()->name}}">{{Auth::user()->name}}</a> 
            <a class="nav-link " href="/logout">Logout</a>
            @else
            <a class="nav-link " href="/login">Login</a>
            <a class="nav-link " href="/register">Register</a>
          @endif
                  
        </nav>
      </div>
    </div>

    @if($flash=session('message'))
    <div id="flash-message" class="alert alert-success flash-message">
        {{ $flash }}
    </div>
    @endif

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">iinflow Blog</h1>
        <p class="lead blog-description">Blog dedicated to iinflow app</p>
      </div>
    </div>