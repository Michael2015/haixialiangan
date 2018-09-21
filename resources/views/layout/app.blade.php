@if ($isMobile)
    @include('layout.mobile.header')
@else
    @include('layout.header')
@endif
@yield('content')
@include('layout.footer')