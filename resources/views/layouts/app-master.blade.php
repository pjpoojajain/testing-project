<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Apka Apna Bookstore</title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" type = "text/css" href="{{ url('css/font-awesome.min.css') }}">                <!-- Font Awesome -->
    <link rel="stylesheet" type = "text/css" href="{{ url('css/bootstrap.min.css') }}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type = "text/css" href="{{ url('css/tooplate-style.css') }}">   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('css/app.css') !!}" rel="stylesheet">
</head>
<body>
    <main class="container">
        @yield('content')
    </main>

    <script src="{!! url('js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{{ url('js/jquery-1.11.3.min.js') }}"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{ url('js/popper.min.js') }}"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>     
       
            $(document).ready(function(){
                
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });

        </script>
      
  </body>
</html>