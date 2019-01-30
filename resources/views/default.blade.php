<!Doctype html>
<html>
<head>
    <title>Miracles-Tools - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="desctiption" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container jumbotron">
        @yield('content')
    </div>
</body>
</html>