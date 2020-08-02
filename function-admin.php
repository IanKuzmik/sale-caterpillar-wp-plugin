<?php
/*
  @package tapRoot_apothecary
  ==============
    ADMIN PAGE
  ==============
*/


/*
    GENERATE PAGES
  ===================
*/
function tr_apoth_add_admin_page() {
  // generate menu
  add_menu_page( 'Xochis Options', 'Xochis', 'manage_options', 'xochis', 'tr_apoth_create_admin_page', 'dashicons-buddicons-replies', 110 );
  // generate subpages
  add_submenu_page( 'xochis', 'Xochis General Options', 'General', 'manage_options', 'xochis', 'tr_apoth_create_admin_page' );
  add_submenu_page( 'xochis', 'Xochis Products Options', 'Products', 'manage_options', 'xochis_products', 'tr_apoth_create_admin_products_page' );
  add_submenu_page( 'xochis', 'Xochis Instagram Options', 'Instagram', 'manage_options', 'xochis_instagram', 'tr_apoth_create_admin_instagram_page' );
  add_submenu_page( 'xochis', 'Xochis Google Maps', 'Google Maps', 'manage_options', 'xochis_google_maps', 'tr_apoth_create_admin_googe_maps_page' );
  add_submenu_page( 'xochis', 'Sale Caterpillar', 'Sale Caterpillar', 'manage_options', 'xochis_sale_caterpillar', 'tr_apoth_create_admin_sale_caterpillar_page' );

  // generate settings
  add_action( 'admin_init', 'tr_apoth_custom_settings' );
}
add_action( 'admin_menu', 'tr_apoth_add_admin_page' );
/*
    PAGE TEMPLATE CALLBACKS
  ===========================
*/
function tr_apoth_create_admin_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin.php' ); }
function tr_apoth_create_admin_products_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-products.php' ); };
function tr_apoth_create_admin_instagram_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-instagram.php' ); }
function tr_apoth_create_admin_googe_maps_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-google-maps.php' ); }
function tr_apoth_create_admin_sale_caterpillar_page() { require_once( get_template_directory().'/inc/admin-templates/tr-apoth-admin-sale-caterpillar.php' ); }

/*
    SETTINGS
  ============
*/
function tr_apoth_custom_settings() {
  // --- GENERAL ---
  // GENERAL
  // IMAGES
  add_settings_section( 'tr-apoth-general-images-settings-section', 'Manage Site Images', 'tr_apoth_general_images_settings_section', 'xochis' );
  // home page products
  do_settings_tr_apoth_home_product_images( ['tea', 'incense', 'body', 'syrup', 'jewelery', 'sundries'] );

  // --- PRODUCTS ---
  // tea
  add_settings_section( 'tr-apoth-products-settings-section-tea', 'Add Tea', 'tr_apoth_products_settings_section_tea', 'xochis_products_tea' );
  register_setting( 'tr-apoth-products-tea-option-group', 'tr-apoth-products-tea-setting' );
  add_settings_field( 'tr-apoth-products-tea-field', 'Tea', 'tr_apoth_products_tea_field', 'xochis_products_tea', 'tr-apoth-products-settings-section-tea' );
  // incense
  add_settings_section( 'tr-apoth-products-settings-section-incense', 'Add Incense', 'tr_apoth_products_settings_section_incense', 'xochis_products_incense' );
  register_setting( 'tr-apoth-products-incense-option-group', 'tr-apoth-products-incense-setting' );
  add_settings_field( 'tr-apoth-products-incense-field', 'Incense', 'tr_apoth_products_incense_field', 'xochis_products_incense', 'tr-apoth-products-settings-section-incense' );

  // --- INSTAGRAM ---
  add_settings_section( 'tr-apoth-instagram-settings-section', 'Instagram Feed', 'tr_apoth_instagram_settings_section', 'xochis_instagram' );
  // max count
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-max-count-setting' );
  add_settings_field( 'tr-apoth-instagram-max-count-field', 'Number of Posts to Display', 'tr_apoth_set_instagram_max_count', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );
  // instagram link
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-link-setting' );
  add_settings_field( 'tr-apoth-instagram-link-field', 'Instagram URL', 'tr_apoth_set_instagram_link', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );
  // refresh/hidden url div
  register_setting( 'tr-apoth-instagram-option-group', 'tr-apoth-instagram-img-urls' );
  add_settings_field( 'tr-apoth-instagram-img-urls-field', 'Refresh Feed', 'tr_apoth_store_instagram_urls', 'xochis_instagram', 'tr-apoth-instagram-settings-section' );

  // --- GOOGLE MAPS ---
  add_settings_section( 'tr-apoth-google-maps-settings-section', 'Google Maps', 'tr_apoth_google_maps_settings_section', 'xochis_google_maps');
  // api key
  register_setting( 'tr-apoth-google-maps-option-group', 'tr-apoth-google-maps-key-setting' );
  add_settings_field( 'tr-apoth-google-maps-key-field', 'API Key', 'tr_apoth_set_google_maps_key', 'xochis_google_maps', 'tr-apoth-google-maps-settings-section' );

  // --- SALE CATERPILLAR ---
  add_settings_section( 'tr-apoth-sale-caterpillar-settings-section', 'Sale Caterpillar', 'tr_apoth_sale_caterpillar_settings_section', 'xochis_sale_caterpillar');
  // api key
  register_setting( 'tr-apoth-sale-caterpillar-option-group', 'tr-apoth-sale-caterpillar-char-setting' );
  add_settings_field( 'tr-apoth-sale-caterpillar-char-field', 'Character', 'tr_apoth_set_sale_caterpillar_char', 'xochis_sale_caterpillar', 'tr-apoth-sale-caterpillar-settings-section' );
}

/*
    SETTINGS SECTION CALLBACKS
  ==============================
*/
function tr_apoth_general_images_settings_section() {
  echo '';
}
function tr_apoth_products_settings_section_tea() { echo ''; }
function tr_apoth_products_settings_section_incense() { echo ''; }
function tr_apoth_instagram_settings_section() {
  echo 'Save after each setting change for best results';
}
function tr_apoth_google_maps_settings_section() {
  echo 'Manage your Maps';
}
function tr_apoth_sale_caterpillar_settings_section() {
  echo 'Manage your Sale Caterpillar';
}

/*
    SETTINGS FIELDS
  ====================
*/
// --- GENERAL ---
function tr_apoth_general_images_home_product_tea_field()        { tr_apoth_set_product_preview_images( 'tea' ); }
function tr_apoth_general_images_home_product_incense_field()    { tr_apoth_set_product_preview_images( 'incense' ); }
function tr_apoth_general_images_home_product_body_field()       { tr_apoth_set_product_preview_images( 'body' ); }
function tr_apoth_general_images_home_product_syrup_field()      { tr_apoth_set_product_preview_images( 'syrup' ); }
function tr_apoth_general_images_home_product_jewelery_field()   { tr_apoth_set_product_preview_images( 'jewelery' ); }
function tr_apoth_general_images_home_product_sundries_field()   { tr_apoth_set_product_preview_images( 'sundries' ); }

// --- Products ---
function tr_apoth_products_tea_field() {
  $saved_products = get_option('tr-apoth-products-tea-setting');
  $output  = '';
  $output .= '<div class="tr-apoth-admin-product-inputs" id="tea">';
  $output .=  '<input class="hidden-input d-none" type="text" id="tr-apoth-products-tea-field" name="tr-apoth-products-tea-setting" value="'.$saved_products.'" >';
  $output .=  '<input type="text" id="tea-name" name="" value="" placeholder="Tea Name...">';
  $output .=  '<input type="text" id="tea-tagline" name="" value="" placeholder="Tea Tagline...">';
  $output .=  '<textarea id="tea-description" name="" value="" placeholder="Tea Description..."></textarea>';
  $output .=  '<textarea id="tea-ingredients" name="" value="" placeholder="Tea Ingredients..."></textarea>';
  $output .=  '<input type="text" id="tea-brew" name="" value="" placeholder="Tea Brew Time...">';
  $output .=  '<input type="text" id="tea-vibe" name="" value="" placeholder="Tea Vibe...">';
  $output .=  '<button id="tea-gallery" class="input-btn tr-apoth-js-uploadMedia" type="button" name="button" data-urls="">Add Gallery</button>';
  $output .=  '<button id="add-tea" type="button" name="button">Add Tea</button> ';
  $output .= '</div>';
  echo $output;
}
function tr_apoth_products_incense_field() {
  $saved_products = get_option('tr-apoth-products-incense-setting');
  $output  = '';
  $output .= '<div class="tr-apoth-admin-product-inputs" id="incense">';
  $output .=  '<input class="hidden-input d-none" type="text" id="tr-apoth-products-incense-field" name="tr-apoth-products-incense-setting" value="'.$saved_products.'" >';
  $output .=  '<input type="text" id="incense-name" name="" value="" placeholder="Incense Name...">';
  $output .=  '<input type="text" id="incense-tagline" name="" value="" placeholder="Incense Tagline...">';
  $output .=  '<textarea id="iincense-ngredients" name="" value="" placeholder="Incense Ingredients..."></textarea>';
  $output .=  '<button id="incense-gallery" class="input-btn tr-apoth-js-uploadMedia" type="button" name="button" data-urls="">Add Gallery</button>';
  $output .=  '<button id="add-incense" type="button" name="button">Add Incense</button> ';
  $output .= '</div>';
  echo $output;
}

// --- INSTAGRAM ---
function tr_apoth_set_instagram_max_count() {
  $selected_count = get_option('tr-apoth-instagram-max-count-setting');
  $output  = '';
  $output .= '<select id="tr-apoth-instagram-max-count-field" name="tr-apoth-instagram-max-count-setting">';
  $output .= '<option value="4" '. ( ($selected_count == 4) ? 'selected' : '' ) .' >4</option>';
  $output .= '<option value="8" '. ( ($selected_count == 8) ? 'selected' : '' ) .' >8</option>';
  $output .= '<option value="12" '. ( ($selected_count == 12) ? 'selected' : '' ) .' >12</option>';
  $output .= '<option value="16" '. ( ($selected_count == 16) ? 'selected' : '' ) .' >16</option>';
  $output .= '<option value="20" '. ( ($selected_count == 20) ? 'selected' : '' ) .' >20</option>';
  $output .= '<option value="24" '. ( ($selected_count == 24) ? 'selected' : '' ) .' >24</option>';
  $output .= '</select>';
  echo $output;
}
function tr_apoth_set_instagram_link() {
  $instagram_link = get_option('tr-apoth-instagram-link-setting');
  echo '<input type="text" id="text" name="tr-apoth-instagram-link-setting" value="'.esc_html($instagram_link).'" placeholder="Instagram Link...">';
}

function tr_apoth_store_instagram_urls() {
  $image_urls = get_option('tr-apoth-instagram-img-urls');
  $output  = '';
  $output .= '<button id="tr-apoth-js-instagramRefresh" class="tr-apoth-instagram-refresh-button" type="button" name="button" data-url="'.admin_url( 'admin-ajax.php' ).'">Refresh</button>';
  $output .= '<span class="tr-apoth-instagram-refresh-spinner tr-icon-spin6 animate-spin" ></span>';
  $output .= '<textarea id="tr-apoth-instagram-img-urls-field" name="tr-apoth-instagram-img-urls" style="display: none; visibility: hidden;">'.esc_html($image_urls).'</textarea>';
  echo $output;
}

// --- GOOGLE MAPS ---
function tr_apoth_set_google_maps_key() {
  $api_key = get_option('tr-apoth-google-maps-key-setting');
  echo '<input type="text" id="text" name="tr-apoth-google-maps-key-setting" value="'.esc_html($api_key).'" placeholder="API Key...">';
}

// --- SALE CATERPILLAR ---
function tr_apoth_set_sale_caterpillar_char() {
  //$current_char = get_option('tr-apoth-sale-caterpillar-char-setting');
  //echo '<input type="text" id="text" name="tr-apoth-sale-caterpillar-char-setting" value="'.esc_html($current_char).'" placeholder="Select Character...">';
  require_once( get_template_directory().'/inc/admin-templates/tr-apoth-sale-caterpillar-char-field.php' );
}
