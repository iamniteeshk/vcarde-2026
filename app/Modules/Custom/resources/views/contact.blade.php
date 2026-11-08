@extends('custom::layouts.master')
@section('style')
<style>
    .acechatbot,#cez77b ,.\#1mjcm6l ,.\#d5cgau ,.\#17u01q8 ,.\#1a01d6t ,.\#li55pj ,.\#m56y9g ,.\#1rk02c6 ,.\#v6kwo0 ,.\#1hthoje  ,.\#13x8wd8  ,.\#cxhdnl  ,.\#1uebn5p  ,.\#4xbqnr  ,.\#1sxpzkv  ,.\#jyow7z ,.\#1y5w31v ,.\#1mjcm6l ,.\#16t9iit ,.\#1u9s397 ,.\#1bejyo3 ,.\#1aabpnr ,.\#17og478 ,.\#li55pj ,.\#1uebn5p, ,.\#1lxml9 ,.\#2bkqh8 ,.\#etuhxs ,.\#su1e3e ,.\#atrbuo ,.\#19bmxqg ,.\#69x0rz{
        right: auto !important;
    left: 0 !important;
    }
    .support-form {
        color: #e5e523;
    }
    .\#1ejsla7 {
        color:#ffff3f;
    }
    p, ,.\#a8oub5{
        color:#fff;
    }
    .form-control:focus, button:visited, button.active, button:hover, button:focus, input:visited, input.active, input:hover, input:focus, textarea:hover, textarea:focus, a:hover, a:focus, a:visited, a.active, select, select:hover, select:focus, select:visited {
 
  color: #ffff3f;
}
    *,
::after,
::before {
  box-sizing:border-box;
  color: white;
}
    .nft-home {
        background-color: #010101;
    }
    .\#69x0rz {
  line-height: 1.75rem;
  color: #131923;
}
.\#b2dwab > :not(.data-rf-layer) {
  z-index: 10;
  color: #fff;
}
.\#17og478 {
  background-color: #131923;
  color: rgb(255, 255, 255);
}
.\#69x0rz {
  line-height: 1.75rem;
  color: #fff;
}
    .support-form-input {
        background-color: #081c1e;
    }
    .rc-anchor-light {
        background-color: #081c1e;
    }
    .sa-contact-inner-form input, .sa-contact-inner-form textarea {
        color: #c1ff72;
    }
    .sa-contact-inner-form button {
    color: #fff;
    height: 60px;
    width: 170px;
    border: none;
    font-weight: 600;
    border-radius: 30px;
    background-image: linear-gradient(90deg, #02F746 0%, #3C10F2 50%, #02F746);
    transition: background-position 0.3s, border-image 0.3s;
    background-size: 200% auto;
    background-position: 100% 0;
    }

    .sa-contact-inner-form button:hover {
    background-position: 0 0;
    border-image: linear-gradient(90deg, #0ad65f 0%, #131923 50%, #0ad65f 100%);
    }
    .\#daffz7 > * {
        background-color: #007cff;
        }   
</style>
@endsection
@section('content')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptcha.api_site_key') }}"></script>

<section id="VCARDe-breadcurmb" class="VCARDe-breadcurmb-section">
    <div class="containers">
        <div class="breadcurmb-title text-center">
            <h2>Contact</h2>
        </div>
        <div class="breadcurmb-item-list text-center ul-li">
            <ul class="VCARDe-page-breadcurmb">
                <li><a href="#">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="hero-wrapper hero-1 hero-3 hero-4 hero-border overflow-hidden">
    <div class="hero-widget">
        <div class="hero-single-slider bg-center bg-cover" style="background-image: url(assets/assets-home/img1/hero/breadcrem.jpg);">
            <div class="containers">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero-content">
                            <h1 style="text-align: center;">Contact</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape wow fadeInUpBig">
                <img src="{{ asset('assets/assets-home/img1/svg-icon/video-shape.svg')}}" alt="">
            </div>
            <div class="shape-left wow fadeInLeft">
                <img src="{{ asset('assets/assets-home/img1/shap/shap.png')}}" alt="shape">
            </div>
            <div class="shape-bottom-2 wow fadeInUpBig">
                <img src="{{ asset('assets/assets-home/img1/shap/shap-2.png')}}" alt="shape">
            </div>
            <div class="breadcrumb-right-element wow fadeInRightBig">
                <img src="{{ asset('assets/assets-home/img1/svg-icon/right-2.svg')}}" alt="">
            </div>
            <div class="top-element wow fadeInDown">
                <img src="{{ asset('assets/assets-home/img1/svg-icon/shape-3.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section id="sa-contact-inner" class="sa-contact-inner-section inner-page-padding">
	<div class="container">
		<div class="saas_two_section_title saas2-headline text-center">
			<span class="title_tag">Get In Touch</span>
			<h2>Contact <span>Us
			</span> </h2>
		</div>
        @if(session('success'))
            <div class="alert alert-success" style="color: #0f0; background-color: #081c1e; padding: 15px; border-radius: 5px; text-align: center; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->has('captcha'))
            <div class="alert alert-danger" style="color: #f00; background-color: #081c1e; padding: 15px; border-radius: 5px; text-align: center; margin-bottom: 20px;">
                {{ $errors->first('captcha') }}
            </div>
        @endif

		<div class="sa-contact-inner-form">
			<form action="{{route('custom.submitSupport')}}" method="POST">
                @csrf
				<div class="row">
					<div class="col-md-6 support-form">
						<input type="text" class="support-form-input" name="name" placeholder="Your Full Name" required>
					</div>
					<div class="col-md-6 support-form">
						<input type="email" class="support-form-input" name="email" placeholder="Your Email Address" required>
					</div>
					<div class="col-md-6 support-form">
						<input type="text" class="support-form-input" name="phone" placeholder="Your Mobile Number" required>
					</div>
					<div class="col-md-6 support-form">
						<input type="text" class="support-form-input" name="subject" placeholder="Your Subject" required>
					</div>
					<div class="col-md-12 support-form">
						<textarea class="support-form-input" name="message" placeholder="Enter Your Message" required></textarea>
					</div>
					<div class="col-md-12">
                        {{-- <div class="g-recaptcha" data-sitekey="{{ config('recaptcha.api_site_key') }}"></div> --}}
                        {{--<div class="g-recaptcha" data-sitekey="6Lf6-ZoqAAAAAN_VfJVSOSLMQoER4J5UvaCeOQ2Y"></div>--}}
                        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                    </div>
                    <div class="cf-browser-verification">
                        <noscript>
                            <div>
                                <div id="cf-bicaptcha">
                                    <script src="https://www.cloudflare.com/cdn-cgi/scripts/cf/bicaptcha.js"></script>
                                    <div class="g-recaptcha-response"></div>
                                </div>
                                <input type="hidden" name="cf_bicaptcha_token" value="">
                                <script>
                                    document.getElementById("cf-bicaptcha").style.display = "none";
                                    document.getElementsByName("cf_bicaptcha_token")[0].value = "FORCE";
                                </script>
                            </div>
                        </noscript>
                        <span data-ray_id="6c29c3e45e8d2f08" data-site_key="" data-version="2024.5.2"></span>
                    </div>
					<div class="sa-contact-inner-btn text-center">
						<button type="submit">Send Message</button>
					</div>
				</div>
			</form>
		</div><br><br>
            <h2>Our Office</h2><br>
            <h3>VCARDe by GNK Services</h3><br>
            <p>Office Address: No.18, Srinivasan Street, Mandaveil, Chennai, Tamil Nadu, India, 600028<br>Registered Address: 1-A, 6TH CROSS SCHOOL STREET, JAFFERKHANPET, Chennai, Tamil Nadu, 600083</p>
            <p><a href="http://by1.me/vcarde-wa">Click to WhatsApp: +91-9600933258</a><br> <a href="tel:+919600933258">Click to Call: +91-9600933258</a> <br>Email: cc@vcarde.com</p><br>
    </div>
    <!-- Start of re:tune chatbot-->
<div class="acechatbot" style="position: fixed; left: 0; right: auto; bottom: 0; top: auto;">
    <script style="position: fixed; left: 0; right: auto; bottom: 0; top: auto;"
      src="https://retune.so/api/script/beta/chat.js?id=11eea708-6a88-a0e0-b317-87c1f143e471"
      type="module"
      async
      defer
    ></script>
</div>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config('recaptcha.api_site_key') }}', {action: 'contact'}).then(function(token) {
            document.getElementById('recaptcha_token').value = token;
        });
    });
</script>
<!-- End of re:tune chatbot -->
</section>
@endsection