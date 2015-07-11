<!DOCTYPE html>
<html>
<head>
    <title>Blog Juninho Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</head>
    <body>
        <div class="container">
                @yield('content')
        </div>
    </body>
</html>
