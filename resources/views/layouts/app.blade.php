<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>FARMS v2.1</title>{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
        <link rel="shortcut icon" href="{{ asset('../images/pupqcfaculty.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    </head>
    <body class="font-sans antialiased">

        <style>
            .focus\:border-indigo-500:focus {
                --tw-border-opacity: 1;
                border-color: #c09d00 !important;
            }
        </style>
        
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <div class="page-header d-print-none">
                <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <style>
                                .page-pretitle {
                                    font-size: .7rem;
                                    font-weight: var(--tblr-font-weight-bold);
                                    text-transform: uppercase;
                                    letter-spacing: .04em;
                                    line-height: 1rem;
                                    color: var(--tblr-muted);
                                }
                            </style>
                            <div class="page-pretitle">
                                <span>Goodmorning,</span>
                            </div>
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ Auth::user()->name }}
                            </h2>
                        </div>
                    </h2>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="page-pretitle fw-bolder">
                            <span id="currentDateTime"></span>
                            <script>
                                var currentDate = new Date();
                                var days =   ['Sun', 'Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat'];
                                var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                                var day = days[currentDate.getDay()];
                                var month = months[currentDate.getMonth()].toUpperCase();
                                var date = currentDate.getDate();
                                var year = currentDate.getFullYear();
                                var hour = currentDate.getHours();
                                var minute = currentDate.getMinutes();
                                var ampm = hour >= 12 ? 'PM' : 'AM';
                                hour = hour % 12;
                                hour = hour ? hour : 12;
                                minute = minute < 10 ? '0' + minute : minute; 
                                var formattedDate = day + ', ' + month + ' ' + date + ' ' + year + ', ' + hour + ':' + minute + ' ' + ampm;
                                document.getElementById('currentDateTime').innerHTML = formattedDate;
                            </script>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <main>
                {{ $slot }}
            </main>

        </div>
    </body>
</html>
