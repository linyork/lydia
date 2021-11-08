<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Lydia</title>
    {{-- CSS Start--}}
    <link rel="stylesheet" href="{{ asset('/css/common/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    {{-- CSS End--}}
</head>
<body>
    {{-- JS Start--}}
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="{{ asset('/js/techan.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    {{-- JS End--}}
</body>
</html>
