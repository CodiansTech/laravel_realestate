<div class="navigation">
        <div class="secondary-navigation">
            <div class="container">
                <div class="contact">
                    <figure><strong>Phone:</strong>{!! getPhone() !!}</figure>
                    <figure><strong>Email:</strong>{!! getEmail() !!}</figure>
                </div>
                <div class="user-area">
                    <div class="actions">

                        <a href="#" class="promoted">Create Agency</a>
                        @if(Auth::guest())
                        <a href="{{route('register')}}" class="promoted"><strong>Register</strong></a>
                        <a href="{{route('login')}}">Sign In</a>
                        @else
                        <a href="#" class="promoted">Welcome <strong>{{Auth::user()->getName()}}</strong></a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

                        @endif
                    </div>
                    <div class="language-bar">
                        <a href="#" class="active"><img src="assets/img/flags/gb.png" alt=""></a>
                        <a href="#"><img src="assets/img/flags/de.png" alt=""></a>
                        <a href="#"><img src="assets/img/flags/es.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <header class="navbar" id="top" role="banner">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand nav" id="brand">
                        <a href="{{route('index')}}"><img src="{{URL::asset('assets/img/logo.png')}}" style="width:100px;" alt="brand"></a>
                    </div>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{route('index')}}">Home</a></li>
                        <li class="{{ (request()->is('list*')) ? 'active' : '' }}"><a href="{{route('listproperties')}}">Properties</a></li>
                        
                        
                        @if(Auth::user())
                        <li class="has-child"><a href="#">Account</a>
                            <ul class="child-navigation">
                                <li><a href="{{route('admin')}}">Your Account</a></li>
                                <li><a href="{{route('admin.properties.myproperties')}}">My Properties</a></li>
                            </ul>
                        </li>
                        @endif
                        <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
                    </ul>
                </nav><!-- /.navbar collapse-->
                @if(Auth::user())
                <div class="add-your-property">
                    <a href="{{route('admin.properties.create')}}" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>
                </div>
                @endif
            </header><!-- /.navbar -->
        </div><!-- /.container -->
    </div><!-- /.navigation -->
