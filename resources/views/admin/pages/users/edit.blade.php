@extends('layouts.main')

@section('title', 'Edit User: '.$user->getName())

@section('content')

<div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">User</a></li>
                <li class="active">Edit User: {{$user->getName()}}</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Edit User: {{$user->getName()}}</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
					<form id="form-create-account" method="POST" action="{{ route('admin.users.update', $user->id) }}">
                            @csrf
							         <!-- 
                        <h3>Account Type</h3>
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
                            </div> /.form-group 
                        </div> 
                        <hr> -->
                        <div class="form-group">
                            <label for="form-create-account-full-name">Full Name:</label>
							<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $user->getName()  }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
						</div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="form-create-account-email" value="{{ $user->email }}" required autocomplete="email" placeholder="Email Address">
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror        
						</div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Password:</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="form-create-account-password" placeholder="Password" autocomplete="new-password" >
                                 
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror     
                        </div><!-- /.form-group -->
                        
                        <div class="form-group">
							 @foreach ($roles as $role)
							<input class="form-create-account-password" type="checkbox" name="roles[]" value="{{ $role->id }}" id="exampleCheck3"@if($user->roles->contains($role)) checked @endif>
														{{ ucfirst($role->name) }} 

										@endforeach	
                        </div><!-- /.form-group -->
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Update</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center">
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection
