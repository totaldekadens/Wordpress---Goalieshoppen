<?php 


function addAndRemove() {


    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10); // Tar bort "Lägg till i kundvagn"-knappen på samlingssidorna
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20 ); // Tar bort sortering på samlingssidorna
    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20 ); // Tar bort sortering på samlingssidorna
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 ); // Tar bort sortering på samlingssidorna
    remove_action('woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 ); // Tar bort sortering på samlingssidorna

    remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 ); // Tar bort rabattkoden däruppe
    add_action('woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form', 10 ); // Lägger till rabattkoden där nere istället
    add_action('storefront_before_content', 'addHero', 1);

    if(is_checkout()) {
        
        remove_all_actions('storefront_header'); // Tar bort allt i headern
        remove_all_actions('storefront_footer'); // Tar bort allt i footern
        remove_action('storefront_before_content', 'addHero', 1); // Tar bort Hero i kassan 
        unregister_sidebar('sidebar-1'); // Tar bort sidebaren i kassan
        remove_action( 'storefront_page', 'storefront_page_header', 10 ); // Tar bort sidtiteln 
        add_action('woocommerce_review_order_before_payment', 'change_cart', 10); // Länk till varukorg
    }

    if(is_cart()) {

        remove_action( 'storefront_page', 'storefront_page_header', 10 ); // Tar bort sidtiteln 
        remove_action('storefront_before_content', 'addHero', 1); // Tar bort Hero i kassan 
        unregister_sidebar('sidebar-1'); // Tar bort sidebaren i kassan

    }

}

add_action('wp', 'addAndRemove');



// add_action('woocommerce_review_order_before_payment', 'change_cart', 10);  i funktionen addAndRemove
function change_cart() {
     ?> <a class="changeCart" href="<?php echo wc_get_cart_url(); ?>">Ändra din varukorg här</a><?php 
}


// add_action('storefront_before_content', 'addHero', 1);  i funktionen addAndRemove
function addHero() {
    dynamic_sidebar('hero');
}



function myWidgets() {

    register_sidebar( array(
        'name' => 'hero',
        'id' => 'hero',
        'description' => 'Hero',
    ));

    register_sidebar( array(
        'name' => 'fot1',
        'id' => 'fot1',
        'description' => 'fot1',
    ));

    register_sidebar( array(
        'name' => 'fot2',
        'id' => 'fot2',
        'description' => 'fot2',
    ));

    register_sidebar( array(
        'name' => 'fot3',
        'id' => 'fot3',
        'description' => 'fot3',
    ));

}

add_action( 'widgets_init', 'myWidgets' );




?>