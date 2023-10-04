<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCourt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    <link href="{{asset ('assets/img/nationalemblem.png')}}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}"/>
</head>
<body>
<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h6 class="m-0 display-4 text-primary ">eCourt</h6>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-white border-bottom d-none d-lg-flex">
                <div class="col-lg-7 text-left">
                    <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>ecourtservices@yahoo.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+91 2586789</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center p-2">
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!--   Thirdparty Login -->
<div class="loginbackground">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Login Here</h1>
                        <form action="{{route('do.thirdparty.login')}}" method='POST'>
                            @csrf
                            <table style="text-align: center;  margin-left: auto;margin-right: auto;  ">
                                <tr><td><input type="email" name="user_name" class="form-control border-0 p-4" placeholder="Your UserName" required="required" /></td></tr>
                                <tr><td><input type="password" name="password"class="form-control border-0 p-4" placeholder="Your Password" required="required" /></td></tr>
                                <tr><td id="id1"><button id="id1" type="submit">Login</button></td> </tr>
                                <tr><td><span>Don't have an account? <a href="">Signup</a></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   Thirdparty Login -->

</body>
</html>
