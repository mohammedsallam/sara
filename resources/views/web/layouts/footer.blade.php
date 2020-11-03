<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <div class="logo">
                            <img src="{{asset('assets/web/images/logo-footer.png')}}" alt="">
                        </div>
                        <div class="social">
                            <a href="{{settings('youtube')}}" style="background: #F52929;">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="{{settings('twitter')}}" style="background: #2AA3EF;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a target="_blank" href="{{settings('facebook')}}" style="background: #3D5A96;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="item">
                        <div class="title">
                            <h6>{{ __('index.directed_links') }}</h6>
                        </div>

                        <ul>
                            <li><a href="{{route('studentSubject.index')}}">{{ __('index.courses') }}</a></li>
{{--                            <li><a href="#0">{{ __('index.categories') }}</a></li>--}}
                            <li> <a href="#0">{{ __('index.teachers_team') }}</a></li>
                            <li><a href="#0">{{ __('index.fre_questions') }} </a></li>
                            <li> <a href="#0">{{ __('index.live') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="item">
                        <div class="title">
                            <h6>{{ __('index.other_links') }}</h6>
                        </div>

                        <ul>
                            <li><a href="#0">{{ __('index.donate') }}</a></li>
                            <li><a href="#0">{{ __('index.about') }}</a></li>
                            <li><a href="#0">{{ __('index.contact') }}</a></li>
                            <li><a href="#0">{{ __('index.other_links') }}</a></li>
                            <li><a href="#0">{{ __('index.other_links') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <div class="title">
                            <h6>{{ __('index.contact') }}</h6>
                        </div>

                        <ul class="contact-info">
                            <li>
                                    <span class="icon">
                                        <ion-icon name="call-outline"></ion-icon>
                                    </span>
                                +966408522140
                            </li>
                            <li>
                                    <span class="icon">
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </span>
                                Islamic.academy
                                @gmail.com
                            </li>
                            <li>
                                    <span class="icon">
                                        <ion-icon name="bookmark-outline"></ion-icon>
                                    </span>
                                Jeddah,70th ST.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pat one">
            <img src="{{asset('assets/web/images/pat/arrow.png')}}" alt="">
        </div>
        <div class="pat two">
            <img src="{{asset('assets/web/images/pat/arrow.png')}}" alt="">
        </div>
        <div class="pat three">
            <img src="{{asset('assets/web/images/pat/footer.png')}}" alt="">
        </div>

    </div>
    <div class="sub-footer bg-img" data-background="{{asset('assets/web/images/pattern.png')}}">
        <div class="container ontop">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-right">
                        <a href="#0">{{ __('index.terms') }}</a>
                        <a href="#0">{{ __('index.policy') }}</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-left">
                        <h6>{{ __('index.copy_rights') }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="to-top" data-scroll-nav="0">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </div>
    </div>
</footer>
