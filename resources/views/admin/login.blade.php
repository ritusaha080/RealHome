<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:22:57 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ 'hyperassets' }}/images/favicon.ico">

    <!-- App css -->
    <link href="{{ 'hyperassets' }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ 'hyperassets' }}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

</head>

<body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="index-2.html">
                                <span><img src="{{ 'hyperassets' }}/images/logo.png" alt=""
                                        height="18"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.
                                </p>
                            </div>



                            <div class="card">
                                <div class="card-body login-card-body">
                                    <p class="login-box-msg">Sign in to start your session

                                        @if (Session::has('success'))
                                            <div class="alert alert-success">

                                                {{ Session::get('success') }}

                                            </div>
                                        @endif

                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email"
                                                name="email">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                        {{-- <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div> --}}

                                        <div class="mb-3">
                                            <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot
                                                    your
                                                    password?</small></a>
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="password" class="form-control"
                                                    placeholder="Enter your password" name="password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin"
                                                    checked>
                                                <label class="form-check-label" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>
                                        </div>

                                        <div class="mb-3 mb-0 text-center">
                                            <button class="btn btn-primary" type="submit"> Log In </button>
                                        </div>

                                    </form>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="pages-register.html"
                                            class="text-muted ms-1"><b>Sign Up</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end page -->

            <footer class="footer footer-alt">
                2018 -
                <script>
                    document.write(new Date().getFullYear())
                </script> © Hyper - Coderthemes.com
            </footer>

            <!-- bundle -->
            <script src="{{ 'hyperassets' }}/js/vendor.min.js"></script>
            <script src="{{ 'hyperassets' }}/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 May 2022 20:22:57 GMT -->

</html>
