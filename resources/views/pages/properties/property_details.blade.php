<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap-select.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/jquery.slider.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" type="text/css">

    <title>Property Detail | Maison Chase</title>
    
    @mapstyles
</head>

<body class="page-sub-page page-property-detail" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    @include('layouts.partials.header')
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Property Detail</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Property Detail Content -->
                <div class="col-md-9 col-sm-9">
                    <section id="property-detail">
                        <header class="property-title">
                            <h1>987 Cantebury Drive</h1>
                            <figure>Golden Valley, MN 55427</figure>
                            <span class="actions">
                                <!--<a href="#" class="fa fa-print"></a>-->
                                <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Add to bookmark</span><span class="title-added">Added</span></a>
                            </span>
                        </header>
                        <section id="property-gallery">
                            <div class="owl-carousel property-carousel">
                                @foreach($property->images as $image)
                                <div class="property-slide">
                                    <a href="{{URL::asset('images/property/'.$image->filename)}}" class="image-popup">
                                        <div class="overlay"><h3>Front View</h3></div>
                                        <img alt="" src="{{URL::asset('images/property/'.$image->filename)}}"">
                                    </a>
                                </div><!-- /.property-slide -->
                                @endforeach
                               
                            </div><!-- /.property-carousel -->
                        </section>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <section id="quick-summary" class="clearfix">
                                    <header><h2>Quick Summary</h2></header>
                                    <dl>
                                        <dt>Location</dt>
                                            <dd>Chicago, IL 60610</dd>
                                        <dt>Price</dt>
                                            <dd><span class="tag price">&pound; {{number_format($property->price)}}</span></dd>
                                        <dt>Property Type:</dt>
                                            <dd>House</dd>
                                        <dt>Status:</dt>
                                            <dd>{{$property->getStatus()}}</dd>
                                        <dt>Area:</dt>
                                            <dd>{{number_format($property->area)}} m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                            <dd>3</dd>
                                        <dt>Baths:</dt>
                                            <dd>2</dd>
                                        <dt>Garages:</dt>
                                            <dd>2</dd>
                                        <dt>Rating:</dt>
                                            <dd><div class="rating rating-overall" data-score="4"></div></dd>
                                    </dl>
                                </section><!-- /#quick-summary -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-8 col-sm-12">
                                <section id="description">
                                    <header><h2>Property Description</h2></header>
                                    <p>
                                       {{$property->description}}
                                    </p>
                                </section><!-- /#description -->
                                <section id="property-features">
                                    <header><h2>Property Description</h2></header>
                                    <ul class="list-unstyled property-features-list">
                                        <li>Sauna</li>
                                        <li>Fireplace or fire pit</li>
                                        <li>Outdoor Kitchen</li>
                                        <li>Tennis Courts</li>
                                        <li>Trees and Landscaping</li>
                                        <li>Sun Room</li>
                                        <li>Family Room</li>
                                        <li>Concrete Flooring</li>
                                    </ul>
                                </section><!-- /#property-features -->
                                <section id="floor-plans">
                                    <div class="floor-plans">
                                        <header><h2>Floor Plans</h2></header>

                                        @foreach($property->floorplanimages as $image)
                                            <a href="{{URL::asset('images/property/'.$image->filename)}}" class="image-popup"><img alt="" style="height:100px; width:130px" src="{{URL::asset('images/property/'.$image->filename)}}"></a>
                                        @endforeach 
                                       
                                    </div>
                                </section><!-- /#floor-plans -->
                                <section id="property-map">
                                    <header><h2>Map</h2></header>
                                    <div class="property-detail-map-wrapper">
                                       <div class="" id="">
                                        @map([
											'lat' => $property->lat,
											'lng' => $property->long,
											'zoom' => 15,
										])
                                        </div>
                                    </div>
                                </section><!-- /#property-map -->
                                            <br>
                                            <br>
                            </div><!-- /.col-md-8 -->
                            <div class="col-md-12 col-sm-12">
                                <section id="contact-agent">
                                    <header><h2>Contact Agent</h2></header>
                                    <div class="row">
                                        <section class="agent-form">
                                            <div class="col-md-7 col-sm-12">
                                                <aside class="agent-info clearfix">
                                                    <figure><a href="agent-detail.html"><img alt="" src="{{URL::asset('assets/img/agent-01.jpg')}}"></a></figure>
                                                    <div class="agent-contact-info">
                                                        <h3>Robert Farley</h3>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                                            bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
                                                            Duis euismod placerat rhoncus.
                                                        </p>
                                                        <dl>
                                                            <dt>Phone:</dt>
                                                            <dd>(123) 456 789</dd>
                                                            <dt>Mobile:</dt>
                                                            <dd>888 123 456 789</dd>
                                                            <dt>Email:</dt>
                                                            <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                                            <dt>Skype:</dt>
                                                            <dd>john.doe</dd>
                                                        </dl>
                                                        <hr>
                                                        <a href="agent-detail.html" class="link-arrow">Full Profile</a>
                                                    </div>
                                                </aside><!-- /.agent-info -->
                                            </div><!-- /.col-md-7 -->
                                            <div class="col-md-5 col-sm-12">
                                                <div class="agent-form">
                                                    <form role="form" id="form-contact-agent" method="post"  class="clearfix">
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-name">Your Name<em>*</em></label>
                                                            <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-email">Your Email<em>*</em></label>
                                                            <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-message">Your Message<em>*</em></label>
                                                            <textarea class="form-control" id="form-contact-agent-message" rows="2" name="form-contact-agent-message" required></textarea>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Send a Message</button>
                                                        </div><!-- /.form-group -->
                                                        <div id="form-contact-agent-status"></div>
                                                    </form><!-- /#form-contact -->
                                                </div><!-- /.agent-form -->
                                            </div><!-- /.col-md-5 -->
                                        </section><!-- /.agent-form -->
                                    </div><!-- /.row -->
                                </section><!-- /#contact-agent -->
                                <hr class="thick">
                                <section id="similar-properties">
                                    <header><h2 class="no-border">Similar Properties</h2></header>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="property">
                                                <a href="property-detail.html">
                                                    <div class="property-image">
                                                        <img alt="" src="{{URL::asset('assets/img/properties/property-06.jpg')}}">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ 11,000</div>
                                                            <h3>3398 Lodgeville Road</h3>
                                                            <figure>Golden Valley, MN 55427</figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>240m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>2</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>2</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>0</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                        </div><!-- /.col-md-3 -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="property">
                                                <a href="property-detail.html">
                                                    <div class="property-image">
                                                        <img alt="" src="{{URL::asset('assets/img/properties/property-04.jpg')}}">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ 38,000</div>
                                                            <h3>2186 Rinehart Road</h3>
                                                            <figure>Doral, FL 33178 </figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>240m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>3</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                        </div><!-- /.col-md-3 -->
                                        <div class="col-md-4 col-sm-6">
                                            <div class="property">
                                                <a href="property-detail.html">
                                                    <div class="property-image">
                                                        <img alt="" src="{{URL::asset('assets/img/properties/property-07.jpg')}}">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ 325,000</div>
                                                            <h3>3705 Brighton Circle Road</h3>
                                                            <figure>Glenwood, MN 56334</figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>240m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>3</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>1</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                        </div><!-- /.col-md-3 -->
                                    </div><!-- /.row-->
                                </section><!-- /#similar-properties -->
                                <hr class="thick">
                                
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </section><!-- /#property-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Property Detail Content -->

                <!-- sidebar -->
                <div class="col-md-3 col-sm-3">
                    <section id="sidebar">
                        <aside id="edit-search">
                            <header><h3>Search Properties</h3></header>
                            <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Status</option>
                                        <option value="1">Rent</option>
                                        <option value="2">Sale</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="country">
                                        <option value="">Country</option>
                                        <option value="1">France</option>
                                        <option value="2">Great Britain</option>
                                        <option value="3">Spain</option>
                                        <option value="4">Russia</option>
                                        <option value="5">United States</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="city">
                                        <option value="">City</option>
                                        <option value="1">New York</option>
                                        <option value="2">Los Angeles</option>
                                        <option value="3">Chicago</option>
                                        <option value="4">Houston</option>
                                        <option value="5">Philadelphia</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="district">
                                        <option value="">District</option>
                                        <option value="1">Manhattan</option>
                                        <option value="2">The Bronx</option>
                                        <option value="3">Brooklyn</option>
                                        <option value="4">Queens</option>
                                        <option value="5">Staten Island</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="property-type">
                                        <option value="">Property Type</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condominium</option>
                                        <option value="3">Cottage</option>
                                        <option value="4">Flat</option>
                                        <option value="5">House</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="price-range">
                                        <input id="price-input" type="text" name="price" value="1000;299000">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Search Now</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </aside><!-- /#edit-search -->
                        <aside id="featured-properties">
                            <header><h3>Featured Properties</h3></header>
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="{{URL::asset('assets/img/properties/property-06.jpg')}}">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>2186 Rinehart Road</h4></a>
                                    <figure>Doral, FL 33178 </figure>
                                    <div class="tag price">$ 72,000</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="{{URL::asset('assets/img/properties/property-09.jpg')}}">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>
                                    <figure>Minneapolis, MN 55402</figure>
                                    <div class="tag price">$ 36,000</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="{{URL::asset('assets/img/properties/property-03.jpg')}}">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>1949 Tennessee Avenue</h4></a>
                                    <figure>Minneapolis, MN 55402</figure>
                                    <div class="tag price">$ 128,600</div>
                                </div>
                            </div><!-- /.property -->
                        </aside><!-- /#featured-properties -->
                        <aside id="our-guides">
                            <header><h3>Our Guides</h3></header>
                            <a href="#" class="universal-button">
                                <figure class="fa fa-home"></figure>
                                <span>Buying Guide</span>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                            <a href="#" class="universal-button">
                                <figure class="fa fa-umbrella"></figure>
                                <span>Right Insurance for You</span>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                        </aside><!-- /#our-guide -->
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    @include('layouts.partials.footer')
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="{{URL::asset('assets/js/jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/infobox.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.placeholder.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jshashtable-2.1_src.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.numberformatter-1.2.3.j')}}s"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/tmpl.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.dependClass-0.1.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/draggable-0.1.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.slider.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.fitvids.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/custom-map.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

@mapscripts
<script>
	window.addEventListener('LaravelMaps:MapInitialized', function (event) {
		var element = event.detail.element;
		var map = event.detail.map;
		var marker = event.detail.marker;
		var service = event.detail.service;
        var lat = {!! $property->lat !!};
        var long = {!! $property->long !!};
		console.log('lat: '+lat+' - long: '+long)
		var marker2 = L.marker([lat,long]).addTo(map);
		// 	draggable: true
		// var marker1;
		// map.on('click', function(e) {
		// 	map.removeLayer(marker2);
		// 	if (marker1) { // check
		// 		map.removeLayer(marker1); // remove
		// 	}
		// 	console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng);
		// 	document.getElementById("latitude").value = e.latlng.lat;
		// 	document.getElementById("longitude").value = e.latlng.lng;
		// 	marker1 = L.marker(e.latlng).addTo(map);
		// });
	});
	
	
</script>
<script type="text/javascript">
    var propertyId = 0;
    google.maps.event.addDomListener(window, 'load', initMap(propertyId));
    $(window).load(function(){
        initializeOwl(false);
    });
</script>

</body>
</html>