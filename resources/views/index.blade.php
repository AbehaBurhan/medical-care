@extends('layouts.master')

@section('content')
    <section class="top-space-margin overflow-hidden position-relative p-0 border-radius-10px lg-no-border-radius"
        data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('assets/images/demo-medical-hero-banner-bg.jpg') }}')">
        <div class="container h-100">
            <div class="row justify-content-md-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7 pt-13 xl-pt-6 lg-pb-17 md-pb-6 sm-pt-40px text-center text-lg-start"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-19 mb-15px d-block text-base-color">Tell us your problem!</span>
                    <h1 class="text-dark-gray fw-800 xs-fs-65 ls-minus-3px mb-45px d-block">Most trusted health partner for
                        your life.</h1>
                    {{-- <a href="demo-medical-appointment.html"
                        class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge me-15px xs-me-5px">
                        <span>
                            <span class="btn-double-text" data-text="Trusted doctor">Find a doctor</span>
                        </span>
                    </a> --}}
                    {{-- <a href="demo-medical-appointment.html"
                        class="btn btn-medium btn-switch-text left-icon btn-transparent-light-gray border-color-transparent-dark-gray btn-round-edge">
                        <span>
                            <span><i class="feather icon-feather-video"></i></span>
                            <span class="btn-double-text" data-text="Video call">Video call</span>
                        </span>
                    </a> --}}
                </div>
                <div
                    class="col-xxl-7 col-xl-6 col-lg-5 col-md-10 position-relative align-self-end lg-pb-8 md-pb-1 sm-pb-10 xs-pb-30">
                    <div class="w-85px h-85px border-radius-100 d-flex align-items-center justify-content-center position-absolute z-index-9 left-50px lg-left-5px sm-left-30px top-100px lg-top-30px mt-30 translate-middle-y"
                        data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div
                            class="bg-red video-icon-box video-icon-medium feature-box-icon-rounded w-80px h-80px rounded-circle d-flex align-items-center justify-content-center">
                            <span>
                                <span class="video-icon">
                                    <i
                                        class="bi bi-heart-fill icon-very-medium text-white position-relative top-3px m-0"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr border border-1 border-color-red"></span>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <figure class="outside-box-right-2 position-relative">
                        <img src="{{ asset('assets/images/doctor.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
        <div class="bg-base-color position-absolute bottom-0px w-100 pt-30px pb-30px">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-auto md-mb-10px">
                        <div class="d-flex align-items-center text-white">
                            <i class="bi bi-info-circle icon-very-medium me-10px"></i>
                            <span class="fw-600 fs-18">Covid-19 information</span>
                            <span class="h-20px w-1px d-none d-lg-block bg-white opacity-5 ms-30px"></span>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 text-white text-center text-lg-start">
                        <div class="swiper slider-one-slide"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 20, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper align-items-center">
                                <!-- start text slider item -->
                                <div class="fs-18 swiper-slide">Get vaccinated as soon as it's your turn and follow guidance
                                    on vaccination.</div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="fs-18 swiper-slide">Clean your hands frequently with alcohol-based hand soap and
                                    water.</div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="fs-18 swiper-slide">Cover your mouth and nose with a bent elbow or tissue when
                                    you cough.</div>
                                <!-- end text slider item -->
                            </div>
                            <!-- start slider navigation -->
                            <!-- <div class="swiper-button-previous-nav swiper-button-prev"><i class="bi bi-arrow-left icon-extra-medium text-dark-gray d-flex"></i></div>
                            <div class="swiper-button-next-nav swiper-button-next"><i class="bi bi-arrow-right icon-extra-medium text-dark-gray d-flex"></i></div> -->
                            <!-- end slider pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start section -->
    <section id="about_section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 md-mb-15 xs-mb-20 offset-lg-0 offset-md-1 position-relative">
                    <div class="w-75" data-animation-delay="200" data-shadow-animation="true"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ asset('assets/images/about-doctor-1.png') }}" alt="" class="border-radius-6px w-100">
                       
                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px bottom-minus-50px"
                        data-shadow-animation="true" data-animation-delay="100"
                        data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(20px)">
                        <img src="{{ asset('assets/images/about-doctor-2.png') }}" alt=""
                            class="border-radius-6px box-shadow-quadruple-large w-100" />
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-right text-md-start"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span
                            class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i
                                class="bi bi-layout-text-sidebar-reverse text-base-color fs-20"></i></span>About medcare
                        hospital</span>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Welcome to our medcare hospital.</h2>
                    <p class="mb-30px w-95 lg-w-100 xs-mb-25px">We value each and every human life placed in our hands and
                        constantly work towards meeting the expectations of our customers and stake holders.</p>
                    <div class="row align-items-center text-right text-sm-start">
                        <div class="col-sm-auto xs-mb-10px">
                            <h2 class="alt-font text-dark-gray mb-0 d-inline-block align-middle me-10px fw-800">722+</h2>
                            <div
                                class="text-center bg-golden-yellow text-white fs-14 ls-1px border-radius-4px d-inline-block ps-15px pe-15px lh-34 align-middle me-5px">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i></div>
                        </div>
                        <div
                            class="col-sm border-start border-2 border-color-dark-gray ps-25px ms-10px xl-ps-20px xs-border-start-0 xs-ps-15px xs-pe-15px xs-m-0">
                            <p class="m-0 lh-24 text-dark-gray fw-600">5 star reviews from our satisfied people.</p>
                        </div>
                    </div>
                    <div class="d-inline-block mt-40px xs-mt-30px">
                        <a href="#contact"
                            class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge me-15px xs-me-5px">
                            <span>
                                <span class="btn-double-text" data-text="Trusted doctor">Contact Us</span>
                            </span>
                        </a>
                        {{-- <a href="demo-medical-timetable.html"
                            class="btn btn-medium btn-switch-text left-icon btn-transparent-light-gray border-color-transparent-dark-gray btn-round-edge xs-mt-15px">
                            <span>
                                <span><i class="feather icon-feather-calendar"></i></span>
                                <span class="btn-double-text" data-text="Check timetable">Check timetable</span>
                            </span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0 position-relative" id="services">
        <div
            class="position-absolute top-minus-70px lg-top-minus-50px left-minus-80px xxl-left-minus-40px lg-left-30px lg-w-300px opacity-1 w-350px z-index-1 d-none d-lg-inline-block">
            <img src="images/demo-medical-pattern.svg" alt="" data-bottom-top="transform: translateY(-50px)"
                data-top-bottom="transform: translateY(50px)"></div>
        <div
            class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 pb-6 md-pt-50px md-pb-50px overflow-hidden position-relative">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-5 md-mb-30px"
                        data-anime='{"el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span
                                class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i
                                    class="bi bi bi-shield-check text-base-color fs-22"></i></span>Our advance
                            services</span>
                        <h2 class="fw-800 text-dark-gray ls-minus-2px">Our clinical departments.</h2>
                        <p class="mb-30px">Clinical departments are specialized units in healthcare, focusing on areas like cardiology, neurology, and oncology to provide expert patient care and treatment.</p>
                        <a href="#contact"
                            class="btn btn-medium btn-switch-text btn-dark-gray btn-round-edge">
                            <span>
                                <span class="btn-double-text" data-text="All treatments">Contact Us</span>
                            </span>
                        </a>
                    </div>
                    <div class="col-xl-8 ps-5 col-lg-7">
                        <div class="outside-box-right-25 sm-outside-box-right-0"
                            data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <div class="swiper magic-cursor ps-15px md-ps-0"
                                data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper pt-30px pb-20px">
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div
                                                    class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img src="{{ asset('assets/images/demo-medical-icon-01.svg') }}"
                                                        class="w-50px" alt="">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Primary
                                                        care</span>
                                                    <p class="text-light-opacity">Primary care focuses on basic health services, providing prevention, diagnosis, and treatment of common conditions. It supports overall health management and guides patients to specialized care when needed.</p>
                                                    
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div
                                                    class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img src="{{ asset('assets/images/demo-medical-icon-02.svg') }}"
                                                        class="w-50px" alt="">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span
                                                        class="d-block text-dark-gray fs-19 fw-700 mb-5px">Cardiology</span>
                                                    <p class="text-light-opacity">Cardiology specializes in diagnosing and treating heart conditions, including heart disease and hypertension, through various tests and treatments to enhance cardiovascular health and manage heart-related issues.</p>
                                                    {{-- <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a> --}}
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div
                                                    class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img src="{{ asset('assets/images/demo-medical-icon-03.svg') }}"
                                                        class="w-50px" alt="">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">General
                                                        surgery</span>
                                                    <p class="text-light-opacity">General surgery involves a range of surgical procedures to treat conditions affecting the abdomen, digestive tract, and soft tissues. Surgeons perform operations to address injuries, diseases, and other health issues.</p>
                                                    {{-- <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a> --}}
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- end slider item -->
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div
                                                    class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img src="{{ asset('assets/images/demo-medical-icon-04.svg') }}"
                                                        class="w-50px" alt="">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">Blood
                                                        test</span>
                                                    <p class="text-light-opacity">A blood test is a diagnostic tool used to evaluate overall health, detect medical conditions, and monitor treatments. It measures various components in the blood, including glucose, cholesterol, red and white blood cells, and more.</p>
                                                    {{-- <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a> --}}
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- start slider item -->
                                    <!-- start slider item -->
                                    {{-- <div class="swiper-slide">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div
                                                    class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img src="{{ asset('assets/images/demo-medical-icon-02.svg') }}"
                                                        class="w-50px" alt="">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span
                                                        class="d-block text-dark-gray fs-19 fw-700 mb-5px">Cardiology</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div>
                                    <!-- start slider item -->
                                    <div class="swiper-slide">
                                        <!-- start features box item -->
                                        <div class="icon-with-text-style-02 transition-inner-all">
                                            <div
                                                class="feature-box bg-white text-start hover-box dark-hover border-radius-6px p-15 xl-p-12 box-shadow-medium">
                                                <div
                                                    class="feature-box-icon feature-box-icon-rounded w-110px h-110px bg-light-turquoise-blue rounded-circle mb-20px">
                                                    <img src="{{ asset('assets/images/demo-medical-icon-03.svg') }}"
                                                        class="w-50px" alt="">
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="d-block text-dark-gray fs-19 fw-700 mb-5px">General
                                                        surgery</span>
                                                    <p class="text-light-opacity">Lorem ipsum is simply dummy text of
                                                        simply printing typesetting.</p>
                                                    <a href="demo-medical-treatments.html"
                                                        class="btn btn-extra-large btn-link text-dark-gray border-bottom-0 left-icon fw-700"><i
                                                            class="feather icon-feather-plus-circle icon-extra-medium ms-0"></i>Know
                                                        more</a>
                                                </div>
                                                <div class="feature-box-overlay bg-base-color border-radius-6px"></div>
                                            </div>
                                        </div>
                                        <!-- end features box item -->
                                    </div> --}}
                                    <!-- end slider item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 mt-5 align-items-center justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <!-- start content box item -->
                    <div class="col md-mb-40px border-end xs-border-end-0 border-color-transparent-dark-very-light">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                            <div class="flex-shrink-0 me-25px sm-me-0">
                                <h2 class="mb-0 text-dark-gray fw-800 ls-minus-2px">4.98</h2>
                            </div>
                            <div>
                                <div class="fs-18 lh-32 last-paragraph-no-margin text-dark-gray">
                                    <i class="bi bi-star-fill text-dark-gray"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <span class="fs-18 lh-26 d-block fw-600 text-dark-gray">2,488 rating.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end content box item -->
                    <!-- start content box item -->
                    <div class="col md-mb-40px border-end md-border-end-0 border-color-transparent-dark-very-light">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                            <div class="flex-shrink-0 me-25px sm-me-0">
                                <h2 class="mb-0 text-dark-gray fw-800 ls-minus-2px">98<sup class="fs-30">%</sup></h2>
                            </div>
                            <div>
                                <span class="fs-18 text-dark-gray lh-26 d-block fw-600">Genuine positive<br />
                                    feedback.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end content box item -->
                    <!-- start content box item -->
                    <div class="col text-dark-gray fw-600">
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center align-items-center text-center text-md-start">
                            <div class="flex-shrink-0 me-25px sm-me-0">
                                <h2 class="mb-0 text-dark-gray fw-800 ls-minus-2px">200<sup class="fs-30">+</sup></h2>
                            </div>
                            <div>
                                <span class="fs-18 lh-26 d-block fw-600">Daily patients<br>consulted.</span>
                            </div>
                        </div>
                    </div>
                    <!-- end content box item -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->

    <section id="gallery">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2">
                <!-- start interactive banner item -->
                <div class="col interactive-banner-style-08 md-mb-30px">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                        <a class="stretched-link" href="#">
                            <img src="{{ asset('assets/images/gallery-1.png') }}" alt="" data-no-retina="">
                        </a>
                        <figcaption class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 p-55px md-p-6">
                            <div class="d-flex flex-column w-100 align-items-center">
                            </div> 
                        </figcaption>
                    </figure>
                </div>

               
                <div class="col interactive-banner-style-08">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                        <a class="stretched-link" href="#">
                            <img src="{{ asset('assets/images/gallery-2.png') }}" alt="" data-no-retina="">
                        </a>
                        <figcaption class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 p-55px md-p-6">
                            <div class="d-flex flex-column w-100 align-items-center">
                            </div> 
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->  
            </div>
            <div class="row mt-3 row-cols-1 row-cols-lg-2">
                <!-- start interactive banner item -->
                <div class="col interactive-banner-style-08 md-mb-30px">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                        <a class="stretched-link" href="#">
                            <img src="{{ asset('assets/images/gallery-3.png') }}" alt="" data-no-retina="">
                        </a>
                        <figcaption class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 p-55px md-p-6">
                            <div class="d-flex flex-column w-100 align-items-center">
                            </div> 
                        </figcaption>
                    </figure>
                </div>

               
                <div class="col interactive-banner-style-08">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                        <a class="stretched-link" href="#">
                            <img src="{{ asset('assets/images/gallery-4.png') }}" alt="" data-no-retina="">
                        </a>
                        <figcaption class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 p-55px md-p-6">
                            <div class="d-flex flex-column w-100 align-items-center">
                            </div> 
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->  
            </div>

            <div class="row mt-3 row-cols-1 row-cols-lg-2">
                <!-- start interactive banner item -->
                <div class="col interactive-banner-style-08 md-mb-30px">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                        <a class="stretched-link" href="#">
                            <img src="{{ asset('assets/images/gallery-5.png') }}" alt="" data-no-retina="">
                        </a>
                        <figcaption class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 p-55px md-p-6">
                            <div class="d-flex flex-column w-100 align-items-center">
                            </div> 
                        </figcaption>
                    </figure>
                </div>

               
                <div class="col interactive-banner-style-08">
                    <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                        <a class="stretched-link" href="#">
                            <img src="{{ asset('assets/images/gallery-6.png') }}" alt="" data-no-retina="">
                        </a>
                        <figcaption class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 p-55px md-p-6">
                            <div class="d-flex flex-column w-100 align-items-center">
                            </div> 
                        </figcaption>
                    </figure>
                </div>
                <!-- end interactive banner item -->  
            </div>
        </div>
    </section>

    <section class="overlap-height py-0">
        <div class="container overlap-gap-section">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px position-relative"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="atropos" data-atropos data-atropos-perspective="2450">
                        <div class="atropos-scale">
                            <div class="atropos-rotate">
                                <div class="atropos-inner">
                                    <img src="{{ asset('assets/images/hospital.png') }}" alt=""
                                        class="border-radius-6px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-18 fw-600 text-dark-gray mb-20px d-flex align-items-center"><span
                            class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-light-sea-green-transparent-light align-middle me-15px"><i
                                class="bi bi-layout-text-sidebar-reverse text-base-color fs-20"></i></span>Modern
                        technologies</span>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">We help you get well sooner!</h2>
                    <p class="mb-35px md-mb-30px w-90 lg-w-100">We value each and every human life placed in our hands and
                        constantly work towards meeting the expectations of our customers.</p>
                    <a href="tel:12345678910"
                        class="btn btn-large btn-switch-text btn-dark-gray btn-round-edge left-icon">
                        <span>
                            <span><i class="feather icon-feather-phone-call"></i></span>
                            <span class="btn-double-text" data-text="+1 234 567 8910">+92 319 5199686</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center pt-6 pb-6 md-pt-8 md-pb-8"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-auto icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-emoji-smile icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content text-dark-gray fs-20 fw-600 ls-minus-05px">We can give you the big
                            smile you've always wanted.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-turquoise-blue border-radius-8px lg-no-border-radius pt-6 pb-6 position-relative z-index-0">
        {{-- <div class="container overlap-section mb-5 sm-mb-50px">
            <div class="bg-base-color border-radius-6px pt-4 pb-4 ps-6 pe-6 xl-p-4 sm-p-30px"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-3 lg-mb-25px text-center text-xl-start">
                        <h6 class="text-white fw-700 mb-0 w-80 xl-w-100">Find the right <span class="highlight-separator"
                                data-shadow-animation="true" data-animation-delay="500">doctor <span><img
                                        src="images/highlight-separator.svg" alt=""></span></span> for you.</h6>
                    </div>
                    <div class="col-xl-9">
                        <div
                            class="row row-cols-auto row-cols-lg-3 row-cols-md-2 justify-content-center align-items-center">
                            <!-- start process step item -->
                            <div class="col process-step-style-07 position-relative md-mb-30px">
                                <div class="process-step-item d-flex align-items-center">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px border border-1 border-color-transparent-white-very-light box-shadow-bottom">
                                            <span class="number position-relative z-index-1 text-white fw-500">01</span>
                                        </div>
                                    </div>
                                    <div class="process-content ps-20px last-paragraph-no-margin">
                                        <span class="d-block fw-600 text-white fs-18">Search doctor</span>
                                        <p class="text-white opacity-7">Lorem sit printing</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col process-step-style-07 position-relative md-mb-30px">
                                <div class="process-step-item d-flex align-items-center">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px border border-1 border-color-transparent-white-very-light box-shadow-bottom">
                                            <span class="number position-relative z-index-1 text-white fw-500">02</span>
                                        </div>
                                    </div>
                                    <div class="process-content ps-20px last-paragraph-no-margin">
                                        <span class="d-block fw-600 text-white fs-18">Book schedule</span>
                                        <p class="text-white opacity-7">Lorem sit printing</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col process-step-style-07 position-relative">
                                <div class="process-step-item d-flex align-items-center">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-70px w-70px border border-1 border-color-transparent-white-very-light box-shadow-bottom">
                                            <span class="number position-relative z-index-1 text-white fw-500">03</span>
                                        </div>
                                    </div>
                                    <div class="process-content ps-20px last-paragraph-no-margin">
                                        <span class="d-block fw-600 text-white fs-18">Make a payment</span>
                                        <p class="text-white opacity-7">Lorem sit printing</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center"
                    data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Qualified doctors</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col team-style-06 lg-mb-30px">
                    <div
                        class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img
                                    class="rounded-circle w-150px h-150px mb-20px"
                                    src="{{ asset('assets/images/doctor-1.png') }}" alt=""><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                        class="fa-solid fa-star"></i> 4.9</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Shoko mugikura</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">psychiatry</span> at crafto
                            hospital.</p>
                        {{-- <div
                            class="text-center elements-social social-icon-style-02 border-top border-color-light-medium-gray w-100 pt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                            class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                            class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06 lg-mb-30px">
                    <div
                        class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img
                                    class="rounded-circle w-150px h-150px mb-20px"
                                    src="{{ asset('assets/images/doctor-2.png') }}" alt=""><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                        class="fa-solid fa-star"></i> 4.7</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Herman miller</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">cancer</span> at crafto hospital.
                        </p>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06 sm-mb-30px">
                    <div
                        class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img
                                    class="rounded-circle w-150px h-150px mb-20px"
                                    src="{{ asset('assets/images/doctor-3.png') }}" alt=""><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                        class="fa-solid fa-star"></i> 5.0</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Leonel mooney</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">pediatrics</span> at crafto
                            hospital.</p>
                    </div>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col team-style-06">
                    <div
                        class="d-flex flex-column p-35px pb-20px lg-p-30px text-center border-radius-6px bg-white box-shadow-quadruple-large position-relative">
                        <div class="position-relative">
                            <a href="#" class="d-inline-block position-relative"><img
                                    class="rounded-circle w-150px h-150px mb-20px"
                                    src="{{ asset('assets/images/doctor-4.png') }}" alt=""><span
                                    class="fs-13 fw-600 text-dark-gray alt-font lh-30 position-absolute top-25px right-minus-40px border-radius-30px bg-yellow ps-15px pe-15px"><i
                                        class="fa-solid fa-star"></i> 5.0</span></a>
                        </div>
                        <a href="#" class="text-dark-gray fs-18 fw-700 mb-5px">Dr. Matthew taylor</a>
                        <p class="w-90 mx-auto lh-28">Specialize in <span
                                class="text-dark-gray text-decoration-line-bottom fw-500">psychiatry</span> at crafto
                            hospital.</p>
                    </div>
                </div>
                <!-- end team member item -->
            </div>
            <div class="row justify-content-center align-items-center mt-5 sm-mt-7"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center last-paragraph-no-margin">
                    <div
                        class="fs-12 lh-30 fw-600 text-white text-uppercase d-inline-block bg-base-color border-radius-30px ps-20px pe-20px me-10px sm-m-5px align-middle">
                        trust</div>
                    <div class="d-inline-block align-middle text-dark-gray fs-20 fw-600 ls-minus-05px">Genuine 10000+
                        people trusting medcare hospital treatment.</div>
                </div>
            </div>
        </div>
        <div
            class="position-absolute top-10px right-minus-80px xxl-right-minus-40px lg-right-15px opacity-1 w-350px z-index-minus-1 d-none d-lg-block">
            <img src="images/demo-medical-pattern.svg" alt="" data-bottom-top="transform: translateY(50px)"
                data-top-bottom="transform: translateY(-50px)"></div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative" id="contact">
        <div class="container">
            <div class="row justify-content-center"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-xl-4 col-lg-5 md-mb-50px">
                    <h2 class="fw-800 text-dark-gray ls-minus-2px">Request an appointment.</h2>
                    <p class="w-90 md-w-100 mb-30px">Your information will be forwarded to a scheduling specialist who will
                        contact you.</p>
                    {{-- <div class="row g-0 align-items-center">
                        <div class="col-auto">
                            <img class="me-15px" src="https://via.placeholder.com/112x68" alt="" />
                        </div>
                        <div class="col">
                            <span class="fw-600 text-dark-gray">For urgent matters<br><a href="tel:12345678910"
                                    class="fs-22 ls-minus-05px fw-800">+1 234 567 8910</a></span>
                        </div>
                    </div> --}}
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-form-style-05">
                        <!-- start contact form -->
                        <form action="email-templates/contact-form.php" method="post">
                            <div class="row justify-content-center">
                                <div class="col-md-6 sm-mb-25px">
                                    <input class="mb-25px form-control required" type="text" name="name"
                                        placeholder="Patient's full name*" />
                                    <input class="mb-25px form-control required" type="text" name="email"
                                        placeholder="Patient's email*" />
                                    <div class="date-time row gutter-very-small">
                                        <div class="date-icon col-xl-6 lg-mb-25px">
                                            <input class="form-control" type="date" name="date" value="2023-01-01"
                                                min="2023-01-01" max="2099-12-31" aria-label="date" />
                                        </div>
                                        <div class="time-icon col-xl-6">
                                            <input class="form-control" type="time" name="time" value="09:12"
                                                min="09:00" max="12:00" aria-label="time" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-25px select">
                                        <select class="form-control" name="select" aria-label="select-doctor">
                                            <option value="">Select doctor</option>
                                            <option value="Pediatrician - Dr. Bryan jonhson">Pediatrician - Dr. Bryan
                                                jonhson</option>
                                            <option value="Cardiology - Dr. Jemmy watson">Cardiology - Dr. Jemmy watson
                                            </option>
                                            <option value="Neurology - Dr. Jeremy dupont">Neurology - Dr. Jeremy dupont
                                            </option>
                                            <option value="Orthopedics - Dr. Evan thomson">Orthopedics - Dr. Evan thomson
                                            </option>
                                            <option value="Optometrists - Dr. Shoko mugikura">Optometrists - Dr. Shoko
                                                mugikura</option>
                                        </select>
                                    </div>
                                    <textarea class="form-control" cols="20" rows="4" name="comment" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-md-6 mt-25px sm-mt-20px">
                                    <p class="mb-0 fs-13 lh-24 text-center text-md-start">We are committed to protecting
                                        your privacy. We will never collect information about you without your explicit
                                        consent.</p>
                                </div>
                                <div class="col-md-6 text-center text-md-end mt-25px sm-mt-20px">
                                    <input type="hidden" name="redirect" value="">
                                    <button
                                        class="btn btn-medium btn-base-color btn-round-edge left-icon btn-box-shadow submit"
                                        type="submit"><i class="bi bi-calendar-check"></i>Book appointment</button>
                                </div>
                                <div class="col-12">
                                    <div class="form-results mt-20px d-none text-center"></div>
                                </div>
                            </div>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
            <div
                class="position-absolute bottom-minus-15px right-100px lg-right-0px z-index-minus-1 opacity-1 w-300px lg-w-200px">
                <img src="https://via.placeholder.com/448x434" alt=""
                    data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"></div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->

    <!-- end footer -->
    <!-- start sticky column -->
    <div class="sticky-wrap d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <span class="fs-15 fw-500 d-flex align-items-center"><i
                class="bi bi-envelope icon-small me-10px align-middle"></i>Arrange your appointment — <a
                href="#contact" class="text-decoration-line-bottom fw-700 lh-22">Book
                appointment</a></span>
    </div>
@endsection
