@include('pages.common.header')
	<!--Main Slider-->
    <section class="main-slider style-two">

		<div class="main-slider-carousel owl-carousel owl-theme">
			@foreach ($view_sliders as $view_slider)
            	<div class="slide" style="background-image:url({{ URL::asset("/public/../$view_slider->images")}});  background-size: cover; background-repeat: no-repeat; background-position: center;">

				<!-- <div class="slide" style="background-image:url(front/images/main-slider/3.jpg)"> -->
					<div class="auto-container">
						<div class="content alternate">
							<h1 class="alternate">{{ $view_slider->name}}</span></h1>
							<div class="text alternate">{{ $view_slider->facts }}</div>
							<div class="btn-box">
								<a href="{{ url('admissionform') }}" class="btn btn-dark btn-lg">Apply now</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
        </div>	
	</section>
	
	<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-bar-chart"></span>
						</div>
						<h6><a href="#">Mission Statement</a></h6>
						<div class="text">To be the reference Institution laying a divine educational foundation for the sustainablility of whole life education in Nigeria and across the world.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-board"></span>
						</div>
						<h6><a href="#">Vision Statement</a></h6>
						<div class="text">To build a school where every child is given equal opportunity to excel to the highest level of competence in every chosen field of studies through unreserved exposure to sound educational principles based on the bible-the word of God.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-student"></span>
						</div>
						<h6><a href="#">Goals/Objectives</a></h6>
						<div class="text">We are strategically and eminently positioned to offer value-added and first class educational training.</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	
	<!-- About Section Two -->
	<section class="about-section-two">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Video Column -->
				<div class="video-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <img src="{{ asset('front/images/gallery/about.jpeg') }}" alt="">
                            </figure>
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
                        </div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
					<h3 style="color: #000;" >Grace of God International  <span style="color: red;">Schools - GOGIS</span></h3>

						<!-- <h3>Grace of God International <span>Schools - GOGIS</span></h3> -->
						<div class="text">
							<p>Grace of God International Schools - GOGIS (Nursery/Primary), Christ Centered private school with unique difference. A place to be your child/Ward's second home for the next six (6) or so years. </p>
							<p>please we implore you to carefully study this information to understand and explain same to your child/ward's understanding, what is expected of you </p>
						</div>
						<a href="#" class="theme-btn btn-style-three">About us</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- Services Section Ten -->
	<section class="services-section-ten">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-three centered">
				<div class="title">Our services</div>
				<h2>Our services</h2>
			</div>
			<div class="row clearfix">

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Future <br> Management</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Sport <br> Activities</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Music <br> Clasess</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Reading/ Spelling<br> Classes</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Artwork <br> Classes</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Creative <br> Classes</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Skill <br> Development</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

				<!-- Services Block Fourteen -->
				<div class="services-block-fourteen col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="box-one"></div>
						<div class="box-two"></div>
						
						<h6><a href="#">Computer <br> Classes</a></h6>
						<div class="text">The argument in favorite of using filler to text goes some thing like this top</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Services Section Ten -->

	
	<!-- Faq Section -->
	<section class="faq-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Faq Column -->
				<div class="faq-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Frequently asked <span style="color: red;">Questions</span></h2>
						</div>
						
						<!--Accordion Box-->
						<ul class="accordion-box">

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pie-chart-3"></span>How can i get admission for my Child?<span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content current">
									<div class="content">
										<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime reach a review point you’ll end up reviewing and negotiating.</p>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-up-arrow-1"></span>I've downloaded an ISO file, now what? <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime reach a review point you’ll end up reviewing and negotiating.</p>
									</div>
								</div>
							</li>

							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pyramid-scheme"></span>Is the media bootable? <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime reach a review point you’ll end up reviewing and negotiating.</p>
									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							
							<!--Image Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<div class="image">
									<img src="images/resource/counter-img.jpg" alt="" title="">
								</div>
							</div>
							
							<!--Content Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								
								<div class="fact-counter style-two">
									
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2500" data-stop="1200">0</span>+
												<h4 class="counter-title">Happy Pupils</h4>
											</div>
										</div>
									</div>
							
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3000" data-stop="50">0</span>
												<h4 class="counter-title">Parents</h4>
											</div>
										</div>
									</div>
							
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="800">0</span>+
												<h4 class="counter-title">Alumni</h4>
											</div>
										</div>
									</div>
							
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="side-image" style="background-image:url({{ asset('front/images/gallery/about.jpeg') }})"></div>
		</div>
	</section>
	<!-- End Faq Section -->
	
	<!-- News Section Two -->
	<section class="news-section-two" style="margin-bottom: 50px;">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our latest <span style="color: red;">News</span></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block Two -->
				 @foreach ($view_blogs as $view_blog)
				 <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
						<img style="width: 100%; height: 250px;" src="{{ URL::asset("/public/../$view_blog->images")}}" alt="">
							<div class="overlay-box">
								<a href="{{ URL::asset("/public/../$view_blog->images")}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>{{ $view_blog->created_at->format('h:i:s a m/d/y') }}</li>
								<li><span class="fa fa-user"></span>Admins</li>
							</ul>
							<h5><a href="{{ url('singleblog/'.$view_blog->slug) }}">{{ $view_blog->title }}</a></h5>
							<a href="{{ url('blog') }}" class="theme-btn btn-style-four">View more</a>
						</div>
					</div>
				</div>
				
				 @endforeach
				
			</div>
		</div>
	</section>
	
	
	<!-- End Call To Action Two -->
	@include('pages.common.footer')