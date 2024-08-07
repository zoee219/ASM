<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       
        @section('title')
            User | 
        @show
    </title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @stack('styles')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            {{-- <!-- Sidebar -->
            @include('user.layouts.sidebar') --}}

            <div>
                <!-- Header -->
                @include('user.layouts.header')

                <!-- Main -->
                @yield('content')

                <!-- Footer -->
                @include('user.layouts.footer')

            </div>
        </div>
    </div>

    @stack('scripts')
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>