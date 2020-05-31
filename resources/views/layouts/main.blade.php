<!DOCTYPE html>

@include('layouts.partials.head')

<body class="page-homepage page-slider horizontal-search" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<div class="wrapper">

@include('layouts.partials.header')

@yield('content')

@include('layouts.partials.footer')
</div>
<div id="overlay"></div>
@include('layouts.partials.script')
</body>
</html>