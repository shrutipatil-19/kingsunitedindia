@extends('layout.app')
@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <video autoplay playsinline loop muted poster="{{ asset('assets/images/kings img/about1.jpg') }}"
                        class="w-100">
                        <source src="{{ asset('assets/images/kings img/KINGS_UNITED.mp4') }}" type="video/mp4">
                        <source src="{{ asset('assets/images/kings img/KINGS_UNITED.mp4') }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider Start-->
    <section class="main-slider d-none">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
            "delay": 8000
        } 
    }'>
            <div class="swiper-wrapper">

                {{-- <div class="swiper-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <iframe width="100%" height="800" autoplay
                                    src="https://www.youtube.com/embed/y4jv5bk8ato"
                                    title="KINGS UNITED(The Kings)EPIC COMEBACK | DOLA RE DOLA | REDBULL DANCE YOUR STYLE NATIONAL FINALS 2024|"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Kings Dance Studio: Where Passion Meets Movement!</p>
                                    <h2 class="main-slider__title">State-of-the-Art <br> <span>Facilities</span>
                                    </h2>
                                    <p class="main-slider__text">Our purpose-built dance studio is equipped with top-notch
                                        amenities and <br> a spacious dance floor to enhance your training experience.
                                        Experience the thrill <br> of dancing in a professional setting that is designed to
                                        inspire and elevate your <br> performance.</p>
                                    <!-- <ul class="list-unstyled main-slider__address">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-clock"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Am To 10 Pm 20 April 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul> -->
                                    <div class="main-slider__btn-box pt-4">
                                        <a href="contact.html" class="main-slider__btn thm-btn">Book Us Live
                                            <span class="icon-arrow-right"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="main-slider__img">
                                    <img src="{{ asset('assets/images/kings img/about1.jpg') }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="main-slider__shpae-2">
                                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Kings Dance Studio: Where Passion Meets Movement!</p>
                                    <h2 class="main-slider__title">Expert <span>Instruction</span>
                                    </h2>
                                    <p class="main-slider__text">Our team of experienced dance instructors are dedicated to
                                        helping students of all levels achieve <br>their dance goals. Whether you're a
                                        beginner looking to learn the basics or an experienced dancer <br>aiming to refine
                                        your skills, our instructors are here to guide and support you every step of the
                                        way.</p>
                                    <!-- <ul class="list-unstyled main-slider__address">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-clock"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Am To 10 Pm 20 April 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul> -->
                                    <div class="main-slider__btn-box pt-4">
                                        <a href="#" class="main-slider__btn thm-btn">Book Us Live
                                            <span class="icon-arrow-right"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="main-slider__img">
                                    <img src="{{ asset('assets/images/kings img/banner2.jpg') }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="main-slider__shpae-2">
                                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Kings Dance Studio: Where Passion Meets Movement!</p>
                                    <h2 class="main-slider__title">Variety of Dance <br> <span>Styles</span>
                                    </h2>
                                    <p class="main-slider__text">From ballet and jazz to hip-hop and contemporary, Kings
                                        Dance Studio offers a diverse range of <br>dance styles to cater to different
                                        interests and preferences. Explore new genres, challenge <br> yourself creatively,
                                        and discover the joy of expression through movement.</p>
                                    <!-- <ul class="list-unstyled main-slider__address">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-clock"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Am To 10 Pm 20 April 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul> -->
                                    <div class="main-slider__btn-box pt-4">
                                        <a href="#" class="main-slider__btn thm-btn">Book Us Live
                                            <span class="icon-arrow-right"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="main-slider__img">
                                    <img src="{{ asset('assets/images/kings img/banner3.jpg') }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="main-slider__shpae-2">
                                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="main-slider__content">
                                    <p class="main-slider__sub-title">Kings Dance Studio: Where Passion Meets Movement!</p>
                                    <h2 class="main-slider__title">Performance <br><span>Opportunities </span>
                                    </h2>
                                    <p class="main-slider__text">Showcase your talent and passion on stage through our
                                        annual recitals, competitions, <br> and showcases. Gain valuable performance
                                        experience, build confidence, and celebrate <br> your hard work and dedication
                                        alongside your peers and instructors.</p>
                                    <!-- <ul class="list-unstyled main-slider__address">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-pin"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-clock"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10 Am To 10 Pm 20 April 2024</p>
                                                            </div>
                                                        </li>
                                                    </ul> -->
                                    <div class="main-slider__btn-box pt-4">
                                        <a href="#" class="main-slider__btn thm-btn">Book Us Live
                                            <span class="icon-arrow-right"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="main-slider__img">
                                    <img src="{{ asset('assets/images/kings img/banner4.jpg') }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="main-slider__shpae-2">
                                    <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-slide">
                                    <div class="main-slider__img">
                                        <img src="assets/images/resources/main-slider-img-1-3.jpg" alt="">
                                    </div>
                                    <div class="main-slider__shpae-2">
                                        <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="main-slider__content">
                                                    <p class="main-slider__sub-title">Kings Dance Studio: Where Passion Meets Movement!</p>
                                                    <h2 class="main-slider__title">Variety of Dance <br> <span>Styles</span>
                                                    </h2>
                                                    <p class="main-slider__text">From ballet and jazz to hip-hop and contemporary, Kings Dance Studio offers a diverse range of <br>dance styles to cater to different interests and preferences. Explore new genres, challenge <br> yourself creatively, and discover the joy of expression through movement.</p>
                                                    
                                                    <div class="main-slider__btn-box pt-4">
                                                        <a href="contact.html" class="main-slider__btn thm-btn">Book Us Live
                                                            <span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
            </div>
            <div class="swiper-pagination" id="main-slider-pagination"></div>
            <!-- If we need navigation buttons -->
        </div>
    </section>
    <!--Main Slider End-->

    <style>
        .buy-ticket {
            position: relative;
        }

        .ele1 {
            position: absolute;
            top: 0%;
            left: -8%;
            opacity:0.6 !important;
        }

        .ele1 img {
            width: calc(100% - 340px);
            height: 100%;
            object-fit: cover;
        }
    </style>

    <!-- Buy Ticket Start -->
    <section class="buy-ticket">
        <div class="ele1" data-aos="fade-right" data-aos-duration="1000">
            <img src="{{ asset('assets/images/kings img/lion_logo.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="buy-ticket__left" data-aos="fade-right" data-aos-duration="1000">
                        <!-- <ul class="buy-ticket__address list-unstyled">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm 20 April 2024</p>
                                                </div>
                                            </li>
                                        </ul> -->
                        <h3 class="buy-ticket__title">About Kings</h3>
                        <p class="buy-ticket__text">At The Kings, we don’t just dance; we elevate it to an art form. From
                            our humble beginnings to becoming international champions, our journey has been nothing short of
                            spectacular. Established in Mumbai, our dance studio is not just a place to learn dance; it’s a
                            vibrant community where passion meets excellence.</p>
                        <p class="buy-ticket__text">
                            Founded in 2009, The Kings began as a small group of dedicated dancers with a dream. Today, we
                            are renowned for our innovative choreography, high-energy performances, and unmatched dedication
                            to the craft. Our studio offers a diverse range of dance styles including hip-hop, contemporary,
                            Bollywood, and classical Indian dance, catering to dancers of all ages and skill levels.</p>
                        <div class="buy-ticket__btn-box">
                            <a href="#" class="buy-ticket__btn-1 thm-btn">Read More<span
                                    class="icon-arrow-right"></span> </a>
                            <a href="#" class="buy-ticket__btn-2 thm-btn">Contact Us<span
                                    class="icon-arrow-right"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy-ticket__right" data-aos="fade-left" data-aos-duration="1000">
                        <div class="buy-ticket__img">
                            <img src="{{ asset('assets/images/kings img/about22.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Ticket End -->

    
    <style>
        .services-one {
            position: relative;
        }

        .ele2 {
            position: absolute;
            top: 35%;
            right: -8%;
            opacity:0.6;
            transform: rotateY(180deg);
        }

        .ele2 img {
            width: calc(100% - 340px);
            height: 100%;
            object-fit: cover;
        }
    </style>

    <!--Services One Start-->
    <section class="services-one">
        <div class="ele2">
            <img src="{{ asset('assets/images/kings img/lion_logo.png') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">OUR SERVICES</span>
                </div>
                <h2 class="section-title__title">Why should you joint <br> our event</h2>
            </div>
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <span class="icon-camera"></span>
                        </div>
                        <h3 class="services-one__title"><a href="#">Choreography</a></h3>
                        <p class="services-one__text">Musicals Concerts, Theatrical Acts, Dance Reality Shows, Award Shows,
                            Serials, Advertisements,</p>
                        <a href="#" class="services-one__read-more">Read More <span
                                class="icon-arrow-right"></span></a>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <span class="icon-skewer"></span>
                        </div>
                        <h3 class="services-one__title"><a href="#">MUSIC VIDEOS</a></h3>
                        <p class="services-one__text">
                            Choreography for Music videos with Celebrities, Dance Music Video Collaboration.</p>
                        <a href="#" class="services-one__read-more">Read More <span
                                class="icon-arrow-right"></span></a>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <span class="icon-dinner-table"></span>
                        </div>
                        <h3 class="services-one__title"><a href="#">WEDDING</a></h3>
                        <p class="services-one__text">
                            Choreography and Training for Sangeet & Wedding</p>
                        <a href="#" class="services-one__read-more">Read More <span
                                class="icon-arrow-right"></span></a>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
            <div class="row">
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <span class="icon-camera"></span>
                        </div>
                        <h3 class="services-one__title"><a href="#">CORPORATE EVENTS</a></h3>
                        <p class="services-one__text">Performances for National & International Shows and Corporate Events
                        </p>
                        <a href="#" class="services-one__read-more">Read More <span
                                class="icon-arrow-right"></span></a>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <span class="icon-skewer"></span>
                        </div>
                        <h3 class="services-one__title"><a href="#">AWARD FUNCTIONS</a></h3>
                        <p class="services-one__text">
                            Performances in renowned award ceremonies at National & International Platforms</p>
                        <a href="#" class="services-one__read-more">Read More <span
                                class="icon-arrow-right"></span></a>
                    </div>
                </div>
                <!--Services One Single End-->
                <!--Services One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="services-one__single">
                        <div class="services-one__icon">
                            <span class="icon-dinner-table"></span>
                        </div>
                        <h3 class="services-one__title"><a href="#">Celebrity Judge</a></h3>
                        <p class="services-one__text">
                            Suresh Mukund & Team as Celebrity Judge (for TV Dance Reality Shows/ Schools / Colleges/ Dance
                            Events)</p>
                        <a href="#" class="services-one__read-more">Read More <span
                                class="icon-arrow-right"></span></a>
                    </div>
                </div>
                <!--Services One Single End-->
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!-- Sliding Text One Start -->
    <section class="sliding-text-one">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Magic of Events" class="sliding-text__title">Magic of Events
                        <img src="assets/images/icon/star-icon.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover=" Celebrate Life" class="sliding-text__title"> Celebrate Life
                        <img src="assets/images/icon/star-icon.png" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Clients Testimonial</span>
                </div>
                <h2 class="section-title__title section-title__title--two">They often involve activities <br> such
                    as performances</h2>
            </div>
            <div class="testimonial-one__carousel-box">
                <div class="thm-swiper__slider swiper-container"
                    data-swiper-options='{
                        "slidesPerView": 1, 
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },

                        

                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 2
                                },
                                "1200": {
                                    "spaceBetween": 30,
                                    "slidesPerView":2
                                },
                                "1320": {
                                    "spaceBetween": 30,
                                    "slidesPerView":2
                                }
                            }
                    }'>
                    <div class="swiper-wrapper">
                        <!--Testimonial One Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-info-and-review">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name"><a href="#">Anveshika
                                                    Singh</a></h4>
                                            <p class="testimonial-one__sub-title"></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__review">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star clr-start"></span>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">This workshop was really amazing, as it gave a proper
                                    clarification about what all is gonna happen in the course and also what elements an
                                    individual has to work on to enter the fashion industry.A good path explainer and
                                    platform for those who want to enter this industry.</p>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-info-and-review">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name"><a
                                                    href="#">aartiprajapati2809</a></h4>
                                            <p class="testimonial-one__sub-title"></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__review">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star clr-start"></span>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">The kings dance studio is very good choice for all
                                    beginner dancers . The management is well trained and all ways ready to help all the
                                    students . Teachers have excellent teaching experience all the mam and sir are very good
                                    in on their own styles.</p>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-info-and-review">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name"><a href="#">Soonruta
                                                    Kothadia</a></h4>
                                            <p class="testimonial-one__sub-title"></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__review">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star clr-start"></span>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">Spacious studio in Andheri! We rented it to host some
                                    workshops and it was a great experience. A music system update would make it even
                                    better.</p>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="swiper-slide">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__client-info-and-review">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name"><a href="#">Anishek
                                                    Singh</a></h4>
                                            <p class="testimonial-one__sub-title"></p>
                                        </div>
                                    </div>
                                    <div class="testimonial-one__review">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star clr-start"></span>
                                    </div>
                                </div>
                                <p class="testimonial-one__text">I'm doing diploma form kings and the learning experience
                                    is awesome and the class atmosphere is energetic.the teachers are very supportive and
                                    always ready to help</p>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="testimonial-one__nav">
                    <div class="swiper-button-next1">
                        <i class="icon-angle-left"></i>
                    </div>
                    <div class="swiper-button-prev1">
                        <i class="icon-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->
    <!--Video One Start-->
    <section class="video-one">
        <div class="container">
            <div class="video-one__inner wow fadeInUp" data-wow-delay="300ms">
                <div class="video-one__img">
                    <img src="{{ asset('assets/images/kings img/video_banner1.jpg') }}" alt="">
                    <div class="video-one__video-link">
                        <a href="https://www.youtube.com/watch?v=y4jv5bk8ato" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="icon-awesome-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->
    <!-- Event One Start -->
    <section class="event-one d-none">
        <div class="container">
            <div class="event-one__inner wow fadeInUp" data-wow-delay="300ms">
                <div class="event-one__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">About Our Event</span>
                        </div>
                        <h2 class="section-title__title">Uniting Creating of <br> the Memories</h2>
                    </div>
                    <div class="event-one__btn-box">
                        <a href="#" class="event-one__btn thm-btn">Join The Event <span
                                class="icon-arrow-right"></span> </a>
                    </div>
                </div>
                <ul class="list-unstyled event-one__points">
                    <li>
                        <div class="icon">
                            <span class="icon-air-horn"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Artists & bands</a></h4>
                            <p>Events bring people together for a shared experien celebration a <br> From weddings
                                and birthdays to conferences </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-party-blower"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Audience Event Planner</a></h4>
                            <p>Events bring people together for a shared experien celebration a <br> From weddings
                                and birthdays to conferences </p>
                        </div>
                    </li>
                </ul>
                <div class="event-one__img-box">
                    <img src="{{ asset('assets/images/kings img/about22.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Event One End -->



    <!-- Team One Start -->
    <section class="team-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Courses</span>
                </div>
                <h2 class="section-title__title">our amaizing Courses</h2>
            </div>
            <div class="row">
                <!-- Team One Single Start -->
                <div class="col-xl-4 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/kings img/course1.jpg') }}" alt="">
                                <div class="team-one__content">
                                    <h4 class="team-one__name"><a href="#">Kings Golden Pass -One Year unlimited
                                            Access</a></h4>
                                    <!-- <p class="team-one__sub-title">Speaker</p> -->
                                </div>
                                <div class="team-one__content-hover">
                                    <h4 class="team-one__name-hover"><a href="#">Kings Golden Pass -One Year
                                            unlimited Access</a>
                                    </h4>
                                    <!-- <p class="team-one__sub-title-hover">Speaker</p> -->
                                    <p class="team-one__text-hover">Enjoy a year of unlimited dance training at Kings Dance
                                        Studio! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team One Single End -->
                <!-- Team One Single Start -->
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/kings img/course2.jpg') }}" alt="">
                                <div class="team-one__content">
                                    <h4 class="team-one__name"><a href="#">Professional Training Program</a></h4>
                                    <!-- <p class="team-one__sub-title">Singer</p> -->
                                </div>
                                <div class="team-one__content-hover">
                                    <h4 class="team-one__name-hover"><a href="#">Professional Training Program</a>
                                    </h4>
                                    <!-- <p class="team-one__sub-title-hover">Singer</p> -->
                                    <p class="team-one__text-hover">Discover the key to unlocking your dance potential with
                                        professional training program.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team One Single End -->
                <!-- Team One Single Start -->
                <div class="col-xl-4 col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/kings img/course3.jpg') }}" alt="">
                                <div class="team-one__content">
                                    <h4 class="team-one__name"><a href="#">Intensive Training <br> Program</a></h4>
                                    <!-- <p class="team-one__sub-title">Content Creator</p> -->
                                </div>
                                <div class="team-one__content-hover">
                                    <h4 class="team-one__name-hover"><a href="#">Intensive Training <br> Program</a>
                                    </h4>
                                    <!-- <p class="team-one__sub-title-hover">Content Creator</p> -->
                                    <p class="team-one__text-hover">Join our Intensive Training Program at Kings Dance
                                        Studio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Team One Single End -->
            </div>
        </div>
    </section>
    <!-- Team One End -->

    <!-- Event Direction Start -->
    <section class="event-direction">
        <div class="container">
            <div class="event-direction__inner">
                <div class="row">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="event-direction__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Our Event Direction</span>
                                </div>
                                <h2 class="section-title__title">Creating Memories <br> One Event Time</h2>
                            </div>
                            <p class="event-direction__text">Events bring people together for a shared experien
                                celebration a <br> From weddings and birthdays to conferences </p>
                            <div class="event-direction__call">
                                <div class="event-direction__call-icon">
                                    <img src="assets/images/icon/event-direction-chat-icon.png" alt="">
                                </div>
                                <div class="buy-ticket__btn-box">
                                    <a href="#" class="buy-ticket__btn-2 thm-btn">Contact Us<span
                                            class="icon-arrow-right"></span> </a>
                                </div>
                                {{-- <div class="event-direction__call-content">
                                    <p>Call Us</p>
                                    <h4><a href="tel:3075550133">(307) 555-0133</a></h4>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="event-direction__right">
                            <ul class="event-direction__counter list-unstyled">
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="15">1</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Years of Experience</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="10000">1,000</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Certified Students</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="5000">500</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Live Shows</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="100">2</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Awards won</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Direction End -->

    <!-- Gallery One Start -->
    <section class="gallery-one d-none">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Latest Gallery</span>
                </div>
                <h2 class="section-title__title">An evening for creator & art <br> lover meet together</h2>
            </div>
            <div class="row masonary-layout">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-2.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-3.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-4.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-5.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-6.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-7.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-8.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="assets/images/gallery/gallery-1-9.jpg" alt="">
                            <div class="gallery-one__content">
                                <div class="gallery-one__sub-title-box">
                                    <div class="gallery-one__sub-title-shape"></div>
                                    <p class="gallery-one__sub-title">Gala Affairs</p>
                                </div>
                                <h4 class="gallery-one__title"><a href="gallery-details.html">Dream Makers Event
                                        Planning</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery One End -->

    <!-- Schedule One Start -->
    <section class="schedule-one d-none">
        <div class="container">
            <div class="schedule-one__inner">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Event Schedule</span>
                    </div>
                    <h2 class="section-title__title">Follow event schedule</h2>
                </div>
                <div class="schedule-one__main-tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#1st-day" class="tab-btn active-btn">
                            <h3>Day 01</h3>
                            <p>16 April 2024</p>
                        </li>
                        <li data-tab="#2nd-day" class="tab-btn">
                            <h3>Day 02</h3>
                            <p>18 April 2024</p>
                        </li>
                        <li data-tab="#3rd-day" class="tab-btn">
                            <h3>Day 03</h3>
                            <p>24 April 2024</p>
                        </li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="1st-day">
                            <div class="schedule-one__tab-content-box">
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Events That
                                                Leave a <br>
                                                Impression</a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-1.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Sparkle & Shine
                                                on <br>
                                                Celebrations
                                            </a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-2.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Sparkle & Shine
                                                <br> Events
                                            </a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-3.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="2nd-day">
                            <div class="schedule-one__tab-content-box">
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Events That
                                                Leave a <br>
                                                Impression</a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-4.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Sparkle & Shine
                                                on <br>
                                                Celebrations
                                            </a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-5.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Sparkle & Shine
                                                <br> Events
                                            </a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-6.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="3rd-day">
                            <div class="schedule-one__tab-content-box">
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Events That
                                                Leave a <br>
                                                Impression</a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-7.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Sparkle & Shine
                                                on <br>
                                                Celebrations
                                            </a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-8.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule-one__single">
                                    <div class="schedule-one__left">
                                        <h3 class="schedule-one__title"><a href="event-details.html">Sparkle & Shine
                                                <br> Events
                                            </a></h3>
                                        <p class="schedule-one__text">A personal portfolio is a curated collection
                                            of <br> an individual's professional work</p>
                                    </div>
                                    <div class="schedule-one__img">
                                        <img src="assets/images/resources/schedule-one-1-9.jpg" alt="">
                                    </div>
                                    <div class="schedule-one__address-and-btn-box">
                                        <ul class="list-unstyled schedule-one__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="schedule-one__btn-box">
                                            <a href="contact.html" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                    class="icon-arrow-right"></span> </a>
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
    <!-- Schedule One End -->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="brand-one__inner">
                <div class="thm-swiper__slider swiper-container"
                    data-swiper-options='{"spaceBetween": 100,
            "slidesPerView": 4,
            "loop": true,
            "navigation": {
                "nextEl": "#brand-one__swiper-button-next",
                "prevEl": "#brand-one__swiper-button-prev"
            },
            "autoplay": { "delay": 5000 },
            "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 3
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="{{ asset('assets/images/kings img/intel.webp') }}"
                                        alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="{{ asset('assets/images/kings img/ipl_logo.jpg') }}"
                                        alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="{{ asset('assets/images/kings img/microsoft.png') }}"
                                        alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="{{ asset('assets/images/kings img/red_bull.jpg') }}"
                                        alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <!-- <div class="swiper-slide">
                                            <div class="swiper-slide__img">
                                                <a href="#"><img src="assets/images/brand/brand-1-5.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__img">
                                                <a href="#"><img src="assets/images/brand/brand-1-1.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__img">
                                                <a href="#"><img src="assets/images/brand/brand-1-2.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__img">
                                                <a href="#"><img src="assets/images/brand/brand-1-3.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__img">
                                                <a href="#"><img src="assets/images/brand/brand-1-4.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__img">
                                                <a href="#"><img src="assets/images/brand/brand-1-5.png" alt=""></a>
                                            </div>
                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Blog One Start-->
    <section class="blog-one d-none">
        <div class="container">
            <div class="blog-one__top">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Latest Blog And news</span>
                    </div>
                    <h2 class="section-title__title">Whats happening near</h2>
                </div>
                <div class="blog-one__btn-box">
                    <a href="blog.html" class="blog-one__btn thm-btn">View More Blog<span
                            class="icon-arrow-right"></span>
                    </a>
                </div>
            </div>
            <div class="blog-one__bottom">
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="blog-details.html">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Join the Festivi Celebrate
                                        <br> Special Moments</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="blog-details.html" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="blog-details.html">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Embrace the Joyful Spirit
                                        Discover a World</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="blog-details.html" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="blog-details.html">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Where Moments Come Alive an
                                        Celebrate</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="blog-details.html" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Blog One End-->

    <script>
        AOS.init();
      </script>
@endsection
