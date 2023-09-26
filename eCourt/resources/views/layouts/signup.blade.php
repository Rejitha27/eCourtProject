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
                        <a href="" class="nav-item nav-link">Home</a>
                        <a href="" class="nav-item nav-link">About</a>
                        <a href="#" class="nav-item nav-link">Lawyers</a>
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
                        <a href="" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->
<div class="container mt-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registration Form</div>
                <div class="card-body">
                    <form action="{{route('do.signup')}}" method="POST" enctype='multipart/form-data'>
                        <!-- User Type -->
                        <div class="form-group row mb-3">
                            <label for="usertype" class="col-sm-4 col-form-label">User Type</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="usertype" name="usertype" onclick="validateusertype()">
                                    <option value="lawyer">Lawyer</option>
                                    <option value="client" id="client">Client</option>
                                    <option value="thirdparty">Third Party</option>
                                </select>
                            </div>
                        </div>

                        <!-- Common Fields -->
                        @csrf
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="gender" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="form-group-dob-field">
                            <label for="date_of_birth" class="col-sm-4 col-form-label">Date of Birth</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                            </div>
                        </div>
                        <!-- Lawyer Fields -->
                        <div class="form-group lawyer-fields row mb-3" id="form-group lawyer-qualification-fields">
                            <label for="qualification" class="col-sm-4 col-form-label">Qualification</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="qualification">
                                    <option value="BALLB" name="BALLB">BA LLB</option>
                                    <option value="LLM" name="LLM" >LLM</option>
                                    <option value="LLD" name="LLD">LLD</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group-bar-num" >
                            <label for="experience" class="col-sm-4 col-form-label">BAR Registration Number</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="barNumber" name="bar_number">
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group lawyer-practice-area-fields"  >
                            <label for="practice_area" class="col-sm-4 col-form-label">Practice Area</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="practice_area">
                                    <option value="CivilCase" name="CivilCase">Civil Law</option>
                                    <option value="CriminalCase" name="CriminalCase">Criminal Law</option>
                                    <option value="FamilyCase" name="FamilyCase">Family Law</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group lawyer-fields row mb-3" id="form-group lawyer-experience-fields" >
                            <label for="experience" class="col-sm-4 col-form-label">Experience</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="experience" name="experience">
                            </div>
                        </div>
                        <div class="form-group row mb-3" id="form-group-email-field">
                            <label for="email" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="phone-number-field">
                            <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" id="phone_number" name="phone_number">
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="address-field">
                            <label for="address" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password_confirmation" class="col-sm-4 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="upload-profile-photo-field">
                            <label class="form-label col-sm-4 col-form-label" for="customFile">Upload Profile Photo</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="profilephoto">
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="upload-id-proof-field">
                            <label class="form-label col-sm-4 col-form-label" for="customFile">Upload ID Proof</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="idproof">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
</div>

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
