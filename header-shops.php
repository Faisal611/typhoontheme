<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- meta tag -->
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta charset="<?php bloginfo('charset');?>">
    <?php wp_head();?>
</head>
<body <?php body_class();?> class="home-orange-color" >

<div class="offwrap"></div>

<!--Preloader start here-->
<!--<div id="pre-load">-->
<!--    <div id="loader" class="loader">-->
<!--        <div class="loader-container">-->
<!--            <div class='loader-icon'><img src="assets/images/fav.png" alt="Bizup Consulting Business"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--Preloader area end here-->

<!-- Main content Start -->
<div class="main-content">
    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header header-transparent">
            <!-- Topbar Area Start -->
            <div class="topbar-area style1">
                <div class="container custom">
                    <div class="row y-middle">
                        <div class="col-lg-7">
                            <div class="topbar-contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:info@bizup.com">info@bizup.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:(+1)9999999999"> (+1) 9999 999 999</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        55 Gerad Lane, NY 11201, USA
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 text-right">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="opening"> <em><i class="flaticon-clock"></i>Monday - Friday / 8AM -
                                            11PM</em> </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container custom">
                    <div class="row-table">
                        <div class="col-cell header-logo">
                            <div class="logo-area">
                                <a href="index-2.html">
                                    <img class="normal-logo" src="assets/images/logo.png" alt="logo">
                                    <img class="sticky-logo" src="assets/images/logo-dark.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-cell">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <nav class="rs-menu hidden-md">
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location'=>'main-menu',
                                                'menu_class'=>'nav-menu'
                                            ));
                                        ?>
                                    </nav>
                                </div> <!-- //.main-menu -->
                            </div>
                        </div>
                        <div class="col-cell">
                            <div class="expand-btn-inner">
                                <ul>
                                    <li class="search-parent">
                                        <a class="hidden-xs rs-search" data-bs-toggle="modal"
                                           data-bs-target="#searchModal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                    <li class="humburger">
                                        <a id="nav-expander" class="nav-expander bar" href="#">
                                            <div class="bar">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                                <span class="dot4"></span>
                                                <span class="dot5"></span>
                                                <span class="dot6"></span>
                                                <span class="dot7"></span>
                                                <span class="dot8"></span>
                                                <span class="dot9"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <a id="nav-close" class="nav-close">
                        <div class="line">
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                    </a>
                </div>
                <div class="canvas-logo">
                    <a href="index-2.html"><img src="assets/images/logo.png" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>We denounce with righteous indig nation in and dislike men who are so beguiled and to demo
                        realized, that they data forest see best business consulting wordpress theme 2021.</p>
                </div>
                <div class="media-img">
                    <img src="assets/images/off2.jpg" alt="Images">
                </div>
                <div class="canvas-contact">
                    <div class="address-area">
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Address</h4>
                                <em>05 kandi BR. New York</em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em>+019988772</em>
                            </div>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->

            <!-- Canvas Mobile Menu start -->
            <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                <div class="close-btn">
                    <a id="nav-close2" class="nav-close">
                        <div class="line">
                            <span class="line1"></span>
                            <span class="line2"></span>
                        </div>
                    </a>
                </div>
                <ul class="nav-menu">
                    <li class="menu-item-has-children current-menu-item">
                        <a href="index-2.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children current-menu-item">
                                <a href="#">Multipages</a>
                                <ul class="sub-menu">
                                    <li class="active"><a href="index-2.html">Home One</a></li>
                                    <li><a href="index2.html">Home Two</a></li>
                                    <li><a href="index3.html">Home Three</a></li>
                                    <li><a href="index4.html">Home Four</a></li>
                                    <li><a href="index5.html">Home Five</a></li>
                                    <li><a href="index6.html">Home Six</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Onepages</a>
                                <ul class="sub-menu">
                                    <li><a href="onepage1.html">Onepage One</a></li>
                                    <li><a href="onepage2.html">Onepage Two</a></li>
                                    <li><a href="onepage3.html">Onepage Three</a></li>
                                    <li><a href="onepage4.html">Onepage Four</a></li>
                                    <li><a href="onepage5.html">Onepage Five</a></li>
                                    <li><a href="onepage6.html">Onepage Six</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li class="last-item menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a> </li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing-table.html">Pricing Table</a></li>
                            <li class="last-item menu-item-has-children">
                                <a href="#">Team</a>
                                <ul class="sub-menu">
                                    <li><a href="team-style1.html">Team Style 1</a> </li>
                                    <li><a href="team-style2.html">Team Style 2</a></li>
                                    <li><a href="team-style3.html">Team Style 3</a></li>
                                    <li><a href="team-single.html">Team Single</a></li>
                                </ul>
                            </li>
                            <li><a href="appointment.html">Appointment</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="faqs.html">Faqs</a></li>
                            <li><a href="partners.html">Partners</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Portfolios</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio.html">Portfolio One</a></li>
                            <li><a href="portfolio2.html">Portfolio Two</a></li>
                            <li><a href="portfolio3.html">Portfolio Three</a></li>
                            <li><a href="portfolio4.html">Portfolio Four</a></li>
                            <li><a href="portfolio5.html">Portfolio Five</a></li>
                            <li><a href="portfolio6.html">Portfolio Six</a></li>
                            <li><a href="portfolio7.html">Portfolio Seven</a></li>
                            <li><a href="portfolios-filter.html">Portfolios Filter</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services-style1.html">Services Style 1</a></li>
                            <li><a href="services-style2.html">Services Style 2</a></li>
                            <li><a href="business-planning.html">Business Planning</a></li>
                            <li><a href="tax-strategy.html">Tax strategy</a></li>
                            <li><a href="financial-advices.html">Financial Advices</a></li>
                            <li><a href="insurance-strategy.html">Insurance Strategy</a></li>
                            <li><a href="start-ups.html">Start Ups</a></li>
                            <li><a href="manage-investment.html">Manage Investment</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Contact</a>
                        <ul class="sub-menu">
                            <li><a href="contact.html">Contact 1</a></li>
                            <li><a href="contact2.html">Contact 2</a></li>
                            <li><a href="contact3.html">Contact 3</a></li>
                        </ul>
                    </li>
                </ul> <!-- //.nav-menu -->
                <div class="canvas-contact">
                    <div class="address-area">
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Address</h4>
                                <em>05 kandi BR. New York</em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Email</h4>
                                <em><a href="mailto:support@rstheme.com">support@rstheme.com</a></em>
                            </div>
                        </div>
                        <div class="address-list">
                            <div class="info-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info-content">
                                <h4 class="title">Phone</h4>
                                <em>+019988772</em>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>

