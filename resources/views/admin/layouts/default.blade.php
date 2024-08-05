<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
        ShopAccGame
        @show
    </title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Navbar -->
        @include('admin.layouts.sidebar')

        <div class="container-fluid p-0">
            <!-- Header -->
            @include('admin.layouts.header')

            <!-- Main content -->
            @yield('content')

            <!-- Footer -->
            @include('admin.layouts.footer')
        </div>
    </div>

    @stack('scripts') 
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
