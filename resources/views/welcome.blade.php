<!DOCTYPE html>
<html class="h-101" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>FARMS v2.1</title>

        <link rel="shortcut icon" href="{{ asset('../images/pupqcfaculty.png') }}">
        @vite('resources/js/app.js')
        <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}">
        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> 
    </head>
    <body class="d-flex flex-column h-100">

        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container position-fixed bottom-0 end-0 p-3"> {{-- d-flex justify-content-center align-items-center w-100 --}}
                <div id="forgot_alert" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="ri-error-warning-fill rounded me-2 text-primary" style="font-size: 1.5rem;"></i>
                        <strong class="me-auto text-primary">Informationz</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Please contact System Administrator or the Academic Head for this matter.
                    </div>
                </div>
            </div>
        </div>
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
                                    <h5 class="text-primary" style="font-size: 2rem !important;">
                                        <img src="../images/pupqcfaculty.png" alt="" height="90">
                                    </h5>
                                    <p class="text-muted">Sign in to continue.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="needs-validation" novalidate="" action="" method="">
                                        <div class="mt-4 mb-3">
                                            <label class="form-label" >Email</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="text" class="form-control pe-5" aria-describedby="passwordInput" placeholder="Enter webmail" name="webpass" required="" oncopy="return false" onpaste="return false">
                                            </div>
                                        </div> 
                                        <div class="mt-4 mb-3">
                                            <label class="form-label" >Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password" id="password-inputX" class="form-control pe-5 password-input" aria-describedby="passwordInput" placeholder="Enter password" name="webpass" required="" oncopy="return false" onpaste="return false" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>   
                                        <div class="text-start" style="padding-left: 5px;">
                                            <a id="forgotToast" style="cursor: pointer;" class="text-decoration-underline text-primary">Forgot password?</a>
                                        </div>
                                        <div class="mt-1">
                                            <button class="btn btn-primary w-100 submit-btn mt-4" type="submit">Sign In</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="text-center">
                                    <p class="mt-5 mb-0 fs-12 text-muted">By using this service, you understood, agree, and follow to the PUP<br>
                                        <a href="https://www.pup.edu.ph/terms/" class="text-primary text-decoration-none fst-normal fw-medium">Terms of Use</a>
                                        and <a href="https://www.pup.edu.ph/privacy/" class="text-primary text-decoration-none fst-normal fw-medium">Privacy Statement</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer mt-4 mb-3">
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

        <script>
            const forgotToast = document.getElementById('forgotToast')
            const forgot_alert = document.getElementById('forgot_alert')
            if (forgotToast) {
                forgotToast.addEventListener('click', () => {
                    const toast = new bootstrap.Toast(forgot_alert)
                    toast.show()
                })
            }
        </script>
    </body>
</html>