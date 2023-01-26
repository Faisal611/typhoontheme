<?php
// Remove hooks
remove_action('woocommerce_before_shop_loop_item','woocommerce_template_loop_product_link_open',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_show_product_loop_sale_flash',10);
remove_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_thumbnail',10);
remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price',10);
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);


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

add_action('woocommerce_before_shop_loop','woocommerce_before_shop_loop');
function woocommerce_before_shop_loop() {
    ?>
    <div class="rs-shop-part pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
<?php
}

// shop image
add_action('woocommerce_before_shop_loop_item_title','woo_shop_page_functions');
function woo_shop_page_functions () {
    ?>
            <div class="image-product">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                <div class="overley">
                    <?php
                        global $product, $post;

                        echo apply_filters(
                            'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                            sprintf(
                                '<a href="%s" data-quantity="%s" ><i class="flaticon-shopping-bag"></i></a>',
                                esc_url( $product->add_to_cart_url() ),
                                esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                            ),
                            $product,
                            $args
                        );
                    ?>
                </div>
                <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>
            </div>
            <div class="content-desc text-center">
                <h2 class="loop-product-title"><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
                <span class="price"><?php global $product; echo $product->get_price_html()?></span>
            </div>
    <?php
}




add_action('woocommerce_after_shop_loop','woocommerce_after_shop_loop');
function woocommerce_after_shop_loop() {
    ?>
        </div>
    </div>
<?php
}







