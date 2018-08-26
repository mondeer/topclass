<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Topclass writers helps in doing your assignment and your project without forgeting your theses." />
    <meta name="keywords" content="assignment, assignments, writing, best writers, freelancers, freelancing, thesis help" />
    <meta name="author" content="Laban, iMond Solutions" />
    <title>TopClass || Freelancers</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/" rel="tooltip" title="Designed by TopClass. Coded by iMond" data-placement="bottom" target="_blank">
                    <img width="150px" src="/assets/img/topclassbg.png" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/freelancers/enroll">
                            <i class="fa fa-pencil"></i>
                            <p>Become a Writer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/assignment/submit" target="_blank">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Submit Assignment</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/topclass/services">
                            <i class="fa fa-superpowers"></i>
                            <p>Services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-neutral" href="{{ url('/login')}}">
                            <i class="now-ui-icons arrows-1_share-66"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="fullscreen-video-wrap" data-parallax="true">
              <video src="https://production.cdmycdn.com/assets/marketing-pages/intensives/bws/coding-scenes-9a2031e8142b40bdb5d936d5eef33dfa.mp4" autoplay="" loop="">
              </video>
            </div>
            <div class="header-overlay"></div>

            <div class="container">
              <div class="header-content text-md-center">
                <!-- <h1 class="imond1">Welcome To Topclass</h1>
                <p>We at Topclass offer all types of online academic services,
                  be it homework help, coursework help, case study help, thesis/research
                  paper writing help and online exam help. And for each service, each subject and each topic. </p>
                <a class="btn1">Find Out More</a> -->


                <div class="" data-wow-offset="0" data-wow-delay="0.1s">
                  <h4 class="h-light imondwhite">Details of Assignment</h4>
                </div>
                  <div class="imond">
                  <form class="form-horizontal" role="form" method="POST" action="/topclass/assignment">
                      {{ csrf_field() }}

                      @if( session('error') )
                          <div class="alert alert-danger">
                            {{ session('error') }}
                          </div>
                      @endif

                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="name" class="col-md-4 control-label">Email</label>

                              <div class="col-md-12">
                                  <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="palce your email address" required autofocus>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="name" class="col-md-4 control-label">Subject</label>

                              <div class="col-md-12">
                                  <textarea class="form-control" name="assignment" rows="4" cols="20"></textarea>
                                  <!-- <input type="text" class="form-control" name="subject" value="{{ old('email') }}" placeholder="palce your email address" required autofocus> -->
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="name" class="control-label">Due Date</label>

                              <div class="col-md-12">
                                  <input type="text" class="form-control" name="due_date" value="{{ old('due_date') }}" placeholder="mm/dd/yyyy" required autofocus>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <label for="name" class="control-label">Length of Assignment</label>

                              <div class="col-md-12">
                                  <input type="text" class="form-control" name="length_of_assignment" value="{{ old('length_of_assignment') }}" placeholder="how many words/Pages" required autofocus>
                              </div>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="name" class="control-label">or Upload file</label>

                                <div class="col-md-12">
                                    <input type="file" name="assignment1">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div> -->

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-6">
                              <button type="submit" class="btn btn-primary">
                                  Submit
                              </button>
                          </div>
                      </div>
                  </form>

                </div>

              </div>
                <h6 class="category category-absolute imondblack">Made by
                    <a href="/">
                        <img width="70px" src="/assets/img/topclassbg.png" class="Topclass-logo" />
                    </a>. For you
                </h6>
            </div>
        </div>
        <div class="main">
            <div class="section section-images">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero-images-container">
                                <img src="assets/img/openbooks.png" alt="">
                            </div>
                            <div class="hero-images-container-1">
                                <img src="assets/img/openbooks1.png" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- The main part -->
                <div class="container">
                  <br><br><br>
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <i class="fa fa-cloud-upload fa-4x"></i><br>
                        <b>SUBMIT YOUR ASSIGNMENT</b>
                        <p align='justify'>Simply visit myassignmenthelp.com and fill up the
                        assignment submission form. Mention the assignment
                        requirements and upload the files. You can immediately
                        chat with 24 x 7 assignment expert and get the best price.</p>
                      </div>
                      <div class="col-md-4 text-center">
                        <i class="fa fa-cc-paypal fa-4x"></i><br>
                        <b>PAY FOR ASSIGNMENT</b>
                        <p align="justify">
                        Once you receive best price for your assignment, process
                        the payment through- paypal,credit card, debit card or online banking.</p>
                      </div>
                      <div class="col-md-4 text-center">
                        <i class="fa fa-cloud-download fa-4x"></i><br>
                        <b>GET ASSIGNMENT SOLUTION</b>
                        <p align="justify">
                        Your high quality and well referenced assignment will
                        be delivered straight in your MyAssignmenthelp.com’s
                        student account, long before the agreed deadline.</p>
                      </div>
                    </div>
                </div>
                <!-- main part done -->
            </div>

            <div class="container">
              <div class="row">
                <div class="col-md-6  text-center">
                  <img width="400px" src="/assets/img/top2.jpg" alt="">
                </div>
                <div class="col-md-6 text-justify">
                  <b>On Time Delivery</b> <br>
                  Being the best professional writing services provider,
                  we never compromise when it comes to deadline and delivery
                  of assignment on time. Our writers make sure that all orders
                  are submitted prior to the deadline so that you can proofread
                  your paper before handing it over to your tutor.
                   <br> <br>
                   <b>24 X 7 Help</b> <br>
                   We work 24x7 for your convenience. Our customer support
                   executives are available round the clock in case you need
                   any professional assistance. Feel free to contact our assignment
                   writing services any time via phone, email.


                </div>
              </div>
<hr>
              <div class="row">
                <div class="col-md-6 text-justify">
                  <b>Services For All Subjects</b> <br>
                  It does not matter whether you are a freshman in college
                  or finishing your final assignment to acquire Ph.D. degree,
                  our writers can provide you professional writing assistance
                  on any subject at any level. We have experts for Law, Nursing,
                  Management, Accounting, Marketing, Engineering, Programming etc.
                  Thus, the next time you would type “where can I have a comprehensive
                  assignment help for me?” feel free to visit us for the best result.
                  <br><br>
                  <b>Plagiarism-Free Work</b> <br>
                  To avoid any plagiarism, we check our completed papers three times
                  — after writing, editing and proofreading — using reliable plagiarism
                  detection software, Turnitin.com. We have strict policies against plagiarism.
                  We only provide customized 100 percent original papers.


                </div>
                <div class="col-md-6 text-center">
                  <img width="400px" src="/assets/img/openbooks1.png" alt="">
                </div>
              </div>
            </div>
            <ul class="accordion">
              <li class="tab">
                <div class="social youtube">
                  <a href="https://youtube.com/traversymedia" target="_blank">Youtube</a>
                </div>
                <div class="content">
                  <h1>YouTube</h1>
                  <p>Follow me on YouTube for tutorials with the latest technology in webv development</p>
                </div>
              </li>
              <li class="tab">
                <div class="social twitter">
                  <a href="https://twitter.com/traversymedia" target="_blank">Twitter</a>
                </div>
                <div class="content">
                  <h1>Twitter</h1>
                  <p>Follow me on Twitter for video and course updates, article & blog shares and more</p>
                </div>
              </li>
              <li class="tab">
                <div class="social facebook">
                  <a href="https://facebook.com/traversymedia" target="_blank">Facebook</a>
                </div>
                <div class="content">
                  <h1>Facebook</h1>
                  <p>Follow me on Facebook to stay up to date with Traversy Media and get notified of new videos, publications, etc</p>
                </div>
              </li>
              <li class="tab">
                <div class="social linkedin">
                  <a href="https://www.linkedin.com/in/bradtraversy" target="_blank">LinkedIn</a>
                </div>
                <div class="content">
                  <h1>LinkedIn</h1>
                  <p>Connect with me on a professional level on Linkedin</p>
                </div>
              </li>
              <li class="tab">
                <div class="social instagram">
                  <a href="http://instagram.com/traversymedia" target="_blank">Instagram</a>
                </div>
                <div class="content">
                  <h1>Instagram</h1>
                  <p>Follow me on Instragram for a more personal look into my life and work</p>
                </div>
              </li>
              <li class="tab">
                <div class="social github">
                  <a href="http://github.com/bradtraversy" target="_blank">Github</a>
                </div>
                <div class="content">
                  <h1>Github</h1>
                  <p>Check out my Github for tutorial code, my personal projects and more</p>
                </div>
              </li>
            </ul>
        </div>

        <!-- <div class="container">


        </div> -->

        <footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Submit Assignment
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Become a Freelancer
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed & Coded by
                    <a href="http://www.imond.co.ke" target="_blank">iMond Solutions</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>
