<x-app-layout>
    <section class="banner-section">
        <!--=== Hero Wrapper ===-->
        <div class="hero-wrapper-one gray-bg">
            <div class="shape shape-one animate-float-y"><span><img src="assets/images/hero/shape-1.png" alt="shape"></span></div>
            <div class="shape shape-two animate-float-x"><span><img src="assets/images/hero/shape-2.png" alt="shape"></span></div>
            <div class="shape shape-three animate-float-x"><span><img src="assets/images/hero/shape-3.png" alt="shape"></span></div>
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-xl-6 col-lg-12">
                        <!--=== Hero Content ===-->
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">Sow the Seeds of Wealth with {{ config('app.name') }}</h1>
                            <p class="wow fadeInDown" data-wow-delay=".6s">Empower sustainable farming while growing your wealth. Join us in shaping the future of the cocoa industry, one investment at a time.</p>
                            <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                                <a href="{{ route('register') }}" class="main-btn golden-btn mb-10">Get Started</a>
                                <a href="{{ route('login') }}" class="main-btn filled-btn mb-10">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <!--=== Hero Image Box ===-->
                        <div class="hero-image-box d-xl-block d-none wow fadeInRight" data-wow-delay=".75s">
                            <img src="/images/hero-image-1.jpg" alt="Hero Image">
                            <div class="shape hero-svg">
                                <svg width="237" height="569" viewBox="0 0 237 569" fill="none">
                                    <path d="M0.552583 568.307L1.99989 0.226473C1.99989 0.226473 237.025 -9.37181 236.276 284.731C235.527 578.834 0.552583 568.307 0.552583 568.307Z" fill="#F1D2A9"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Banner Section ======-->
    <!--====== Start Features Section ======-->
    <section class="features-section-two p-r z-1">
        <!--=== Features Wrapper ===-->
        <div class="features-wrapper-two main-bg wow fadeInDown">
            <div class="shape shape-one"><span><img src="assets/images/shape/leaf-5.png" alt="Leaf"></span></div>
            <div class="shape shape-two"><span><img src="assets/images/shape/leaf-5.png" alt="Leaf"></span></div>
            <div class="shape shape-three"><span><img src="assets/images/shape/leaf-5.png" alt="Leaf"></span></div>
            <div class="features-area pb-30">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--=== Features Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="text">
                                <div class="icon">
                                    <i class="fl-icon flaticon-growth"></i>
                                    <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <h5 class="title">Cocoa Farms and Infrastructure</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--=== Features Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInDown">
                            <div class="text">
                                <div class="icon">
                                    <i class="fl-icon flaticon-watering-plants"></i>
                                    <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <h5 class="title">Cocoa Processing & Value Addition</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--=== Features Item ===-->
                        <div class="single-features-item-two mb-40 wow fadeInUp">
                            <div class="text">
                                <div class="icon">
                                    <i class="fl-icon flaticon-vision"></i>
                                    <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                                <h5 class="title">Research & Development in Cocoa Innovation</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Counter Area ===-->
            <div class="counter-area">
                <div class="row pt-70">
                    <div class="col-lg-3 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInDown">
                            <div class="inner-counter">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h2 class="number">+<span class="count">50</span>M</h2>
                                <p>Fund Raised</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h2 class="number">+<span class="count">200</span>M</h2>
                                <p>Investors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInDown">
                            <div class="inner-counter">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h2 class="number">+<span class="count">95</span>K</h2>
                                <p>Distributions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter">
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <h2 class="number"><span class="count">11</span>+</h2>
                                <p>Countries World Wide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Experience Box ===-->
        <div class="experience-box-two wow fadeInRight">
            <h2 class="number"><span class="count">25</span></h2>
            <h6>Years Of
                Experience</h6>
            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
        </div>
    </section>
    <!--====== End Features Section ======-->
    <section class="about-section">
        <div class="container-fluid">
            <!--=== About Wrapper ===-->
            <div class="about-wrapper gray-bg wow fadeInUp">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-xl-5 col-lg-12">
                            <!--=== About Image Box ===-->
                            <div class="about-two_image-box wow fadeInLeft">
                                <img src="assets/images/about/about-6.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <!--=== About Content Box ===-->
                            <div class="about-three_content-box pl-lg-70 wow fadeInRight">
                                <!--=== Section Title ===-->
                                <div class="section-title mb-25 wow fadeInUp">
                                    <span class="sub-title"><i class="flaticon-plant"></i>About {{ config('app.name') }}</span>
                                    <h2>Why we exists</h2>
                                </div>
                                <p class="mb-40 wow fadeInDown">At {{ config('app.name') }}, we combine ethical investment opportunities with sustainable cocoa farming to empower local farmers, promote environmental stewardship, and deliver solid returns to our investors. Join us as we reshape the future of cocoa farming.</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!--=== Fancy About Item ===-->
                                        <div class="fancy-about-item mb-40 wow fadeInUp">
                                            <div class="text">
                                                <h5><i class="far fa-angle-double-right"></i>Sustainable Farming Practices</h5>
                                                <p>We promote eco-friendly farming methods that protect the environment and ensure long-term crop productivity.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!--=== Fancy About Item ===-->
                                        <div class="fancy-about-item mb-40 wow fadeInDown">
                                            <div class="text">
                                                <h5><i class="far fa-angle-double-right"></i>Empowering Farmers</h5>
                                                <p>We equip farmers with training and resources to boost productivity and improve their livelihoods.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!--=== Fancy About Item ===-->
                                        <div class="fancy-about-item mb-40 wow fadeInUp">
                                            <div class="text">
                                                <h5><i class="far fa-angle-double-right"></i>Transparent Investment Process</h5>
                                                <p>Track your investments in real-time with complete transparency on fund allocation and progress.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!--=== Fancy About Item ===-->
                                        <div class="fancy-about-item mb-40 wow fadeInUp">
                                            <div class="text">
                                                <h5><i class="far fa-angle-double-right"></i>Positive Environmental Impact</h5>
                                                <p>A portion of every investment supports reforestation and eco-friendly farming initiatives.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section ======-->
    <!--====== Start Services Section ======-->
    <section class="service-section pt-100 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center mb-100 wow fadeInDown">
                        <span class="sub-title"><i class="flaticon-plant"></i>What We Do</span>
                        <h2>We Care About You</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service-item-two mb-80 wow fadeInDown" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="flaticon-scissors"></i>
                        </div>
                        <div class="text">
                            <h4 class="title"><a href="#">Promote Ethical Cocoa Production</a></h4>
                            <p>Our focus is on producing high-quality cocoa through ethical practices that benefit both farmers and the environment.</p>
                            <a href="#" class="icon-btn"><i class="fal fa-long-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service-item-two mb-80 wow fadeInUp" data-wow-delay=".25s">
                        <div class="icon">
                            <i class="flaticon-watering"></i>
                        </div>
                        <div class="text">
                            <h4 class="title"><a href="#">Connect Farms to Global Markets</a></h4>
                            <p>We bridge the gap between farmers and international markets, ensuring fair trade practices and better pricing for their products</p>
                            <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service-item-two mb-80 wow fadeInDown" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-yard"></i>
                        </div>
                        <div class="text">
                            <h4 class="title"><a href="#">Innovate with Technology</a></h4>
                            <p>We implement modern farming tools, data-driven strategies, and advanced techniques to optimize yields and improve efficiency.</p>
                            <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-service-item-two mb-80 wow fadeInUp" data-wow-delay=".35s">
                        <div class="icon">
                            <i class="flaticon-growing"></i>
                        </div>
                        <div class="text">
                            <h4 class="title"><a href="#">Cultivate Sustainable Cocoa Farms</a></h4>
                            <p>We manage and support cocoa farms using eco-friendly methods that enhance soil fertility, conserve resources, and ensure long-term productivity.</p>
                            <a href="#" class="icon-btn"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Services Section ======-->
    <!--====== Start Testimonial Section ======-->
    <section class="testimonial-section">
        <div class="container-fluid">
            <!--=== Testimonial Wrapper ===-->
            <div class="testimonial-quote-area p-r z-1 main-bg">
                <div class="shape shape-one"><span><img src="assets/images/shape/leaf-4.png" alt="Leaf"></span></div>
                <!--====== Quote Area ======-->
                <div class="quote-wrapper wow fadeInDown">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <!--=== Client Quote Box ===-->
                                <div class="client-quote-box">
                                    <div class="icon"><i class="fal fa-long-arrow-right"></i></div>
                                    <div class="text">
                                        <h2 class="number"><span class="count">10</span>k+</h2>
                                        <h4>Global Clients Happy to Get
                                            Our gardening Services </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Testimonial Area ======-->
                <div class="testimonial-area pt-70 pb-50 pl-15 pr-15 wow fadeInUp">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-1 order-md-1 order-2">
                                <!--=== Testimonial Dots ===-->
                                <div class="testimonial-dots mb-20"></div>
                            </div>
                            <div class="col-lg-11 order-md-2 order-1">
                                <!--=== Testimonial Slider ===-->
                                <div class="testimonial-slider-three mb-20">
                                    <!--=== Testimonial Item ===-->
                                    <div class="single-testimonial-item-three d-flex">
                                        <div class="testimonial-inner-content mb-30">
                                            <ul class="ratings">
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <p>On the other hand we denounce with righteous indignation and dislike men who are beguiled and
                                                demoralized by the charms of pleasure</p>
                                            <div class="quote-title">
                                                <div class="icon">
                                                    <img src="assets/images/testimonial/quote3.png" alt="Quote Image">
                                                </div>
                                                <div class="title">
                                                    <h6>Norman M. Devore</h6>
                                                    <p class="position">CEO & Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-author mb-30">
                                            <img src="assets/images/testimonial/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                        </div>
                                    </div>
                                    <!--=== Testimonial Item ===-->
                                    <div class="single-testimonial-item-three d-flex">
                                        <div class="testimonial-inner-content mb-30">
                                            <ul class="ratings">
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <p>On the other hand we denounce with righteous indignation and dislike men who are beguiled and
                                                demoralized by the charms of pleasure</p>
                                            <div class="quote-title">
                                                <div class="icon">
                                                    <img src="assets/images/testimonial/quote3.png" alt="Quote Image">
                                                </div>
                                                <div class="title">
                                                    <h6>Douglas D. Hall</h6>
                                                    <p class="position">Senior Gardener</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-author mb-30">
                                            <img src="assets/images/testimonial/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                        </div>
                                    </div>
                                    <!--=== Testimonial Item ===-->
                                    <div class="single-testimonial-item-three d-flex">
                                        <div class="testimonial-inner-content mb-30">
                                            <ul class="ratings">
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <p>On the other hand we denounce with righteous indignation and dislike men who are beguiled and
                                                demoralized by the charms of pleasure</p>
                                            <div class="quote-title">
                                                <div class="icon">
                                                    <img src="assets/images/testimonial/quote3.png" alt="Quote Image">
                                                </div>
                                                <div class="title">
                                                    <h6>Norman M. Devore</h6>
                                                    <p class="position">CEO & Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-author mb-30">
                                            <img src="assets/images/testimonial/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                        </div>
                                    </div>
                                    <!--=== Testimonial Item ===-->
                                    <div class="single-testimonial-item-three d-flex">
                                        <div class="testimonial-inner-content mb-30">
                                            <ul class="ratings">
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <p>On the other hand we denounce with righteous indignation and dislike men who are beguiled and
                                                demoralized by the charms of pleasure</p>
                                            <div class="quote-title">
                                                <div class="icon">
                                                    <img src="assets/images/testimonial/quote3.png" alt="Quote Image">
                                                </div>
                                                <div class="title">
                                                    <h6>Douglas D. Hall</h6>
                                                    <p class="position">Senior Gardener</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-author mb-30">
                                            <img src="assets/images/testimonial/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Testimonial Section ======-->
</x-app-layout>
