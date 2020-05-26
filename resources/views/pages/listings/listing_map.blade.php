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

	<!-- Listing Grid View -->
	<section id="feature-property" class="our-listing bgc-f7 pt0 pb0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="listing_sidebar dn db-991">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Status</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="small_dropdown2">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div>
												    </div>
											  	</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Garages</option>
														<option>Yes</option>
														<option>No</option>
														<option>Others</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Year built</option>
														<option>2013</option>
														<option>2014</option>
														<option>2015</option>
														<option>2016</option>
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
														<option>2020</option>
													</select>
												</div>
											</div>
										</li>
										<li class="min_area style2 list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
										    </div>
										</li>
										<li class="max_area list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
										    </div>
										</li>
										<li>
										  	<div id="accordion" class="panel-group">
											    <div class="panel">
											      	<div class="panel-heading">
												      	<h4 class="panel-title">
												        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
												        </h4>
											      	</div>
												    <div id="panelBodyRating" class="panel-collapse collapse">
												        <div class="panel-body row">
												      		<div class="col-lg-12">
												                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label" for="customCheck4">Barbeque</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck10">
																			<label class="custom-control-label" for="customCheck10">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5">
																			<label class="custom-control-label" for="customCheck5">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6">
																			<label class="custom-control-label" for="customCheck6">TV Cable</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck2">
																			<label class="custom-control-label" for="customCheck2">Lawn</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck11">
																			<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3">
																			<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
												                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12">
																			<label class="custom-control-label" for="customCheck12">WiFi</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck14">
																			<label class="custom-control-label" for="customCheck14">Sauna</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck7">
																			<label class="custom-control-label" for="customCheck7">Dryer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck9">
																			<label class="custom-control-label" for="customCheck9">Washer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck13">
																			<label class="custom-control-label" for="customCheck13">Laundry</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck8">
																			<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck15">
																			<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												        </div>
												    </div>
											    </div>
											</div>
										</li>
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">Search</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="listing_sidebar dn-991">
						<div class="sidebar_content_details is-full-width">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search</h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Status</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="small_dropdown2">
											    <div id="prncgs2" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div>
												    </div>
											  	</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Garages</option>
														<option>Yes</option>
														<option>No</option>
														<option>Others</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Year built</option>
														<option>2013</option>
														<option>2014</option>
														<option>2015</option>
														<option>2016</option>
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
														<option>2020</option>
													</select>
												</div>
											</div>
										</li>
										<li class="min_area style2 list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
										    </div>
										</li>
										<li class="max_area list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
										    </div>
										</li>
										<li>
										  	<div id="accordion" class="panel-group">
											    <div class="panel">
											      	<div class="panel-heading">
												      	<h4 class="panel-title">
												        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
												        </h4>
											      	</div>
												    <div id="panelBodyRating" class="panel-collapse collapse">
												        <div class="panel-body row">
												      		<div class="col-lg-12">
												                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label" for="customCheck4">Barbeque</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck10">
																			<label class="custom-control-label" for="customCheck10">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5">
																			<label class="custom-control-label" for="customCheck5">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6">
																			<label class="custom-control-label" for="customCheck6">TV Cable</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck2">
																			<label class="custom-control-label" for="customCheck2">Lawn</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck11">
																			<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3">
																			<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
												                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12">
																			<label class="custom-control-label" for="customCheck12">WiFi</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck14">
																			<label class="custom-control-label" for="customCheck14">Sauna</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck7">
																			<label class="custom-control-label" for="customCheck7">Dryer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck9">
																			<label class="custom-control-label" for="customCheck9">Washer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck13">
																			<label class="custom-control-label" for="customCheck13">Laundry</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck8">
																			<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck15">
																			<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												        </div>
												    </div>
											    </div>
											</div>
										</li>
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">Search</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="sidebar_switch mobile_style dn db-991 mt30 mt0-767 mb0">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn"> Show Filter</span>
						</div>
					</div>
				</div>
				<div class="col-xl-5">
					<div class="half_map_area_content mt30">
						<div class="row">
							<div class="grid_list_search_result">
								<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
									<div class="left_area tac-xsd">
										<p>9 Search results</p>
									</div>
								</div>
								<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 pl0 pr0">
									<div class="half_map_advsrch_navg style2 text-right tac-xsd">
										<ul>
											<li class="list-inline-item"><span class="stts">Sort by:</span>
												<select class="selectpicker show-tick">
													<option>Featured First</option>
													<option>Featured 2nd</option>
													<option>Featured 3rd</option>
													<option>Featured 4th</option>
													<option>Featured 5th</option>
												</select>
											</li>
											<li class="list-inline-item"><a class="hvr-text-thm" href="#"><span class="fa fa-th-large"></span></a></li>
											<li class="list-inline-item"><a class="hvr-text-thm" href="#"><span class="fa fa-th-list"></span></a></li>
											<li class="list-inline-item"><a class="hvr-text-thm" href="#"><span class="flaticon-more"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<ul class="feature_property_half_clist style2 mb0">
									<li class="extrawide list-inline-item">
										<div class="feat_property home7 style4">
											<div class="thumb">
												<div class="fp_single_item_slider">
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp1.jpg') }}" alt="fp1.jpg">
													</div>
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp2.jpg') }}" alt="fp2.jpg">
													</div>
												</div>
												<div class="thmb_cntnt style2">
													<ul class="tag mb0">
														<li class="list-inline-item"><a href="#">For Rent</a></li>
														<li class="list-inline-item"><a href="#">Featured</a></li>
													</ul>
												</div>
												<div class="thmb_cntnt style3">
													<ul class="icon mb0">
														<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
													</ul>
													<a class="fp_price" href="#">$13,000<small>/mo</small></a>
												</div>
											</div>
											<div class="details">
												<div class="tc_content">
													<p class="text-thm">Apartment</p>
													<h4>Renovated Apartment</h4>
													<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
													<ul class="prop_details mb0">
														<li class="list-inline-item"><a href="#">Beds: 4</a></li>
														<li class="list-inline-item"><a href="#">Baths: 2</a></li>
														<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
													</ul>
												</div>
												<div class="fp_footer">
													<ul class="fp_meta float-left mb0">
														<li class="list-inline-item"><a href="#"><img src="{{ URL::asset('assets/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
														<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
													</ul>
													<div class="fp_pdate float-right">4 years ago</div>
												</div>
											</div>
										</div>
									</li>
									<li class="extrawide list-inline-item">
										<div class="feat_property home7 style4">
											<div class="thumb">
												<div class="fp_single_item_slider">
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp2.jpg') }}" alt="fp2.jpg">
													</div>
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp3.jpg') }}" alt="fp3.jpg">
													</div>
												</div>
												<div class="thmb_cntnt style2">
													<ul class="tag mb0">
														<li class="list-inline-item"><a href="#">For Rent</a></li>
														<li class="list-inline-item dn"></li>
													</ul>
												</div>
												<div class="thmb_cntnt style3">
													<ul class="icon mb0">
														<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
													</ul>
													<a class="fp_price" href="#">$13,000<small>/mo</small></a>
												</div>
											</div>
											<div class="details">
												<div class="tc_content">
													<p class="text-thm">Villa</p>
													<h4>Gorgeous Villa Bay View</h4>
													<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
													<ul class="prop_details mb0">
														<li class="list-inline-item"><a href="#">Beds: 4</a></li>
														<li class="list-inline-item"><a href="#">Baths: 2</a></li>
														<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
													</ul>
												</div>
												<div class="fp_footer">
													<ul class="fp_meta float-left mb0">
														<li class="list-inline-item"><a href="#"><img src="{{ URL::asset('assets/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
														<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
													</ul>
													<div class="fp_pdate float-right">4 years ago</div>
												</div>
											</div>
										</div>
									</li>
									<li class="extrawide list-inline-item">
										<div class="feat_property home7 style4">
											<div class="thumb">
												<div class="fp_single_item_slider">
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp15.jpg') }}" alt="fp15.jpg">
													</div>
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp16.jpg') }}" alt="fp16.jpg">
													</div>
												</div>
												<div class="thmb_cntnt style2">
													<ul class="tag mb0">
														<li class="list-inline-item"><a href="#">For Rent</a></li>
														<li class="list-inline-item"><a href="#">Featured</a></li>
													</ul>
												</div>
												<div class="thmb_cntnt style3">
													<ul class="icon mb0">
														<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
													</ul>
													<a class="fp_price" href="#">$13,000<small>/mo</small></a>
												</div>
											</div>
											<div class="details">
												<div class="tc_content">
													<p class="text-thm">Apartment</p>
													<h4>Renovated Apartment</h4>
													<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
													<ul class="prop_details mb0">
														<li class="list-inline-item"><a href="#">Beds: 4</a></li>
														<li class="list-inline-item"><a href="#">Baths: 2</a></li>
														<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
													</ul>
												</div>
												<div class="fp_footer">
													<ul class="fp_meta float-left mb0">
														<li class="list-inline-item"><a href="#"><img src="{{ URL::asset('assets/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
														<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
													</ul>
													<div class="fp_pdate float-right">4 years ago</div>
												</div>
											</div>
										</div>
									</li>
									<li class="extrawide list-inline-item">
										<div class="feat_property home7 style4">
											<div class="thumb">
												<div class="fp_single_item_slider">
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp16.jpg') }}" alt="fp16.jpg">
													</div>
													<div class="item">
														<img class="img-whp" src="{{ URL::asset('assets/images/property/fp17.jpg') }}" alt="fp17.jpg">
													</div>
												</div>
												<div class="thmb_cntnt style2">
													<ul class="tag mb0">
														<li class="list-inline-item"><a href="#">For Rent</a></li>
														<li class="list-inline-item dn"></li>
													</ul>
												</div>
												<div class="thmb_cntnt style3">
													<ul class="icon mb0">
														<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
														<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
													</ul>
													<a class="fp_price" href="#">$13,000<small>/mo</small></a>
												</div>
											</div>
											<div class="details">
												<div class="tc_content">
													<p class="text-thm">Villa</p>
													<h4>Gorgeous Villa Bay View</h4>
													<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
													<ul class="prop_details mb0">
														<li class="list-inline-item"><a href="#">Beds: 4</a></li>
														<li class="list-inline-item"><a href="#">Baths: 2</a></li>
														<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
													</ul>
												</div>
												<div class="fp_footer">
													<ul class="fp_meta float-left mb0">
														<li class="list-inline-item"><a href="#"><img src="{{ URL::asset('assets/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
														<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
													</ul>
													<div class="fp_pdate float-right">4 years ago</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-lg-12 mb30">
								<div class="mbp_pagination">
									<ul class="page_navigation">
									    <li class="page-item disabled">
									    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">1</a></li>
									    <li class="page-item active" aria-current="page">
									    	<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									    </li>
									    <li class="page-item"><a class="page-link" href="#">3</a></li>
									    <li class="page-item"><a class="page-link" href="#">...</a></li>
									    <li class="page-item"><a class="page-link" href="#">29</a></li>
									    <li class="page-item">
									    	<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
									    </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-7">
					<div class="sidebar_switch style2 text-right dn-991">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button sidebarClosed2 filteropen2 showBtns"> Show Filter</span>
						</div>
					</div>
					<div class="half_map_area">
						<div class="home_two_map style2">
							<div class="map-canvas skin2 half_style" id="contact-google-map" data-map-lat="51.510280" data-map-lng="-0.084028" data-icon-path="images/logo/1.png" data-map-title="Awesome Place" data-map-zoom="14"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('script')
<script>
    console.log('test');
</script>
@endsection