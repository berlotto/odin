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

    $html = '<a href="' . $href . '" class="btn ' . $class . '"' . $target . '>' . $icon . do_shortcode( $content ) . '</a>';

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
    $html .= do_shortcode( $content );
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

    $html = '<a class="odin-tooltip" title="' . $text . '" href="' . $href . '" data-toggle="tooltip">' . do_shortcode( $content ) . '</a>';

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
    $html .= do_shortcode( $content );
    $html .= '</div></div></div></div>';

    return $html;
}

add_shortcode( 'accordion_group', 'odin_shortcode_accordion_group' );

/**
 * Dropcap shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Dropcap HTML.
 */
function odin_shortcode_dropcap( $atts, $content = null ) {
    return '<span class="dropcap">' . $content . '</span>';
}

add_shortcode( 'dropcap', 'odin_shortcode_dropcap' );

/**
 * Label shortcode.
 *
 * @param  array  $atts    Attributes.
 * @param  string $content Content.
 *
 * @return string          Label HTML.
 */
function odin_shortcode_label( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'class' => '',
    ), $atts ) );

    return '<span class="label ' . $class . '">' . do_shortcode( $content ) . '</span>';
}

add_shortcode( 'label', 'odin_shortcode_label' );

/**
 * Progress shortcode.
 *
 * @param  array  $atts    Attributes.
 *
 * @return string          Progress HTML.
 */
function odin_shortcode_progress( $atts ) {
    extract( shortcode_atts( array(
        'class' => '',
        'width' => '50'
    ), $atts ) );

    return '<div class="progress ' . $class . '"><div class="bar" style="width: ' . $width . '%;"></div></div>';
}

add_shortcode( 'progress', 'odin_shortcode_progress' );

/**
 * Well shortcode.
 *
 * @param  array  $atts    Attributes.
 *
 * @return string          Well HTML.
 */
function odin_shortcode_well( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'class' => ''
    ), $atts ) );

    return '<div class="well ' . $class . '">' . do_shortcode( $content ) . '</div>';
}

add_shortcode( 'well', 'odin_shortcode_well' );

/**
 * Icon shortcode.
 *
 * @param  array  $atts    Attributes.
 *
 * @return string          Icon HTML.
 */
function odin_shortcode_icon( $atts ) {
    extract( shortcode_atts( array(
        'class' => 'icon-search'
    ), $atts ) );

    return '<i class="' . $class . '"></i>';
}

add_shortcode( 'icon', 'odin_shortcode_icon' );
