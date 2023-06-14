<?php
if (!function_exists('suporte_tema_saneamentoinclusivo')):

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since My theme name 1.0
     *
     * @return void
     */
    function suporte_tema_saneamentoinclusivo()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');
        // Add support for full and wide align images.
        // add_theme_support('align-wide');
        // Enqueue editor styles.
        add_editor_style('style.css');

    }

endif;
add_action('after_setup_theme', 'suporte_tema_saneamentoinclusivo');

/*-------------------------------------------------------
Enqueue styles
---------------------------------------------------------*/
if (!function_exists('estilos_saneamentoinclusivo')):


    function estilos_saneamentoinclusivo()
    {
        //Registra stylesheet
        wp_enqueue_style('saneamentoinclusivo-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
        wp_enqueue_style('saneamentoinclusivo-style-blocos', get_template_directory_uri() . '/css/blocos.css');
        //Registra scripts
    }
endif;
add_action('wp_enqueue_scripts', 'estilos_saneamentoinclusivo');