@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Sign In</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <header>
            <h1>Sign In</h1>
        </header>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <form method="POST" id="form-create-account" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="form-create-account-email">Email:</label>
                        <input type="email" id="form-create-account-email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="form-create-account-password">Password:</label>
                        <input id="form-create-account-password" placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <input class="form-create-account-password" type="checkbox" name="remember" id="exampleCheck3"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="custom-control-label checkbox" for="exampleCheck3">
                            <div class="icheckbox"><input type="checkbox" id="account-type-newsletter"
                                    name="account-newsletter" style="position: absolute; opacity: 0;"><ins
                                    class="iCheck-helper"
                                    style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
                            </div>
                            Remember me
                        </label>
                    </div><!-- /.form-group -->
                    <div class="form-group clearfix">
                        <button type="submit" class="btn pull-right btn-default" id="account-submit">Sign to My
                            Account</button>
                    </div><!-- /.form-group -->
                </form>
                <hr>
                <div class="center"><a href="{{ route('password.request') }}">I don't remember my password</a></div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>

@endsection