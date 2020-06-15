<section id="sidebar">
    <header><h3>Account</h3></header>
    <aside>
        <ul class="sidebar-navigation">
            <li class="{{ (request()->is('account')) ? 'active' : '' }}"><a href="{{route('admin')}}"><i class="fa fa-user"></i><span>Profile</span></a></li>
            <li class="{{ (request()->is('account/myproperties')) ? 'active' : '' }}"><a href="{{route('admin.properties.myproperties')}}"><i class="fa fa-home"></i><span>My Properties</span></a></li>
            <li><a href="#"><i class="fa fa-heart"></i><span>Bookmarked Properties </span></a></li>
        </ul>
    </aside>
    @hasrole('admin')
    <header><h3>Administrator</h3></header>
    <aside>
        <ul class="sidebar-navigation">
            <li class="{{ (request()->is('account/properties')) ? 'active' : '' }}"><a href="{{route('admin.properties.index')}}"><i class="fa fa-home"></i><span>All Properties</span></a></li>
            <li class="{{ (request()->is('account/users')) ? 'active' : '' }}"><a href="{{route('admin.users.index')}}"><i class="fa fa-users"></i><span>Users</span></a></li>
            <li class="{{ (request()->is('account/approveproperties')) ? 'active' : '' }}"><a href="{{route('admin.properties.approve')}}"><i class="fa fa-briefcase"></i><span>Approve Houses <label class="label label-danger">{!! getUnapprovedProperties() !!}</label></span></a></li>
            <li class="{{ (request()->is('admin/settings')) ? 'active' : '' }}"><a href="{{route('admin.settings.index')}}"><i class="fa fa-cog"></i><span>Settings</span></a></li>
        </ul>
    </aside>
    @endhasrole
</section><!-- /#sidebar -->