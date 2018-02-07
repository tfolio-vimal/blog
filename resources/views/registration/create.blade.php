@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
    <h2>Register Yourself here</h2>
    <hr>
    <form method="POST" action="/register">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required >
      </div>
      <div class="form-group">
        <label for="email">Email ID</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required >
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required >
      </div>
        <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required >
      </div>
         {{ csrf_field() }}
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    
    @include ('layouts.errors')
</div>
@endsection