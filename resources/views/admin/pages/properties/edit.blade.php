@extends('layouts.main')

@section('title', 'Edit '.$property->title)

@section('head')
@mapstyles
@endsection

@section('script')
@mapscripts
<script>
	window.addEventListener('LaravelMaps:MapInitialized', function (event) {
		var element = event.detail.element;
		var map = event.detail.map;
		var marker = event.detail.marker;
		var service = event.detail.service;
        var lat = document.getElementById("latitude").value;
        var long = document.getElementById("longitude").value;
		console.log('lat: '+lat+' - long: '+long)
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
<!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Add your property</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Add Your Property</h1></header>
            <div class="row">
                <!-- Submit-->
                <div class="col-md-9 col-sm-9">
                    <section id="submit" class="submit">
                        <section id="select-package">
                            <div class="table-responsive submit-pricing">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Your Package:</th>
                                        <th class="title">Free</th>
                                        <th class="title">Silver</th>
                                        <th class="title">Gold</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="prices">
                                        <td></td>
                                        <td>$0</td>
                                        <td>$20</td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>Property Submit Limit</td>
                                        <td>1</td>
                                        <td>20</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Agent Profiles</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Agency Profiles</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td>5</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Featured Properties</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                    </tr>
                                    <tr class="buttons">
                                        <td></td>
                                        <td class="package-selected" data-package="free"><button type="button" class="btn btn-default small">Select</button></td>
                                        <td data-package="silver"><button type="button" class="btn btn-default small">Select</button></td>
                                        <td data-package="gold"><button type="button" class="btn btn-default small">Select</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.submit-pricing -->
                        </section><!-- /#select-package -->
                    </section><!-- /#submit -->
                </div><!-- /.col-md-9 -->
                <aside class="col-md-3 col-sm-3">
                    <div class="submit-step">
                        <figure class="step-number">1</figure>
                        <div class="description">
                            <h4>Select Your Price Package</h4>
                            <p>Choose from price packages one that suit your need. If you have chosen package before,
                                it will be automatically selected.
                            </p>
                        </div>
                    </div><!-- /.submit-step -->
                </aside><!-- /.col-md-3 -->
            </div><!-- /.row -->
			
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
                                                <input type="text" class="form-control" id="submit-title" name="title" value="{{$property->title}}" required>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="submit-price">Price</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control" id="submit-price" name="price" pattern="\d*" value="{{$property->price}}" required>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="submit-description">Description</label>
                                        <textarea class="form-control" id="submit-description" rows="8" name="description" required>{{$property->description}}</textarea>
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
                                                        <input type="text" class="form-control" id="address-map" name="city" value="{{$property->city}}">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-property-type">Property Type</label>
                                                                <select name="type" id="submit-property-type">
                                                                    <option value="1">Apartment</option>
                                                                    <option value="2">Condominium</option>
                                                                    <option value="3">Cottage</option>
                                                                    <option value="4">Flat</option>
                                                                    <option value="5">House</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-status">Status</label>
                                                                <select name="status" id="submit-status">
                                                                    <option value="0" {{$property->status == 0 ? 'selected' : ''}}>Sale</option>
                                                                    <option value="1" {{$property->status == 1 ? 'selected' : ''}}>Rent</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Beds">Rooms</label>
                                                                <input type="text" class="form-control" id="submit-Beds" name="rooms" pattern="\d*" value="{{$property->rooms}}">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-Baths">Zip</label>
                                                                <input type="text" class="form-control" id="submit-Baths" name="zip" pattern="\d*" value="{{$property->zip}}">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-area">Area</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" id="submit-area" name="area" pattern="\d*" value="{{$property->area}}" required>
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
                                                        <input type="text" class="form-control" id="address-map" name="address" value="{{$property->address}}">
                                                    </div><!-- /.form-group -->
                                                    <label for="address-map">Or drag the marker to property position</label>
													<div id="submit-map" style="margin-bottom">
                                                    @map([
														'lat' => 51.5287718,
														'lng' => -0.2416804,
														'zoom' => 8,
													])
													</div>
									    	<input type="hidden" class="form-control" id="latitude" name="latitude" value="{{$property->lat}}">
											
									    	<input type="hidden" class="form-control" id="longitude" name="longitude" value="{{$property->long}}">
                                                   
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
                                <figure class="step-number">2</figure>
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
                                    <button type="submit" class="btn btn-default large">Proceed to Payment</button>
                                </div><!-- /.form-group -->
                                <figure class="note block">By clicking the “Proceed to Payment” or “Submit” button you agree with our <a href="terms-conditions.html">Terms and conditions</a></figure>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">3</figure>
                                <div class="description">
                                    <h4>Review Information and Proceed to Payment</h4>
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