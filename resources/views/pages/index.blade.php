@extends('layouts.main')

@section('title', 'Maison Chase')

@section('head')
<style>

</style>
@endsection

@section('content')
    <!-- Slider -->
    <div id="slider" class="loading has-parallax">
        <div id="loading-icon"><i class="fa fa-cog fa-spin"></i></div>
        <div class="owl-carousel homepage-slider carousel-full-width">
            <div class="slide">
                <div class="container">
                    <div class="overlay">
                        <div class="info">
                            <div class="tag price">$ 11,000</div>
                            <h3>3398 Lodgeville Road</h3>
                            <figure>Golden Valley, MN 55427</figure>
                        </div>
                        <hr>
                        <a href="property-detail.html" class="link-arrow">Read More</a>
                    </div>
                </div>
                <img alt="" src="{{URL::asset('assets/img/slide-01.jpg')}}">
            </div>
            <div class="slide">
                <div class="container">
                    <div class="overlay">
                        <div class="info">
                            <div class="tag price">$ 16,000</div>
                            <h3>987 Cantebury Drive</h3>
                            <figure>Chicago, IL 60610</figure>
                        </div>
                        <hr>
                        <a href="property-detail.html" class="link-arrow">Read More</a>
                    </div>
                </div>
                <img alt="" src="assets/img/slide-02.jpg">
            </div>
            <div class="slide">
                <div class="container">
                    <div class="overlay">
                        <div class="info">
                            <div class="tag price">$ 28,500</div>
                            <h3>1866 Clement Street</h3>
                            <figure>Atlanta, GA 30303</figure>
                        </div>
                        <hr>
                        <a href="property-detail.html" class="link-arrow">Read More</a>
                    </div>
                </div>
                <img alt="" src="assets/img/slide-03.jpg">
            </div>
        </div>
    </div>
    <!-- end Slider -->

    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="search-box map">
                    <form role="form" id="form-map-sale" class="form-map form-search clearfix">
                        <div class="row">
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-country">
                                        <option value="1">Buy</option>
                                        <option value="2">Long Let</option>
                                        <option value="3">Short Let</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-city">
                                        <option value="">City</option>
                                        <option value="1">New York</option>
                                        <option value="2">Los Angeles</option>
                                        <option value="3">Chicago</option>
                                        <option value="4">Houston</option>
                                        <option value="5">Philadelphia</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-district">
                                        <option value="">District</option>
                                        <option value="1">Manhattan</option>
                                        <option value="2">The Bronx</option>
                                        <option value="3">Brooklyn</option>
                                        <option value="4">Queens</option>
                                        <option value="5">Staten Island</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-property-type">
                                        <option value="">Property Type</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condominium</option>
                                        <option value="3">Cottage</option>
                                        <option value="4">Flat</option>
                                        <option value="5">House</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <select name="form-sale-price">
                                        <option value="">Price</option>
                                        <option value="1">$10,000 +</option>
                                        <option value="2">$50,000 +</option>
                                        <option value="3">$100,000 +</option>
                                        <option value="4">$500,000 +</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Search Sale</button>
                                </div><!-- /.form-group -->
                            </div>
                        </div>
                    </form><!-- /#form-map -->
                </div><!-- /.search-box -->
            </div><!-- /.container -->
        </div><!-- /.search-box-inner -->
        <div class="background-image"><img class="opacity-20" src="assets/img/searchbox-bg.jpg"></div>
    </div>
    <!-- end Search Box -->

    <!-- Page Content -->
    <div id="page-content">
       
        <section id="our-services" class="block">
            <div class="container">
                <header class="section-title"><h2>Our Services</h2></header>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-folder"></i></figure>
                            <aside class="description">
                                <header><h3>Wide Range of Properties</h3></header>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <a href="properties-listing.html" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-users"></i></figure>
                            <aside class="description">
                                <header><h3>14 Agents for Your Service</h3></header>
                                <p>Aliquam gravida magna et fringilla convallis. Pellentesque habitant morbi </p>
                                <a href="agents-listing.html" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box equal-height">
                            <figure class="icon"><i class="fa fa-money"></i></figure>
                            <aside class="description">
                                <header><h3>Best Price Guarantee!</h3></header>
                                <p>Phasellus non viverra tortor, id auctor leo. Suspendisse id nibh placerat</p>
                                <a href="#" class="link-arrow">Read More</a>
                            </aside>
                        </div><!-- /.feature-box -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /#our-services -->
        <section id="price-drop" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>Price Drop</h2>
                    <a href="{{route('listproperties')}}" class="link-arrow">All Properties</a>
                </header>
                <div class="row">
                @foreach($pricedrop as $property)
                    <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="{{route('showProperty', $property->id)}}">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-09.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ {{number_format($property->price)}}</div>
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
                </div><!-- /.row-->
            </div><!-- /.container -->
        </section><!-- /#price-drop -->
        <aside id="advertising" class="block">
            <div class="container">
                <a href="submit.html">
                    <div class="banner">
                        <div class="wrapper">
                            <span class="title">Do you want your property to be listed here?</span>
                            <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                        </div>
                    </div><!-- /.banner-->
                </a>
            </div>
        </aside><!-- /#adveritsing-->
        <section id="new-properties" class="block">
            <div class="container">
                <header class="section-title">
                    <h2>New Properties for You</h2>
                    <a href="{{route('listproperties')}}" class="link-arrow">All Properties</a>
                </header>
                
                @foreach($properties->chunk(4) as $items)
                            <div class="row">
                            @foreach($items as $property)
                            <div class="col-md-3 col-sm-6">
                        <div class="property">
                            <a href="{{route('showProperty', $property->id)}}">
                                <div class="property-image">
                                    <img alt="" src="assets/img/properties/property-09.jpg">
                                </div>
                                <div class="overlay">
                                    <div class="info">
                                        <div class="tag price">$ {{number_format($property->price)}}</div>
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
                           
                            </div>
                            @endforeach
                
            </div><!-- /.container-->
        </section><!-- /#new-properties-->
       
        <section id="partners" class="block">
            <div class="container">
                <header class="section-title"><h2>Our Partners</h2></header>
                <div class="logos">
                    <div class="logo"><a href=""><img src="{{URL::asset('assets/img/logo-partner-01.png')}}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{URL::asset('assets/img/logo-partner-02.png')}}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{URL::asset('assets/img/logo-partner-03.png')}}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{URL::asset('assets/img/logo-partner-04.png')}}" alt=""></a></div>
                    <div class="logo"><a href=""><img src="{{URL::asset('assets/img/logo-partner-05.png')}}" alt=""></a></div>
                </div>
            </div><!-- /.container -->
        </section><!-- /#partners -->
    </div>
    <!-- end Page Content -->
 @endsection

@section('script')
<script>
        $(window).load(function(){
        initializeOwl(false);
    });
</script>
@endsection