<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Lokalaja</title>
                @yield('header')
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="/http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="/css/animate.css" rel="stylesheet">
        <link href="/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link rel="stylesheet" type="text/css" href="/css/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css"/>

        <link href="/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="/shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="{{ url('/') }}">
                                <img class="logo-img logo-img-main" src="/img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="/img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/') }}">Home</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/termsconditions') }}">terms & conditions</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="{{ url('/aboutus') }}">About</a></li>
                                @if(Auth::guest())
                                 <li class="{{ set_active('login') }}"><a class="nav-item-child nav-item-hover" href="{{ url('/login') }}">login</a></li>
                                @else
                                <li class="{{ set_active('login') }}"><a class="nav-item-child nav-item-hover" href="{{ url('/login') }}">{{$user->name}}</a></li>
                                 <li>
                                    <a class="nav-item-child nav-item-hover" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                        @endif
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
 
        
        <!--========== END HEADER ==========-->

        @yield('content')

     
        <!--========== FOOTER ==========-->
       {{--  <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Home</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Terms & Condition</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">About</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Login</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">FAQ</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Send Us A Note</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="logo-img logo-img-main" src="/img/logo.png" alt="Asentus Logo">
                    </div>
                    
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer> --}}
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        @yield('scripts')
        <script src="/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="/js/layout.min.js" type="text/javascript"></script>
        <script src="/js/components/wow.min.js" type="text/javascript"></script>
        <script src="/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="/js/components/masonry.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="/css/slick/slick.min.js"></script>
        
    </body>
    <!-- END BODY -->
</html>