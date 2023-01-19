<?php get_header('blogs');?>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs" style="background-image: url(<?php the_field('blog_header_bg','option');?>)">
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
                    <?php dynamic_sidebar('right-sidebar'); ?>
                </div>
            </div>
            <div class="col-lg-8 pr-35 md-pr-15 md-mt-50">
                <div class="row">
                    <div class="col-lg-12">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="blog-item">
                                <div class="blog-img">
                                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                                    <ul class="post-categories">
                                        <li><?php the_category(',');?></li>
                                    </ul>
                                </div>
                                <div class="blog-content">
                                    <h3 class="blog-title"><a href="<?php the_permalink();?>"><?php the_title()?></a></h3>
                                    <div class="blog-meta">
                                        <ul class="btm-cate">
                                            <li>
                                                <div class="blog-date">
                                                    <i class="fa fa-calendar-check-o"></i>  <?php the_date()?>
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
                                        <?php echo wp_trim_words(get_the_content(),20 ,'......')?>
                                    </div>
                                    <div class="blog-button">
                                        <a class="blog-btn" href="<?php the_permalink();?>">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>

                    <div class="col-lg-12">
                        <div class="pagination-area">
                            <?php
                                the_posts_pagination(array(
                                    'screen_reader_text' => ' ',
                                    'prev_text' => __( '<i class="fa fa-solid fa-arrow-left"></i>', 'typhoontheme' ),
                                    'next_text' => __( '<i class="fa fa-solid fa-arrow-right"></i>', 'typhoontheme' ),
                                ));
                            ?>
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
