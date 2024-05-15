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

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            
            <div aria-live="polite" aria-atomic="true" class="fixed bottom-4 right-4 z-50">
                <div class="toast-container position-fixed bottom-0 end-0 p-3"> {{-- d-flex justify-content-center align-items-center w-100 --}}
                    <div id="success_alert" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <i class="ri-error-warning-fill rounded me-2 text-success" style="font-size: 1.5rem;"></i>
                            <strong class="me-auto text-success">Success Request</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            You have been logged in successfully.
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const success_alert = document.getElementById('success_alert');
                const toast = new bootstrap.Toast(success_alert);
                if (!localStorage.getItem('toastShown')) {
                    toast.show();
                    // setTimeout(() => toast.hide(), 2500);
                    localStorage.setItem('toastShown', true); 
                    
                }
                else {
                    localStorage.setItem('toastShown', false);
                }
            </script>
        </div>
    </body>
</html>
