<?php
/**
 * Register widget areas.
 *
 * Additional areas can be added by using register_sidebar().
 */

namespace Theme\WidgetAreas;

function setup_widget_areas() {
  $config = [
      'before_widget' => '<section class="widget %1$s %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="fw-700 mb-4">',
      'after_title'   => '</h3>'
  ];
  register_sidebar([
      'name'          => __('Footer_contact', 'coding-challenge-theme'),
      'id'            => 'footer-contact'
  ] + $config);

  register_sidebar([
      'name'          => __('Footer_menu', 'coding-challenge-theme'),
      'id'            => 'footer-menu'
  ] + $config);
}
add_action('widgets_init', __NAMESPACE__ . '\\setup_widget_areas');
