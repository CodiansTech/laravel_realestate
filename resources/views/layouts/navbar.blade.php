					<li>
						<a href="{{route('index')}}"><span class="title">Home</span></a>
					</li>

					<li>
						<a href="#"><span class="title">House</span></a>
					</li>

					<li>
						<a href="#"><span class="title">Rent</span></a>
					</li>
		           
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
		            </li>


					@if(Auth::guest())
	                <li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg">Login/Register</span></a></li>
	                @endif
					<li class="list-inline-item add_listing"><a href="page-add-new-property.html"><span class="flaticon-plus"></span><span class="dn-lg"> Create Listing</span></a></li>