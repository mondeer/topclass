<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="Topclass writers helps in doing your assignment and your project without forgeting your theses." />
    <meta name="keywords" content="assignment, assignments, writing, best writers, freelancers, freelancing, thesis help" />
    <meta name="author" content="Laban, iMond Solutions" />
    <meta name="author" content="Mondia Kering">
    <meta name="url" content="http://www.imond.co.ke">
    <meta name="copyright" content="iMond Solutions">
    <meta name="robots" content="index,follow">


    <title>TopClass || Best Writers</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog/css/plugin.css')}}">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog/css/style.css')}}">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <link rel="icon" href="{{url('/imond/img/imond.png')}}">
    <script src="/blog/tinymce/tinymce.min.js"></script>

    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'codesample link',
        toolbar: 'bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, styleselect, fontselect, fontsizeselect, bullist, numlist, outdent, indent, blockquote, subscript, superscript'
      });
    </script>

  </head>

 <body>
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->

    <div id="main">
        <div class="container">
            <div class="row">

                 <!-- About Me (Left Sidebar) Start -->
                 <div class="col-md-3">
                   <div class="about-fixed">

                     <div class="my-pic">
                       <br>
                       <br>
                       <br>
                        <img width="60px" src="/assets/img/topclassbg.png" alt="">
                        <div style="background-color: 2CC1A4;">
                          <ul class="menu-link">

                            @if(Auth::guest())
                              <li><a href="/">Home</a></li>
                              <li><a href="/#">View Blogs</a></li>
                              <li><a href="/#">Contact</a></li>
                            @else
                              <li><a href="/">Home</a></li>
                              <li><a href="/topblogs">View Blogs</a></li>
                              <li><a href="/newblog">New Blog</a></li>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                      TopClass <span class="caret"></span>
                                  </a>

                                  <ul class="dropdown-menu" role="menu">
                                      <li>
                                          <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                            @endif
                         </ul>
                        </div>
                      </div>

                      <div class="my-detail">
                       <ul class="social-icon">
                         <li><a href="http://www.facebook.com/bassaniok" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="http://www.twitter.com/mondeer" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                         <!-- <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
                         <li><a href="http://www.github.com/mondeer" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                  </div>
                </div>
                <!-- About Me (Left Sidebar) End -->

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	@yield('content')
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
                           <form id="" action="/subscribe" method="post">
                             {{csrf_field()}}
          						         <div class="subscribe-form margin-top-20">
          							           <input id="mc-email" type="email" name="email" placeholder="Email Address" class="text-input">
          							           <button class="submit-btn" type="submit">Submit</button>
          								     </div>
                              <p>Subscribe to my weekly Thoughts</p>
              								<label for="mc-email" class="mc-label"></label>
              							  </form>

                           </div>
                           <!-- Subscribe Form End -->

                         </div>

                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                          <footer>
                          <ul class="menu-link">
                               <li><a href="/">Home</a></li>
                               <li><a href="/topblogs">View Blogs</a></li>
                               <li><a href="/kalyacontact">Contact</a></li>
                            </ul>

                          <p>&copy;
                          <script>
                              document.write(new Date().getFullYear())
                          </script>,
                          <a href="http://www.imond.co.ke" target="_blank">TopClass Writers</a>.</p>

						  <!-- imond Credit Start -->
                          <div class="imond-credit">Develped by <i class="fa fa-love"></i><a href="https://imond.co.ke" target="_blank">iMond Solutions</a></div>
                          <!-- imond Credit End -->
                         </footer>
                       </div>
                       <!-- Footer End -->


                  </div>
                  <!-- Blog Post (Right Sidebar) End -->

            </div>
         </div>
      </div>



    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('blog/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('blog/js/plugin.js')}}"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('blog/js/scripts.js')}}"></script>


   </body>
 </html>
