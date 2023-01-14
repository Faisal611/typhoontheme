<?php
/*
 * Template Name: Home page
 */
get_header();
?>
<div id="rs-slider" class="rs-slider slider3 rs-slider-style4 relative">
    <div class="bend niceties">
        <div id="nivoSlider" class="slides">
            <img src="<?php echo get_template_directory_uri()?>'/assets/images/slider/h4-sl1.jpg'" alt="" title="#slide-1" />
            <img src="<?php echo get_template_directory_uri()?>'/assets/images/slider/h4-sl2.jpg'" alt="" title="#slide-2" />
        </div>
        <!-- Slide 1 -->
        <div id="slide-1" class="slider-direction">
            <div class="content-part text-center">
                <div class="container">
                    <div class="slider-des">
                        <div class="sl-subtitle"> Our Business Goal</div>
                        <h1 class="sl-title"> To grow & manage<br> Your Business</h1>
                    </div>
                    <ul class="slider-bottom">
                        <li><a class="readon consultant orange-slide" href="contact.html">Get Started</a></li>
                        <li>
                            <div class="rs-videos">
                                <div class="animate-border orange-color-style">
                                    <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div id="slide-2" class="slider-direction">
            <div class="content-part text-center">
                <div class="container">
                    <div class="slider-des">
                        <div class="sl-subtitle"> Our Business Goal</div>
                        <h1 class="sl-title"> To grow & manage<br> Your Business</h1>
                    </div>
                    <ul class="slider-bottom">
                        <li><a class="readon consultant orange-slide" href="contact.html">Get Started</a></li>
                        <li>
                            <div class="rs-videos">
                                <div class="animate-border orange-color-style">
                                    <a class="popup-border" href="https://www.youtube.com/watch?v=FMvA5fyZ338">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
