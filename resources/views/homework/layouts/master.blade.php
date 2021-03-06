<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('homework/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('homework/css/blog-home.css')}}" rel="stylesheet">

</head>

<body>

    @include('homework.layouts.header')

    @yield('content')

    @include('homework.layouts.footer')

  <!-- Bootstrap core JavaScript -->
    <script src="{{url('homework/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('homework/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
