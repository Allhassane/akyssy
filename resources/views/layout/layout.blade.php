<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Akyssy')</title>
    <link rel="shortcut icon" href="/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">

    <!-- Bootstrap & Styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/assets/css/block_grid_bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/assets/css/owl.theme.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet" />
    <link href="/assets/css/jquery.circliful.css" rel="stylesheet" />
    <link href="/assets/css/slicknav.css" rel="stylesheet" />
    <link href="/assets/css/video-popup.css" rel="stylesheet" />
    <link href="/assets/css/responsive.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet">

    @yield('css')


<!-- SWITCHER -->
{{--<link rel="stylesheet" id="switcher-css" type="text/css" href="/assets/switcher/css/switcher.css" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color1.css" title="color1" media="all" data-default-color="true" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color2.css" title="color2" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color3.css" title="color3" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color4.css" title="color4" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color5.css" title="color5" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color6.css" title="color6" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color7.css" title="color7" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color8.css" title="color8" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color9.css" title="color9" media="all" />--}}
{{--<link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/color10.css" title="color10" media="all" />--}}
<!--[if lt IE 9]>
<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

{{--<!-- Start Switcher -->--}}
{{--<div class="switcher-wrapper">--}}
    {{--<div class="demo_changer">--}}
        {{--<div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin fa-2x text_primary"></i></div>--}}
        {{--<div class="form_holder">--}}
            {{--<div class="row">--}}
                {{--<div class="predefined_styles">--}}
                    {{--<div class="skin-theme-switcher">--}}
                        {{--<h4>Color</h4>--}}
                        {{--<a href="" data-switchcolor="color1" class="styleswitch" style="background-color:#00a63f;"> </a>--}}
                        {{--<a href="" data-switchcolor="color2" class="styleswitch" style="background-color:#0056d4;"> </a>--}}
                        {{--<a href="" data-switchcolor="color3" class="styleswitch" style="background-color:#ff0f3c;"> </a>--}}
                        {{--<a href="" data-switchcolor="color4" class="styleswitch" style="background-color:#a60090;"> </a>--}}
                        {{--<a href="" data-switchcolor="color5" class="styleswitch" style="background-color:#f36404;"> </a>--}}
                        {{--<a href="" data-switchcolor="color6" class="styleswitch" style="background-color:#f50079;"> </a>--}}
                        {{--<a href="" data-switchcolor="color7" class="styleswitch" style="background-color:#b62424;"> </a>--}}
                        {{--<a href="" data-switchcolor="color8" class="styleswitch" style="background-color:#00b5d6;"> </a>--}}
                        {{--<a href="" data-switchcolor="color9" class="styleswitch" style="background-color:#e89e0e;"> </a>--}}
                        {{--<a href="" data-switchcolor="color10" class="styleswitch" style="background-color:#4436cf;"> </a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!-- End Switcher -->--}}

<!-- Loading-->
<div class="loading animated-middle">
    <div class="loader">Loading...</div>
</div>

{{--<!-- Top MiniBar-->--}}
{{--<section class="topminibar">--}}
    {{--<div class="row">--}}
        {{--<div class="container">--}}
            {{--<div class="col-sm-12 col-md-6 col-xs-12">--}}
                {{--<ul class="list-inline">--}}
                    {{--<li><a href=""><i class="fa fa-commenting"></i><span> Live Chat</span></a></li>--}}
                    {{--<li><a href="contact.html"><i class="fa fa-headphones"></i><span> Support</span></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-sm-12 col-md-6 col-xs-12">--}}
                {{--<div class="text-right loginbuttons">--}}
                    {{--<a href="cart.html" class="btn btn-sm btn-default"><i class="fa fa-gift"></i> Offers </a>--}}
                    {{--<a href="cart.html" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i>  Sign Up </a>--}}
                    {{--<a href="cart.html" class="btn btn-sm btn-new"><i class="fa fa-user"></i> Account Login</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<!-- End of Top MiniBar-->--}}

<!-- Top Bar-->
<div class="top">
    <div class="row">
        <div class="container">
            <div class="col-sm-3">
                <div class="logo">
                    <a href="index.html"><img alt="" src="/assets/images/logo.png"></a>
                </div>
            </div>
            <div class="col-sm-9">
                <ul class="nav nav-pills pull-right">
                    <li><b>Appel : (+225) xx xx xx xx</b></li>
                    {{--<li>--}}
                        {{--<div class="btn-group country_select">--}}
                            {{--<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-toggle="dropdown" type="button">India--}}
                                {{--<b class="caret"></b>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li> <a href="">India</a> </li>--}}
                                {{--<li> <a href="">Iran</a> </li>--}}
                                {{--<li> <a href="">England</a> </li>--}}
                                {{--<li> <a href="">Syria</a> </li>--}}
                                {{--<li> <a href="">Bangladesh</a> </li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    <li> <a href="login.html">Connexion</a> </li>
                    <li> <a href="register.html">Inscription</a> </li>
                    <li class="cart-link"> <a href="cart.html"><i aria-hidden="true" class="fa fa-shopping-basket"></i> Mon Panier</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Top Bar-->

<!-- Main Menu -->
<div class="main_menu">
    <div class="row">
        <div class="container">
            <div class="col-sm-9">
                <nav id="desktop-menu">
                    <ul class="sf-menu" id="navigation">
                        <li class="current"> <a href="">ACCUEIL</a></li>
                        <li> <a href="">HÉBERGEMENT</a></li>
                        <li> <a href="">NOM DE DOMAINE<span class="down-badge-color-3 main-badge">Free</span></a>
                            {{--<ul>--}}
                                {{--<li> <a href="shared-servers.html">Shared Hosting</a>--}}
                                    {{--<ul>--}}
                                        {{--<li> <a href="shared-servers.html">Shared Servers Based</a> </li>--}}
                                        {{--<li> <a href="shared-period.html">Shared Period Based</a> </li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li> <a href="vps-slider-4-plans.html">VPS Servers</a>--}}
                                    {{--<ul>--}}
                                        {{--<li> <a href="vps-slider-3-plans.html">3 Plans Slider</a> </li>--}}
                                        {{--<li> <a href="vps-slider-4-plans.html">4 Plans Slider</a> </li>--}}
                                        {{--<li> <a href="vps-slider-5-plans.html">5 Plans Slider</a> </li>--}}
                                        {{--<li> <a href="vps-slider-6-plans.html">6 Plans Slider</a> </li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li> <a href="servers.html">Dedicated Servers</a> </li>--}}
                                {{--<li> <a href="cloud.html">Cloud Servers</a> </li>--}}
                                {{--<li> <a href="servers.html">Servers</a> </li>--}}
                            {{--</ul>--}}
                        </li>

                        <li> <a href="">WEB AGENCE</a></li>
                        <li> <a href="">FORMATION</a></li>
                        <li> <a href="">CONTACTS</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3">
                <ul class="sf-menu pull-right" id="user-menu">
                    {{--<li> <a href="contact.html"><i aria-hidden="true" class="fa fa-commenting"></i></a> </li>--}}
                    <li> <a href=""><i aria-hidden="true" class="fa fa-user-circle-o"></i> </a>
                        <ul>
                            <li> <a href="/">Connexion</a> </li>
                            <li> <a href="/">Inscription</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Menu -->

@yield('content')

<!--  Footer -->
<footer class="footer">
    <div class="row section_sapce3 main-footer">
        <div class="container">
            <div class="col-sm-2">
                <h4>Choose.</h4>
                <ul>
                    <li> <a href="index.html">Shared Hosting</a> </li>
                    <li> <a href="index.html">Reseller Hosting</a> </li>
                    <li> <a href="index.html">Cloud Managed VPS</a> </li>
                    <li> <a href="index.html">Managed Dedicated Servers</a> </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Get Support.</h4>
                <ul>
                    <li> <a href="index.html">Contact Us</a> </li>
                    <li> <a href="index.html">Knowledge Base</a> </li>
                    <li> <a href="index.html">Submit a Ticket</a> </li>
                    <li> <a href="index.html">Email</a> </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Start.</h4>
                <ul>
                    <li> <a href="index.html">WordPress Hosting</a> </li>
                    <li> <a href="index.html">Joomla Hosting</a> </li>
                    <li> <a href="index.html">Magento Hosting</a> </li>
                    <li> <a href="index.html">Drupal Hosting</a> </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Resources</h4>
                <ul>
                    <li> <a href="index.html">Webmail</a> </li>
                    <li> <a href="index.html">WHOIS Search</a> </li>
                    <li> <a href="index.html">ICANN Confirmation</a> </li>
                    <li> <a href="index.html">Site Map</a> </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>Shopping</h4>
                <ul>
                    <li> <a href="index.html">Product Catalog</a> </li>
                    <li> <a href="index.html">Find a Domain</a> </li>
                    <li> <a href="index.html">Reseller Programs</a> </li>
                    <li> <a href="index.html">Create Account</a> </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h4>About Us</h4>
                <ul>
                    <li> <a href="index.html">About TheHost</a> </li>
                    <li> <a href="index.html">Privacy Policy</a> </li>
                    <li> <a href="index.html">Terms</a> </li>
                    <li> <a href="index.html">Awards</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row bg_white copyright">
        <div class="container">
            <div class=" padding-t30 clearfix">
                <div class="col-sm-6">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>Payment Modes</h4>
                    <ul class="list-inline payment-icons">
                        <li><i class="fa fa-cc-mastercard fa-3x"></i></li>
                        <li><i class="fa fa-cc-visa fa-3x"></i></li>
                        <li><i class="fa fa-cc-amex fa-3x"></i></li>
                        <li><i class="fa fa-cc-discover fa-3x"></i></li>
                        <li><i class="fa fa-cc-paypal fa-3x"></i></li>
                        <li><i class="fa fa-google-wallet fa-3x"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright text-center">Copyright © 2017 - 2018 TheHost. All Rights Reserved</p>
    </div>
</footer>
<!--  End of Footer -->


<!--  Back to Top -->
<a href="top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--  Scripts -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/hoverIntent.js"></script>
<script src="/assets/js/superfish.min.js"></script>
<script src="/assets/js/owl.carousel.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/video-popup.js"></script>
<script src="/assets/js/jquery.circliful.min.js"></script>
<script src="/assets/js/waypoints.min.js"></script>
<script src="/assets/js/jquery.responsiveTabs.js"></script>
<script src="/assets/js/jquery.counterup.min.js"></script>
<script src="/assets/js/jquery.sticky.js"></script>
<script src="/assets/js/jquery.slicknav.min.js"></script>
<script src="/assets/js/jquery.slicknav.min.js"></script>
<script src="/assets/js/retina.min.js"></script>
<script src="/assets/js/jquery.parallax-1.1.3.js"></script>
<script src="/assets/js/jquery.countdown.js"></script>
<script src="/assets/js/mawbutton.js"></script>
<script src="/assets/js/custom.js"></script>
@yield('js')

<script>
    $(document).on("ready", function(e) {
        var sync1 = $("#mainslider");
        var sync2 = $("#mainslider-nav");
        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            paginationSpeed: 800,
            navigation: false,
            pagination: false,
            autoPlay: 7500,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 4],
            itemsTablet: [768, 3],
            itemsMobile: [479, 2],
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });

        function syncPosition(el) {
            var current = this.currentItem;
            $("#mainslider-nav").find(".owl-item").removeClass("synced").eq(current).addClass("synced")
            if($("#mainslider-nav").data("owlCarousel") !== undefined) {
                center(current)
            }
        }
        $("#mainslider-nav").on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });

        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for(var i in sync2visible) {
                if(num === sync2visible[i]) {
                    var found = true;
                }
            }
            if(found === false) {
                if(num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if(num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if(num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    });

    $(document).on("ready", function(e) {
        // ______________ TESTIMONIALS
        $("#testimonials-carousel").owlCarousel({
            items: 3,
            autoPlay: 5000,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1]
        });
        // ______________ PRICE TABS
        $('#shared-hosting-price-tabs').responsiveTabs({
            startCollapsed: 'accordion'
        });
        // ______________ FEATURES TABS
        $('#shared-hosting-features-tabs').responsiveTabs({
            startCollapsed: 'accordion'
        });
        // ______________ VIDEOPOPUP
        $("a.autoplay").VideoPopUp();
        $("a.noautoplay").VideoPopUp({
            autoplay: 0
        }); // Disable autoplay

        // ______________ COUNTDOWN
        $("#limited").countdown("2019/08/15", function(event) {
            $(this).text(
                event.strftime('%D Days %H:%M:%S')
            );
        });
        // ______________ PARTNERS
        $("#datacenter-partners").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 6,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 3],
            pagination: false
        });
        // ______________ PARALLAX
        $('.section-parallax').parallax("50%", 0.4);
        // ______________ STATS
        $('.statistics').waypoint(function() {
            $('#myStat1').circliful();
            $('#myStat2').circliful();
            $('#myStat3').circliful();
            $('#myStat4').circliful();

        }, {
            offset: 800,
            triggerOnce: true
        });
    });
</script>
<!--Switcher-->
<script src="/assets/switcher/js/switcher.js"></script>

</body>

</html>