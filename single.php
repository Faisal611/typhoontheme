<?php get_header('blogs'); ?>
<div class="rs-breadcrumbs" style="background-image: url(<?php the_field('single_blog_page_bg', 'option'); ?>)">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title"><?php the_title() ?></h1>
        </div>
    </div>
</div>
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
                    <div class="col-lg-12">
                        <?php while (have_posts()) : the_post();?>
                        <div class="blog-details">
                            <div class="bs-img mb-35">
                                <?php the_post_thumbnail();?>
                            </div>
                            <div class="blog-full">
                                <ul class="single-post-meta">
                                    <li>
                                        <span class="p-date"><i class="fa fa-calendar-check-o"></i><?php the_date() ?></span>
                                    </li>
                                    <li>
                                        <span class="p-date"> <i class="fa fa-user-o"></i><?php the_author()?></span>
                                    </li>
                                    <li class="Post-cate">
                                        <div class="tag-line">
                                            <i class="fa fa-book"></i>
                                            <a href="#">Strategy</a>
                                        </div>
                                    </li>
                                    <li class="post-comment"><i class="fa fa-comments-o"></i> 1</li>
                                </ul>
                                <p> <?php the_content();?> </p>

                                <h3 class="comment-title">Leave a Reply</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="comment-note">
                                    <div id="form-messages"></div>
                                    <?php comments_template();?>
                                    <form id="contact-form" method="post"
                                          action="https://reactheme.com/products/html/bizup/mailer.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="name"
                                                           name="name" placeholder="Name*" required="">
                                                </div>
                                                <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="email"
                                                           name="email" placeholder="E-Mail*" required="">
                                                </div>
                                                <div class="col-lg-12 mb-30">
                                                            <textarea class="from-control" id="message" name="message"
                                                                      placeholder="Your message Here"
                                                                      required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0">
                                                <input class="readon post" type="submit" value="Post Comment">
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->
<?php get_footer() ?>
