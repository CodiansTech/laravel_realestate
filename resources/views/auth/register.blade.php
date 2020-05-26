@extends('layouts.main')

@section('content')
    <section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Register</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Register</h3>
							<p class="text-center">Have an account? <a class="text-thm" href="{{route('login')}}">Login</a></p>
						</div>
						<div class="details"> 
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
								<div class="form-group">
							    	<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								 <div class="form-group">
							    	<input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail3" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								<div class="form-group">
							    	<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4" placeholder="Password" name="password" required autocomplete="new-password">
                                 
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
								<div class="form-group">
							    	<input type="password" name="password_confirmation" class="form-control" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required>
                                </div>
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck3">
									<label class="custom-control-label" for="exampleCheck3">Want to become an instructor?</label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
								<div class="divide">
									<span class="lf_divider">Or</span>
									<hr>
								</div>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb mb0"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn2 btn-block color-white bgc-gogle mb0"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('layouts.footer')
@endsection