<?php
add_action('woocommerce_before_cart','woocommerce_before_cart_function');
function woocommerce_before_cart_function () {
    ?>


<div class="rs-cart pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="cart-wrap">
<?php
}



add_action('woocommerce_after_cart','woocommerce_after_cart_function');
function woocommerce_after_cart_function () {
    ?>
            </div>
        </div>
    </div>
    <?php
}