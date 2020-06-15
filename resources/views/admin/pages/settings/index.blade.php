@extends('layouts.main')

@section('title', 'Settings')

@section('breadcrumb')
  <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Settings</li>
            </ol>
        </div>
@endsection

@section('content')

<div id="page-content">
        <!-- Breadcrumb -->
      
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                @include('layouts.partials.aside')
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- All Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="my-properties">
                        <header><h1>Settings</h1></header>
                        <div class="my-properties">
                            <div class="row">
                <div class="col-md-6 col-sm-6">
					<form id="form-create-account" method="POST" action="{{route('admin.settings.update')}}">
                        @csrf							         <!-- 
                        
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" name="email" class="form-control  " id="form-create-account-email" value="test@gmail.com" required="" autocomplete="email" placeholder="Email Address">
                                    
                                            
						</div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Email:</label>
                            <input type="text" name="email" class="form-control " id="form-create-account-password" placeholder="Website email (example: info@info.info)" value={!!getEmail()!!}>          
                        </div><!-- /.form-group -->

                         <div class="form-group">
                            <label for="form-create-account-password">Phone:</label>
                            <input type="text" name="phone" class="form-control " id="form-create-account-password" placeholder="Website phone (example: +44 123 123 123)" value="{!! getPhone() !!}">          
                        </div><!-- /.form-group -->

                         <div class="form-group">
                            <label for="form-create-account-password">Address:</label>
                            <input type="text" name="address" class="form-control " id="form-create-account-password" placeholder="Address" value="{!! getAddress() !!}">          
                        </div><!-- /.form-group -->
                        
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Update</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center">
                    </div>
                </div>
            </div>
                        </div><!-- /.my-properties -->
                    </section><!-- /#my-properties -->
                </div><!-- /.col-md-9 -->
                <!-- end All Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->


@endsection