\@extends('custom::layouts.master')
@section('content')
<style>
  
  a:hover h6 {
    text-decoration: underline;
    color: #14e320; /* Change the color on hover as desired */
  }
  a h6{
    text-align: center;
    padding-top:10px;
  }
  .centered-text {
    text-align: center;
    margin-top:0px;

  }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      grid-gap: 20px;
      padding: 20px;
    }
    .img-container {
      height: 400px;
      overflow: hidden;
    }
    .card {
      border: 1px solid #000;
      padding: 15px;
      text-align: center;
      overflow: hidden;
      background-color: #000;
    }
    .card img {
      width: 100%;
      height: auto;
      transition: transform 30s ease;
      transform: translateY(0);
    }
    .card:hover img {
      transform: translateY(-100%);
    }
    h6 {
      margin-top: 10px;
      font-size:px;
    }
    .carde img {
      height: auto;
      width: auto;
      min-width: 100%;
      position: relative;
    }
  
    /* Responsive Styles */
    @media (max-width: 768px) {
      .gallery {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      }
      .img-container {
        height: 300px;
      }
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var cards = document.querySelectorAll('.card');
  
      cards.forEach(function(card) {
        var img = card.querySelector('img');
        var fastTransitionScheduled = false;
  
        card.addEventListener('mouseenter', function() {
          img.style.transition = 'transform 30s ease';
          img.style.transform = 'translateY(-100%)';
        });
  
        card.addEventListener('mouseleave', function() {
          if (!fastTransitionScheduled) {
            img.style.transition = 'transform 0.2s ease';
            img.style.transform = 'translateY(0)';
            fastTransitionScheduled = true;
          }
        });
  
        card.addEventListener('transitionend', function() {
          fastTransitionScheduled = false;
        });
      });
    });
  </script>
  <section id="VCARDe-breadcurmb" class="VCARDe-breadcurmb-section">
    <div class="container">
      <div class="breadcurmb-title text-center">
        <h2>Templates</h2>
      </div>
      
    </div>
  </section>
  <section class="hero-wrapper hero-1 hero-3 hero-4 hero-border overflow-hidden">
    <div class="hero-widget">
      <div class="hero-single-slider bg-center bg-cover" style="background-image: url(assets/assets-home/img1/hero/breadcrem.jpg);">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="hero-content">
                <h1 class="breadcrumb__title">Templates</h1>
                
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
  <section id="bis-project-feed" class="bis-project-feed-section inner-page-padding">
    <div class="gallery">
    <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Handyman-Services" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard31.jpg')}}" alt="Handyman Services">
                </a>
            </div>
            <a href="https://vcarde.com/Handyman-Services" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Handyman Services
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Taxi-driver" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard30.jpg')}}" alt="Taxi">
                </a>
            </div>
            <a href="https://vcarde.com/Taxi-driver" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Taxi
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Marriage" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard28.jpg')}}" alt="Marriage">
                </a>
            </div>
            <a href="https://vcarde.com/Marriage" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Marriage
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Pet-Clinic" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard29.jpg')}}" alt="Pet Clinic">
                </a>
            </div>
            <a href="https://vcarde.com/Pet-Clinic" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Pet Clinic
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Pet-Shop" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard27.jpg')}}" alt="Pet Shop">
                </a>
            </div>
            <a href="https://vcarde.com/Pet-Shop" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Pet Shop  
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Retailer" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard26.jpg')}}" alt="Retailer">
                </a>
            </div>
            <a href="https://vcarde.com/Retailer" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Retailer
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Social-Services" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard25.jpg')}}" alt="Social Services">
                </a>
            </div>
            <a href="https://vcarde.com/Social-Services" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Social Services 
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Teacher" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard24.jpg')}}" alt="Teacher">
                </a>
            </div>
            <a href="https://vcarde.com/Teacher" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Teacher   
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Consultant" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard23.jpg')}}" alt="Consultant vCard">
                </a>
            </div>
            <a href="https://vcarde.com/Consultant" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Consultant vCard
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>

        <div class="card">
            <div class="img-container">
                <a href="https://vcarde.com/Dynamic-vCard" target="_blank">
                    <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard22.jpg')}}" alt="Dynamic vCard">
                </a>
            </div>
            <a href="https://vcarde.com/Dynamic-vCard" target="_blank" style="text-decoration: none; color: white;">
                <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
                    Dynamic vCard   
                    <span style="margin-left: 5px;">➔</span>
                </h6>
            </a>
        </div>
    <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Social-Media-Influencers" target="_blank"><img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard21.jpg')}}" alt="Social Media Influencers   "></a>
        </div>
        <a href="https://vcarde.com/Social-Media-Influencers" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
  Social Media Influencers   
    <span style="margin-left: 5px;">➔</span>
  </h6>
  </a>
      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Culinary-and-Food" target="_blank" > <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard20.jpg')}}" alt="Culinary and Food Services   ">
        </div>
        
        <a href="https://vcarde.com/Culinary-and-Food" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Culinary & Food Services  <span style="margin-left: 5px;">➔</span> </h6>
   
  </h6>
</a>
      </div>
    <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/makeup-artist" target="_blank"> <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard19.jpg')}}" alt="Fashion and Beauty   ">
        </div>
        <a href="https://vcarde.com/makeup-artist" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Fashion & Beauty  <span style="margin-left: 5px;">➔</span> </h6>
    
  </h6>
</a>
      </div>
    <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Corporate-CEO" target="_blank" ><img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard18.jpg')}}" alt="Corporate CEOs/CXOs   ">
        </div>
        <a href="https://vcarde.com/Corporate-CEO" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Corporate CEOs/CXOs<span style="margin-left: 5px;">➔</span></h6>
    
  </h6>
</a>
      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Programmer" target="_blank" >  <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard17.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Programmer" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Programmer   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Lawyer" target="_blank" > <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard16.jpg')}}" alt="Lawyer   ">
        </div>
        <a href="https://vcarde.com/Lawyer" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Lawyer   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Salon-demo" target="_blank"><img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard15.jpg')}}" alt="Salon   ">
        </div>
        <a href="https://vcarde.com/Salon-demo" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Salon   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Event-Management" target="_blank">  <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard14.jpg')}}" alt="Event Management   ">
        </div>
        <a href="https://vcarde.com/Event-Management" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Event Management   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Hospital" target="_blank" >   <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard13.jpg')}}" alt="Hospital   ">
        </div>
        <a href="https://vcarde.com/Hospital" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Hospital   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/gym-vcard" target="_blank">  <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard12.jpg')}}" alt="Gym   ">
        </div>
        <a href="https://vcarde.com/gym-vcard" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Gym   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Pro-Network" target="_blank" >  <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard10.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Pro-Network" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Pro Network   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Corporate-Identity" target="_blank">   <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard9.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Corporate-Identity" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Corporate Identity   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Corporate-Classic" target="_blank" >   <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard8.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Corporate-Classic" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Corporate Classic   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Business-Beacon" target="_blank" ><img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard7.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Business-Beacon" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Business Beacon   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Modern-Edge" target="_blank"> <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard6.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Modern-Edge" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Modern Edge   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Corporate-Connect" target="_blank" >   <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard5.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Corporate-Connect" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Corporate Connect   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Professional" target="_blank"> <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard4.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Professional" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Professional   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Clean-Canvas" target="_blank"> <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard3.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Clean-Canvas" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Clean Canvas   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Executive-Profile" target="_blank">  <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard2.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Executive-Profile" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Executive Profile   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="card">
        <div class="img-container">
        <a href="https://vcarde.com/Simple-Contact" target="_blank">   <img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard1.jpg')}}" alt="Programmer   ">
        </div>
        <a href="https://vcarde.com/Simple-Contact" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Simple Contact   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
      <div class="carde">
        <div class="img-containere">
        <a href="https://vcarde.com/Portfolio" target="_blank"><img loading="lazy" src="{{ asset('assets/assets-home/vcards/vcard11.jpg')}}" alt="Portfolio   ">
        </div>
        <a href="https://vcarde.com/Portfolio" target="_blank" style="text-decoration: none; color: white;">
    <h6 class="centered-text" style="display: flex; align-items: center; cursor: pointer; transition: color 0.3s;">
    Portfolio   
    <span style="margin-left: 5px;">➔</span>
  </h6>
</a>

      </div>
    </div>
  </section>
@endsection
