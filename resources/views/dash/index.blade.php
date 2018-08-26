<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TopClass || Writers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Topclass writers helps in doing your assignment and your project without forgeting your theses." />
        <meta name="keywords" content="assignment, assignments, writing, best writers, freelancers, freelancing, thesis help" />
        <meta name="author" content="Laban, iMond Solutions" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="{{ asset('/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/slick/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/stylesheet.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/jquery.fancybox.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css')}}">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('/css/plugins.css')}}" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}" />
        <script src="{{ asset('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        <link rel="shortcut icon" href="kaly.ico">
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn">
            <header id="main_menu" class="header navbar-fixed-top">
                <div class="main_menu_bg">
                    <div class="container">
                        <div class="row">
                            <div class="nave_menu">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                            <a class="navbar-brand" href="#home">
                                                <img src="blog/images/kalya.png" width="150px" style="border-radius: 10%;" />
                                            </a>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->



                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-right">
                                                <li><a href="/">HOME</a></li>
                                                <li><a href="/#history">ABOUT US</a></li>
                                                <li><a href="/#team">TEAM</a></li>
                                                <li><a href="/topblogs">BLOG</a></li>
                                                <li><a href="/kalyacontact">CONTACT</a></li>
                                            </ul>


                                        </div>

                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>

                </div>
            </header> <!--End of header -->




            <!--home Section -->
            <section id="home" class="home">
                <div class="overlay">
                    <div class="home_skew_border">
                        <div class="container">
                            @yield('content')
                        </div>
                        <div class="scrooldown">
                            <a href=""><i class="fa fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </section><!--End of home section -->


            <!--Footer section-->
            <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                              <div class="row">
                                  <div class="col-md-4 col-xs-12">
                                      <div class="flowus">
                                          <a href="http://www.twitter.com/mondeer" target="_blank"><i class="fa fa-twitter"></i></a>
                                          <a href="http://www.gtihub.com/mondeer" target="_blank"><i class="fa fa-github"></i></a>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="copyright_text">
                                        <p class=" wow fadeInRight" data-wow-duration="1s">&copy; 2017 Kalya & CO Advocates. All Rights Reserved.</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                      <div class="copyright_text">
                                          <p class=" wow fadeInRight" data-wow-duration="1s">Made by <a href="http://imond.co.ke">iMond Solutions</a>2017. MIT License</p>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off footer Section-->

        </div>

        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="{{ asset('/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{ asset('/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{ asset('/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{ asset('/js/jquery.mixitup.min.js')}}"></script>
        <script src="{{ asset('/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{ asset('/js/jquery.masonry.min.js')}}"></script>

        <!--slick slide js -->
        <script src="{{ asset('/css/slick/slick.js')}}"></script>
        <script src="{{ asset('/css/slick/slick.min.js')}}"></script>


        <script src="{{ asset('/js/plugins.js')}}"></script>
        <script src="{{ asset('/js/main.js')}}"></script>

    </body>
</html>
