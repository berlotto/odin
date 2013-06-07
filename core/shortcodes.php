<?php
/**
 * Odin Shortcodes.
 */

/**
 * Button shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Button HTML.
 */
function odin_shortcode_button( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'href' => '#',
        'class' => '',
        'icon' => '',
        'target' => '',
    ), $atts ) );

    $icon = $icon ? '<b class="' . $icon . '"></b> ' : '';
    $target = $target ? ' target="' . $target . '"' : '';

    $html = '<a href="' . $href . '" class="btn ' . $class . '"' . $target . '>' . $icon . $content . '</a>';

    return $html;
}

add_shortcode( 'button', 'odin_shortcode_button' );
