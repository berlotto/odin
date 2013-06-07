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

/**
 * Alert shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Alert HTML.
 */
function odin_shortcode_alert( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'class' => ''
    ), $atts ) );

    $html = '<div class="alert ' . $class . '"><button type="button" class="close" data-dismiss="alert">&times;</button>';
    $html .= $content;
    $html .= '</div>';

    return $html;
}

add_shortcode( 'alert', 'odin_shortcode_alert' );
