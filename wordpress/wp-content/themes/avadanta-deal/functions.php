<?php 
//Avadanta deal css js enqueue

  function avadant_deal_custom_header_setup()
    {
        add_theme_support('custom-header', apply_filters('avadanta_custom_header_args', array(
            'default-image'          => get_stylesheet_directory_uri() . '/sources/images/header-bg.jpg',
            'default-text-color' => '011133',
            'width'              => 1000,
            'height'             => 250,
            'flex-height'        => true,
            'wp-head-callback'   => 'avadanta_deal_header_style',
        )));
    }

    add_action( 'after_setup_theme', 'avadant_deal_custom_header_setup' );


if ( !function_exists('avadanta_deal_header_style') ) :
    /**
     * Add Header And background Images
     */
    function avadanta_deal_header_style()
    {
        $header_text_color = get_header_textcolor();

        ?>
        <style type="text/css">
            <?php
                // When Text Is Hidden
                if (  display_header_text() ) :
            ?>
            .header-bg-image
           {
            background-image:url('<?php header_image(); ?>') !important;
           }
           
            .avadanta-title a,
            .avadanta-desc
            {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }

            <?php endif; ?>
        </style>
        <?php
    }
endif;


require( get_stylesheet_directory() . '/include/customizer.php');
require( get_stylesheet_directory() . '/include/template-tags.php');


if (!function_exists('avadanta_custom_excerpt_length')) :
    function avadanta_custom_excerpt_length($length)
    {
        if (is_admin()) {
            return $length;
        }

        $avadanta_deal_excerpt_length = get_theme_mod('avadanta_excerpt_length','55');
        if (!empty($avadanta_deal_excerpt_length)) {
            return $avadanta_deal_excerpt_length;
        }
        return 55;
    }
endif;
add_filter('excerpt_length', 'avadanta_custom_excerpt_length');