<?php
require_once get_template_directory() . '/vendor/autoload.php';
// Get customizer options
use SuperbThemesCustomizer\CustomizerControls;

// New color variables
if (method_exists(CustomizerControls::class, "OverwriteDefault")) {
    CustomizerControls::OverwriteDefault('--superb-pixels-primary', "#fcac33");
    CustomizerControls::OverwriteDefault('--superb-pixels-primary-dark', "#eca130");
    CustomizerControls::OverwriteDefault(CustomizerControls::NAVIGATION_LAYOUT_STYLE, "navigation_layout_style_choice_large");
    CustomizerControls::OverwriteDefault(CustomizerControls::SITE_IDENTITY_HIDE_TAGLINE, "0");
    CustomizerControls::OverwriteDefault(CustomizerControls::HEADER_METASLIDER_ONLY_FRONTPAGE, "1");
    CustomizerControls::OverwriteDefault(CustomizerControls::SIDEBAR_WOOCOMMERCE_HIDE, "1");
    CustomizerControls::OverwriteDefault(CustomizerControls::FOOTER_GOTOTOP_HIDE, "0");
    CustomizerControls::OverwriteDefault(CustomizerControls::BLOGFEED_COLUMNS_STYLE, "blogfeed_twocolumn_masonry");
    CustomizerControls::OverwriteDefault(CustomizerControls::BLOGFEED_HIDE_SIDEBAR, "blogfeed_show_sidebar");
    CustomizerControls::OverwriteDefault('--superb-pixels-secondary', "#e9e9e9");
    CustomizerControls::OverwriteDefault('--superb-pixels-secondary-dark', "#e6e6e6");
}


// Get stylesheet
add_action('wp_enqueue_scripts', 'simplex_magazine_enqueue_styles');
function simplex_magazine_enqueue_styles()
{
    wp_enqueue_style('simplex-magazine-parent-style', get_template_directory_uri() . '/style.css');
}



// New fonts
function simplex_magazine_enqueue_assets()
{
    // Include the file.
    require_once get_theme_file_path('webfont-loader/wptt-webfont-loader.php');
    // Load the webfont.
    wp_enqueue_style(
        'simplex-magazine-fonts',
        wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Poppins&display=swap'),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'simplex_magazine_enqueue_assets');
