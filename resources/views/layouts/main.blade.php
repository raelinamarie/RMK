<html>
<head>
    @include('components.head')
</head>
<body>
    <div class="row">
        @include('layouts.navbar')
    </div>
    <div class="row">
        @yield('content')
    </div>
</body>

</html>