<?php


// Remove the Default WooCommerce Footer and create a new one!
function carolinaspa_footer() {
    remove_action('di_ecommerce_footer_copyright_right_setting_front', 'di_ecommerce_footer_copyright_right_setting_front_cntnt');
    add_action('woocommerce_after_data_object_save', 'carolinaspa_new_footer_text', 20);
    
    
}
add_action('init', 'carolinaspa_footer');
function carolinaspa_new_footer_text() {
    echo "<div class='reserved'>";
    echo "<p>Developed by &copy; " . "Abdullah Al Azim" . " " . get_the_date('Y') . "</p>";
    echo "</div>";
}