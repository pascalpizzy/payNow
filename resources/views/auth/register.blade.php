<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from intez-html.vercel.app/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:51:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intez</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="@@class">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
                    <h4 class="card-title mt-5">Create your account</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="post" action="{{ route('register') }}">
                        @csrf
                            <div class="col-12">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="col-12 ">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="hello@example.com"
                                    name="email">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password_confirmation" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        I certify that I am 18 years of age or older, and agree to the <a href="#"
                                            class="text-primary">User Agreement</a> and <a href="#"
                                            class="text-primary">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Create account</button>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-3 mb-0"> <a class="text-primary" href="signin.html">Sign in</a> to your
                                account</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="js/scripts.js"></script>


</body>


<!-- Mirrored from intez-html.vercel.app/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:51:03 GMT -->
</html>