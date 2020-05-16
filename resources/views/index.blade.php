<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Custom fonts for this theme -->
    <link href="all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="freelancer.css" rel="stylesheet">

    <style>
        .avatar{
            width: 190px;
            height: 190px;
            /*border: 2px dashed yellow;*/
            border-radius: 50%;
            overflow: hidden;
            background-position: center;
            {{--background-image: url('{{asset('img/avatars/2.jpg')}}');--}}
            background-size: 210px;
            transition: background-image 0.5s ease-in-out;
        }

        .companies{
            /*border : 2px dashed #DDD;*/
            box-shadow: 5px 5px 10px #999;
            min-width : 200px;
            min-height: 200px;

        }

        .companies:hover{
            box-shadow: none;
            /*border: 2px solid #EEEE00;*/
        }
    </style>

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">{{config('app.name')}}</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Work Experience</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <div class="d-block p-0 avatar mb-5">
        </div>

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">{{config('app.name')}}</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Full Stack Devloper - Software Developer - Backend Engineer</p>

    </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container-fluid ">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Work Experience</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
{{--        <div class="row justify-content-center">--}}

{{--            <!-- Portfolio Item 1 -->--}}
{{--            <div class="col-2">--}}
{{--                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">--}}
{{--                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">--}}
{{--                        <div class="portfolio-item-caption-content text-center text-white">--}}
{{--                            <i class="fas fa-plus fa-3x"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <img class="img-fluid" src="{{asset('/img/work_logos/ariad.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Portfolio Item 2 -->--}}
{{--            <div class="col-2">--}}
{{--                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">--}}
{{--                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">--}}
{{--                        <div class="portfolio-item-caption-content text-center text-white">--}}
{{--                            <i class="fas fa-plus fa-3x"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <img class="img-fluid" src="{{asset('/img/work_logos/leverageit.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Portfolio Item 3 -->--}}
{{--            <div class="col-2">--}}
{{--                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">--}}
{{--                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">--}}
{{--                        <div class="portfolio-item-caption-content text-center text-white">--}}
{{--                            <i class="fas fa-plus fa-3x"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <img class="img-fluid" src="{{asset('/img/work_logos/intertracnanologocolorw.bmp')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Portfolio Item 4 -->--}}
{{--            <div class="col-2">--}}
{{--                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">--}}
{{--                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">--}}
{{--                        <div class="portfolio-item-caption-content text-center text-white">--}}
{{--                            <i class="fas fa-plus fa-3x"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <img class="img-fluid" src="{{asset('/img/work_logos/revivalpoint.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Portfolio Item 5 -->--}}
{{--            <div class="col-2">--}}
{{--                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">--}}
{{--                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">--}}
{{--                        <div class="portfolio-item-caption-content text-center text-white">--}}
{{--                            <i class="fas fa-plus fa-3x"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <img class="img-fluid" src="{{asset('/img/work_logos/yorku2.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="row justify-content-center align-items-center">

{{--            <div class="w-100 d-flex justify-content-center align-items-center">--}}
                <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#RevivalPointModal">
                    <img class="img-fluid" src="{{asset('/img/work_logos/revivalpoint.png')}}" alt="">

                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>

                </div>

                <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#LeverageITModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('/img/work_logos/leverageit.png')}}" alt="">
                </div>

                <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#AriadModal">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('/img/work_logos/ariad.png')}}" alt="">
                </div>

                <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#IntertracNanoModal">

                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('/img/work_logos/intertracnanologocolorw.bmp')}}" alt="">
                </div>

                <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#YorkUModal">

                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="{{asset('/img/work_logos/yorku2.png')}}" alt="">
                </div>
{{--            </div>--}}
        </div>
        <!-- /.row -->

    </div>
</section>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- About Section Content -->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
            </div>
        </div>

        <!-- About Section Button -->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                <i class="fas fa-download mr-2"></i>
                Free Download!
            </a>
        </div>

    </div>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container">

        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Toronto
                    <br>ON, M4C</p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>

                <a class="btn btn-outline-light btn-social mx-1" href="https://github.com{{config('app.github')}}">
                    <i class="fab fa-fw fa-github"></i>
                </a>

                <a class="btn btn-outline-light btn-social mx-1" href="https://linkedin.com{{config('app.linkedin')}}">
                    <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="skype:{{config('app.skype')}}?chat">
                    <i class="fab fa-fw fa-skype"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1" href="mailto:{{config('app.email_address')}}">
                    <i class="fas fa-fw fa-envelope"></i>
                </a>
            </div>

            <!-- Footer About Text -->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; {{config('app.name')}} 2020</small>
    </div>
</section>


<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="RevivalPointModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/cabin.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="LeverageITModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/cake.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="AriadModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/circus.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="IntertracNanoModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/game.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="YorkUModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mb-5" src="img/portfolio/safe.png" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                            <button class="btn btn-primary" href="#" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="jquery.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
{{--<script src="jqBootstrapValidation.js"></script>--}}
{{--<script src="contact_me.js"></script>--}}

<!-- Custom scripts for this template -->
<script src="freelancer.js"></script>

<script>
    (function($){



        console.log("KUSTOM KODE");

        var images = [];

        @foreach($files as $file)
            images.push('{{$file}}')
        @endforeach

        var image_files= [];

        for (var i = 0; i < images.length; i++) {
            image_files[i] = new Image();
            image_files[i].src = images[i];
        }


        $(document).ready(function(){
            $('.avatar').css('background-image', 'url('+image_files[0].src+')');
        });

        var index = 0;
        var changing = false;


        let timerId = setInterval(function(){

            let temp = index;

            while(temp== index)
                temp = (Math.floor(Math.random() * 100) % image_files.length);

            index = temp;


            $('.avatar').css('background-image', 'url('+image_files[index].src+')');

        }, 5000);

    })(jQuery)
</script>

</body>

</html>
