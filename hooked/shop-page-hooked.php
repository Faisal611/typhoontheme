<?php
// remove hook
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);





add_filter('woocommerce_show_page_title','woo_page_function');
function woo_page_function () {
    ?>
    <div class="rs-breadcrumbs " style="background-image:url(<?php echo get_template_directory_uri() .'/assets/images/breadcrumbs/inr_4.jpg'?>) ">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    <?php woocommerce_page_title()?>
                </h1>
            </div>
        </div>
    </div>
    <?php
}

add_action('woocommerce_before_shop_loop','woo_before_shop_loop_function');
function woo_before_shop_loop_function() {
    ?>
    <div class="rs-shop-part pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
<?php
}



add_action('woocommerce_after_shop_loop','woo_after_shop_loop_function');
function woo_after_shop_loop_function() {
    ?>
            </div>
        </div>
<?php
}

// content-product.php
add_action('woocommerce_after_shop_loop_item','shop_page_product_title');
function shop_page_product_title () {
    ?>
        <div class="content-desc text-center">
            <h2 class="loop-product-title"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <span class="price"><?php global $product; echo $product->get_price_html();?></span>
        </div>
    <?php
}
