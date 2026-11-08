@extends('custom::layouts.master')
@section('style')
<style>
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
    @import url(https://fonts.googleapis.com/css?family=Montserrat:800);
    .snip1265 {
      font-family: 'Raleway', Arial, sans-serif;
      color: #ffffff;
      text-align: left;
      font-size: 22px;
      background-color: #000;
      width: 100%;
      max-width: 1000px;
      margin: 50px 10px 10px;
    }
    .mar{
      margin-top:400px;
      align-items: center;
    }
    s{
      color:#ffb700;
    
    }
    .y {
      color:#c3ef3f;
    
    }
    .snip1265 .plan {
      margin: 0;
      width: 25%;
      position: relative;
      float: left;
      background-color: #000000;
      border: 1px solid #1e1e1e;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.25);
    }
    .snip1265 .plan:hover,
    .snip1265 .plan.hover {
      background-color: #1c1c1c;
    }
    .snip1265 .plan:hover i,
    .snip1265 .plan.hover i {
      -webkit-transform: scale(1.2);
      transform: scale(1.2);
    }
    .snip1265 * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: all 0.25s ease-out;
      transition: all 0.25s ease-out;
    }
    .snip1265 header {
      position: relative;
      padding: 20px 10px;
    }
    .snip1265 header i {
      font-size: 56px;
      margin: 0 15px;
      color: #1EAD63;
      display: inline-block;
      float: left;
    }
    .snip1265 .plan-title {
      top: 0;
      font-weight: 800;
      margin: 10px 0 0;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .snip1265 .plan-cost {
      margin: 0;
      opacity: 0.2;
    }
    .snip1265 .plan-price {
      color:#fff;
      font-family: 'Montserrat', Arial, sans-serif;
      font-weight: 8000;
      font-size: 1.3em;
    }
    .snip1265 .plan-type {
      opacity: 0.8;
      font-size: 0.7em;
      text-transform: uppercase;
    }
    .snip1265 .plan-features {
      padding: 0;
      margin: 0 0 40px;
      text-align: center;
      list-style: outside none none;
      font-size: 0.8em;
      text-align: left;
    }
    .snip1265 .plan-features li {
      padding: 5px 5%;
      font-weight: 500;
      opacity: 0.5;
      border-left: 5px solid #fdc500;
      margin: 2px 20px;
    }
    .no {
      padding: 5px 5%;
      font-weight: 500;
      opacity: 0.5;
      border-left: 5px solid #fff;
      margin: 2px 20px;
    }
    .snip1265 .plan-select {
      background-color: rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    .snip1265 .plan-select a {
      color: #ffffff;
      text-decoration: none;
      padding: 15px 20px;
      margin: 20px;
      border-radius: 40px;
      font-size: 0.75em;
      font-weight: 800;
      text-transform: uppercase;
      display: inline-block;
      background-color: #1EAD63;
    }
    .snip1265 .plan-select a:hover {
      background-color: #262626;
    }
    .snip1265 .featured {
      margin-top: -10px;
      background-color: #262626;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      z-index: 1;
    }
    .snip1265 .featured .plan-select a {
      margin: 30px 20px;
    }
    @media only screen and (max-width: 767px) {
      .snip1265 .plan {
        width: 50%;
      }
      .snip1265 .plan-title,
      .snip1265 .plan-select a {
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
      .snip1265 .plan-select a,
      .snip1265 .featured .plan-select a {
        margin: 20px;
      }
      .snip1265 .featured {
        margin-top: 0;
      }
    }
    @media only screen and (max-width: 440px) {
      .snip1265 .plan {
        width: 100%;
      }
    }
</style>
@endsection
@section('content')
<section class="hero-wrapper hero-1 hero-3 hero-4 hero-border overflow-hidden">
    <div class="hero-widget">
        <div class="hero-single-slider bg-center bg-cover" style="background-image: url(assets/assets-home/img1/hero/breadcrem.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="hero-content">
                            <h1 class="breadcrumb__title">Pricing</h1>
                            <!-- <h2>Free Lifetime Plan</h2> -->
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
<section id="s2-pricing" class="s2-pricing_section">
  <div class="container">
     <div class="saas_two_section_title saas2-headline text-center">
        <h2> Our best pricing  offer!</h2>
     </div>
     <div class="snip1265">
        @foreach ($plans as $plan)
        <div class="plan">
           <header>
              <i class="ion-ios-navigate-outline"></i>
              <h4 class="plan-title">
                {!! $plan->name !!}
              </h4>
              <div class="plan-cost"><span class="plan-price">{{ $plan->currency->currency_icon }}{{($plan->price) }}</span>@if ($plan->frequency == 1)<span class="plan-type">/ {{ __('messages.plan.monthly') }}</span>@elseif($plan->frequency == 2)<span class="plan-type">/{{ __('messages.plan.yearly') }}</span>@endif</div>
           </header>
           <ul class="plan-features">
            @foreach (getPlanFeature($plan) as $feature => $value)
              <li class="{{ $value == 1 ? 'y' : ''}}">{{ __('messages.feature.' . $feature) }}</li>
            @endforeach
           </ul>
           @if (getLoggedInUserRoleId() != getSuperAdminRoleId())
            @if (getLogInUser() && getLoggedInUserRoleId() != getSuperAdminRoleId())
              @if(!empty(getCurrentSubscription()) && $plan->id == getCurrentSubscription()->plan_id && !getCurrentSubscription()->isExpired())
                @if ($plan->price != 0)
                <div class="plan-select">{{ __('messages.subscription.currently_active') }}</div>
                @else
                <div class="plan-select">{{ __('messages.subscription.renew_free_plan') }}</div>
                @endif
              @else
                @if (!empty(getCurrentSubscription()) && !getCurrentSubscription()->isExpired() && ($plan->price == 0 || $plan->price != 0))
                  @if ($plan->hasZeroPlan->count() == 0)
                    <div class="plan-select"><a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}">{{ __('messages.subscription.switch_plan') }}</a></div>
                  @else
                    <div class="plan-select">{{ __('messages.subscription.renew_free_plan') }}</div>
                  @endif
                @else
                  @if($plan->hasZeroPlan->count() == 0)
                    <div class="plan-select"><a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}">{{ __('messages.subscription.choose_plan') }}</a></div>
                  @else
                    <div class="plan-select">{{ __('messages.subscription.renew_free_plan') }}</div>
                  @endif
                @endif
              @endif
            @else
              @if ($plan->hasZeroPlan->count() == 0)
              <div class="plan-select"><a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}">{{ __('messages.subscription.choose_plan') }}</a></div>
              @else
              <div class="plan-select">{{ __('messages.subscription.renew_free_plan') }}</div>
              @endif
            @endif
           @endif
        </div>
        @endforeach
     </div>
  </div>
</section>
@endsection