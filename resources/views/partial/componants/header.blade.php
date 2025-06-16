<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="#"><img src="{{ asset('assets/images/kings img/logo.png') }}" alt="" class="w-100"></a>
                    </div>
                </div>
                <div class="main-menu__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="">
                            <a href="#">Home </a>
                        </li>
                        <li class="dropdown">
                            <a href="#">About Us </a>
                              <ul>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Achievements</a></li>
                            </ul>
                        </li>
                          <li class="dropdown">
                            <a href="#">Kings Dance Studio</a>
                            <ul>
                                <li class="dropdown">
                                    <a href="#">Courses</a>
                                    <ul>
                                        <li><a href="#">Kings Golden Pass -  One Year Unlimited Access</a></li>
                                        <li><a href="#">Professional Training Courses</a></li>
                                        <li><a href="#">Intensive  Training Courses</a></li>
                                        <li><a href="#">Regular Classes</a></li>
                                        <li><a href="#">Personal/Reality show Training</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Creator Space</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Book Us Live</a>
                            <ul>
                                <li><a href="#">Book Us For Live Events</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__btn-box">
                        <a href="#" class="main-menu__btn thm-btn">Book Now <span
                                class="icon-arrow-right"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/images/kings img/logo.png') }}" width="150"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@kingsunitedindia.com">info@kingsunitedindia.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:7276539771">7276539771</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                {{-- <a href="#" class="fab fa-twitter"></a> --}}
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->