@extends('layouts.master')

@section('main')

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

	
	@endsection