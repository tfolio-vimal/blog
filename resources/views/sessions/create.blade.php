@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
    <h2>Login Here</h2>
    <hr>
    <form method="POST" action="/login">
      <div class="form-group">
        <label for="email">Email ID</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required >
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required >
      </div>
         {{ csrf_field() }}
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    
    @include ('layouts.errors')
</div>
@endsection