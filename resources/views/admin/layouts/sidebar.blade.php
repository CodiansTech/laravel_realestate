    <div class="dashboard_sidebar_menu dn-992">
	    <ul class="sidebar-menu">
	   		<li class="header"><img src="{{URL::asset('assets/images/header-logo2.png')}}" alt="header-logo2.png"> FindHouse</li>

			@hasrole('agent|admin')
				<li class="title"><span>Main</span></li>
				<li class="treeview"><a href="{{url('/')}}" target="_blank"><i class="flaticon-layers"></i><span> Home</span></a></li>
				<li class="treeview"><a href="{{route('admin')}}"><i class="flaticon-building"></i><span> Dashboard</span></a></li>
			@endhasrole
	   		<li class="title"><span>Manage Listings</span></li>
			@can('manage-properties')
	      	<li class="treeview"><a href="{{route('admin.properties.index')}}"><i class="flaticon-home"></i> <span>My Properties</span></a></li>
		    @endcan
			<li class="title"><span>Administration</span></li>
			@hasrole('admin')
				@can('manage-properties')
				<li class="treeview"><a href="{{route('admin.users.index')}}"><i class="flaticon-user"></i> <span>Users</span></a></li>
				
				@endcan
				<li class="treeview">
					<a href="page-my-review.html"><i class="flaticon-chat"></i><span> Property Approval</span><i class="fa fa-angle-down pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle"></i> Pending Approval</a></li>
						<li><a href="#"><i class="fa fa-circle"></i> Approval History</a></li>
					</ul>
				</li>
			@endhasrole
	   		<li class="title"><span>Manage Account</span></li>
		    <li><a href="page-my-packages.html"><i class="flaticon-box"></i> <span>My Package</span></a></li>
		    <li><a href="page-my-profile.html"><i class="flaticon-user"></i> <span>My Profile</span></a></li>
		    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="flaticon-logout"></i> <span>Logout</span></a></li>
	    </ul>
    </div>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	  @csrf
    </form>