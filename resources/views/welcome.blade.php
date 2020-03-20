@extends('layouts.master')
    
@section('main')

    <!-- Header -->
    <header id="head">
        <div class="container">
             <div class="heading-text">                         
                            <h1 class="animated flipInY delay1">Start Your Education With RINEGA</h1>
                            <p>Welcome Back To School.</p>
                        </div>
            
                    <div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="dist/images/Students/Campous.jpg" data-src="dist/images/Students/Campous.jpg">
                            <h2>We Develop.</h2>
                        </div> 
                        <div data-thumb="dist/images/Students/Classes1.jpg" data-src="dist/images/Students/Classes1.jpg">
                        </div>
                        <div data-thumb="dist/images/Students/student23.jpg" data-src="dist/images/Students/student23.jpg">
                        </div>
                        <div data-thumb="dist/images/Students/RINEGA Test.png" data-src="dist/images/Students/RINEGA Test.png">
                        </div>
                        <div data-thumb="dist/images/Students/RINEGA BasketBall Team.jpg" data-src="dist/images/Students/RINEGA BasketBall Team.jpg"> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
        </div>
    </header>
    <!-- /Header -->

  <div class="container">
    <div class="row">
                    <div class="col-md-3">
                        <div class="grey-box-icon">
                            <div class="icon-box-top grey-box-icon-pos">
                                <img src="dist/images/1.png" alt="" />
                            </div><!--icon box top -->
                            <h4>Vocational Courses</h4>
                            <p>Vocational courses and classes are available in many different career fields, such as tylering, computer technology, office management and business skilled trades.</p>
                            <p><a href="{{route('courses.show')}}"><em>Read More</em></a></p>
                        </div><!--grey box -->
                    </div><!--/span3-->
                    <div class="col-md-3">
                        <div class="grey-box-icon">
                            <div class="icon-box-top grey-box-icon-pos">
                                <img src="dist/images/2.png" alt="" />
                            </div><!--icon box top -->
                            <h4>Meet our Staff</h4>
                            <p>At Richard Nanah Gaye Acamedy we have: <b //>
                            A dedicated enthusiastic professional staff. An inclusive and innovative curriculum.</p>
                            <p><a href="{{route('about.show')}}"><em>Read More</em></a></p>
                        </div><!--grey box -->
                    </div><!--/span3-->
                    <div class="col-md-3">
                        <div class="grey-box-icon">
                            <div class="icon-box-top grey-box-icon-pos">
                                <img src="dist/images/3.png" alt="" />
                            </div><!--icon box top -->
                            <h4>Latest Updates</h4>
                            <p>Vocational courses and classes are available in many different career fields, such as tylering, computer technology, office management and business skilled trades.</p>
                            <p><a href="{{route('events.show')}}"><em>Read More</em></a></p>
                        </div><!--grey box -->
                    </div><!--/span3-->
                    <div class="col-md-3">
                        <div class="grey-box-icon">
                            <div class="icon-box-top grey-box-icon-pos">
                                <img src="dist/images/4.png" alt="" />
                            </div><!--icon box top -->
                            <h4>Placements</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue
                            eset nec lacus elit dor broma.</p>
                            <p><a href="#"><em>Read More →</em></a></p>
                        </div><!--grey box -->
                    </div><!--/span3-->
                </div>
    </div> <br />
  
    
      <section class="container">
      <div class="row">
        <div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
        <p><span>At Richard Nanah Gaye Acamedy our "Learning has no Limits", and this is firmly embedded in our learning community.</span></p>
        <p>Our focus is to support and develop enthusiastic students, and instal in them a love of learning so as to help them reach their potential, both socially and academically. As a learning community, we pride ourselves in the development of the whole child, values and social skills are an importan part of the school curriumlum and we are focused on providing an inclusive education for all.</p><p>We are committed to providing a high qualityteaching and learning program that gives all of our students the opportunity to achieve success. With high expectations, we work together with the wider school community to prepare our students to become respected and contributing members of society.</p>
        <a href="{{route('about.show')}}" title="read more" class="btn-inline " target="_self">read more</a> </div> <br />
              
          
          <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Up Coming Events</h2></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Computer Science</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Business Skills</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Home Economic</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Office Management</a></li>
            </ul>
            </div>
         </div>
      </div>
      </section>

@endsection