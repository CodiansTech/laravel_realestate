@extends('layouts.main')

@section('title', 'Homepage')

@section('head')
    <style>

    </style>
@endsection

@section('content')

<!-- Modal -->
<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
							  	</li>
							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="{{ URL::asset('assets/images/resource/login.jpg') }}" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form action="#">
										<div class="heading">
											<h4>Login</h4>
										</div>
										<div class="row mt25">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="input-group mb-2 mr-sm-2">
										    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="User Name Or Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="input-group form-group">
									    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">Remember me</label>
											<a class="btn-fpswd float-right" href="#">Lost your password?</a>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Log In</button>
										<p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="{{ URL::asset('assets/images/resource/regstr.jpg') }}" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<div class="heading">
										<h4>Register</h4>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="exampleInputName" placeholder="User Name">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group ui_kit_select_search mb0">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="SelectRole">Single User</option>
												<option data-tokens="Agent/Agency">Agent</option>
												<option data-tokens="SingleUser">Multi User</option>
											</select>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
										<p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">About Us</li>
						</ol>
						<h1 class="breadcrumb_title">About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2 class="mt0">Our Mission Is To FindHouse</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-xl-7">
					<div class="about_content">
						<p class="large">Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis ligula eu lectus vulputate porttitor sed feugiat nunc. Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor, lectus orci elementum augue, eget auctor metus ante sit amet velit.</p>
						<p>Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar. Donec et libero ligula. Vivamus semper at orci at placerat.Placeat Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla quae alias tempora.</p>
						<ul class="ab_counting">
							<li class="list-inline-item">
								<div class="about_counting">
									<div class="icon"><span class="flaticon-user"></span></div>
									<div class="details">
										<h3>80,123</h3>
										<p>Customers to date</p>
									</div>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="about_counting">
									<div class="icon"><span class="flaticon-home"></span></div>
									<div class="details">
										<h3>$74 Billion</h3>
										<p>In home sales</p>
									</div>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="about_counting">
									<div class="icon"><span class="flaticon-transfer"></span></div>
									<div class="details">
										<h3>$468 Million</h3>
										<p>In Savings</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-xl-5">
					<div class="about_thumb">
						<img class="img-fluid w100" src="{{ URL::asset('assets/images/about/1.jpg') }}" alt="1.jpg">
						<a class="popup-iframe popup-youtube color-white" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y"><i class="flaticon-play"></i></a>
					</div>
				</div>
			</div>
			<div class="row mt50">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Why Choose Us</h2>
						<p>We provide full service at every step.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Trusted By Thousands</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Wide Renge Of Properties</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4>Financing Made Easy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team -->
	<section class="our-team bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Our Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="team_slider">
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/1.jpg') }}" alt="1.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Jennifer Barton</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/2.jpg') }}" alt="2.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Kathleen Myers</h4>
									<p>Agent</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/3.jpg') }}" alt="3.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Mariusz Ciesla</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/4.jpg') }}" alt="4.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Helene Powers</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/1.jpg') }}" alt="1.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Jennifer Barton</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/2.jpg') }}" alt="2.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Kathleen Myers</h4>
									<p>Agent</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/3.jpg') }}" alt="3.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Mariusz Ciesla</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="team_member">
								<div class="thumb">
									<img class="img-fluid" src="{{ URL::asset('assets/images/team/4.jpg') }}" alt="4.jpg">
									<div class="overylay">
										<ul class="social_icon">
											<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<h4>Helene Powers</h4>
									<p>Broker</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Testimonials -->
	<section class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb20">
						<h2>Testimonials</h2>
						<p>Here could be a nice sub title</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonial_grid_slider style2">
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{ URL::asset('assets/images/testimonial/1.jpg') }}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{ URL::asset('assets/images/testimonial/1.jpg') }}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{ URL::asset('assets/images/testimonial/1.jpg') }}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{ URL::asset('assets/images/testimonial/1.jpg') }}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_grid style2">
								<div class="thumb">
									<img src="{{ URL::asset('assets/images/testimonial/1.jpg') }}" alt="1.jpg">
									<div class="tg_quote"><span class="fa fa-quote-left"></span></div>
								</div>
								<div class="details">
									<h4>Augusta Silva</h4>
									<p>Sales Manager</p>
									<p class="mt25">Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Our Partners</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ URL::asset('assets/images/partners/1.png') }}" alt="1.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ URL::asset('assets/images/partners/2.png') }}" alt="2.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ URL::asset('assets/images/partners/3.png') }}" alt="3.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ URL::asset('assets/images/partners/4.png') }}" alt="4.png">
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-lg">
					<div class="our_partner">
						<img class="img-fluid" src="{{ URL::asset('assets/images/partners/5.png') }}" alt="5.png">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Start Partnership -->
	<section class="start-partners bgc-thm pt50 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="start_partner tac-smd">
						<h2>Become a Real Estate Agent</h2>
						<p>We only work with the best companies around the globe</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="parner_reg_btn text-right tac-smd">
						<a class="btn btn-thm2" href="#">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

    @include('layouts.footer')

@endsection

@section('script')
<script>
    console.log('test');
</script>
@endsection