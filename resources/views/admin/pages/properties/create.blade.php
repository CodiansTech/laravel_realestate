@extends('layouts.main')

@section('title', 'Add property')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fileinput.min.css') }}" type="text/css">
@mapstyles
@endsection

@section('script')
<script type="text/javascript" src="{{ URL::asset('assets/js/fileinput.min.js') }}"></script>
@mapscripts


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>

<script>
	window.addEventListener('LaravelMaps:MapInitialized', function (event) {
		var element = event.detail.element;
		var map = event.detail.map;
		var marker = event.detail.marker;
		var service = event.detail.service;
		
		// 	draggable: true
		var marker1;
		map.on('click', function(e) {
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

@section('breadcrumb')

 <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Add your property</li>
            </ol>
        </div>

@endsection
@section('content')
<!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
       
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Add Your Property</h1></header>

            <form role="form" id="form-submit" class="form-submit"  method="POST" action="{{ route('admin.properties.store') }} " enctype="multipart/form-data">
				@csrf
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <section id="submit-form">
                                <section id="basic-information">
                                    <header><h2>Basic Information</h2></header>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="submit-title">Title</label>
                                                <input type="text" class="form-control" id="submit-title" name="title" required>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="submit-price">Price</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">&pound;</span>
                                                    <input type="text" class="form-control" id="submit-price" name="price" pattern="\d*" required>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="submit-description">Description</label>
                                        <textarea class="form-control" id="submit-description" rows="8" name="description" required></textarea>
                                    </div><!-- /.form-group -->
                                </section><!-- /#basic-information -->

                                <section>
                                    <div class="row">
                                        <div class="block clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <section id="summary">
                                                    <header><h2>Summary</h2></header>
                                                    <div class="form-group">
                                                        <label for="submit-location">City</label>
                                                        <input type="text" class="form-control" id="address-map" name="city">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-property-type">Property Type</label>
                                                                <select name="type" id="submit-property-type">
                                                                @foreach($types as $type)
                                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-status">Status</label>
                                                                <select name="status" id="submit-status">
                                                                    <option value="0">Sale</option>
                                                                    <option value="1">Rent</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Beds">Rooms</label>
                                                                <input type="text" class="form-control" id="submit-Beds" name="rooms" pattern="\d*">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Baths">Zip</label>
                                                                <input type="text" class="form-control" id="submit-Baths" name="zip" pattern="\d*">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-area">Area</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="submit-area" name="area" pattern="\d*" required>
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-garages">Garages</label>
                                                                <input type="text" class="form-control" id="submit-garages" name="garages" pattern="\d*">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox">Allow user rating <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="Users can give you a stars rating which is displayed in property detail"></i>
                                                        </label>
                                                    </div>
                                                </section><!-- /#summary -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6 col-sm-6">
                                                <section id="place-on-map">
                                                    <header class="section-title">
                                                        <h2>Place on Map</h2>
                                                        <span class="link-arrow geo-location">Get My Position</span>
                                                    </header>
                                                    <div class="form-group">
                                                        <label for="address-map">Address</label>
                                                        <input type="text" class="form-control" id="address-map" name="address">
                                                    </div><!-- /.form-group -->
                                                    <label for="address-map">Click the map to select your property location</label>
													<div id="submit-map" style="margin-bottom">
                                                    @map([
														'lat' => 51.5287718,
														'lng' => -0.2416804,
														'zoom' => 9,
													])
													</div>
									    	<input type="hidden" class="form-control" id="latitude" name="latitude">
											
									    	<input type="hidden" class="form-control" id="longitude" name="longitude">
                                                   
                                                </section><!-- /#place-on-map -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.block -->
                                    </div><!-- /.row -->
                                </section>

                                <section class="block" id="gallery">
                                    <header><h2>Gallery</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" type="file" name="filename[]" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Browse Images" multiple>
                                            <figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
                                        </div>
                                    </div>
                                </section>

                                <section id="property-features" class="block">
                                    <section>
                                        <header><h2>Property Features</h2></header>
                                        <ul class="submit-features">
                                            <li><div class="checkbox"><label><input type="checkbox">Air conditioning</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Bedding</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Heating</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Internet</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Microwave</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Smoking allowed</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Use of pool</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Toaster</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Coffee pot</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Cable TV</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Parquet</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Roof terrace</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Terrace</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Balcony</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Iron</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Hi-Fi</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Beach</label></div></li>
                                            <li><div class="checkbox"><label><input type="checkbox">Garage</label></div></li>
                                        </ul>
                                    </section>
                                </section>
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">1</figure>
                                <div class="description">
                                    <h4>Enter Information About Property</h4>
                                    <p>Type information about your property. Be descriptive.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">Create Property</button>
                                </div><!-- /.form-group -->
                                <figure class="note block">By clicking the ”Create Property” button you agree with our <a href="#">Terms and conditions</a></figure>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">2</figure>
                                <div class="description">
                                    <h4>Review Information</h4>
                                    <p>Carefully check entered information and than click button to submit them.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>
            </form><!-- /#form-submit -->
        </div><!-- /.container -->
    </div>


@endsection