<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index page</title>
</head>
<body>
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
</body>
</html>
