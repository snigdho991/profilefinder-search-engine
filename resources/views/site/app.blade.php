<!DOCTYPE HTML>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>@yield('title') - {{ config('app.name') }}</title>
    {{-- @include('site.partials.styles') --}}
    @stack('styles')
</head>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout blank-page navbar-floating footer-static dark-layout"
    data-open="click" data-menu="vertical-menu-modern" data-col="blank-page" data-layout="dark-layout">
    <!-- BEGIN: Content-->
    {{-- @include('site.partials.header') --}}
    @include('site.partials.sidebar')
    @yield('content')
    {{-- @include('site.partials.footer') --}}
    {{-- @include('site.partials.scripts') --}}
    @stack('scripts')
</body>

</html>