<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- us style -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.css" />
    <link rel="styleSheet" href="css/bootstrap.min.css"/>
    <link rel="styleSheet" href="css/style.css"/>
    <!-- end style -->
    <title>{{ isset($title) ? $title : ""  }} | Laracarte-list of artisan</title>
</head>
<body>
     <!-- navbar -->
    @include('layouts.partials._nav')
    <!-- end navbar -->

    @yield('content')
    @include('layouts.partials._footer')
    <!-- js -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <!-- end js -->
</body>
</html>
