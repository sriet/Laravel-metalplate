<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Berke Kiran">

    <!-- Title Page-->
    <title>Admin Login Page</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- {{ asset('assets')}}/admin/vendor CSS-->
    <link href="{{ asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{ asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img width="75%" src="{{ asset('assets')}}/images/website_logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('admin_logincheck') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember">Remember Me
                                </label>
                                <label>
                                    <a href="#">Forgotten Password?</a>
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            <div style="margin-bottom: 10px;">@include('home.message')</div>
                            <!--div class="social-login-content">
                                <div class="social-button">
                                    <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                    <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                </div>
                            </div-->
                        </form>
                        <div class="register-link">
                            <p>
                                Don't you have account?
                                <a href="#">Sign Up Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery JS-->
<script src="{{ asset('assets')}}/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- {{ asset('assets')}}/admin/vendor JS       -->
<script src="{{ asset('assets')}}/admin/vendor/slick/slick.min.js">
</script>
<script src="{{ asset('assets')}}/admin/vendor/wow/wow.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/animsition/animsition.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{ asset('assets')}}/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{ asset('assets')}}/admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{ asset('assets')}}/admin/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="{{ asset('assets')}}/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
