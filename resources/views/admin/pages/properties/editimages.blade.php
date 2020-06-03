@extends('layouts.main')

@section('title', 'Edit Images')


@section('content') 
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Edit Images</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Results -->
                @foreach($property->images as $image)
                <div class="col-md-4 col-sm-4">
                    <div class="property equal-height">
                        <div class="pull-right">
                            <a href="{{route('admin.properties.setfeatured', $image->id)}}" class="pull-right" >
                                @if($property->getFeaturedImage() == $image->id)
                                    <figure class="tag status"><i class="fa fa-check"></i> Featured</figure>
                                @else
                                    <figure class="tag status"><i class="fa fa-check"></i> Set Featured</figure>
                                @endif
                            </a>
                        </div>
                        
                        <div class="pull-right" >
                            <a href="#" >
                                <figure class="tag status1"><i class="fa fa-trash-o"></i> Delete Photo</figure>
                            </a>
                        </div>
                        <div class="property-image">
                            <img alt="" src="{{URL::asset('images/property/'.$image->filename)}}">
                        </div>
                                       
                    </div><!-- /.property -->
                </div><!-- /.col-md-3 -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->

@endsection