

<!-- headar section start -->
<header>
    <div class="headerarea headerarea__3 header__sticky header__area">
        <div class="container desktop__menu__wrapper mt-2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="headerarea__left">
                        <div class="headerarea__left__logo">

                            <a href="index.html"><img src="img/logo/logo_1.png" alt="logo"></a>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-xl-7 col-lg-7 main_menu_wrap mt-3">

                    <div class="headerarea__main__menu">
                        <nav>
                            <ul>
                                <li>
                                    <a class="headerarea__has__dropdown" href="about.html">About </a>
                                </li>     
                            </ul>
                        </nav>
                    </div>
                </div> --}}
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="headerarea__right">
                        <div class="main_menu_wrap">

                            <div class="headerarea__main__menu">
                                <nav>
                                    <ul>
                                        <li><a class="headerarea__has__dropdown" href="javascript:;" style="text-wrap: nowrap;">My Account
                                        <i class="icofont-rounded-down"></i></a>
                                            <ul class="headerarea__submenu ">
                                                <li><a href="javascript:;">Settings</a></li>
                                                <li><a href="{{ route('account.courses') }}">My Courses</a></li>
                                                <li><a href="javascript:;">My Progress</a></li>
                                                <li><a href="javascript:;">Help</a></li>
                                            </ul>
                                        </li>

                                      
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="headerarea__login me-3">
                            <a href="#">Courses</a>
                        </div>
                        <div class="headerarea__button">
                           
                            <a href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <div class="container-fluid mob_menu_wrapper">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="mobile-logo">
                    <a class="logo__dark" href="#"><img src="img/logo/logo_1.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-right-wrap">

                    <div class="mobile-off-canvas">
                        <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</header>

<!-- header section end -->

<!-- Mobile Menu Start Here -->
<div class="mobile-off-canvas-active">
    <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
    <div class="header-mobile-aside-wrap">
        <div class="mobile-menu-wrap">

            <div class="mobile-navigation">

                <nav>
                    <ul class="mobile-menu">
                        <span class="mobile-account-active"><h3>My Account</h3></span>
                        <li><a href="javascript:;">Settings</a></li>
                        <li><a href="javascript:;">My Courses</a></li>
                        <li><a href="javascript:;">My Progress</a></li>
                        <li><a href="javascript:;">Help</a></li>
                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                      
                    </ul>
                </nav>

            </div>

        </div>
        <div class="headerarea__login mb-3">
            <a href="#"  style="width: 100%">Courses</a>
        </div>
        <div class="headerarea__button">
           
            <a href="{{ route('logout') }}"  style="width: 100%">Logout</a>
        </div>
       
        <div class="mobile-menu-wrap">

            <div class="mobile-navigation">

                <nav>
                    <ul class="mobile-menu">
                        
                    </ul>
                </nav>

            </div>

        </div>
        
        {{-- <div class="mobile-social-wrap">
            <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
            <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
            <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
            <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
            <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
        </div> --}}
    </div>
</div>
<!-- Mobile Menu end Here -->
