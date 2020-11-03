<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ $meta_description ?? ($title ?? '') }}" />
    <meta name="keywords" content="{{  $keywords ??  ($title ?? '') }}" />
    <link rel="shortcut icon" href="{{asset('assets/web/images/favicon.png')}}" title="Favicon"/>

    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{ ($title ?? '') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:200,300,400,500,700,800,900&display=swap&subset=arabic,cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/web/css/plugins.css') }}" />

    <!--With LTR -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/bootstrap-rtl.min.css') }}" />
        {{--    <link rel="stylesheet" href="{{ asset('assets/web/css/icon.min.css') }}" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.1.2/collection/components/icon/icon.min.css" />

    <!--With RTL -->
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}" />

    @yield('css')

</head>

<body>
@yield('container_content')

<script src="{{ asset('assets/web/js/jquery-3.0.0.min.js') }} "></script>
<script src="{{ asset('assets/web/js/jquery-migrate-3.0.0.min.js') }} "></script>
<script src="{{ asset('assets/web/js/popper.min.js') }} "></script>
<script src="{{ asset('assets/web/js/bootstrap.min.js') }} "></script>
<script src="{{ asset('assets/web/js/wow.min.js') }} "></script>
<script src="{{ asset('assets/web/js/scrollIt.min.js') }} "></script>
<script src="{{ asset('assets/web/js/slick.min.js') }} "></script>
<script src="{{ asset('assets/web/js/swiper.min.js') }} "></script>
<script src="{{ asset('assets/web/js/YouTubePopUp.jquery.js') }} "></script>
{{--<script src="{{ asset('assets/web/js/ionicons.js') }} "></script>--}}
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="{{ asset('assets/web/js/scripts.js') }} "></script>

<script>
    new WOW().init();
</script>

<script>
    var swiper = new Swiper('.swiper-head', {
        spaceBetween: 30,
        effect: 'fade',
        grabCursor: true,
        speed: 1500,
        autoplay: {
            delay: 5000,
        },
    });
</script>

@yield('container_js')
</body>

</html>
