<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <title>{{ $data['title'] }}</title>
    <meta name="description" content="{{ $data['metaDescription'] }}">
    <meta name="keywords" content="{{ $data['metaKeywords'] }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset('assets/assets-home/img/fv.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('assets/assets-home/img/fv.png') }}" type="image/x-icon">
    <meta property="og:title" content="{{ $data['title'] }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ $data['ogImg'] }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
	@if(Request::is('home'))
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/odometer-theme-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/side-demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/nft.css') }}">
    @else
    @if(Request::is('home/plan'))
    @endif
    <link rel="stylesheet" href="{{ asset('assets/assets-home/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/newfont.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/swiper.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/jquery.bxslider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/jquery.mCustomScrollbar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/odometer-theme-default.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/side-demo.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/inner-page.css') }}">
	<link rel="stylesheet" type="text/css" href="waves.css">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css1/icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets-home/css/nft.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/assets-home/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/assets-home/css/dia_sass.css') }}">
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/public.css') }}"> --}}
    @endif
    @yield('style')
</head>
<body class="nft-home">
    <!-- preloader - start -->
    <div id="nft-preloader"></div>
    <div class="up">
        <a href="#" class="nft-scrollup text-center"><i class="fas fa-arrow-up"></i></a>
    </div>
<header id="nft-header" class="nft-header-section">
    <div class="container">
        <div class="nft-main-navigation-wrapper d-flex justify-content-between position-relative">
            <div class="nft-brand-logo">
                <a href="{{ url('/home') }}"><img src="{{ asset('assets/assets-home/img/nft/logo/logo.png')}}" alt=""></a>
            </div>
            <div class="nft-navigation-menu d-flex align-items-center">
                <nav class="nft-main-navigation  clearfix ul-li">
                    <ul id="nft-main-nav" class="nav navbar-nav clearfix">
                        <li class="side-demo position-relative"><a href="{{ url('/home') }}">Home</a></li>
                        
                        <li class="side-demo position-relative"><a href="{{ url('/home/templates') }}">Templates</a></li>
                        <!-- <li class="side-demo position-relative"><a href="{{ url('/home/nfc-card') }}">NFC Cards</a><span>New</span></li> -->
                        <li class="dropdown">
                            <a href="#">NFC Cards</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a   href="{{ url('/home/nfc-card') }}">View Samples</a></li>
                                <li class="side-demo position-relative"><a href="https://m.vcarde.com/shop/">Buy NFC Cards</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">FAQ</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a   href="{{ url('/home/how-to-create-vcard') }}">How to Create VCARD</a></li>
                                <li class="side-demo position-relative"><a href="{{ url('/home/faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        
                        <li class="side-demo position-relative"><a href="{{ url('/home/plan') }}">Pricing</a></li>
                    
                        <li class="dropdown">
                            <a href="#">Policies</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a   href="{{ url('/home/shipping-policy') }}">Shipping Policy</a></li>
                                <li><a   href="{{ url('/home/refund-policy') }}">Refund Policy</a></li>
                                <li><a   href="{{ url('/home/privacy-policy') }}">Privacy Policy</a></li>
                                <li><a   href="{{ url('/home/terms-condition') }}">Terms & Condition</a></li>
                                <li><a   href="{{ url('/home/data-deletion-policy') }}">Data Deletion Policy</a></li>
                            </ul>
                        </li>
                        <li class="side-demo position-relative"><a href="{{ url('/home/contact') }}">Contact</a></li>
                        
                        
                    </ul>
                </nav>
                <div class="nft-btn text-center">
                    <a class="d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#loginModal">
                        <img src="https://vcarde.com/assets/assets-home/img/nft/icon/ic1.png" alt="">Login
                    </a>
                </div>
                {{-- <div class="nft-btn text-center">
                    <a class="d-flex justify-content-center align-items-center" href="{{ route('login') }}"><img src="{{ asset('assets/assets-home/img/nft/icon/ic1.png')}}" alt="">Login</a>
                </div> --}}
            </div>
        </div>
        <div class="nft-mobile_menu position-relative">
            <div class="nft-mobile_menu_button nft-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nft-mobile_menu_wrap">
                <div class="mobile_menu_overlay nft-open_mobile_menu"></div>
                <div class="nft-mobile_menu_content">
                    <div class="nft-mobile_menu_close nft-open_mobile_menu">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="{{ url('/home') }}"><img src="{{ asset('assets/assets-home/img/nft/logo/logo1.1.png')}}" alt=""></a>
                    </div>
                    <nav class="nft-mobile-main-navigation  clearfix ul-li">
                        <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                        <li class="side-demo position-relative"><a href="{{ url('/home') }}">Home</a></li>
                        
                        <li class="side-demo position-relative"><a href="{{ url('/home/templates') }}">Templates</a></li>
                        <li class="side-demo position-relative"><a href="{{ url('/home/nfc-card') }}">NFC Cards</a></li>
                        
                        <li class="dropdown">
                            <a href="#">FAQ</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a   href="{{ url('/home/how-to-create-vcard') }}">How to Create VCARD</a></li>
                                <li class="side-demo position-relative"><a href="{{ url('/home/faq') }}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="side-demo position-relative"><a href="{{ url('/home/plan') }}">Pricing</a></li>
                
                        <li class="dropdown">
                            <a href="#">Policies</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a   href="{{ url('/home/shipping-policy') }}">Shipping Policy</a></li>
                                <li><a   href="{{ url('/home/refund-policy') }}">Refund Policy</a></li>
                                <li><a   href="{{ url('/home/privacy-policy') }}">Privacy Policy</a></li>
                                <li><a   href="{{ url('/home/terms-condition') }}">Terms & Condition</a></li>
                                <li><a   href="{{ url('/home/data-deletion-policy') }}">Data Deletion Policy</a></li>
                            </ul>
                        </li>
                        <li class="side-demo position-relative"><a href="{{ url('/home/contact') }}">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /Mobile-Menu -->
    </div>
</header>
@yield('content')
<!-- Start of Footer section
============================================= -->                    
<section id="nft-footer" class="nft-footer-section">
    <div class="nft-footer-content">
        <div class="container">
            <div class="nft-footer-widget-wrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="nft-footer-widget nft-headline pera-content ul-li">
                            <div class="logo-widget">
                                <div class="site-logo">
                                    <a href="index.php"><img src="{{ asset('assets/assets-home/img/nft/logo/logo.png')}}" alt=""></a>
                                </div>
                               
                                <div class="nft-footer-social">
                                    <p>Join the Conversation</p>
                                    <a href="https://www.facebook.com/vCARDeNFC/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/company/gnk-services-in/"><i class="fab fa-linkedin"></i></a>
                                    <!--<a href="#"><i class="fab fa-instagram"></i></a>-->
                                    <a href="https://www.youtube.com/@gnkservices?sub_confirmation=1"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="nft-footer-widget nft-headline pera-content ul-li">
                            <div class="menu-widget">
                                <h3 class="widget-title">Useful LInks</h3>
                                <ul>
                                    <li><a href="{{ route('login') }}"> Login</a></li>
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li><a href="https://m.vcarde.com/shop/"target="_blank">NFC Cards</a></li>
                                    <li><a href="{{ url('/home/faq') }}">FAQ</a></li>
                                    <li><a href="{{ url('/home/contact') }}"> Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="nft-footer-widget nft-headline pera-content ul-li">
                            <div class="menu-widget">
                                <h3 class="widget-title">Site Links</h3>
                                <ul>
                                    <li><a href="{{ url('/home') }}"> Home</a></li>
                                    <li><a href="{{ url('/home/templates') }}"> Templates</a></li>
                                    <li><a href="{{ url('/home/shipping-policy') }}"> Shipping Policy</a></li>
                                    <li><a href="{{ url('/home/refund-policy') }}"> Refund Policy</a></li>
                                    <li><a href="{{ url('/home/privacy-policy') }}"> Privacy Policy</a></li>
                                    <li><a href="{{ url('/home/terms-condition') }}">Terms & Condition</a></li>
                                    <li><a href="{{ url('/home/contact') }}"> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nft-footer-widget nft-headline pera-content ul-li">
                            
                            <div class="menu-widget">
                                <h3 class="widget-title">Contact</h3>
                                <ul>
                                    <li><a href="http://by1.me/vcarde-wa">Click to WhatsApp: +91 960033258</a></li>
                                    <li><a href="tel:+919600933258">Click to Call: +91 9600933258</a></li>
                                    <li><a>Email: cc@vcarde.com</a></li><br>
                                    <li><a>Office Address – No.18, Srinivasan Street, Mandaveli, Chennai, Tamil Nadu, India, 600028</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nft-footer-copyright">
        <div class="container">
            <div class="nft-footer-copyright-content  d-flex justify-content-between">
                <div class="copyright-text">
                    Copyright@VCARDe 2024
                    <meta name="keywords" content="	accountant, advertising, advisor, agency, broker, business, clean, consulting, creative, elementor, finance, insurance, marketing, modern, portfolio">. All rights reserved.
                </div>
                
            </div>
        </div>
    </div>
</section>
<div class="modal fade"  id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color:#131923;">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your two login buttons go here -->
                <div class="row">
                    <div class="col-6">
                        <h3 class="pt-20" style="color:#FFFF3F; font-size:18px; padding-top:20px;">Profile Management</h3>
                    </div>
                    <div class="col-6">
                        <div class="nft-btn text-center" style="">
                            <a class="d-flex justify-content-center align-items-center float-right" style="width: 130px; height:50px;" href="{{ route('login') }}" target="_blank"><img class="mr-2" src="{{ asset('assets/assets-home/img/nft/icon/ic1.png')}}" alt="">Login</a>
                        </div> 
                    </div>
                    <div class="col-6">
                        <h3 class="pt-20" style="color:#FFFF3F; font-size:18px; padding-top:20px;">Order NFC Cards</h3>
                    </div>
                    <div class="col-6 mt-2">
                        <div class="nft-btn text-center" style="">
                            <a class="d-flex justify-content-center align-items-center float-right" style="width: 130px; height:50px;" href="https://m.vcarde.com/my-account/" target="_blank"><img class="mr-2" src="{{ asset('assets/assets-home/img/nft/icon/ic1.png')}}" alt="">Login</a>
                        </div> 
                    </div>
                </div>
                {{-- <button type="button" class="btn btn-primary">Login Option 1</button>
                <button type="button" class="btn btn-secondary">Login Option 2</button> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Footer section
============================================= -->    
<!-- JS library -->
<script src="{{ asset('assets/assets-home/js/jquery.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/appear.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/owl.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/typer-new.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/odometer.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/slick.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/parallax-scroll.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/jquery.filterizr.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/countdown.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/side-demo.js')}}"></script>
<script src="{{ asset('assets/assets-home/js/nft.js')}}"></script>

<!--Start of Tawk.to Script--
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6589148070c9f2407f832354/1hifng5jj';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<--End of Tawk.to Script-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TSBYZP5VMN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TSBYZP5VMN');
</script>
</body>
</html> 