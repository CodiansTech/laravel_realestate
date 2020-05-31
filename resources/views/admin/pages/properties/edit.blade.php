@extends('admin.layouts.main')

@section('admintitle', 'Edit '.$property->title)

@section('adminhead')
@mapstyles
@endsection

@section('adminscript')
@mapscripts
<script>
	window.addEventListener('LaravelMaps:MapInitialized', function (event) {
		var element = event.detail.element;
		var map = event.detail.map;
		var marker = event.detail.marker;
		var service = event.detail.service;
        var lat = document.getElementById("latitude").value;
        var long = document.getElementById("longitude").value;
		var marker2 = L.marker([lat,long]).addTo(map);
		// 	draggable: true
		var marker1;
		map.on('click', function(e) {
			map.removeLayer(marker2);
			if (marker1) { // check
				map.removeLayer(marker1); // remove
			}
			console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);
			document.getElementById("latitude").value = e.latlng.lat;
			document.getElementById("longitude").value = e.latlng.lng;
			marker1 = L.marker(e.latlng).addTo(map);
		});
	});
	
	
</script>
@endsection
@section('content')
<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Edit {{$property->title}}</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review">
								<div class="row">
									<div class="col-lg-12">
                            		<form method="POST" action="{{ route('admin.properties.update',$property->id) }}">
									@csrf
										<h4 class="mb30">Edit Listing</h4>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyTitle">Property Title</label>
									    	<input type="text" class="form-control" id="propertyTitle" name="title" value="{{$property->title}}">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_textarea">
										    <label for="propertyDescription">Description</label>
										    <textarea class="form-control" id="propertyDescription" rows="7" name="description">{{$property->description}}</textarea>
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExamplePrice">Price</label>
									    	<input type="text" class="form-control" id="formGroupExamplePrice" name="price" value="{{$property->price}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleArea">Area</label>
									    	<input type="text" class="form-control" id="formGroupExampleArea" name="area" value="{{$property->area}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Rooms</label>
											<select class="form-control" name="rooms">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Location</h4>
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyAddress">Address</label>
									    	<input type="text" class="form-control" id="propertyAddress" name="address" value="{{$property->address}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="propertyCity">City</label>
									    	<input type="text" class="form-control" id="propertyCity" name="city" value="{{$property->city}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="neighborHood">Neighborhood</label>
									    	<input type="text" class="form-control" id="neighborHood" name="neighborhood" value="{{$property->neighborhood}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="zipCode">Zip</label>
									    	<input type="text" class="form-control" id="zipCode" name="zip" value="{{$property->zip}}">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_input form-group">
											@map([
												'lat' => $property->lat,
												'lng' => $property->long,
												'zoom' => 8,
											])
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="googleMapLat">Latitude (for Google Maps)</label>
									    	<input type="text" class="form-control" id="latitude" name="latitude" value="{{$property->lat}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input form-group">
									    	<label for="googleMapLong">Longitude (for Google Maps)</label>
									    	<input type="text" class="form-control" id="longitude" name="longitude" value="{{$property->long}}">
										</div>
									</div>
									<div class="col-lg-4 col-xl-4">
										<div class="my_profile_setting_input ui_kit_select_search form-group">
									    	<label>Google Map Street View</label>
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Turkey">Street View v1</option>
												<option data-tokens="Iran">Street View v2</option>
												<option data-tokens="Iraq">Street View v3</option>
												<option data-tokens="Spain">Street View v4</option>
												<option data-tokens="Greece">Street View v5</option>
												<option data-tokens="Portugal">Street View v6</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Property media</h4>
									</div>
									<div class="col-lg-12">
										<ul class="mb0">
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="images/property/fp1.jpg" alt="fp1.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="images/property/fp2.jpg" alt="fp2.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="portfolio_item">
													<img class="img-fluid" src="images/property/fp3.jpg" alt="fp3.jpg">
								    				<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
												</div>
											</li>
										</ul>
									</div>
									
									<div class="col-xl-6">
										<div class="resume_uploader mb30">
											<h4>Attachments</h4>
											<div class="form-inline">
												
												<label class="upload">
    											<input type="file" name="filename[]" class="form-control" multiple>
												    Select Attachment
												</label>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<div class="col-xl-12">
								<div class="my_profile_setting_input">
									<button class="btn btn1 float-left">Back</button>
									<button type="submit" class="btn btn2 float-right">Update</button>
								</div>
							</div>
							</form>
						</div>
					</div>


@endsection