@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
    <h2>Create New Blog Post</h2>
    <hr>
    <form method="POST" action="/posts">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" >
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" rows="10" id="body" name="body" placeholder="Content of your Blog post goes here" ></textarea>
      </div>
         {{ csrf_field() }}
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    
    @include ('layouts.errors')
</div>
@endsection