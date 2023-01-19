<?php

add_action('widgets_init', 'search_post_function');
function search_post_function()
{
    register_widget('Search_Post_Widget');
}

class Search_Post_Widget extends WP_Widget
{
    function __construct()
    {
        $widget_ops = array(
            'description' => 'My Widget is awesome',
        );
        parent::__construct('typhoon_search_post', 'Typhoon Search Post', $widget_ops);
    }

    // Creating widget front-end
    public function widget($args, $datebase)
    {
        ob_start();
        ?>
            <div class="search-widget mb-50">
                <div class="search-wrap">
                    <input type="search" placeholder="Searching..." name="s" class="search-input"
                           value="">
                    <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                </div>
            </div>
        <?php echo ob_get_clean();
    }

    // Creating widget Backend
    public function form($datebase){

    }

}