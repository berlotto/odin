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

/**
 * Tooltip shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Tooltip HTML.
 */
function odin_shortcode_tooltip( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'href' => '#',
        'text' => ''
    ), $atts ) );

    $html = '<a class="odin-tooltip" title="' . $text . '" href="' . $href . '" data-toggle="tooltip">' . $content . '</a>';

    return $html;
}

add_shortcode( 'tooltip', 'odin_shortcode_tooltip' );

/**
 * Accordion shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Accordion HTML.
 */
function odin_shortcode_accordion( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'id' => 'accordion1'
    ), $atts ) );

    $content = str_replace( array( '<br />', '<p>', '</p>' ), '', do_shortcode( $content ) );

    return '<div id="' . $id . '" class="accordion">' . $content . '</div>';
}

add_shortcode( 'accordion', 'odin_shortcode_accordion' );

/**
 * Accordion shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Accordion HTML.
 */
function odin_shortcode_accordion_group( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'title' => '',
        'id' => 'accordion1'
    ), $atts ) );

    $content_id = sanitize_title( $title );

    $html = '<div class="accordion-group"><div class="accordion-heading">';
    $html .= '<a class="accordion-toggle" data-toggle="collapse" data-parent="#' . $id . '" href="#' . $content_id . '">' . $title . '</a>';
    $html .= '<div id="' . $content_id . '" class="accordion-body collapse"><div class="accordion-inner">';
    $html .= $content;
    $html .= '</div></div></div></div>';

    return $html;
}

add_shortcode( 'accordion_group', 'odin_shortcode_accordion_group' );
