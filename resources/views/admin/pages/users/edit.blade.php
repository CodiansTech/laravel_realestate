@extends('admin.layouts.main')

@section('admintitle', 'Edit User: '.$user->getName())

@section('content')

<div class="col-lg-4 col-xl-4 mb10">
    <div class="breadcrumb_content style2 mb30-991">
	    <h2 class="breadcrumb_title">Edit User {{$user->getName()}}</h2>
		<p>Profile Information</p>
	</div>
</div>
<div class="col-lg-8 col-xl-8">
    <div class="candidate_revew_select style2 text-right mb30-991">
	    <ul class="mb0">
		    <li class="list-inline-item">
			    <div class="candidate_revew_search_box course fn-520">
				    <form class="form-inline my-2">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
					    <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
					</form>
				</div>
			</li>
			<li class="list-inline-item">
			    <select class="selectpicker show-tick">
				    <option>Featured First</option>
					<option>Recent</option>
					<option>Old Review</option>
				</select>
			</li>
		</ul>
	</div>
</div>
<div class="col-lg-4 offset-md-4">
    <div class="my_dashboard_review mb40">
    <div class="details"> 
                            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                            @csrf
								<div class="form-group">
									<label>Name:</label>
							    	<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $user->getName()  }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								 <div class="form-group">
									<label>Email:</label>
							    	<input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail3" value="{{ $user->email }}" required autocomplete="email" placeholder="Email Address">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
								<div class="form-group">
									<label>Password:</label>
							    	<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword4" placeholder="Password" name="password" >
                                 
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

									<div class='form-group'>
										<label>Role:</label>
										<br>
										@foreach ($roles as $role)
											<input type="checkbox" name="roles[]" value="{{ $role->id }}" @if($user->roles->contains($role)) checked @endif>
												
												<div class="btn-group">
													<div class="btn-group">
														<button type="button" class="btn btn-default btn-xs">
															{{ ucfirst($role->name) }} </button>
														
													</div>
												</div>

										@endforeach
									</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Update</button>
							</form>
						</div>
	</div>
</div>

@endsection