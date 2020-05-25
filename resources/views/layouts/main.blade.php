<!DOCTYPE html>

@include('layouts.head')

<body>

<!-- Wrapper -->
<div id="wrapper">
<div class="preloader"></div>


<!-- Header Container
================================================== -->
@include('layouts.header')


@yield('content')


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
