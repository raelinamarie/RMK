<html>
<head>
    @include('components.head')
</head>
<body>
    <div class="row">
        @include('layouts.navbar')
    </div>
    <div class="row" id="wrap">
        @yield('content')
    </div>
@include('components.footer')
</body>

</html>