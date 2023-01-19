<?php

add_action('widgets_init', 'category_post_function');
function category_post_function()
{
    register_widget('Category_Post_Widget');
}

class Category_Post_Widget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array(
            'description' => 'My Widget is awesome',
        );
        parent::__construct('typhoon_category_post', 'Typhoon Category Post', $widget_ops);
    }

    // Creating widget front-end
    public function widget($args, $datebase)
    {
        ob_start();
        ?>
            <div class="categories">
                <div class="widget-title">
                    <h3 class="title"><?php echo $datebase['title'] ?></h3>
                </div>
                <?php
                $posts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => $datebase['count']
                    ));
                ?>
                <ul>
                    <?php while ($posts->have_posts()) : $posts->the_post();?>
                        <li><?php the_category(',','');?></li>
                    <?php endwhile; wp_reset_postdata();?>
                </ul>

            </div>
        <?php echo ob_get_clean();
    }

    // Creating widget Backend
    public function form($datebase){
        ?>
            <p>
                <label for="<?php echo $this->get_field_id('title')?>">Title:</label>
                <input class="widefat" id="<?php echo $this->get_field_id('title')?>" name="<?php echo $this->get_field_name('title')?>" type="text" value="<?php echo $datebase['title']?>">

                <label for="<?php echo $this->get_field_id('count') ?>">Counts:</label>
                <select class="widefat" name="<?php echo $this->get_field_name('count')?>" id="<?php echo $this->get_field_id('count')?>">
                    <option value="1" <?php if ($datebase['count'] == 1) {echo 'selected';}?>>1</option>
                    <option value="2" <?php if ($datebase['count'] == 2) {echo 'selected';}?>>2</option>
                    <option value="3" <?php if ($datebase['count'] == 3) {echo 'selected';}?>>3</option>
                    <option value="4" <?php if ($datebase['count'] == 4) {echo 'selected';}?>>4</option>
                </select>
            </p>
        <?php
    }

}