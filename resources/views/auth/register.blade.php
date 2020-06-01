@extends('layouts.main')

@section('title', 'Register')

@section('content')

<div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Create an Account</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Create an Account</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <h3>Account Type</h3>
					<form method="POST" id="form-create-account" action="{{ route('register') }}">
                        @csrf
                        <div class="radio" id="create-account-user">
                            <label>
                                <input type="radio" id="account-type-user" name="account-type" required>Regular User
                            </label>
                        </div>
                        <div class="radio" id="agent-switch" data-agent-state="">
                            <label>
                                <input type="radio" id="account-type-agent" name="account-type" required>Agent
                            </label>
                        </div>
                        <div id="agency" class="disabled">
                            <div class="form-group">
                                <label for="account-agency">Select your agency:</label>
                                <select name="account-agency" id="account-agency">
                                    <option value="">Agency</option>
                                    <option value="1">Estate+</option>
                                    <option value="2">Northfolk Eastate</option>
                                    <option value="3">Maximum Properties</option>
                                    <option value="4">Edd's Homes</option>
                                    <option value="5">Will & Scotch</option>
                                </select>
                            </div><!-- /.form-group -->
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="form-create-account-full-name">Full Name:</label>
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="form-create-account-full-name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
                            @enderror
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
							<input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="form-create-account-email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                  	<strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Password:</label>
							<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="form-create-account-password" placeholder="Password" name="password" required autocomplete="new-password">
                                 
                              	@error('password')
                                	<span class="invalid-feedback" role="alert">
                                    	<strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-confirm-password">Confirm Password:</label>
							<input type="password" name="password_confirmation" class="form-control" id="form-create-account-confirm-password" placeholder="Confirm Password" name="password_confirmation" required>
                                
                        </div><!-- /.form-group -->
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" id="account-type-newsletter" name="account-newsletter">Receive Newsletter
                            </label>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Create an Account</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center">
                        <figure class="note">By clicking the “Create an Account” button you agree with our <a href="terms-conditions.html">Terms and conditions</a></figure>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
	@endsection