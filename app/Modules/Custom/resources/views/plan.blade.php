@extends('custom::layouts.master')
@section('style')
<style>
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);
.snip1517 {
  font-family: 'Source Sans Pro', Arial, sans-serif;
  color: #ffffff;
  text-align: left;
  font-size: 16px;
  width: 100%;
  /* max-width: 1000px; */
  /* margin: 30px 10px; */
}

.snip1517 img {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  z-index: -1;
}

.snip1517 .plan {
  margin: 0 0.5%;
  width: 24%;
  padding-top: 10px;
  position: relative;
  float: left;
  overflow: hidden;
  background-color: #222f3d;
  border-radius: 8px;
  margin-top: 1rem;
}

.plan-in-active {
    color: grey;
}
.active-plan {
    color: #c3ef3f;
}

.strike-plan {
    text-decoration: line-through;
}

.snip1517 .plan:hover i,
.snip1517 .plan.hover i {
  -webkit-transform: scale(1.2);
  transform: scale(1.2);
}

.snip1517 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease-out;
  transition: all 0.25s ease-out;
}

.snip1517 header {
  color: #ffffff;
}

.snip1517 .plan-title {
  line-height: 60px;
  position: relative;
  margin: 0;
  padding: 0 20px;
  font-size: 1.6em;
  letter-spacing: 2px;
  font-weight: 700;
}

.snip1517 .plan-title:after {
  position: absolute;
  content: '';
  top: 100%;
  left: 20px;
  width: 30px;
  height: 3px;
  background-color: #fff;
}

.snip1517 .plan-cost {
  padding: 0 20px;
  margin: 0;
}

.snip1517 .plan-price {
  font-weight: 400;
  font-size: 2.8em;
  margin: 10px 0;
  display: inline-block;
}

.snip1517 .plan-type {
  opacity: 0.8;
  font-size: 0.7em;
  text-transform: uppercase;
}

.snip1517 .plan-features {
  padding: 0 0 20px;
  margin: 0;
  list-style: outside none none;
  font-size: 0.9em;
}

.snip1517 .plan-features li {
  padding: 8px 20px;
}

.snip1517 .plan-features i {
  margin-right: 8px;
  color: rgba(255, 255, 255, 0.5);
}

.snip1517 .plan-select {
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  padding: 20px;
  text-align: center;
}

/* .snip1517 .plan-select a {
  color: #ffffff;
  text-decoration: none;
  padding: 12px 20px;
  font-size: 0.75em;
  font-weight: 600;
  border-radius: 8px;
  text-transform: uppercase;
  letter-spacing: 4px;
  display: inline-block;
  background-size: 200%, 1px;
  -webkit-transition: 500ms all ease;
  transition: 500ms all ease;
  background-image: -webkit-gradient(linear, left top, right top, from(#02F746), color-stop(50%, #3C10F2), to(#02F746));
  background-image: linear-gradient(90deg, #02F746 0%, #3C10F2 50%, #02F746);
} */

.snip1517 .plan-select a {
  color: #fff;
  background-image: linear-gradient(90deg, #02F746 0%, #3C10F2 50%, #02F746);
  border: none;
  border-radius: 30px;
  padding: 10px 20px;
  font-weight: 600;
  text-decoration: none;
  transition: background-position 0.3s, border-image 0.3s;
  background-size: 200% auto;
  background-position: 100% 0;
}

.snip1517 .plan-select a:hover {
  background-position: 0 0;
  border-image: linear-gradient(90deg, #0ad65f 0%, #131923 50%, #0ad65f 100%);
}


.snip1517 .plan-select a:hover {
  background-color: #1b8ad8 !important;
}

.snip1517 .featured {
  margin-top: -10px;
  z-index: 1;
  border-radius: 8px;
  border: 2px solid #156dab;
  background-color: #156dab;
}

.snip1517 .featured .plan-select {
  padding: 30px 20px;
}

.snip1517 .featured .plan-select a {
  background-color: #10507e;
}

@media only screen and (max-width: 767px) {
  .snip1517 .plan {
    width: 49%;
    margin: 0.5%;
  }
  .snip1517 .plan-title,
  .snip1517 .plan-select a {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  .snip1517 .plan-select,
  .snip1517 .featured .plan-select {
    padding: 20px;
  }
  .snip1517 .featured {
    margin-top: 0;
  }
  .snip1517 .featured header {
    line-height: 70px;
  }
}

@media only screen and (max-width: 440px) {
  .snip1517 .plan {
    margin: 0.5% 0;
    width: 100%;
  }
}
.free-forever {
  position: relative;   /* Needed to apply z-index */
  z-index: 10;          /* Higher z-index brings it to front */
  color: white;         /* Optional, depending on your background */
  margin-top: 10px;     /* Adjust spacing to avoid overlap */
  font-size: 1.5rem;    /* Adjust for readability */

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
                            <h1 class="free-forever">Pricing</h1>
                            <h2 class="free-forever">Free Lifetime Plan</h2>
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
<section id="s2-pricing" class="bis-project-feed-section inner-page-padding">
    <div class="container mt-5">
        <div class="snip1517">
            @foreach ($plans as $plan)
            <div class="plan">
                <header>
                <h4 class="plan-title"> {!! $plan->name !!}</h4>
                <div class="plan-cost"><span class="plan-price">{{ $plan->currency->currency_icon }}{{($plan->price) }}</span>@if ($plan->frequency == 1)<span class="plan-type">/ {{ __('messages.plan.monthly') }}</span>@elseif($plan->frequency == 2)<span class="plan-type">/{{ __('messages.plan.yearly') }}</span>@endif</div>
                </header>
                <ul class="plan-features">
                    @foreach (getPlanFeature($plan) as $feature => $value)
                        <li><i class="{{ $value == 0 ? 'ion-android-remove plan-in-active' : 'ion-android-remove'}}"> </i><span class="{{ $value == 0 ? 'plan-in-active strike-plan' : 'active-plan'}}">{{ __('messages.feature.' . $feature) }}</span></li>
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