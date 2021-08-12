<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="{{ LaravelLocalization::getCurrentLocale() }}"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ LaravelLocalization::getCurrentLocale() }}">
<!--<![endif]-->
<head>
    @include('partials.metadata')
</head>

<body>
@include('partials.layout.old-browser')
@include('partials.layout.preloader')
@include('partials.header.search')

<div id="canvas">
    <div id="box_wrapper">

        @include('partials.header')
        @yield('content')
        @include('partials.footer')

    </div>
</div>

@include('partials.scripts')

</body>

</html>