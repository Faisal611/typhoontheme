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
                     'post_type' => 'post',
                     'posts_per_page' => $datebase['count']
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
        <?php echo ob_get_clean();
    }

    // Creating widget Backend
    public function form($datebase){
        ob_start()
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title')?>">Title:</label>
            <input type="text" name="<?php echo $this->get_field_name('title')?>" id="<?php echo $this->get_field_id('title')?>" class="widefat" value="<?php echo $datebase['title']?>">

            <label for="<?php echo $this->get_field_id('count')?>">Counts</label>
            <select class="widefat" name="<?php echo $this->get_field_name('count')?>" id="<?php echo $this->get_field_id('count')?>">
                <option value="1" <?php if ($datebase['count'] == 1) {echo 'selected';}?>>1</option>
                <option value="2" <?php if ($datebase['count'] == 2) {echo 'selected';}?>>2</option>
                <option value="3" <?php if ($datebase['count'] == 3) {echo 'selected';}?>>3</option>
                <option value="4" <?php if ($datebase['count'] == 4) {echo 'selected';}?>>4</option>
            </select>
        </p>
    <?php
       echo ob_get_clean();
    }

}