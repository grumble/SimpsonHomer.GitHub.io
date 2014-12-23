<?php
$output = $title = $el_class = $sortby = $exclude = '';
extract( shortcode_atts( array(
    'title' => __( 'Pages' ),
    'sortby' => 'menu_order',
    'exclude' => null,
    'el_class' => ''
), $atts ) );

$el_class = $this->getExtraClass($el_class);

$output = '<div class="sidebar-widget vc_wp_pages'.$el_class.'">';
$type = 'WP_Widget_Pages';
$args = array( 'before_title'=>'<h3 class="sidebar-title">', 'after_title'=>'</h3><div class="split-line"></div><div class="clr"></div>');

ob_start();
the_widget( $type, $atts, $args );
$output .= ob_get_clean();

$output .= '</div>' . $this->endBlockComment('vc_wp_pages') . "\n";

echo $output;