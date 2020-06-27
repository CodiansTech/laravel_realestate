@extends('layouts.main')

@section('title', 'Listings')

@section('head')
    <link rel="stylesheet" href="{{url('assets/css/leaflet.css')}}" type="text/css">
    @mapstyles
    <style>
        .gnw-map-service {
            width: 100%;
            height: 750px;
        }
        .gnw-map.fade {
            transition: opacity .15s linear;
        }
        .gnw-map.fade:not(.show) {
            opacity: 0;
        }
    </style> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
@endsection

@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Property Listing</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container-fluid pull-right">
            <div class="row">
                <!-- Results -->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input id="search" name="search" type="text" class="form-control" placeholder="Search" autocomplete="off" />
                        <div id="results">
                        </div>
                    </div>
                    <section id="results">
                        <section id="search-filter">
                            <figure><h3><i class="fa fa-search"></i>Search Results:</h3>
                                <span class="search-count">{{$properties->count()}}</span>
                                <div class="sorting">
                                    <div class="form-group">
                                        <select name="sorting">
                                            <option value="">Sort By</option>
                                            <option value="1">Lowest price first</option>
                                            <option value="2">Highest price first</option>
                                            <option value="3">Date added</option>
                                        </select>
                                    </div><!-- /.form-group -->
                                </div>
                            </figure>
                        </section>
                        <section id="properties">
                        @foreach($properties->chunk(3) as $items)
                            <div class="row">
                            @foreach($items as $property)
                            <div class="col-md-4 col-sm-4">
                                <div class="property equal-height">
                                    <figure class="tag status">For {{$property->getStatus()}}</figure>
                                    <figure class="type" title="Apartment"><img src="assets/img/property-types/apartment.png" alt=""></figure>
                                    <a href="{{route('showProperty', $property->id)}}">
                                        <div class="property-image">
                                            <img alt="" src="{{$property->getFeaturedImageURL()}}">
                                        </div>
                                        <div class="overlay">
                                            <div class="info">
                                                <div class="tag price">&pound; {{number_format($property->price)}}</div>
                                                <h3>{{$property->address}}</h3>
                                                <figure>{{$property->city}}, {{$property->zip}}</figure>
                                            </div>
                                            <ul class="additional-info">
                                                <li>
                                                    <header>Area:</header>
                                                    <figure>{{$property->area}}m<sup>2</sup></figure>
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
                        
                            @endforeach
                            @if ($loop->iteration % 3 == 0)
                            <div class="col-md-12 col-sm-12">
                            <section id="advertising">
                                <a href="submit.html">
                                    <div class="banner">
                                        <div class="wrapper">
                                            <span class="title">Do you want your property to be listed here?</span>
                                            <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                                        </div>
                                    </div><!-- /.banner-->
                                </a>
                            </section><!-- /#adveritsing-->
                            </div>
                            @endif
                            </div>
                            @endforeach
                        
                      
                        <!-- Pagination -->
                        <div class="center">
                            {{$properties->render()}}
                        </div><!-- /.center-->

                        </section><!-- /#properties-->
                    </section><!-- /#results -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-6 col-sm-6">
                    @map([
					    'lat' => 51.5083, 
						'lng' => -0.270139,
						'zoom' => 15,
                        'markers' => $maparray,
                    ])
                </div>
                <!-- end Results -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </div>
    <!-- end Page Content -->
@endsection

@section('script')  

<script>
$(document).ready(function(){

    $('#search').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('search') }}",
                method:"GET",
                data:{query:query, _token:_token},
                success:function(data){
                    $('#results').fadeIn();  
                    $('#results').html(data);
                }
            });
        }
        else{
            $('#results').fadeOut();  
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#results').fadeOut();  
    });  

});
</script>



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
@endsection