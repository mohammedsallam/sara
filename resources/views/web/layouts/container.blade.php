@extends('web.layouts.layout')

@section('container_content')
{{--    @include('web.layouts.nav')--}}
    @yield('header')
    <!--Contents-->
    @yield('content')
    <!--End-Contents-->

{{--    @include('web.layouts.footer')--}}
@endsection

@section('container_js')

    {{--    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
    <script src="{{ asset('assets/web/js/axios.min.js') }}"></script>

    <script>
        axios.defaults.headers.common = {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        };
    </script>
    <script src="{{ asset('assets/web/js/actions.js') }}"></script>
        <script src="{{ asset('assets/web/js/main.js') }}"></script>
    @yield('inner_js')
@endsection
