<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>

<body>

@include('components.nav')

<main role="main">
    @yield('content')
</main>

@include('components.footer')
@include('components.footer-scripts')
</body>
</html>
