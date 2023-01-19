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
                    <?php dynamic_sidebar('right-sidebar'); ?>
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
