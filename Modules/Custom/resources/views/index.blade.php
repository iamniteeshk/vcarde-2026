@extends('custom::layouts.master')
@section('content')
<style>
.trans{
    background-color: transparent;
}
.spin-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.spinning-image {
    width: 200px; /* Adjust the size as needed */
    height: 200px; /* Adjust the size as needed */
    animation: spin 5s linear infinite; /* Adjust the duration as needed */
}
@keyframes spin {
    0%, 100% {
        transform: translateX(0) rotate(0deg);
    }
    25%, 75% {
        transform: translateX(20px) rotate(15deg);
    }
    50% {
        transform: translateX(-20px) rotate(-15deg);
    }
}
</style>
<section id="nft-banner" class="nft-banner-section position-relative">
    <span class="nft-shape1 position-absolute"><img src="{{ ('assets/assets-home/img/nft/banner/b-sh1.png')}}" alt=""></span>
    <span class="nft-shape3 position-absolute"><img src="{{ ('assets/assets-home/img/nft/banner/b-sh2.png')}}" alt=""></span>
    <span class="nft-shape4 position-absolute" data-parallax='{"x" : -250}'><img src="{{ ('assets/assets-home/img/nft/banner/b-sh7.png')}}" alt=""></span>
    <span class="nft-shape5 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img src="{{ ('assets/assets-home/img/nft/banner/b-sh6.png')}}" alt=""></span>
    <div class="container">
        <div class="nft-banner-content position-relative">
            <div class="nft-banner-text nft-headline pera-content  position-relative">
                <span class="nft-shape2 position-absolute"><img src="{{ ('assets/assets-home/img/nft/banner/b-sh3.png')}}" alt=""></span>
                <h1 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">NFC Smart Business Card <br><span>Site.</span>
                </h1>
                <p class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                VCARDe - NFC Card, Digital Business Card, Visit Cards Design, QR Code Card, NFC Business Card and Digital Visiting Card Maker</p>
                <div class="nft-btn wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                    <a class="d-flex justify-content-center align-items-center" href="https://vcarde.com/login">VCard Free Forever</a>
                </div>
            </div>
            <div class="nft-banner-img position-absolute">
                <img width="700" height="350"data-tilt data-tilt-max="10" src="{{ ('assets/assets-home/img/nft/banner/b-sh8.png')}}" alt="">
                <span class="img-shape position-absolute"><img class="spinning-image" src="{{ ('assets/assets-home/img/nft/banner/b-sh5.png')}}" alt=""></span>
                <span class="img-shape2 position-absolute"><img src="{{ ('assets/assets-home/img/nft/banner/b-sh4.png')}}" alt=""></span>
            </div>
        </div>
    </div>
</section>
<section id="nft-feature" class="nft-feature-section position-relative">
    <span class="nft-shape1 position-absolute"><img src="{{ ('assets/assets-home/img/nft/shape/sh2.png')}}" alt=""></span>
    <span class="nft-shape2 position-absolute" data-parallax='{"y" : 100, "rotateY":500}'><img src="{{ ('assets/assets-home/img/nft/shape/st1.png')}}" alt=""></span>
    <div class="container">
        <div class="nft-section-title text-center  nft-headline pera-content">
            <h2><span class="left-icon"><img src="{{ ('assets/assets-home/img/nft/icon/title-icon3.png')}}"></span>Features of VCARDe  <span class="right-icon"><img src="{{ ('assets/assets-home/img/nft/icon/title-icon3.png')}}"></span></h2>
            <p>VCARDe  helps you spend less time and money on printing and handing out physical business cards</p>
        </div>
        <div class="nft-feature-content">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="nft-feature-inner-item">
                        <div class="thx-inner-item">
                            <div class="thx-inner-icon-ttitle d-flex align-items-center nft-headline">
                                <div class="thx-inner-icon">
                                    <img src="{{ ('assets/assets-home/img/nft/icon/ic5.png')}}" alt="">
                                </div>
                                <div class="thx-inner-title">
                                    <h3>Customize Your Business Cards Easily</h3>
                                </div>
                            </div>
                            <div class="thx-inner-text pera-content">
                                <p>Create a digital business card that suits your brand. VCARDe  takes the hassle out of designing a unique digital business card. Customize your business card by adding a banner, logo, title, description, and more - anyhow you want!</p>
                                <div class="nft-btn-2">
                                    <a class="d-flex justify-content-center align-items-center" href="https://m.vcarde.com/my-account/">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="nft-feature-inner-item">
                        <div class="thx-inner-item">
                            <div class="thx-inner-icon-ttitle d-flex align-items-center nft-headline">
                                <div class="thx-inner-icon">
                                    <img src="{{ ('assets/assets-home/img/nft/icon/ic6.png')}}" alt="">
                                </div>
                                <div class="thx-inner-title">
                                    <h3>Update Your Business Details Anytime</h3>
                                </div>
                            </div>
                            <div class="thx-inner-text pera-content">
                                <p>VCARDe  makes it convenient for you to update your business details and your digital business card. You can edit your business details and modify the design of your digital business cards - whenever you want, at no extra cost.</p>
                                <div class="nft-btn-2">
                                    <a class="d-flex justify-content-center align-items-center" href="{{ url('/home/templates') }}">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeFromUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="nft-feature-inner-item">
                        <div class="thx-inner-item">
                            <div class="thx-inner-icon-ttitle d-flex align-items-center nft-headline">
                                <div class="thx-inner-icon">
                                    <img src="{{ ('assets/assets-home/img/nft/icon/ic7.png')}}" alt="">
                                </div>
                                <div class="thx-inner-title">
                                    <h3>Reach A Larger Audience</h3>
                                </div>
                            </div>
                            <div class="thx-inner-text pera-content">
                                <p>VCARDe  helps you reach a larger audience with minimal effort. You can add all your social media profiles and all links related to your business. You can even add images, files, and other media - without worrying about space.</p>
                                <div class="nft-btn-2">
                                    <a class="d-flex justify-content-center align-items-center" href="{{ url('/home/templates') }}">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="saas_two_about" class="saas_two_about_section relative-position">
    <div class="container">
        <div class="about_content_s2">
            <div class="row">
                <div class="col-lg-6 col-md-12 wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="s2-about_img">
                        <img src="{{ ('assets/assets-home/img/saas-c/about/s_ab1.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeFromRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="s2-about_text_icon">
                        <div class="s2-about_text saas2-headline pera-content">
                            <h3>The ultimate dashboard for an enhanced experience</h3><br>
                            <h4>Gain Critical Insights</h4><p>
                            <p>Effortlessly access and edit vital business data<br><br>Visualize device, browser, and platform statistics for your card viewers</p><br>
                            <h4>Streamlined Control</h4><p>
                            <p>Craft digital business cards, oversee them, and effortlessly distribute them, all through a unified dashboard<br><br>Arrange and update business details at your convenience</p>
                            <a href="https://vcarde.com/login"> Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<section id="nft-cta" class="nft-cta-section position-relative">
    <div class="container">
        <div class="nft-cta-content position-relative">
            <span class="nft-shape1 position-absolute"><img src="{{ ('assets/assets-home/img/nft/shape/st1.png')}}" alt=""></span>
            <span class="nft-shape2 position-absolute"><img src="{{ ('assets/assets-home/img/nft/shape/st2.png')}}" alt=""></span>
            <div class="nft-cta-text">
                <div class="nft-section-title text-center  nft-headline pera-content">
                    <h2>Numerous Vcard
                        templates available </h2>
                    <p>Explore a diverse selection of Vcard templates, offering endless possibilities for your personal or professional profiles. </p><br>
                </div>
                <div class="nft-btn d-flex justify-content-center">
                    <a class="d-flex align-items-center justify-content-center" href="{{ url('/home/templates') }}">View template</a>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br>
<section id="nfc-smart-business-cards" class="nfc-business-cards-section position-relative">
    <div class="container">
        <div class="nfc-section-title text-center nft-headline pera-content">
            <h2 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">VCARDe NFC Smart Business Cards: Revolutionizing the Way You Network</h2>
        </div>

        <br><br>

        <div class="nfc-feature-content">
            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">The Evolution of Networking</h3>
            <p class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">In the digital age, networking has evolved beyond traditional methods. VCARDe NFC smart business cards leverage NFC technology to offer seamless, instant sharing of contact information, transforming how professionals connect and network.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Understanding NFC Technology: The Backbone of Smart Business Cards</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">What is NFC?</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">NFC, or Near Field Communication, is a wireless technology that enables data exchange between devices within close proximity. It's widely used in contactless payments and now in smart business cards.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">How Does NFC Work in Business Cards?</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe NFC smart business cards contain an embedded NFC chip that shares digital information when tapped against NFC-enabled devices, making the exchange of contact details and other information instantaneous and hassle-free.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Features of VCARDe NFC Smart Business Cards</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Customization</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe offers extensive customization options, allowing you to design a card that reflects your brand identity with various materials and personalized designs.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">High-Quality Materials</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe cards are crafted from durable materials such as metal, bamboo, and premium plastics, ensuring longevity and a lasting impression.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">No App Required</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">These cards work with any NFC-enabled device without the need for additional apps, making them accessible and easy to use for everyone.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Data Security</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe NFC smart business cards feature encrypted data transmission, ensuring that your information remains secure during exchanges.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Benefits of Using VCARDe NFC Smart Business Cards</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Instant Information Sharing</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Share your contact details and more instantly with just a tap, eliminating the need for manual entry and ensuring accuracy.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Eco-Friendly Alternative</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe NFC smart business cards are reusable and updateable, reducing the need for paper cards and contributing to sustainability.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Enhanced Professionalism</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Using a VCARDe card enhances your professional image, showcasing your tech-savvy and forward-thinking approach.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Versatility and Flexibility</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">These cards can share a wide range of information, making them ideal for various professional settings.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Durability and Longevity</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Built to last, VCARDe NFC smart business cards are a cost-effective investment that can be used for years.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">How to Use a VCARDe NFC Smart Business Card</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 1: Activate Your Card</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Link your card to your desired digital profile using VCARDe’s online platform.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 2: Share Your Information</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Tap your card on any NFC-enabled device to instantly share your information.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 3: Update as Needed</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Easily update your card's information anytime through the VCARDe platform.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Design Options for VCARDe NFC Smart Business Cards</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Metal NFC Cards</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">These premium cards offer a sleek, modern look, perfect for making a bold statement.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Bamboo NFC Cards</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Eco-friendly and stylish, bamboo NFC cards are ideal for those who prioritize sustainability.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Plastic NFC Cards</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Durable and versatile, these cards come in various finishes to suit your brand’s look.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Artistic QR NFC Cards</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Perfect for creatives, these cards combine NFC functionality with unique designs and QR codes.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Why Choose VCARDe NFC Smart Business Cards?</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">High-Quality Materials</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe cards are made from the finest materials to ensure durability and style.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Extensive Customization Options</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Create a card that truly represents your brand with VCARDe's wide range of customization options.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">User-Friendly Experience</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">No apps required—just tap and share your information effortlessly.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Eco-Friendly and Sustainable</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">These cards are reusable and contribute to reducing paper waste.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Advanced Security Features</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe ensures your data is secure with encrypted NFC technology.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Comparing VCARDe NFC Smart Business Cards to Traditional Business Cards</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Information Sharing Capacity</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Share comprehensive digital profiles instantly, unlike traditional cards limited to printed details.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Durability and Lifespan</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe cards are designed to last, unlike traditional paper cards that wear out quickly.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Environmental Impact</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Reduce your carbon footprint with reusable NFC smart cards compared to disposable paper cards.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">User Convenience</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Instant information sharing with a tap, no need for manual data entry.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">The Future of Networking with VCARDe NFC Smart Business Cards</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Increasing Adoption of Digital Solutions</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">NFC smart cards are becoming the standard for modern networking.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Integration with Other Technologies</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Seamlessly integrate with CRM systems and digital wallets for enhanced networking capabilities.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Enhanced Data Analytics</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Leverage data analytics to optimize your networking efforts with VCARDe NFC cards.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Continuous Innovation</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">VCARDe is committed to advancing NFC technology, offering new features to enhance your experience.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Ordering Your VCARDe NFC Smart Business Card</h3>
            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 1: Choose Your Card Type</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Select from VCARDe’s range of materials and designs to fit your professional needs.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 2: Customize Your Card</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Use VCARDe’s online platform to add your logo, contact details, and other information.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 3: Place Your Order</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Order securely through the VCARDe website with fast shipping options available.</p>

            <h4 class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">Step 4: Activate and Start Using Your Card</h4>
            <p class="wow fadeFromUp" data-wow-delay="700ms" data-wow-duration="1500ms">Activate your card upon arrival and start sharing your information instantly.</p>
            <br>

            <h3 class="wow fadeFromUp" data-wow-delay="300ms" data-wow-duration="1500ms">Embrace the Future of Networking with VCARDe NFC Smart Business Cards</h3>
            <p class="wow fadeFromUp" data-wow-delay="500ms" data-wow-duration="1500ms">VCARDe NFC smart business cards offer a modern, efficient, and eco-friendly way to network. With extensive customization, high-quality materials, and user-friendly features, these cards are designed to make a lasting impression. Adopt this innovative technology today and experience the many benefits it brings to your professional networking efforts.</p>
        </div>
    </div>
</section>


@endsection