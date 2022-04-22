<?php 

/* 

Plugin name: Anges plugin
Version: 1.0
Author: Angelica M S
Description: Rensar bort överflödiga fält i kassan. 

*/

add_filter('woocommerce_checkout_fields', 'ams_overwrite_checkout_fields');

function ams_overwrite_checkout_fields($fields) {

    unset(
        $fields['order']['order_comments'], 
        $fields['billing']['billing_address_2'],
        $fields['shipping']['shipping_address_2'],
        $fields['shipping']['shipping_company'],  
        $fields['billing']['billing_company'], 
    );

    return $fields;

}




?>