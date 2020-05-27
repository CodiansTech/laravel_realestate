<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('admin.layouts.head')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        @include('admin.layouts.header')
        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2 text-center">
                        <img class="nav_logo_img img-fluid mt20" src="{{URL::asset('assets/images/header-logo2.png')}}"
                            alt="header-logo2.png">
                        <span class="mt20">FindHouse</span>
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item list_s"><a href="page-register.html"><span
                                    class="flaticon-user"></span></a></li>
                        <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index2.html">Home 2</a></li>
                            <li><a href="index3.html">Home 3</a></li>
                            <li><a href="index4.html">Home 4</a></li>
                            <li><a href="index5.html">Home 5</a></li>
                            <li><a href="index6.html">Home 6</a></li>
                            <li><a href="index7.html">Home 7</a></li>
                            <li><a href="index8.html">Home 8</a></li>
                            <li><a href="index9.html">Home 9</a></li>
                            <li><a href="index10.html">Home 10</a></li>
                        </ul>
                    </li>
                    <li><span>Listing</span>
                        <ul>
                            <li><span>Listing Grid</span>
                                <ul>
                                    <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
                                    <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
                                    <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
                                    <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
                                    <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
                                    <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
                                </ul>
                            </li>
                            <li><span>Listing Style</span>
                                <ul>
                                    <li><a href="page-listing-parallax.html">Parallax Style</a></li>
                                    <li><a href="page-listing-slider.html">Slider Style</a></li>
                                    <li><a href="page-listing-map.html">Map Header</a></li>
                                </ul>
                            </li>
                            <li><span>Listing Half</span>
                                <ul>
                                    <li><a href="page-listing-half-map-v1.html">Map V1</a></li>
                                    <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
                                    <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
                                    <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
                                </ul>
                            </li>
                            <li><span>Agent View</span>
                                <ul>
                                    <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
                                    <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
                                    <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
                                </ul>
                            </li>
                            <li><span>Agencies View</span>
                                <ul>
                                    <li><a href="page-agencies-list-v1.html">Agencies V1</a></li>
                                    <li><a href="page-agencies-list-v2.html">Agencies V2</a></li>
                                    <li><a href="page-agencies-list-v3.html">Agencies Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><span>Property</span>
                        <ul>
                            <li><span>Property</span>
                                <ul>
                                    <li><a href="page-dashboard.html">Dashboard</a></li>
                                    <li><a href="page-my-properties.html">My Properties</a></li>
                                    <li><a href="page-add-new-property.html">Add New Property</a></li>
                                </ul>
                            </li>
                            <li><span>Listing Single</span>
                                <ul>
                                    <li><a href="page-listing-single-v1.html">Single V1</a></li>
                                    <li><a href="page-listing-single-v2.html">Single V2</a></li>
                                    <li><a href="page-listing-single-v3.html">Single V3</a></li>
                                    <li><a href="page-listing-single-v4.html">Single V4</a></li>
                                    <li><a href="page-listing-single-v5.html">Single V5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><span>Blog</span>
                        <ul>
                            <li><a href="page-blog-v1.html">Blog List 1</a></li>
                            <li><a href="page-blog-grid.html">Blog List 2</a></li>
                            <li><a href="page-blog-single.html">Single Post</a></li>
                        </ul>
                    </li>
                    <li><span>Pages</span>
                        <ul>
                            <li><span>Shop</span>
                                <ul>
                                    <li><a href="page-shop.html">Shop</a></li>
                                    <li><a href="page-shop-single.html">Shop Single</a></li>
                                    <li><a href="page-shop-cart.html">Cart</a></li>
                                    <li><a href="page-shop-checkout.html">Checkout</a></li>
                                    <li><a href="page-shop-order.html">Order</a></li>
                                </ul>
                            </li>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-gallery.html">Gallery</a></li>
                            <li><a href="page-faq.html">Faq</a></li>
                            <li><a href="page-login.html">LogIn</a></li>
                            <li><a href="page-compare.html">Membership</a></li>
                            <li><a href="page-compare2.html">Membership 2</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-service.html">Service</a></li>/
                            <li><a href="page-error.html">404 Page</a></li>
                            <li><a href="page-terms.html">Terms and Conditions</a></li>
                            <li><a href="page-ui-element.html">UI Elements</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
                    <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
                    <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span
                                class="flaticon-plus"></span> Create Listing</a></li>
                </ul>
            </nav>
        </div>

        @include('admin.layouts.sidebar')
        <!-- Our Dashbord -->
        <section class="our-dashbord dashbord bgc-f7 pb50">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                    <div class="col">
                        <div class="ui_kit_message_box">
                            @if (Session::has('success'))
                            <div class="alert alart_style_three alert-dismissible fade show"> <i class="ti-user"></i>
                                {{ Session::get('success') }} <a href="#" class="closed">&times;</a> </div>
                            @endif
                            @if (Session::has('warning'))
                            <div class="alert alart_style_one alert-dismissible fade show"> <i class="ti-user"></i>
                                {{ Session::get('warning') }} <a href="#" class="closed">&times;</a> </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alart_style_four alert-dismissible fade show"> <i class="ti-user"></i>
                                {{ Session::get('error') }} <a href="#" class="closed">&times;</a> </div>
							@endif
							@if (count($errors) > 0)
                            <div class="alert alart_style_five alert-dismissible fade show"><a href="#"
                                    class="closed">&times;</a> <i class="fa fa-exclamation-triangle"> </i>
									@foreach ($errors->all() as $error)
										{{ $error}}
									@endforeach
							</div>
							@endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                    <div class="col-lg-9 col-xl-10 maxw100flex-992">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard_navigationbar dn db-992">
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i>
                                            Dashboard Navigation</button>
                                        <ul id="myDropdown" class="dropdown-content">
                                            <li class="active"><a href="page-dashboard.html"><span
                                                        class="flaticon-layers"></span> Dashboard</a></li>
                                            <li><a href="page-message.html"><span class="flaticon-envelope"></span>
                                                    Message</a></li>
                                            <li><a href="page-my-properties.html"><span class="flaticon-home"></span> My
                                                    Properties</a></li>
                                            <li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My
                                                    Favorites</a></li>
                                            <li><a href="page-my-savesearch.html"><span
                                                        class="flaticon-magnifying-glass"></span> Saved Search</a></li>
                                            <li><a href="page-my-review.html"><span class="flaticon-chat"></span> My
                                                    Reviews</a></li>
                                            <li><a href="page-my-packages.html"><span class="flaticon-box"></span> My
                                                    Package</a></li>
                                            <li><a href="page-my-profile.html"><span class="flaticon-user"></span> My
                                                    Profile</a></li>
                                            <li><a href="page-add-new-property.html"><span
                                                        class="flaticon-filter-results-button"></span> Add New
                                                    Listing</a></li>
                                            <li><a href="page-login.html"><span class="flaticon-logout"></span>
                                                    Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @yield('content')
                        </div>
                        @include('admin.layouts.footer')
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
    </div>
    @include('admin.layouts.script')
</body>

</html>