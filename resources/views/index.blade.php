<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config('app.name')}}</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MSL9HCB');</script>
    <!-- End Google Tag Manager -->
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

        .file-types{
            border : 3px dashed white;

        }

        .file-types:hover{
            border-color : #85cbf8;
        }

    </style>

</head>

<body id="page-top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSL9HCB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#projects">Projects</a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
                </li>
{{--                <li class="nav-item mx-0 mx-lg-1">--}}
{{--                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>--}}
{{--                </li>--}}
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
        <p class="masthead-subheading font-weight-light mb-0">Software Engineer - Full Stack Developer</p>

    </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" style="min-height: 95vh" id="portfolio">
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
        <div class="row justify-content-center align-items-center">

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#GrinModal">

                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/work_logos/GrinSq.png')}}" alt="">
            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#AlleyModal">
                <img class="img-fluid" src="{{asset('/img/work_logos/AlleySq.jpeg')}}" alt="">

                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>

            </div>
            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#RevivalPointModal">
                <img class="img-fluid" src="{{asset('/img/work_logos/revivalpoint.png')}}" alt="">

                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>

            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#LeverageITModal">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/work_logos/leverageit.png')}}" alt="">
            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#AriadModal">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/work_logos/ariad.png')}}" alt="">
            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#IntertracNanoModal">

                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/work_logos/intertracnano.bmp')}}" alt="">
            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#YorkUModal">

                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/work_logos/yorku.png')}}" alt="">
            </div>
{{--            </div>--}}
        </div>
        <!-- /.row -->

    </div>

</section>

<section class="page-section portfolio"  id="projects" style="background-color: #1ECBE1; min-height: 95vh">
    <div class="container-fluid">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Personal Projects</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star text-white"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Portfolio Grid Items -->
        <div class="row justify-content-center align-items-center">

            {{--            <div class="w-100 d-flex justify-content-center align-items-center">--}}
            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#StripekartModal">
                <img class="img-fluid" src="{{asset('/img/project_logos/stripekart_sq.png')}}" alt="">

                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>

            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#DaGameLeagueModal">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/project_logos/dgl_sq.png')}}" alt="">
            </div>

            <div class="companies portfolio-item mx-5"   data-toggle="modal" data-target="#CloudshapesModal">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white">
                        <i class="fas fa-eye fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" src="{{asset('/img/project_logos/cs_270.png')}}" alt="">
            </div>
            {{--            </div>--}}
        </div>
        <!-- /.row -->

    </div>

</section>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" style="min-height: 95vh" id="about">
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
                <p class="lead">I am a Software Developer from Toronto, Ontario. I really enjoy
                building to innovative web applications. I have worked on a few myself for both work and for personal projects.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">I also have a Bachelor's degree in Computer Science. I like to think I have a good understanding of
                computer science fundamentals such as OOP, Data Structures and alogrithms, etc.</p>
            </div>
        </div>

        <h3 class="text-uppercase text-center mt-3">Technology stack I'm familar with.</h3>

        <div class="row justify-content-center">

            <img class="mx-2 my-3" src="/img/tech_logos/1.png" height="75" data-toggle="tooltip" title="Angular/AngularJS">
            <img class="mx-2 my-3" src="/img/tech_logos/9.png" height="75" data-toggle="tooltip" title="Apache">
            <img class="mx-2 my-3" src="/img/tech_logos/24.png" height="75" data-toggle="tooltip" title="BASH">
            <img class="mx-2 my-3" src="/img/tech_logos/5.png" height="75" data-toggle="tooltip" title="C/C++">
            <img class="mx-2 my-3" src="/img/tech_logos/7.png" height="75" data-toggle="tooltip" title="CSS(3)">
            <img class="mx-2 my-3" src="/img/tech_logos/20.png" height="75" data-toggle="tooltip" title="Docker">
            <img class="mx-2 my-auto" src="/img/tech_logos/22.png" height="55" data-toggle="tooltip" title="ElasticSearch">

            <img class="mx-2 my-3" src="/img/tech_logos/GoLang.svg" height="65" data-toggle="tooltip" title="GoLang">
            <img class="mx-2 my-3" src="/img/tech_logos/8.png" height="75" data-toggle="tooltip" title="HTML(5)">

{{--            <img class="mx-2 my-3" src="/img/tech_logos/12.png" height="75" data-toggle="tooltip" title="Java">--}}
            <img class="mx-2 my-3" src="/img/tech_logos/3.png" height="75" data-toggle="tooltip" title="Linux">
            <img class="mx-0 my-3" src="/img/tech_logos/13.png" height="75" data-toggle="tooltip" title="Laravel">
            <img class="mx-2 my-3" src="/img/tech_logos/27.png" height="75" data-toggle="tooltip" title="MariaDB">
            <img class="mx-1 my-auto" src="/img/tech_logos/23.png" height="55" data-toggle="tooltip" title="MySQL">
            <img class="mx-2 my-3" src="/img/tech_logos/mongo.png" height="75" data-toggle="tooltip" title="Mongo DB">

            <img class="mx-2 my-3" src="/img/tech_logos/nginx.png" height="75" data-toggle="tooltip" title="Nginx">
            <img class="mx-2 my-3" src="/img/tech_logos/26.png" height="75" data-toggle="tooltip" title="npm">
            <img class="mx-2 my-3" src="/img/tech_logos/6.png" height="75" data-toggle="tooltip" title="Objective C">
            <img class="mx-2 my-3" src="/img/tech_logos/10.png" height="75" data-toggle="tooltip" title="PHP">

            <img class="mx-2 my-3" src="/img/tech_logos/17.png" height="75" data-toggle="tooltip" title="ReactJS">
            <img class="mx-2 my-auto" src="/img/tech_logos/25.png" height="55" data-toggle="tooltip" title="VueJS">

            <img class="mx-2 my-3" src="/img/tech_logos/11.png" height="75" data-toggle="tooltip" title="WordPress">





        </div>

        <!-- About Section Button -->
        <div class="text-center mt-4">
            <button class="btn btn-xl btn-outline-light"  data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-download mr-2"></i>
                Download My Resume
            </button>
        </div>

    </div>
</section>

<!-- Contact Section -->
{{--<section class="page-section" style="min-height: 95vh" id="contact">--}}
{{--    <div class="container" >--}}

{{--        <!-- Contact Section Heading -->--}}
{{--        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>--}}

{{--        <!-- Icon Divider -->--}}
{{--        <div class="divider-custom">--}}
{{--            <div class="divider-custom-line"></div>--}}
{{--            <div class="divider-custom-icon">--}}
{{--                <i class="fas fa-star"></i>--}}
{{--            </div>--}}
{{--            <div class="divider-custom-line"></div>--}}
{{--        </div>--}}

{{--        <!-- Contact Section Form -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8 mx-auto">--}}
{{--                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->--}}
{{--                <form name="sentMessage" id="contactForm" novalidate="novalidate">--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Name</label>--}}
{{--                            <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Email Address</label>--}}
{{--                            <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Phone Number</label>--}}
{{--                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Message</label>--}}
{{--                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div id="success"></div>--}}
{{--                    <div class="form-group">--}}
{{--                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Toronto
                    <br>ON, M3C</p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-6 mb-5 mb-lg-0">
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
{{--            <div class="col-lg-4">--}}
{{--                <h4 class="text-uppercase mb-4">About Freelancer</h4>--}}
{{--                <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by--}}
{{--                    <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>--}}
{{--            </div>--}}

        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; {{config('app.name')}} 2023</small>
    </div>
</section>


<!-- Portfolio Modals -->
<!-- Portfolio Modal 0 -->
<div class="portfolio-modal modal fade" id="AlleyModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal0Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>

            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <!-- Portfolio Modal - Title -->
                            {{--                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Logx Cabin</h2>--}}
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/work_logos/alleyrect.jpg" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-4 mt-4 px-3">Alley is a distributed team located across the United States, Canada, and the world. Collectively, we form a professional fellowship that excels at audience research, user experience, visual design, information architecture, data visualization, software engineering, development operations, and technical training to make your product—and process—run more efficiently.</p>

                            <div class="w-100">
                                <dl class="row  mx-5">
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Role :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">Software Developer</dd>
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Contribution :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">
                                        I was brought in as a Software Developer to work on various websites and applications.
                                        Major contributions include work in our various client and internal WordPress and Laravel projects.
                                    </dd>
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Impact :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">
                                        Worked on the initial development and deployment of various start up initiatives building novel solutions
                                        to support business goals as well as on larger projects for more established clients such as the New York
                                        Post, American Alliance of Museums, San-Francisco Standard.
                                    </dd>
                                </dl>
                            </div>
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
<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="RevivalPointModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/work_logos/revivalpoint_lg.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-4 mt-4 px-3">A company that sells various health supplements exclusively through their online stores.</p>

                            <div class="w-100">
                                <dl class="row  mx-5">
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Role :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">Full-stack Developer</dd>
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Contribution :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">
                                        I was brought in mainly as a backend engineer. During my time here we achieved some of the company's
                                        mission critical goals such as <br>
                                        <ul>
                                            <li class="text-left">Migrating existing sites/funnels and backend infrastructure over to AWS.</li>
                                            <li class="text-left">Performing improvements to existing sites and their backend API.</li>
                                            <li class="text-left">Optimizing sales sites/funnels for SEO.</li>
                                            <li class="text-left">Develop new features and debug existing backend software infrastructure</li>
                                            <li class="text-left">Integrate 3rd party APIs.</li>
                                            <li class="text-left">Build and maintain CI pipelines.</li>
                                            <li class="text-left">Setup automatic periodic database backups</li>
                                            <li class="text-left">And a lot more miscellaneous DevOps</li>
                                        </ul>

                                        During my time as project lead, I had to manage a small team of 3rd party developers.
                                        This involved <br>
                                        <ul>
                                            <li class="text-left">Meetings with other departments, vendors, and developers</li>
                                            <li class="text-left">Setting up deployment environments for other developers.</li>
                                            <li class="text-left">Managing work via Agile methodology.</li>
                                            <li class="text-left">And lots of Code Reviews.</li>
                                        </ul>



                                    </dd>
{{--                                </dl>--}}

{{--                                <dl class="row mx-5">--}}
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Impact :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">
                                        <ul>

                                        <li class="text-left">Successfully migrated existing company sites over to AWS which reduced server hosting costs.</li>
                                        <li class="text-left">Integrated fullfillment provider's APIs into existing software infrastructure which improved sales estimates by 10%</li>
                                        <li class="text-left">Delivered new software features as requested by management on time.</li>
                                        <li class="text-left">Safety and integrity of data was ensured due to the newly created periodic backups and error logging.</li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
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
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded " src="img/work_logos/leverageit_lg.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-4 px-3 mt-4">
                                A results-driven agency that helps startups and companies build out
                                their technology and websites. Having worked with over 200 companies globally and advising
                                over 50 startups.
                            </p>
                            <div class="w-100">
                            <dl class="row  mx-5">
                                <dt class="col-md-4 col-lg-3 text-md-right">My Role :</dt>
                                <dd class="col-md-8 col-lg-9 text-md-left">Senior Software Developer</dd>
                                <dt class="col-md-4 col-lg-3 text-md-right">My Contribution :</dt>
                                <dd class="col-md-8 col-lg-9 text-md-left">

                                    <p>I had the opportunity to work on a number of interesting startup projects, developing new features
                                    for their web/mobile apps and backend infrastructure.</p>

                                    <ul>
                                        <li class="text-left">
                                        Implemented various 3rd party APIs such as payment processing (Stripe), geo-location (Google Maps) etc.

                                        </li>
                                        <li class="text-left">
                                        Developed various parts of the front end of said applications using AngularJS and/or VueJS.

                                        </li>
                                        <li class="text-left">

                                        Designed database schemas (MySQL) and wrote migrations required to implement new features for said apps.
                                        </li>
                                        <li class="text-left">

                                         Developed back-end RESTful APIs for complex commercial apps for clients using PHP and Laravel.
                                        </li>
                                        <li class="text-left">
                                        Leveraged AWS Cloud computing resources (EC2, S3, Lambda, CloudFront) to develop custom solutions.

                                        </li>
                                        <li class="text-left">
                                        Pushed the team to adopt Gitflow which reduced merged conflicts by 50% and sped up release cycles.

                                        </li>
                                    </ul>



                                </dd>
                                <dt class="col-md-4 col-lg-3 text-md-right">My Impact :</dt>
                                <dd class="col-md-8 col-lg-9 text-md-left">
                                    <ul>
                                        <li class="text-left">Lead a small team of developers on a number of successful projects.</li>
                                        <li class="text-left">Worked on core-features on a number of different apps.</li>
                                        <li class="text-left">Was able to instill good work practices into junior developers.</li>
                                    </ul>
                                </dd>
                            </dl>

{{--                            <dl class="row mx-5">--}}
{{--                                <dt class="col-md-4 col-lg-3 text-md-right">My Impact :</dt>--}}
{{--                                <dd class="col-md-8 col-lg-9 text-md-left">--}}



{{--                                </dd>--}}
{{--                            </dl>--}}
                                                        </div>

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
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/work_logos/ariad-lg.jpg" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-4 mt-4 px-3">
                                Ariad was a marketing agency focused on creating content that motivates, creative that inspires, and strategy.
                            </p>

                            <div class="w-100">
                                <dl class="row  mx-5">
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Role :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">Full-stack Developer</dd>
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Contribution :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">

                                        I was hired as a full-stack developer. I worked on a number of sites and microsites for clients.

                                        <ul>
                                            <li class="text-left">
                                            Worked with the creative team to turn designs into full functional WordPress builds.
                                            </li>
                                            <li class="text-left">
                                            Designed and implemented various microsites for clients in Lumen micro-framework complete with unit-tests.
                                            </li>
                                            <li class="text-left">
                                            Performed various DevOps tasks such as setting up servers, backing up databases, writing CI pipelines, setting up Docker containers, etc.
                                            </li>
                                            <li class="text-left">
                                            Worked in an environment where the expectation was to always innovate and improve current technologies and work practices. This involved activities such as code-reviews, pair-programming, and weekly development meetings.
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>


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
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/work_logos/intertracnano_lg.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->

                            <p class="mb-4 mt-4 px-3">
                                A personal client for whom I built a custom stock management tool.
                            </p>

                            <div class="w-100 mt-4">
                                <dl class="row  mx-5">
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Role :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">Full-stack Developer</dd>
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Contribution :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">

                                        I was hired to see this project out from start to finish. This involved

                                        <ul>
                                            <li class="text-left">
                                                Several meetings to gather project requirements and later for feedback.
                                            </li>
                                            <li class="text-left">
                                                Designing database schema, built Laravel application (LAMP stack) in iterations based on customer feedback.
                                            </li>
                                            <li class="text-left">
                                                Building front-end VueJS application.
                                            </li>
                                            <li class="text-left">
                                                Deploying web application on to staging and production servers.
                                            </li>
                                            <li class="text-left">
                                                Providing periodical support from time to time.
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
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
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/work_logos/yorku_lg.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-4 mt-4 px-3">
                                York is a leading modern, multi-campus, urban University located in Toronto, Canada.
                            </p>
                            <div class="w-100 mt-4">
                                <dl class="row  mx-5">
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Role :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">Full-stack Developer</dd>
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Contribution :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">

                                        <ul>
                                            <li class="text-left">
                                                Maintained various websites written in PHP being populated by a MySQL Database.
                                            </li>
                                            <li class="text-left">
                                                Built and deployed custom Wordpress solutions as indicated by project outlines.
                                            </li>
                                            <li class="text-left">
                                                Wrote BASH scripts to perform various tasks such as periodic data backups, data sanitization of input files, etc.
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
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


<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="DaGameLeagueModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded my-3" src="img/project_logos/DGLcolorLogo.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p>This is an organization that I co-founded in 2005. DaGameLeague (DGL) is the first online gaming community
                            in Bangladesh. This is a non-profit organization that has existed in various forms since its inception. In
                            its early days it was a forum to promote e-sports discussions and tournaments. In the following years we
                            organized various e-sports LAN tournaments and sponsored e-sports teams for national and international
                            tournaments. In 2018 we abandoned LAN tournaments in favor of online tournaments organized through
                                our website DGLcore.com which I designed and built.</p>

                            <div class="row mb-5">
                                <div class="col">
                                    <img src="https://img.icons8.com/android/18/000000/domain.png"/>
                                    <a  href="https://dglcore.com">

                                        https://dglcore.com.com</a>
                                </div>
                                <div class="col">
                                    <i class="fab fa-github"></i>
                                    <a  href="https://github.com/XEQTIONR/dgl-site">

                                        https://github.com/XEQTIONR/dgl-site</a>
                                </div>
                            </div>




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

<!-- Portfolio Modal 7 -->
<div class="portfolio-modal modal fade" id="StripekartModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                        <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded mt-5 mb-1" src="img/project_logos/logo1920.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p>Stripekart was start-up idea that I was working on. The goal was to provide fulfillment
                                services to remote areas where popular online marketplaces such as Amazon or Ebay do not
                                deliver. I was in the process of developing prototypes for the iOS and Andriod apps
                                using the NativeScript framework. The venture was eventually scrapped after the
                                inability to find feasible solutions to problems such as being able to work with local
                                payment providers, unavailability of the types of goods in demand, market saturation etc.
                            </p>

                            <div class="row mb-5">
                                <div class="col">
                                    <img src="https://img.icons8.com/android/18/000000/domain.png"/>
                                    <a  href="https://stripekart.com">

                                        https://stripekart.com</a>
                                </div>
                                <div class="col">
                                    <i class="fab fa-github"></i>
                                    <a  href="https://github.com/XEQTIONR/stripekart">

                                        https://github.com/XEQTIONR/stripekart</a>
                                </div>
                            </div>


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

<!-- Portfolio Modal 8 -->
<div class="portfolio-modal modal fade" id="CloudshapesModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/project_logos/cs_lg.png" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="mt-4">
                                A social networking platform for iOS that I was working on as a personal project while
                                I was a university student. This served me as an introduction to mobile development and
                                was helpful to me in exploring various APIs available to iOS developers. Codebase is
                                available on my GitHub.
                            </p>

                            <div class="row mb-5">

                                <div class="col">
                                    <img src="https://img.icons8.com/android/18/000000/domain.png"/>
                                    <a  href="http://www.thecloudshapes.com">

                                        http://www.thecloudshapes.com</a>
                                </div>

                                <div class="col">
                                    <i class="fab fa-github"></i>
                                    <a  href="https://github.com/XEQTIONR/Cloudshapes-ios">

                                        https://github.com/XEQTIONR/Cloudshapes-ios</a>
                                </div>

                            </div>
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

<!-- GrinModal -->
<div class="portfolio-modal modal fade" id="GrinModal" tabindex="-1" role="dialog" aria-labelledby="GrinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                <i class="fas fa-times"></i>
              </span>
            </button>
            <div class="modal-body text-center px-0 pt-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 px-0">
                            <!-- Portfolio Modal - Image -->
                            <img class="img-fluid rounded" src="img/work_logos/grin.jpeg" alt="">
                            <!-- Icon Divider -->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Text -->
                            <p class="px-3 my-4">
                                GRIN is the pioneer behind the world’s first Creator Management platform, designed for
                                the next generation of brands who recognize that, in the creator economy, authenticity
                                is everything. Our platform supports every brand’s journey to connecting with consumers
                                through authentic creator relationships and is listed #1 across all top review sites
                                including Capterra, G2 Crowd and Influencer Marketing Hub. Thousands of the world’s
                                fastest-growing brands – including SKIMS, Warby Parker, Allbirds, Mejuri, and MVMT –
                                use GRIN to make creators feel like trusted, empowered partners and work with them to
                                build their brands into household names. Together, we are revolutionizing the Creator Economy.
                            </p>
                            <div class="w-100 mt-4">
                                <dl class="row  mx-5">
                                    <dt class="col-md-4 col-lg-3 text-md-right">My Current Role :</dt>
                                    <dd class="col-md-8 col-lg-9 text-md-left">Senior Software Engineer</dd>
                                </dl>
                            </div>
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

<div class="modal " tabindex="-1" role="dialog" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-secondary">Pick a format</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <a href="/storage/resume/IshteharHussain_resume.pdf" download >
                            <img class="d-block mx-auto file-types" src="https://img.icons8.com/dusk/64/000000/pdf-2.png"/></a>

                    </div>
                    <div class="col-4">

                        <a  href="/storage/resume/IshteharHussain_resume.docx" download >
                            <img class="d-block mx-auto file-types" src="https://img.icons8.com/dusk/64/000000/word.png"/></a>
                    </div>
                    <div class="col-4">

                        <a  href="/storage/resume/IshteharHussain_resume.txt" download >
                            <img class="d-block mx-auto file-types" src="https://img.icons8.com/dusk/64/000000/txt.png"/></a>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-4">
                        <span style="color: #ef85a2 !important;" class="d-block text-center text-dark">PDF</span>
                    </div>
                    <div class="col-4">
                        <span style="color: #85cbf8 !important;" class="d-block text-center text-dark">DOCX</span>
                    </div>
                    <div class="col-4">
                        <span style="color: #9172a3 !important;" class="d-block text-center text-dark">TXT</span>
                    </div>
                </div>

            </div>
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--            </div>--}}
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
            $('[data-toggle="tooltip"]').tooltip();
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

    })(jQuery);
</script>

</body>

</html>
