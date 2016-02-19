<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BMSCE PROJECT EVALUATION</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script>
    $(document).ready(function() {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
    });
    </script>
    
<style type="text/css">
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);
body { padding-top: 0px; }
.nav.nav-justified > li > a { position: relative; }
.nav.nav-justified > li > a:hover,
.nav.nav-justified > li > a:focus { background-color: transparent; }
.nav.nav-justified > li > a > .quote {
    position: absolute;
    left: 0px;
    top: 0;
    opacity: 0;
    width: 30px;
    height: 30px;
    padding: 5px;
    background-color: #1370c0; 
    border-radius: 15px;
    color: #fff;  
}
.nav.nav-justified > li.active > a > .quote { opacity: 1; }
.nav.nav-justified > li > a > img { box-shadow: 0 0 0 5px #1370c0; } 
.nav.nav-justified > li > a > img { 
    max-width: 100%; 
    opacity: .3; 
    -webkit-transform: scale(.8,.8);
            transform: scale(.8,.8);
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.nav.nav-justified > li.active > a > img,
.nav.nav-justified > li:hover > a > img,
.nav.nav-justified > li:focus > a > img { 
    opacity: 1; 
    -webkit-transform: none;
            transform: none;
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.tab-pane .tab-inner { padding: 30px 0 20px; }

@media (min-width: 768px) {
    .nav.nav-justified > li > a > .quote {
        left: auto;
        top: auto;
        right: 20px;
        bottom: 0px;
    }  
}
</style>
</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--img class="navbar-brand page-scroll" href='#page-top' src="logo.png"-->
                <a class="navbar-brand page-scroll" href="http://www.bmsce.in">BMSCE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a style="-webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s;" class="page-scroll" href="#goals">Goals</a>
                    </li>
                    <li>
                        <a style="-webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s;" class="page-scroll" href="#portfolio">Judging Criteria</a>
                    </li>
                    <li>
                        <a style="-webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s;" class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a style="-webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s;" class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a style="-webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s; color:cyan;" class="page-scroll portfolio-link" href="#LoginPage" data-toggle="modal" bounceIn>Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome to 8th Semester Project Evaluation!</div>
                <div class="intro-heading">Please Sign In!</div>
                <!--span class="text-block" style="-webkit-filter:blur(0.24px);-ms-filter:blur(0.24px);-o-filter:blur(0.24px);filter:blur(0.24px);">Focus on Design</span-->
                
                <a style="-webkit-transition: all .3s; -moz-transition: all .3s; transition: all .3s;" class="page-scroll portfolio-link btn btn-xl" href="#LoginPage" data-toggle="modal" value>Sign In</a>
                
            </div>
        </div>
        <p class="text-center">
    <!--button class="btn btn-default" data-toggle="modal" data-target="#LoginPage">Login</button-->
        </p>
        </div>

    </header>

    <!-- Goals Section -->
    <section id="goals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Goals</h2>
                    <h3 class="section-subheading text-muted">What we have been building towards..</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Vision</h4>
                    <p class="text-muted">Promoting Prosperity of mankind by augmenting Human Resource Capital through Quality Technical Education & Training</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-certificate fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Mission</h4>
                    <p class="text-muted">Accomplish Excellence in the field of Technical Education through Education, Research and Service needs of society</p>
                </div>
                <!--div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Goals</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div-->
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-darkest-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:lightgray">Judging Criteria</h2>
                    <h3 class="section-subheading text-muted">Below are all the criteria that the students are expected to achieve</h3>
                </div>
            </div>
            <div class="row">
                <!-- MODAL CALL-->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 1</h4>
                        <p class="text-muted">Presentation</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 2</h4>
                        <p class="text-muted">Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 3</h4>
                        <p class="text-muted">Implementation</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit4-alt.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 4</h4>
                        <p class="text-muted">Group Participation</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit5.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 5</h4>
                        <p class="text-muted">Teamwork</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit6-alt.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 6</h4>
                        <p class="text-muted">Testing, Results, and Conclusions</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit7-alt.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 7</h4>
                        <p class="text-muted">Plan of Work</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit8.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 8</h4>
                        <p class="text-muted">Societal Issues</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit9.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 9</h4>
                        <p class="text-muted">Written Communication</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 portfolio-item">
                    <a href="#portfolioModal10" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/crit10.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Criteria 10</h4>
                        <p class="text-muted">Oral Communication</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Learn More About Our History!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/bms1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1946</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">BMS College of Engineering (BMSCE) was Founded in the year 1946 by Late Sri. B. M. Sreenivasaiah a great visionary and philanthropist and nurtured by his illustrious son Late Sri. B. S. Narayan. BMSCE is the first private sector initiative in engineering education in India. BMSCE has completed 69 years of dedicated service in the field of Engineering Education. Started with only 03 undergraduate courses, BMSCE today offers 13 Undergraduate and 16 Postgraduate courses both in conventional and emerging areas. 15 of its Departments are recognized as Research Centers offering PhD/M.Sc (Engineering by Research) degrees in Science, Engineering, Architecture and Management. The College has been effectively practicing outcome based education.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/bms2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2008</h4>
                                    <h4 class="subheading">Autonomous Status</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The undergraduate Programmes of the College have been awarded the Autonomous Status by the Government/University from the academic year 2008-09 onwards.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/bms3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013</h4>
                                    <h4 class="subheading">NBA Accreditation</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">BMSCE is accredited with A Grade by NAAC (2013-2018) and Accredited by National Board of Accreditation (NBA), New Delhi (BMSCE has the unique distinction of being one of the first Institution in India identified by National Board of Accreditation for evaluation under Tier-I NBA Accreditation Washington accord)</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be A Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <!--section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section-->
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <h3 class="section-subheading" style="color:white;">Contact Project Co-Ordinator</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Not Sure What To Do?</h2>
                    <hr class="primary">
                    <p class="section-subheading" style="color:white;">If you have any questions on procedure or on grading, call or email us using the above information!</p><br/>
                <br/>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <a href="#"><i class="fa fa-phone fa-3x wow bounceIn"></i></a>
                    <p class="section-subheading" style="color:white;">123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="#"><i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i></a>
                    <p><a class="section-subheading" style="color:white;" href="mailto:#">projectcoordinator@bmsce.com</a></p>
                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <!--aside class="clients" style="background:black">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <a href="#" align="center">
                        <img src="img/logos/logo.png" class="img-responsive img-centered" alt="" align="center">
                    </a>
                </div-->
                <!--div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div-->
            <!--/div>
        </div>
    </aside-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy; Created by Muthu Mohan</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <!--li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li-->
                        <li><a href="#page-top"><i class="fa fa-chevron-up page-scroll" ></i></a>
                        </li>
                        <!--li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li-->
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Presentation Skills</h2>
                            <p class="item-intro text-muted">Criteria 1</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe Criteria 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Design</h2>
                            <p class="item-intro text-muted">Criteria 2</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p>Describe criteria 2 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Implementation</h2>
                            <p class="item-intro text-muted">Criteria 3</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Describe criteria 3 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Group Participation</h2>
                            <p class="item-intro text-muted">Criteria 4</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Describe criteria 4 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Teamwork</h2>
                            <p class="item-intro text-muted">Criteria 5</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Describe criteria 5 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Testing, Results, and Conclusions</h2>
                            <p class="item-intro text-muted">Criteria 6</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Describe criteria 6 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Plan of Work</h2>
                            <p class="item-intro text-muted">Criteria 7</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Describe criteria 7 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Societal Issues</h2>
                            <p class="item-intro text-muted">Criteria 8</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Describe criteria 8 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Written Communications</h2>
                            <p class="item-intro text-muted">Criteria 9</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Describe criteria 9 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Oral Communications</h2>
                            <p class="item-intro text-muted">Criteria 10</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Describe criteria 10 here: Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt 
                                officia expedita beatae cupiditate, 
                                maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Login Page Modal-->
    <div class="portfolio-modal modal fade" id="LoginPage" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Login Now!</h2>
                            <p class="item-intro text-muted">Enter Credentials Below:</p>
                            <form role="form" id="loginForm"class="contact" action="newlogin.php" method="post">
                            <div class="form-group">
                            <!--label for="inputUsernameEmail" style="color:white;">Username or email</label-->         
                            <label align="left" for="inputUsernameEmail">Username</label>
                            <input autofocus type="text" class="form-control" id="inputUsernameEmail" name="username">                     
                            </div>
                            <div class="form-group">                  
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password">                    
                            </div>
                            <br/>      
                            <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            <br/><br/><br/>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Close Login Screen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Login</h4>
            </div>

            <div class="modal-body"-->
                <!-- The form is placed inside the body of modal -->
                <!--form id="loginForm" action="newlogin.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
