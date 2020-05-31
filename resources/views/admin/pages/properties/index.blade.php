@extends('admin.layouts.main')

@section('admintitle', 'My Properties')

@section('content')

<div class="col-lg-4 col-xl-4 mb10">
							<div class="breadcrumb_content style2 mb30-991">
								<h2 class="breadcrumb_title">My Properties</h2>
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
										    		<th scope="col">Listing Title</th>
										    		<th scope="col">Date published</th>
										    		<th scope="col">Status</th>
										    		<th scope="col">View</th>
										    		<th scope="col">Action</th>
										    	</tr>
											</thead>
											<tbody>
											@foreach($properties as $property)
										    	<tr>
										    		<th scope="row">
														<div class="feat_property list favorite_page style2">
															<div class="thumb">
																<img class="img-whp" src="{{URL::asset('assets/images/property/fp1.jpg')}}" alt="fp1.jpg">
																<div class="thmb_cntnt">
																	<ul class="tag mb0">
																		<li class="list-inline-item dn"></li>
																		<li class="list-inline-item"><a href="#">For Rent</a></li>
																	</ul>
																</div>
															</div>
															<div class="details">
																<div class="tc_content">
																	<h4>{{$property->title}}</h4>
																	<p><span class="flaticon-placeholder"></span> {{$property->address}}, {{$property->city}}, {{$property->zip}}</p>
																	<a class="fp_price text-thm" href="#">&#163; {{number_format($property->price)}}<small>/mo</small></a>
																</div>
															</div>
														</div>
										    		</th>
										    		<td>{{$property->created_at->format('d M, Y')}}</td>
										    		<td><span class="status_tag badge">Pending</span></td>
										    		<td>2,345</td>
										    		<td>
										    			<ul class="view_edit_delete_list mb0">
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="{{route('admin.properties.edit', $property->id)}}"><span class="flaticon-edit"></span></a></li>
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
										    			</ul>
										    		</td>
										    	</tr>
												@endforeach
										    	<tr>
										    		<th scope="row">
														<div class="feat_property list favorite_page style2">
															<div class="thumb">
																<img class="img-whp" src="{{URL::asset('assets/images/property/fp2.jpg')}}" alt="fp2.jpg">
																<div class="thmb_cntnt">
																	<ul class="tag mb0">
																		<li class="list-inline-item dn"></li>
																		<li class="list-inline-item"><a href="#">For Rent</a></li>
																	</ul>
																</div>
															</div>
															<div class="details">
																<div class="tc_content">
																	<h4>Renovated Apartment</h4>
																	<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
																	<a class="fp_price text-thm" href="#">$13,000<small>/mo</small></a>
																</div>
															</div>
														</div>
										    		</th>
										    		<td>30 December, 2020</td>
										    		<td><span class="status_tag badge2">Published</span></td>
										    		<td>2,345</td>
										    		<td>
										    			<ul class="view_edit_delete_list mb0">
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#"><span class="flaticon-edit"></span></a></li>
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
										    			</ul>
										    		</td>
										    	</tr>
										    	<tr>
										    		<th class="active" scope="row">
														<div class="feat_property list favorite_page style2">
															<div class="thumb">
																<img class="img-whp" src="{{URL::asset('assets/images/property/fp3.jpg')}}" alt="fp3.jpg">
																<div class="thmb_cntnt">
																	<ul class="tag mb0">
																		<li class="list-inline-item dn"></li>
																		<li class="list-inline-item"><a href="#">For Rent</a></li>
																	</ul>
																</div>
															</div>
															<div class="details">
																<div class="tc_content">
																	<h4>Renovated Apartment</h4>
																	<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
																	<a class="fp_price text-thm" href="#">$13,000<small>/mo</small></a>
																</div>
															</div>
														</div>
										    		</th>
										    		<td>30 December, 2020</td>
										    		<td><span class="status_tag badge3">Processing</span></td>
										    		<td>2,345</td>
										    		<td>
										    			<ul class="view_edit_delete_list mb0">
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#"><span class="flaticon-edit"></span></a></li>
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
										    			</ul>
										    		</td>
										    	</tr>
										    	<tr>
										    		<th scope="row">
														<div class="feat_property list favorite_page style2">
															<div class="thumb">
																<img class="img-whp" src="{{URL::asset('assets/images/property/fp4.jpg')}}" alt="fp4.jpg">
																<div class="thmb_cntnt">
																	<ul class="tag mb0">
																		<li class="list-inline-item dn"></li>
																		<li class="list-inline-item"><a href="#">For Rent</a></li>
																	</ul>
																</div>
															</div>
															<div class="details">
																<div class="tc_content">
																	<h4>Renovated Apartment</h4>
																	<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
																	<a class="fp_price text-thm" href="#">$13,000<small>/mo</small></a>
																</div>
															</div>
														</div>
										    		</th>
										    		<td>30 December, 2020</td>
										    		<td><span class="status_tag badge">Pending</span></td>
										    		<td>2,345</td>
										    		<td>
										    			<ul class="view_edit_delete_list mb0">
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#"><span class="flaticon-edit"></span></a></li>
										    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
										    			</ul>
										    		</td>
										    	</tr>
											</tbody>
										</table>
									</div>
									
									{{$properties->render()}}
								</div>
							</div>
						</div>
					</div>

@endsection