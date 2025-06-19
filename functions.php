<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


// php libraries
require get_stylesheet_directory() . '/vendor/autoload.php';

// ponds
require get_stylesheet_directory() . '/pond-plugins/index.php';

// phone link format filters
function ons_phone_format_filter_link( $string ) {
	$phone = preg_replace("/[^0-9+]/", "", $string);
    return "tel:+1" . $phone;
}
add_filter( 'ons_phone_format_filter_link', 'ons_phone_format_filter_link', 10, 3 );

function ons_phone_format_filter_link_script() {
    echo "
    <script type=\"text/javascript\">
        function ons_phone_format_filter_link(string=\"\") {
            return \"tel:+1\" + string.replace(/[^0-9+]/g, \"\");
        }
    </script>
    ";
}
add_action( 'wp_head', 'ons_phone_format_filter_link_script' );
// end of phone link format filters