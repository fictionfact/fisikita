<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <title>Lokalaja</title>
        <!-- Basic -->
        <meta charset="utf-8"/>
        @yield('header')
        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
        <!-- Vendor Styles -->
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <link href="/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/css/global/global.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="/css/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css"/>
        @yield('css')
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
         <!--========== HEADER V2 ==========-->
        <header class="navbar-fixed-top s-header-v2 js__header-sticky">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="{{ url('/') }}" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="/img/logo-light.png" alt="Dublin Logo">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="/img/logo-dark.png" alt="Dublin Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        
                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <!-- Home -->
                                    <li class="s-header-v2__nav-item">
                                        <a href="{{ url('/') }}" class="s-header-v2__nav-link" role="button" aria-haspopup="true" aria-expanded="false">Home </a>
                                    </li>
                                    <!-- End Home -->
                                    
                                    <!-- Pages -->
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <a href="javascript:void(0);" class="dropdown-toggle s-header-v2__nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Experience<span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="team.html" class="s-header-v2__dropdown-menu-link">Long Term Experience</a></li>
                                            <li><a href="faq.html" class="s-header-v2__dropdown-menu-link">bla bla</a></li>
                                            <li><a href="events.html" class="s-header-v2__dropdown-menu-link">Events</a></li>
                                            <li><a href="index_coming_soon.html" class="s-header-v2__dropdown-menu-link">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Pages -->

                                    <li class="s-header-v2__nav-item"><a href="{{ url('/aboutus') }}" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="{{ url('/termsconditions') }}" class="s-header-v2__nav-link">Terms and conditions</a></li>
                                    @if(Auth::guest())
                                    <li class="s-header-v2__nav-item"><a href="{{ url('/login') }}" class="s-header-v2__nav-link">Login</a></li>
                                    @else
                                    <li class="s-header-v2__nav-item">
                                    <a class="s-header-v2__nav-link" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    </li>
                                    @endif
                                    <li class="s-header-v2__nav-item"><a href="{{ url('/contact') }}" class="s-header-v2__nav-link s-header-v2__nav-link--dark">Contacts</a></li>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!--========== END HEADER V2 ==========-->
        @yield('content')
        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">
            <!-- Links -->
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Twitter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Facebook</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Instagram</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">YouTube</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="">Subscribe to Our Newsletter</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/aboutus') }}">about us</a></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="{{ url('/termsconditions') }}">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-scrmd-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Lokalaja</h3>
                            <p class="g-color--white-opacity">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="{{ url('/') }}">
                            <img class="g-width-100--xs g-height-auto--xs" src="/img/logo-light.png">
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        @yield('scripts')
        

        <script type="text/javascript" src="/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="/vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
       
        <script type="text/javascript" src="/vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="/vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="/vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="/vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="/vendor/counterup.min.js"></script>
        <script type="text/javascript" src="/vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="/vendor/jquery.wow.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <!-- General Components and Settings -->
        <script type="text/javascript" src="/js/global.min.js"></script>
        <script type="text/javascript" src="/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="/js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="/js/components/swiper.min.js"></script>
        <script type="text/javascript" src="/js/components/counter.min.js"></script>
        <script type="text/javascript" src="/js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="/js/components/parallax.min.js"></script>
        <script type="text/javascript" src="/js/components/google-map.min.js"></script>
        <script type="text/javascript" src="/js/components/wow.min.js"></script>
        <script type="text/javascript" src="/js/components/faq.min.js"></script>
{{--         <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
        <script type="text/javascript" src="/css/slick/slick.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>