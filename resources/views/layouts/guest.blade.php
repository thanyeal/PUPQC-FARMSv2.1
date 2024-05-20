<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Welcome to PUPQC-FARMS</title>
        <link rel="shortcut icon" href="{{ asset('../images/pupqcfaculty.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
        <script src="{{ asset('plugins/bootstrap.bundle.min.js') }}"></script>

    </head>
    <body class="font-sans text-gray-900 antialiased d-flex flex-column h-100 ">
        <style>
            .focus\:border-indigo-500:focus
            {
                --tw-border-opacity: 1 !important;
                border-color: hsl(39, 70%, 48%) !important;
            }
        </style>
        
        <div class="overflow-hidden">
            <div class="univ-background"></div>
            <div class="dim-background"></div>

            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">        

                    {{-- Analytic Content Card: Left Side  --}}
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h1 class="my-5 mb-0 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            Faculty Requirements <br>
                            <span style="color: hsl(39, 70%, 48%)">Monitoring System</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(39, 70%, 48%)">
                        Polytechnic University of the Philippines, Quezon City Campus
                        </p>
                        <div class="row">
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h1 class="my-5 mb-0 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    <span>16</span>
                                </h1>
                                <h4 style="color: hsl(39, 70%, 48%)" class="mb-5">Early Submissions</h4>
                            </div>
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h1 class="my-5 mb-0 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    <span>23</span>
                                    
                                </h1>
                                <h4 style="color: hsl(39, 70%, 48%)" class="mb-5">On-time Submissions</h4>
                            </div>
                            <div class="col-lg-4 mb-5 mb-lg-0">
                                <h1 class="my-5 mb-0 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                    <span>39</span>
                                    
                                </h1>
                                <h4 style="color: hsl(39, 70%, 48%)" class="mb-5">Submitted Documents</h4>
                            </div>
                        </div>
                    </div>

                    {{-- Authentications Card: Right Side --}}
                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="text-center">
                                    <div class="d-flex justify-content-center align-items-center w-100enter">
                                        <img src="../images/pupqcfaculty.png" style="height: 6rem;">
                                    </div>
                                    <p class="text-muted">Welcome to FARMS v2.1</p>
                                </div>
                                <div class="p-2 mt-4">
                                    {{ $slot }}
                                </div>
                                <div class="text-center">
                                    
                                    <p class="mt-4 text-sm text-gray-600">By using this service, you understood, agree, and follow to the PUP<br>
                                        <a href="https://www.pup.edu.ph/terms/" class="text-primary text-decoration-none fst-normal fw-medium">Terms of Use</a>
                                        and <a href="https://www.pup.edu.ph/privacy/" class="text-primary text-decoration-none fst-normal fw-medium">Privacy Statement</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Toast Alert if User is Not Existing --}}
        <div aria-live="polite" aria-atomic="true" class="fixed bottom-4 right-4 z-50">
            <div class="toast-container position-fixed bottom-0 end-0 p-3"> {{-- d-flex justify-content-center align-items-center w-100 --}}
                <div id="forgot_alert" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="ri-error-warning-fill rounded me-2 text-primary" style="font-size: 1.5rem;"></i>
                        <strong class="me-auto text-primary">Invalid Request</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        @if ($errors->any())
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer mt-4 pt-4 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-white">©
                                2023-<script>document.write(new Date().getFullYear())</script> by BSIT 4-2 
                                <a href="#" style="text-decoration: none; color:white;">Faculty Requirements Monitoring System</a>. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- Script for Toaster --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const forgot_alert = document.getElementById('forgot_alert');
                const toast = new bootstrap.Toast(forgot_alert);
                @if ($errors->any())
                    toast.show();
                @endif
            });
        </script>

    </body>
</html>
