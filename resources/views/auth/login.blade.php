<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from intez-html.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:50:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paylio</title>
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
                    <a href="index.html"><img src="assets/img/logo1.png" alt=""></a>
                    <h4 class="card-title mt-5">Sign in to Paylio</h4>
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="post"  action="{{ route('login') }}">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="hello@example.com"
                                    name="email">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="col-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                        me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="reset.html">Forgot Password?</a>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">Don't have an account? <a class="text-primary" href="signup.html">Sign
                                up</a></p>
                    </div>

                </div>
                <div class="privacy-link">
                    <a href="signup.html">Have an issue with 2-factor
                        authentication?</a>
                    <br />
                    <a href="signup.html">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="js/scripts.js"></script>


</body>


<!-- Mirrored from intez-html.vercel.app/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:50:53 GMT -->
</html>