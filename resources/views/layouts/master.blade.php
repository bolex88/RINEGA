<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="educational-responsive-Richard-Nanah-Gaye-Acamedy">
    <meta name="author" content="webThemez.com">
    <title>Richard Nanah Gaye Acamedy</title>
    <link rel="favicon" href="dist/images/favicon.png">
    <link rel="stylesheet" media="screen" href="dist/http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="dist/css/bootstrap-theme.css" media="screen"> 
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='dist/css/camera.css' type='text/css' media='all'> 
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index.html">
                    <img src="dist/images/logo - copy.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="{{route('about.show')}}">About</a></li>
                    <li><a href="{{route('courses.show')}}">Courses</a></li>
                    <li><a href="{{route('events.show')}}">Events</a></li>
                    <li class="dropdown">
                        <a href="{{route('gallery.show')}}" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('events.show')}}">Activities</a></li>
                            <li><a href="{{route('photos.show')}}">Photos</a></li>
                            <li><a href="{{route('videos.show')}}">Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('contact.add')}}">Contact</a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <!-- /.navbar -->

      @yield('main')
      
         
    <footer id="footer">
 
        <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Course Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                List of Technology/Computer
              </a>
            </li>
            <li><a href="#">
                List of Business Skills
              </a>
            </li>
            <li><a href="#">
               List of Home Economic
              </a>
            </li>
            <li><a href="#">
               List of Office Management
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Products Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Academic
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="{{route('courses.show')}}">
                All Courses
              </a>
            </li>
            <li> <a href="#">
                All Instructors
              </a>
            </li>
            <li><a href="#">
                All Members
              </a>
            </li>
            <li>
              <a href="#">
                All Groups
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
                <div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Enroll now... By visiting our campous.</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Kabbah Township, Montserrado Cunty, Liberia<br>
            <i class="fa fa-phone"></i>+123 (0)886 521 451 <br>
             <i class="fa fa-envelope-o"></i> youremail@email.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
            <div class="social text-center">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>

            <div class="clear"></div>
            <!--CLEAR FLOATS-->
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="/">Home</a> | 
                                <a href="{{route('about.show')}}">About</a> |
                                <a href="{{route('courses.show')}}">Courses</a> |
                                <a href="{{route('events.show')}}">Events</a> |
                                <a href="{{route('contact.add')}}">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 panel">
                        <div class="panel-body">
                            <p class="text-right">
                                Copyright &copy; 2019. Template by <a href="#" rel="develop">Bolex88</a>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="dist/js/modernizr-latest.js"></script> 
    <script type='text/javascript' src='dist/js/jquery.min.js'></script>
    <script type='text/javascript' src='dist/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='dist/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='dist/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='dist/js/camera.min.js'></script> 
    <script src="dist/js/bootstrap.min.js"></script> 
    <script src="dist/js/custom.js"></script>
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
                height: '600',
                loader: 'false',
                pagination: true,
                thumbnails: false,
                hover: false,
                playPause: false,
                navigation: false,
                opacityOnGrid: false,
                imagePath: 'assets/images/'
            });

        });
      
    </script>
    
</body>
</html>
