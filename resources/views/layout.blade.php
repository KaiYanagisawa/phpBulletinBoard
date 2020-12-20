<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>bbs</title>
    @include('style-sheet')
</head>

<body>
    @include('nav')
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
