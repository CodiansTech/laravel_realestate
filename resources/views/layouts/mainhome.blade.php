<!DOCTYPE html>

@include('layouts.head')

<body>

<!-- Wrapper -->
<div id="wrapper">
<div class="preloader"></div>


<!-- Header Container
================================================== -->
@include('layouts.headerhome')


@yield('content')


@include('layouts.footer')
<!-- Footer
================================================== -->
<!-- Footer / End -->


<!-- Back To Top Button -->
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>


<!-- Scripts
================================================== -->
@include('layouts.script')
</body>
</html>
