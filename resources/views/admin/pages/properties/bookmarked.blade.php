@extends('layouts.main')

@section('title', 'Bookmarked Properties')

@section('content')



<div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Account</a></li>
                <li class="active">My Properties</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                @include('layouts.partials.aside')
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                <section id="bookmarked-properties">
                        <header><h1>Bookmarked Properties</h1></header>
                        <div class="grid">
                        
						@foreach($properties as $property)
                        <div class="property masonry" style="margin-right: 5px;">
                            <div class="inner">
                                <a href="{{route('showProperty', $property->id)}}">
                                    <div class="property-image">
                                        <div class="overlay">
                                            <div class="info">
                                                <div class="tag price">&pound; {{number_format($property->price)}}</div>
                                            </div>
                                        </div>
                                        @if($property->images->count() == 0)
                                            <img alt="" src="{{url('assets/img/properties/property-04.jpg')}}">
                                        @else
                                            <img alt="" src="{{url('images/property/'. $property->images->first()['filename'])}}">
                                        @endif
                                    </div>
                                </a>
                                <aside>
                                    <header>
                                        <a href="{{route('showProperty', $property->id)}}"><h2>987 Cantebury Drive</h2></a>
                                        <figure>{{substr($property->address, 0, 30)}}..., {{$property->zip}}</figure>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum</p>
                                    <dl>
                                        <dt>Status:</dt>
                                        <dd>{{$property->getStatus()}}</dd>
                                        <dt>Area:</dt>
                                        <dd>{{$property->area}} m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                        <dd>3</dd>
                                        <dt>Baths:</dt>
                                        <dd>2</dd>
                                    </dl>
                                    <a href="{{route('showProperty', $property->id)}}" class="link-arrow">Read More</a>
                                </aside>
                            </div>
                        </div><!-- /.property -->
                        
						@endforeach
                        
                        <!-- Pagination -->
                        <div class="center">
                            {{$properties->render()}}
                        </div><!-- /.center-->
                    </section><!-- /#my-properties -->

                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->


@endsection