<div class="news-line">
    <marquee direction="right" class="news-l">
         @foreach ($articles as $article)
            <span>{{ $article->title }}</span>
         @endforeach
    </marquee>
    <div class="text">
        <h6>{{ __('index.news') }}</h6>
    </div>
</div>

<nav class="navbar change navbar-expand-lg bg-img" data-background="{{asset('assets/web/images/pattern.png')}}">
    <div class="container">
        <span class="icon-bar"><i class="fas fa-bars"></i></span>
        <div class="right d-flex justify-content-start">
            <div>
                @if(auth()->user() && auth()->user()->role == 'student')
                    <a href="{{route('student.index')}}" class="login">
                        <img src="{{asset('assets/web/images/icons/user-light.svg')}}" class="icon" alt="">
                        <span>{{auth()->user()->name}}</span>
                    </a>
                    @else
                    <a href="{{route('student.login')}}" class="login">
                        <img src="{{asset('assets/web/images/icons/user-light.svg')}}" class="icon" alt="">
                        <span>{{ __('index.student_register') }}</span>
                    </a>
                @endauth
                <a href="#0" class="search-icon">
                    <img src="{{asset('assets/web/images/icons/loupe-light.svg')}}" class="icon" alt="">
                </a>
            </div>
        </div>
        <div class="center d-flex justify-content-center">
            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto rtl-row">
{{--                    <li class="nav-item">--}}
{{--                        <img src="{{asset('assets/web/images/icons/nav/1.svg')}}" alt="">--}}
{{--                        <a class="nav-link" href="{{ url(LaravelLocalization::getCurrentLocale().'/') }}">{{ __('index.home') }}</a>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
{{--                        <img src="{{asset('assets/web/images/icons/nav/4.svg')}}" alt="">--}}
                        <i class="fa fa-globe fa-1x"></i>
                        <a class="nav-link dropdown-toggle" href="#0" id="dropdownMenuButton"
                           data-toggle="dropdown">
                            {{ __('index.language') }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="row">
                                <div class="col-6">
                                    <div class="box">
                                        @foreach (languages() as $language)
                                            <a class="dropdown-item" href="{{LaravelLocalization::getLocalizedURL($language->local, null, [], true)}}">{{ $language->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <img src="{{asset('assets/web/images/icons/nav/2.svg')}}" alt="">
                        <a class="nav-link" href="{{ url(LaravelLocalization::getCurrentLocale().'/about-us') }}">{{ __('index.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <img src="{{asset('assets/web/images/icons/nav/3.svg')}}" alt="">
                        <a class="nav-link" href="{{ url(LaravelLocalization::getCurrentLocale().'/student/levels') }}">{{ __('index.levels') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <img src="{{asset('assets/web/images/icons/nav/4.svg')}}" alt="">
                        <a class="nav-link dropdown-toggle" href="#0" id="dropdownMenuButton"
                           data-toggle="dropdown">
                           {{ __('index.categories') }}</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="row">
                                <div class="col-6">
                                    <div class="box">
                                        @foreach (categories() as $category)
                                            <a class="dropdown-item" href="{{route('our-categories.show', $category->category_id)}}">{{ $category->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
{{--                                <div class="col-6">--}}
{{--                                    <div class="box">--}}
{{--                                        @foreach ($categories as $category)--}}
{{--                                            <a class="dropdown-item" href="#">{{ $category->name }}</a>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <img src="{{asset('assets/web/images/icons/nav/5.svg')}}" alt="">
                        <a class="nav-link" href="{{ url(LaravelLocalization::getCurrentLocale().'/student/subjects') }}">{{ __('index.subjects') }}</a>
                    </li>
                    <li class="nav-item">
                        <img src="{{asset('assets/web/images/icons/nav/6.svg')}}" alt="">
                        <a class="nav-link" href="{{ url(LaravelLocalization::getCurrentLocale().'/contact-us') }}">{{ __('index.contact') }}</a>
                    </li>
                    <li class="nav-item">
                        <img src="{{asset('assets/web/images/icons/nav/5.svg')}}" alt="">
                        <a class="nav-link" href="#0">{{ __('index.live') }}</a>
                    </li>
                </ul>
                <div class="search-form">
                    <form>
                        <input type="text" name="search" placeholder="{{ __('index.search') }}">
                    </form>
                </div>
            </div>
        </div>
        <div class="left d-flex justify-content-end">
            <!-- Logo -->
            <a class="logo" href="{{url(LaravelLocalization::getCurrentLocale().'/')}}">
                <img src="{{asset('assets/web/images/logo.png')}}" alt="logo">
            </a>
        </div>
    </div>
</nav>
