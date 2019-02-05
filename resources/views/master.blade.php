<!doctype html>
<html lang="en">
<head>
    @include('partials._header')
</head>


<body>
<div class="container-fluid">
    @include('partials._navigation')
</div>

@yield('content')


@include('partials._footer')
</body>
</html>