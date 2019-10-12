<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="educational-responsive-Richard-Nanah-Gaye-Acamedy">
	<meta name="author" content="webThemez.com">
	<title>Richard Nanah Gaye Acamedy</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="dist/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="dist/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="dist/images/logo - copy.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="/">Home</a></li>
					<li><a href="{{route('about.show')}}">About</a></li>
						<li><a href="{{route('courses.show')}}">Courses</a></li>
					<li><a href="{{route('events.show')}}">Events</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
						<ul class="dropdown-menu">
                            <li><a href="{{route('events.show')}}">Activities</a></li>
                            <li><a href="{{route('photos.show')}}">Photos</a></li>
                            <li><a href="{{route('videos.show')}}">Videos</a></li>
						</ul>
					</li>
					<li class="active"><a href="{{route('contact.add')}}">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>Please leave us a message one of our staff will contact you in the soonest possible time!</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">Your Message</h3>
						<p>
						Please enter you info and message regarding any information you need..
						</p>
						
						<form action="{{route('contact.save')}}" method="post" enctype="multipart/form-data" class="form-light mt-20" role="form">
							<div class="form-group">
								{{csrf_field()}}
								<label>Name</label>
								<input type="text" class="form-control" name="name" placeholder="Your name">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" name="phone_number" placeholder="Phone number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" name="subject" placeholder="Subject">
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" name="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" class="btn btn-two">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Office Address</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>Kabbah Township, Montserrado Cunty, Liberia</p>
									
									<h5>Email</h5>
									<p>info@webthemez.com</p>
									
									<h5>Phone</h5>
									<p>+123 (0)886 521 451</p>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->

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
            <li> <a href="#">
                Individual Plans  </a>
            </li>
            <li><a href="#">
                Business Plans
              </a>
            </li>
            <li><a href="#">
                Free Trial
              </a>
            </li>
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="dist/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="dist/js/google-map.js"></script>


</body>
</html>
