<!DOCTYPE HTML>
<html class="no-js" lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>İnteryer Dizayn</title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700%7COpen+Sans:300,400" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="/revolution/css/settings.css">
    <link rel="stylesheet" href="/revolution/css/layers.css">
    <link rel="stylesheet" href="/revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="/css/slider-home18.css">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/aos2.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/lightcase.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link href="/css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="{{ Route::is('index') ? 'homepage-1 int_white_bg' : 'inner-page' }}">
<!-- Wrapper -->
<div id="wrapper" class="int_main_wraapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container ================================================== -->
    <header id="header-container" class="header head-tr">
        <!-- Header -->
        <div id="header" class="head-tr bottom">
            <div class="container">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo" class="col-lg-2 logo-white">
                        <a href="{{ route('index') }}">
                            <img src="/logo.png" />
                        </a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1 head-tr">
                        <ul id="responsive">
                            <li><a href="{{ route('index') }}">{{ __('content.home') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ __('content.about') }}</a></li>
                            <li><a>{{ __('content.services') }}</a>
                                <ul>
                                    @foreach($services as $service)
                                        <li><a href="{{ route('serviceDetail', $service->slug)}}">{{ $service->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('projects') }}">{{ __('content.projects') }}</a></li>
                            <li><a href="{{ route('blog') }}">{{ __('content.blog') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('content.contact') }}</a></li>


                            <li><a>{{mb_strtoupper(app()->getLocale())}}</a>
                                <ul>

                                        <li><a href="{{ LaravelLocalization::getLocalizedURL('az', null, [], true) }}">Azərbaycan</a></li>
                                        <li><a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a></li>
                                        <li><a href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}">Pусский</a></li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->
                </div>
                <!-- Left Side Content / End -->
            </div>
        </div>
        <!-- Header / End -->
    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->
    @yield('content')
    <!-- STAR SECTION PARTNERS -->
    <div class="partners bg-white-3 border-0" data-aos="zoom-in">
        <div class="container">
            <div class="owl-carousel style2">
                @foreach($partners as $partner)
                <div class="owl-item"><img src="{{$partner->getFirstMediaUrl('image')}}" alt=""></div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- END SECTION PARTNERS -->
    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer bg-white-5 {{ Route::is('index') ? 'bg-white-5' : 'bg-black-2' }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="{{ route('index') }}" class="logo">
                                <img src="/logo.png" alt="netcom">
                            </a>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">{{ $setting->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">{{ $setting->whatsapp }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">{{ $setting->email }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="navigation">
                            <h3>{{ __('content.pages') }}</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="{{ route('about') }}">{{ __('content.about') }}</a></li>
                                    <li><a href="{{ route('projects') }}">{{ __('content.projects') }}</a></li>
                                    <li><a href="{{ route('blog') }}">{{ __('content.blog') }}</a></li>
                                    <li><a href="{{ route('contact') }}">{{ __('content.contact') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="navigation">
                            <h3>{{ __('content.services') }}</h3>
                            <div class="nav-footer">
                                <ul>
                                    @foreach($services as $service)
                                        <li><a href="{{ route('serviceDetail', $service->slug)}}">{{ $service->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="widget">
                            <h3>{{ __('content.latest_projects') }}</h3>
                            <div class="twitter-widget contuct">
                                <div class="twitter-area">
                                    @foreach($lastProjects as $lastProject)
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-file-alt" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="{{ route('projectDetail', $lastProject->id) }}">{{ $lastProject->title }}</a></h5>
                                                <h4>
                                                    @php
                                                        $monthNumber = \Carbon\Carbon::parse($lastProject->created_at)->format('n');
                                                    @endphp
                                                    {{ \Carbon\Carbon::parse($lastProject->created_at)->format('j') . ' ' . __('dates.' . $monthNumber) . ' ' . \Carbon\Carbon::parse($lastProject->created_at)->format('Y') }}
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="newsletters">
                            <h3>{{ __('content.subscribe_newsletter') }}</h3>
                            <p>{{ __('content.subscribe_description') }}</p>
                        </div>
                        <form class="bloq-email mailchimp form-inline" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="{{ __('content.subscribe_email_placeholder') }}">
                                <input type="submit" value="{{ __('content.subscribe_button') }}">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer bg-white-3">
            <div class="container">
                <p>{{ __('content.copyright') }}</p>
            </div>
        </div>
    </footer>
    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->
    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <!-- ARCHIVES JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mmenu.min.js"></script>
    <script src="/js/mmenu.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/aos2.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/smooth-scroll.min.js"></script>
    <script src="/js/typed.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/lightcase.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Slider Revolution scripts -->
    <script src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script>
        var tpj = jQuery;
        var revapi26;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_26_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_26_1");
            } else {
                revapi26 = tpj("#rev_slider_26_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 80,
                                v_offset: 10
                            },
                            right: {
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 10,
                                v_offset: 10
                            }
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: false,
                            style: "bullet-bar",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 30,
                            v_offset: 30,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1270, 1024, 778, 480],
                    gridheight: [729, 600, 600, 480],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: ".site-header",
                    fullScreenOffset: "0px",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });

    </script>
    <script>
        $('.home5-right-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            rtl: false,
            autoplayHoverPause: false,
            autoplay: false,
            singleItem: true,
            smartSpeed: 1200,
            navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480: {
                    items: 1,
                    center: false
                },
                520: {
                    items: 2,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 5
                },
                1366: {
                    items: 5
                },
                1400: {
                    items: 5
                }
            }
        });

    </script>
    <!-- MAIN JS -->
    <script src="/js/script.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/652541886fcfe87d54b864be/1hccofvtm';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</div>
<!-- Wrapper / End -->
</body>

</html>

