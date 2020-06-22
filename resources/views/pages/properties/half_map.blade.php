@extends('layouts.main')

@section('title', 'Listings')

@section('head')
<style>

</style>
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
                    <div id="map"></div>
                </div>
                <!-- end Results -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->

    </div>
    <!-- end Page Content -->
@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection