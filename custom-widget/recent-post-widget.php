<?php

add_action('widgets_init', 'recent_post_function');
function recent_post_function()
{
    register_widget('Recent_Post_Widget');
}

class Recent_Post_Widget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array(
            'description' => 'My Widget is awesome',
        );
        parent::__construct('typhoon_recent_post', 'Typhoon Recent Post', $widget_ops);
    }

    // Creating widget front-end
    public function widget($args, $datebase)
    {
        ob_start();
        ?>
            <div class="recent-posts mb-50">
                <div class="widget-title">
                    <h3 class="title"><?php echo $datebase['title']?></h3>
                </div>
                <?php
                $recents = new WP_Query(array(
                     'post_type' => 'post'
                ));
                while ($recents->have_posts()) : $recents->the_post();?>
                    <div class="recent-post-widget">
                        <div class="post-img">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                        </div>
                        <div class="post-desc">
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            <span class="date-post"> <i class="fa fa-calendar"></i> <?php the_date()?> </span>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
        <?php
    }

    // Creating widget Backend
    public function form($datebase){
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title')?>">Title:</label>
            <input type="text" name="<?php echo $this->get_field_name('title')?>" id="<?php echo $this->get_field_id('title')?>" class="widefat" value="<?php echo $datebase['title']?>">
        </p>
    <?php
    }

}