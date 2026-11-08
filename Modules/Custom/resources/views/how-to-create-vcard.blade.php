@extends('custom::layouts.master')
@section('content')
<section id="VCARDe-breadcurmb" class="VCARDe-breadcurmb-section">
    <div class="container">
       <div class="breadcurmb-title text-center">
          <h2>Refund Policy</h2>
       </div>
       <div class="breadcurmb-item-list text-center ul-li">
          <ul class="VCARDe-page-breadcurmb">
             <li><a href="#">Home</a></li>
             <li><a href="#">Refund Policy</a></li>
          </ul>
       </div>
    </div>
 </section>
 
 <section class="hero-wrapper hero-1 hero-3 hero-4 hero-border overflow-hidden">
    <div class="hero-widget">
       <div class="hero-single-slider bg-center bg-cover" style="background-image: url(assets/img1/hero/breadcrem.jpg);">
          <div class="container">
             <div class="row align-items-center">
                <div class="col-12">
                   <div class="hero-content">
                      <h1 class="breadcrumb__title">How to Create VCARD</h1>
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
 
 <section id="sa_privacy_policy" class="sa_privacy_policy_section inner-page-padding" >
    <div class="container">
       <h1>How to Create and Customize Your vCard on vCARDe</h1>
       <p>Follow these straightforward steps to get your digital business card ready and explore options for custom printed NFC cards:</p>
       <ol>
          <li>Visit <a class="linkcolor"href="">vCARDe's website</a>.</li>
          <li>Click the 'Login' button at the top right corner.</li>
          <li>If you're new, click on "Create an account".</li>
          <li>Fill in your full name, a real email address, and choose a secure password.</li>
          <li>Verify your email by clicking the link in the email from noreply@vcarde.com. Check your Junk/Spam folder if necessary. For any issues, email <a class="linkcolor"href="mailto:cc@vcarde.com">cc@vcarde.com</a>.</li>
          <li><a class="linkcolor"target="blank" href="{{ route('login') }}">Login</a> with your new credentials.</li>
          <li>In the menu, click on 'VCards'.</li>
          <li>Click 'New VCard' on the top right corner.</li>
          <li>Choose a URL alias for your page. Remember: changing this will invalidate any linked QR code.</li>
          <li>Upload your profile photo, cover image, add a name and a description. Then, click 'Save'.</li>
          <li>Customize your VCard with the available options, following on-screen instructions.</li>
       </ol>
       <p>Your personalized vCard is now ready for use!</p>
       <h2>Option 1: Order Custom Printed NFC Cards</h2>
       <ol>
          <li>Login to your Dashboard and select "My NFC Cards" from the left menu.</li>
          <li>Click on "Order NFC" at the top right.</li>
          <li>Choose a design, select your vCard portfolio, fill in personal details and shipping address.</li>
          <li>Complete the payment process. Your vCard will be delivered to your home.</li>
       </ol>
       <h2>Option 2: Order Custom Printed NFC Cards</h2>
       <ol>
          <li>Login to your Dashboard and click "Virtual Backgrounds" from the left menu.</li>
          <li>Choose the desisered model by clicking on the image.</li>
          <li>Select your VCard Portfolio. Free plan allows you to keep 1 profile at a time.</li>
          <li>Choose a JPG or PNG logo or photo in 150x150 Pixel size. You can resize your existing image in Windows Photos, Mac Photos or Android Photos app</li>
          <li>Fill in the details like Name, Email, Contact and other details. All fields are mandatory</li>
          <li>Then click "Save" at the bottom of the page to download the vCard design.</li>
          <li>Now you have 2 options, print on your own or <a href="https://m.vcarde.com/product/own-design-nfc-card/" target="_blank">upload the images on our <u>website</u> and place an order</a>.</li>

       </ol>
       <p>Explore more NFC card templates at <a class="linkcolor" target="blank" href="{{ url('/home/nfc-card') }}">vCARDe NFC Cards</a>.</p>
    </div>
 </section>
 @endsection