@extends('admin.layouts.main')

@section('admintitle', 'Users')

@section('content')

<div class="col-lg-4 col-xl-4 mb10">
							<div class="breadcrumb_content style2 mb30-991">
								<h2 class="breadcrumb_title">Users</h2>
								<p>We are glad to see you again!</p>
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
						<div class="col-lg-12">
							<div class="my_dashboard_review mb40">
								<div class="property_table">
									<div class="table-responsive mt0">
										<table class="table">
											<thead class="thead-light">
										    	<tr>
										    		<th scope="col">ID</th>
										    		<th scope="col">Name</th>
										    		<th scope="col">Email</th>
										    		<th scope="col">Action</th>
										    	</tr>
											</thead>
											<tbody>
                                                @foreach($users as $user)
										    	<tr>
										    		<td>{{$user->id}}</td>
										    		<td>{{$user->name}}</td>
										    		<td><span class="status_tag badge">{{$user->email}}</span></td>
										    		<td>
										    			<ul class="view_edit_delete_list mb0">
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#"><span class="flaticon-edit"></span></a></li>
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
										    			</ul>
										    		</td>
										    	</tr>
                                                @endforeach
										    	
											</tbody>
										</table>
									</div>
                                    {{$users->render()}}
								</div>
							</div>
						</div>
					</div>

@endsection