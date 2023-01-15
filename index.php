<?php get_header('blogs');?>

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">Blog</h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input"
                                   value="">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Recent Posts</h3>
                        </div>
                        <div class="recent-post-widget no-border">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style2/1.jpg"
                                                                 alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html"> Customer Onboarding Strategy: A Guide to Class </a>
                                <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style2/2.jpg"
                                                                 alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html"> How investing in dependend increasing to business
                                </a>
                                <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style2/3.jpg"
                                                                 alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html">7 Productivity tips to avoid burnout when
                                    working</a>
                                <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                            </div>
                        </div>
                    </div>
                    <div class="categories">
                        <div class="widget-title">
                            <h3 class="title">Categories</h3>
                        </div>
                        <ul>
                            <li><a href="branding.html">Branding</a></li>
                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                            <li><a href="e-commerce.html">E-commerce</a></li>
                            <li><a href="graphic-design.html">Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                <div class="row">
                    <div class="col-lg-12 mb-50">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                    <ul class="post-categories">
                                        <li><?php the_category(',');?></li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="blog-details.html"><?php the_title()?></a></h3>
                                    <div class="blog-meta">
                                        <ul class="btm-cate">
                                            <li>
                                                <div class="blog-date">
                                                    <i class="fa fa-calendar-check-o"></i> <?php the_data('y m d')?>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="author">
                                                    <i class="fa fa-user-o"></i> <?php the_author()?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="blog-desc">
                                        <?php echo wp_trim_words(get_the_content(),50 ,'......')?>
                                    </div>
                                    <div class="blog-button">
                                        <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <div class="nav-link">
                                <span class="page-number white-color">1</span>
                                <a class="page-number" href="#">2</a>
                                <a class="page-number border-none" href="#">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->
</div>
<!-- Main content End -->


<!--Full width header End-->

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">Blog</h1>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Blog Section Start -->
<div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-4 col-md-12 order-last">
                <div class="widget-area">
                    <div class="search-widget mb-50">
                        <div class="search-wrap">
                            <input type="search" placeholder="Searching..." name="s" class="search-input"
                                   value="">
                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                    <div class="recent-posts mb-50">
                        <div class="widget-title">
                            <h3 class="title">Recent Posts</h3>
                        </div>
                        <div class="recent-post-widget no-border">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style2/1.jpg"
                                                                 alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html"> Customer Onboarding Strategy: A Guide to Class </a>
                                <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style2/2.jpg"
                                                                 alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html"> How investing in dependend increasing to business
                                </a>
                                <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                            </div>
                        </div>
                        <div class="recent-post-widget">
                            <div class="post-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style2/3.jpg"
                                                                 alt=""></a>
                            </div>
                            <div class="post-desc">
                                <a href="blog-details.html">7 Productivity tips to avoid burnout when
                                    working</a>
                                <span class="date-post"> <i class="fa fa-calendar"></i> Aug 8, 2021 </span>
                            </div>
                        </div>
                    </div>
                    <div class="categories">
                        <div class="widget-title">
                            <h3 class="title">Categories</h3>
                        </div>
                        <ul>
                            <li><a href="branding.html">Branding</a></li>
                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                            <li><a href="e-commerce.html">E-commerce</a></li>
                            <li><a href="graphic-design.html">Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                <div class="row">
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style1/1.jpg"
                                                                 alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Branding</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Customer onboarding there
                                        business classes</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> Aug 7, 2021
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> rstheme
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled
                                    and demo realized by the charms of pleasure of the moment, so blinded by
                                    desire, that...
                                </div>
                                <div class="blog-button">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style1/2.jpg"
                                                                 alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Branding</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">How Investing in
                                        Self-Dependent Increase Business</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> Aug 7, 2021
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> rstheme
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled
                                    and demo realized by the charms of pleasure of the moment, so blinded by
                                    desire, that...
                                </div>
                                <div class="blog-button">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style1/3.jpg"
                                                                 alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-details.html">Digital Marketing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">7 Productivity Tips to Avoid
                                        Burnout When Working</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> Aug 7, 2021
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> rstheme
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled
                                    and demo realized by the charms of pleasure of the moment, so blinded by
                                    desire, that...
                                </div>
                                <div class="blog-button">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-50">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="blog-details.html"><img src="assets/images/blog/inner/style1/4.jpg"
                                                                 alt=""></a>
                                <ul class="post-categories">
                                    <li><a href="blog-single.html">Digital Marketing</a></li>
                                </ul>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">Email Marketing Tips That
                                        Will Increase Your Sales</a></h3>
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li>
                                            <div class="blog-date">
                                                <i class="fa fa-calendar-check-o"></i> Aug 7, 2021
                                            </div>
                                        </li>
                                        <li>
                                            <div class="author">
                                                <i class="fa fa-user-o"></i> rstheme
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-desc">
                                    We denounce with righteous indige nation and dislike men who are so beguiled
                                    and demo realized by the charms of pleasure of the moment, so blinded by
                                    desire, that...
                                </div>
                                <div class="blog-button">
                                    <a class="blog-btn" href="blog-details.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <div class="nav-link">
                                <span class="page-number white-color">1</span>
                                <a class="page-number" href="#">2</a>
                                <a class="page-number border-none" href="#">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->
</div>
<!-- Main content End -->
<?php get_footer();?>
