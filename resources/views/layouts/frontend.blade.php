<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'White Dashboard') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&family=Sarabun:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    <link href="{{ asset('css/white-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
</head>

<body class="white-content {{ $class ?? '' }}">
    <div class="wrapper wrapper-full-page">
        <div class="full-page {{ $contentClass ?? '' }}">
            <div class="content" style="padding-top: 50px;">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
    <!-- Chart JS -->
    {{-- <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script> --}}
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
    <script src="{{ asset('js/white-dashboard.min.js?v=1.0.0') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>

    @stack('js')

    <script>
        $(document).ready(function() {
            if (typeof $('.summernote').length != 'undefined') {
                $('.summernote').summernote({
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline']],
                        ['para', ['ul', 'ol']],
                    ],
                    theme: 'bs4'
                });
            }

        });
    </script>
    @stack('js')
</body>

</html>