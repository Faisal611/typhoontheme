<?php
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);



add_action('woocommerce_before_single_product','woocommerce_before_single_product');
function woocommerce_before_single_product () {
    ?>

        <div id="rs-single-shop" class="rs-single-shop pt-100">
            <div class="container">

    <?php
}
add_action('woocommerce_single_product_summary','single_shop_cat_tag_color_meta',40);
function single_shop_cat_tag_color_meta () {
    ?>
    <p class="category">
        <ul>
            <li>
                <span>Category:</span>
                <?php
                    $product_cats = get_the_terms(get_the_ID(),'product_cat');
                    foreach ($product_cats as $product_cat){
                        $cat_link = get_term_link($product_cat);
                ?>
                <a href="<?php echo $cat_link; ?>"><?php echo $product_cat->name?></a>
                <?php }?>
            </li>
            <li>
                <span>Sizes:</span>
                <?php
                    $sizes = get_the_terms(get_the_ID(),'product-size');
                    $sting = array();
                    if ($sizes) {
                        foreach ($sizes as $size) {
                            $sting[] = $size->name;
                        }
                        echo implode(' , ',$sting  );
                    }
                ?>
            </li>
            <li><span>Colors:</span>
                <?php
                    $colors = get_the_terms(get_the_ID(),'product-color');
                    $arrays = array();
                    if ($colors) {
                        foreach ($colors as $color) {
                            $arrays[] = $color->name;
                        }
                        echo implode(' , ',$arrays);
                    }else {
                        echo 'No Color';
                    }
                ?>
            </li>
            <li><span>Tags:</span>
                <?php
                   $product_tags = get_the_terms(get_the_ID(),'product_tag');
                   if ($product_tags) {
                       foreach ($product_tags as $product_tag) {
                           $tags_link = get_term_link($product_tag)
                           ?>
                           <a href="<?php echo $tags_link ?>"><?php echo $product_tag->name;?></a>
                           <?php
                       }
                   }
                ?>
            </li>
        </ul>
    </p>
    <?php
}


// Tabs Development


add_action('woocommerce_after_single_product','woocommerce_after_single_product');
function woocommerce_after_single_product () {
    ?>

            </div>
        </div>
    <?php
}