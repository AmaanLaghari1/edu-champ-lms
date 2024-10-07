<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduwise - @stack('title')</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/font-awesome.min.css">    
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/flaticon.css">
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/magnific-popup.css">    
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/owl.theme.css">     
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/animate.css"> 
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/slick.css">  
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/preloader.css"/>    

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/revolution/settings.css">    
    <!-- Mean Menu-->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/style.css">    
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('website/assets')}}/css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .error {
            color: red !important;
        }
    </style>
    @stack('css')
</head>
<body>
<header class="@stack('header_classes')">
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
@guest   
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
        					<ul class="list-unstyled">
                                <li><i class="flaticon-phone-receiver"></i>+000-2356-222</li>
        						<li><i class="flaticon-mail-black-envelope-symbol"></i>contact@yourdomain.com</li>
        					</ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Lon In</a></li>
                            </ul>
                            <a href="#" title="" class="apply_btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.auth')
@endguest

    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
                <a href="/"><img alt="" src="{{asset('admin')}}/assets/images/logo.png" width="122" height="50"></a>
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link {{request()->is('/') ? 'active' : '' }}">Home</a></li>
                        @auth
                        <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link">Dashboard</a></li>
                        @endauth
                        <li class="nav-item"><a href="{{route('about')}}" class="nav-link {{request()->is('about*') ? 'active' : '' }}">About</a></li>
                        <li class="nav-item"><a href="{{route('courses')}}" class="nav-link {{request()->is('course*') ? 'active' : '' }}">Courses</a></li>
                        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link {{request()->is('blog*') ? 'active' : '' }}">Blog</a></li>   
                        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link {{request()->is('contact*') ? 'active' : '' }}">Contact</a></li>
                        @auth
                        <li class="nav-item d-flex align-items-center">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger" value="Logout"/>
                            </form>
                        </li>
                        @endauth
                    </ul>
                </div>
                <div class="mr-auto search_area ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                            <div id="search">
                                <button type="button" class="close">×</button>
                                 <form>
                                     <input type="search" value="" placeholder="Search here...."  required/>
                                 </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav><!-- END NAVBAR -->
        </div> 
    </div>

    @yield('main')

    
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-3 col-lg-3 p-0 ">
                <div class="shape_wrapper">
                    <img src="{{asset('website/assets')}}/images/shapes/bubble_shpe_1.png" alt="" class="shape_t_1"> 
                    <img src="{{asset('website/assets')}}/images/shapes/round_shpae_1.png" alt="" class="shape_t_2">
                </div>   
            </div>
            <div class="col-12 col-sm-9 col-md-9 col-lg-9 p-0 become_techer_wrapper">
                <div class="become_a_teacher">
                    <div class="title">
                        <h2>Become A Instructor</h2>
                        <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                    </div><!-- ends: .section-header -->
                    <div class="get_s_btn">
                        <a href="#" title="">Get Started Now</a>
                    </div>
                    <img src="{{asset('website/assets')}}/images/shapes/bubble_shpe_2.png" alt="" class="shape_t_1"> 
                </div>                                
            </div>
        </div>
        <div class="footer_top">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col footer_intro">
                        <a href="/"><img class="ttr-logo-desktop" alt="" src="http://127.0.0.1:8000/admin/assets/images/logo-white.png" width="160" height="27"></a>
                        <p>Ante amet vitae vulputate odio nulla vel pretium pulvinar aenean. Rhoncus eget adipiscing etiam arcu. Ultricies justo ipsum nec amet.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col">
                        <h3>Useful Links</h3>
                        <ul class="location_info quick_inf0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Developers</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>                         
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="footer_single_col information">
                        <h3>information</h3>
                        <ul class="quick_inf0">
                            <li><a href="#">Campus Tour</a></li>
                            <li><a href="#">Student Life</a></li>
                            <li><a href="#">Scholarship</a></li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Leadership</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer_single_col contact">
                        <h3>Contact Us</h3>
                        <p>Fell free to get in touch us via Phone or send us a message.</p>
                        <div class="contact_info">
                            <span>+000 124 325</span> 
                            <span class="email">info@yourdomain.com</span>
                        </div>
                        <ul class="social_items d-flex list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="round_shape">
        <span class="shape_1"></span> 
        <span class="shape_2"></span> 
        <span class="shape_3"></span> 
        <span class="shape_4"></span> 
        <span class="shape_5"></span> 
        <span class="shape_6"></span>
    </div>
    <img src="{{asset('website/assets')}}/images/shapes/footer_bg_shpe_1.png" alt="" class="shapes1_footer">
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section>

    <!-- JavaScript -->
    <script src="{{asset('website/assets')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('website/assets')}}/js/popper.min.js"></script>
    <script src="{{asset('website/assets')}}/js/bootstrap.min.js"></script>
    <!-- Revolution Slider -->
    <script src="{{asset('website/assets')}}/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/jquery.themepunch.tools.min.js"></script> 
    <script src="{{asset('website/assets')}}/js/jquery.magnific-popup.min.js"></script>     
    <script src="{{asset('website/assets')}}/js/owl.carousel.min.js"></script>   
    <script src="{{asset('website/assets')}}/js/slick.min.js"></script>   
    <script src="{{asset('website/assets')}}/js/jquery.meanmenu.min.js"></script>  
    <!-- Counter Script -->
    <script src="{{asset('website/assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('website/assets')}}/js/jquery.counterup.min.js"></script>    
    <script src="{{asset('website/assets')}}/js/wow.min.js"></script> 
    <!-- Revolution Extensions -->
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
    <script src="{{asset('website/assets')}}/js/assets/revolution/revolution.js"></script>
    <script src="{{asset('website/assets')}}/js/jquery.validate.min.js"></script>
    <script src="{{asset('website/assets')}}/js/custom.js"></script> 


    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    <script type="text/javascript" src="{{asset('website/assets')}}/js/demo.js"></script>
    <script type="text/javascript" src="{{asset('website/assets')}}/js/sweetalert2@11.js"></script>
    <script>

        const showAlert = (title='', message='', type='') => {
            Swal.fire({
                title: title,
                text: message,
                icon: type,
                showConfirmButton: false,
                timer: 3000,
                customClass: {
                    popup: 'z-100'
                }
            })
        }
    
        $('#registration-form').submit(async function (e) {
            e.preventDefault(); // Prevent form from reloading the page
    
            const form = e.target;
            const formData = new FormData(form); // Get form data
    
            if(!$(this).valid()){
                return
            }
    
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData
                });
    
                const result = await response.json();
    
                if (response.ok) {
                    // Handle success (e.g., show a success message, redirect, etc.)
                    // console.log("Registered")
                    window.location.replace(result.redirect)
                } else {
                    // Handle errors (e.g., show error messages)
                    // alert(result.message);
                    showAlert('Error!', result.message, 'error')
                }
            } catch (error) {
                console.error('Error:', error);
                // alert('An error occurred during registration.');
            }
        });
    
        $('#registration-form').validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
            },
            messages: {
                first_name: {required: "First Name is required"},
                last_name: {required: "Last Name is required"},
                email: {
                    required: "Email is required",
                    email: "Invalid Email",
                },
                password: {
                    required: "Password is required",
                    minlength: "Password is too short",
                },
            }
        })
    
        $('#login-form').validate({
            rules: {
                log_email: {
                    required: true,
                    email: true
                },
                log_password: {
                    required: true,
                    minlength: 8
                },
            },
            messages: {
                log_email: {
                    required: "Email is required",
                },
                log_password: {
                    required: "Password is required",
                },
            }
        })
    
        $('#login-form').submit(async function (e) {
            e.preventDefault(); // Prevent form from reloading the page
    
            const form = e.target;
            const formData = new FormData(form); // Get form data
    
            if(!$(this).valid()){
                return
            }
    
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData
                });
    
                const result = await response.json();
    
                if (result.type != 'error') {
                    window.location.replace(result.redirect)
                } else {
                    showAlert('Error!', result.message, 'error')
                }
            } catch (error) {
                console.error('Error:', error);
            }
        });
    </script>
    @stack('js')
    
</body>


</html>
