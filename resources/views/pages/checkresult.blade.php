@include('pages.common.header')

    <!--End Main Header -->

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('front/images/gallery/11.jpeg') }})">
    	<div class="auto-container">
			<div class="content">
				<h1>Contact <span>us</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Page Section -->
	<section class="contact-page-section">

		<div class="auto-container">
			<div class="inner-container">
				<h2 style="color: red; text-align: center; margin-bottom: 15px;">CHECK RESULT</span></h2>
				<div class="row clearfix">

					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<img src="{{ asset('front/images/gallery/11.jpeg') }}" alt="">
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="innercolumn">

							<!--Contact Form-->
							<div class="contactform">
								<form method="post" action="{{ url('createcontact') }}" method="post">
									@csrf
								@if (Session::get('success'))
									<div class="alert alert-success">
										{{ Session::get('success') }}
									</div>
									@endif

									@if (Session::get('fail'))
									<div class="alert alert-danger">
									{{ Session::get('fail') }}
									</div>
								@endif
									<div class="form-group">
                                        <label for="">Reg Number</label>
                                        <input type="text" name="regnumber" class="form-control" @error('regnumber') is-invalid @enderror"
                                        value="{{ old('regnumber') }}" placeholder="Reg Number">
									</div>
                                    @error('regnumber')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 

                                    <div class="form-group">
                                        <label for="">Select Classes</label>
                                        <select name="classname" class="form-control">
                                            <option value="">Primary One</option>
                                        </select>
									</div>
                                    @error('classname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 

                                    
                                    <div class="form-group">
                                        <label for="">Select Term</label>
                                        <select name="term" class="form-control">
                                            <option value="First Term">First Term</option>
                                            <option value="Second Term">Second Term</option>
                                            <option value="Third Term">Third Term</option>
                                        </select>
									</div>
                                    @error('term')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 

                                    <div class="form-group">
                                        <label for="">Select Section</label>
                                        <select name="section" class="form-control">
                                            <option value="">Pre Nursery</option>
                                            <option value="">Primary</option>
                                        </select>
									</div>
                                    @error('section')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror 

									

									<div class="form-group">
										<button type="submit" class="btn btn-success">Submit</button>
									</div>

								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Team Page Section -->
	

	@include('pages.common.footer')

