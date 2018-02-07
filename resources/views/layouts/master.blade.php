<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
      <script type="text/javascript">
                setTimeout(function() {
            $('#flash-message').fadeOut('slow');
        }, 5000);
      </script>
  </head>

  <body>
      
    @include ('layouts.header')

    <div class="container">

      <div class="row">

        @yield ('content')
          
          @if (auth()->check())
          @include ('layouts.sidebar')
          @endif

        

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include ('layouts.footer')
  </body>
</html>