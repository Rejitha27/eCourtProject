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
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{route('/')}}" class="nav-item nav-link">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                        <a href="{{route('lawyer.list')}}" class="nav-item nav-link">Lawyers</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('admin.login')}}">Clerk</a>
                                <a class="dropdown-item" href="{{route('lawyer.login')}}">Lawyer</a>
                                <a class="dropdown-item" href="{{route('client.login')}}">Client</a>
                                <a class="dropdown-item" href="{{route('thirdparty.login')}}">Third Party</a>

                            </div>
                        </li>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{route('signup')}}" class="btn btn-primary mr-3 d-none d-lg-block">Sign Up</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->

   <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Satyamev Jayathe</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Our fighting Is for your justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('client.login')}}">File a case</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Prepared to fight for justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="{{route('client.login')}}">File a case</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="assets/img/highcourtkerala.png" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">

                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">Providing Reliable And Effective Legal Services</h1>
                    <p>Kerala High Court is the apex court in the Indian state of Kerala and in the Union Territory of Lakshadweep</p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">

                    <h1 class="mb-4">Serving Justice</h1>
                    <p>The Indian Constitution empowers the Judiciary to act as the Guardian of the Law. A number of provisions deal with the Judiciary's role, power, function, and officer appointments.</p>

                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0">As the name suggests, Civil Law comprises of set of rules and regulations which helps in resolving disputes which are non-criminal in nature. The law in India is primarily governed by the Code of Civil Procedure, 1908 (CPC) which is a procedural law pertaining to administration of civil proceedings in India.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">There are five broad sets of family laws in India, namely Hindu law, which governs all Hindus, Buddhists, Jains, and Sikhs, Muslim law for the Muslims; Christian law for the Christian; Parsi law for the Parsis and secular law, i.e. the Special Marriage Act.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">All the laws which pertain to how, what and why of how businesses are legally allowed to and supposed to function are encompassed by what is business law. Business law meaning includes contract laws, manufacturing and sales laws, and also hiring practices and ethics. In simple words, it refers to and pertains to the legal laws of business and commerce in the public as well as the private sector. Note that it is also known as commercial law and corporate law, due to its nature of regulating these worlds of business.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Criminal law can be regarded as the body of laws that deal with matters of criminal wrongs, for instance, theft, murder, sexual abuse, threatening, etc., and is also accountable for conducting a trial for convicted offenders. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->





    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="assets/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">

                        <h1 class="mb-4">Case Statistics</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h6 class="text-secondary m-0">1875</h6>
                            </div>
                            <div class="ml-4">
                                <h5>Cases Filed</h5>

                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h6 class="text-secondary m-0">2845</h6>
                            </div>
                            <div class="ml-4">
                                <h5>Pending Cases</h5>

                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h6 class="text-secondary m-0">3875</h6>
                            </div>
                            <div class="ml-4">
                                <h5>Closed Cases</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">

                <h1 class="mb-4">Cheif Justice</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">A.K Ram</h5>
                            <p class="mb-3 px-4">2022-Present</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Srinivas Iyyer</h5>
                            <p class="mb-3 px-4">2018-2022</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Jithendra Pal</h5>
                            <p class="mb-3 px-4">2015-2018</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Mitra Pandey</h5>
                            <p class="mb-3 px-4">2014-2015</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Anna Chandy</h5>
                            <p class="mb-3 px-4">2011-2014</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-5.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

   <!-- Footer Start -->
<div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">ecourt</h5>
                    <p class="m-0">123 Street, Trivandrum, Kerala</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-envelope-open text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Email Us</h5>
                    <p class="m-0">ecourtservices@yahoo.com</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                <div class="ml-3">
                    <h5 class="text-white">Call Us</h5>
                    <p class="m-0">+91 2586789</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h6 class="m-0 mt-n2 display-4 text-primary text-uppercase">ecourt</h6>
            </a>
            <p>Connect through social media platforms</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About</a>
                <a class="text-white mb-2" href="lawyer.html"><i class="fa fa-angle-right mr-2"></i>Lawyers</a>
                <a class="text-white mb-2" href="login.html"><i class="fa fa-angle-right mr-2"></i>Login</a>
                <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
            <p>To know more about ecourtservices get in touch with our team by giving your emailid</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Get Info</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">ecourt</a>. All Rights Reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-right">
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">C-DIT Kerala</a></p>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Back to Top -->
<a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{ asset('assets/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js')}}"></script>
<!--  Javascript functions -->
<script src="{{ asset('assets/js/javascript.js')}}"></script>
</body>

</html>
