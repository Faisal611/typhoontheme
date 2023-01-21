<?php
// remove hook
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
// product image
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
// product cart
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);
// remove hook end




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

// content-product.php product-image
add_action('woocommerce_before_shop_loop_item','shop_image_before_link');
function shop_image_before_link() {
    ?>
        <div class="image-product">
            <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
            <div class="overley">
                <?php
                global $product;

                echo apply_filters(
                    'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                    sprintf(
                        '<a href="%s" data-quantity="%s"><i class="flaticon-shopping-bag"></i></a>',
                        esc_url( $product->add_to_cart_url() ),
                        esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 )
                    ),
                    $product,
                    $args
                );
                ?>
            </div>
        </div>
    <?php
}

// content-product.php product-title
add_action('woocommerce_after_shop_loop_item','shop_page_product_title');
function shop_page_product_title () {
    ?>
        <div class="content-desc text-center">
            <h2 class="loop-product-title"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <span class="price"><?php global $product; echo $product->get_price_html();?></span>
        </div>
    <?php
}
