<?php
/**
 * Configuration du cutomizer. On ajoute les section hero et footer
 */
function theme_tp_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  // Création d'une nouveele section dans le customizer
  $wp_customize->add_section('hero_section', array(
    'title' => __('Section Hero', 'theme_tp'),
    'priority' => 30,
));

///////////////////////////////// ajout de la donnée
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Eddy Martin', 'theme_tp'),
  'sanitize_callback' => 'sanitize_text_field'
));
///////////////////////////////// ajout du contrôle de la donnée
$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_tp'),
  'section' => 'hero_section',
  'type' => 'text',
));
//////////////////////////////// ajout de la données image en background

for ($k = 0; $k<3 ; $k++) {
$wp_customize->add_setting('hero_background_' . $k, array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
///////////////////////////////// ajout du contrôle de la donnée
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
  'label' => __('Image en arrière plan ' . ($k+1) , 'theme_tp'),
  'section' => 'hero_section',
)));



$wp_customize->add_section('hero_SVG', array(
  'title' => __('Section SVG', 'theme_tp'),
  'priority' => 31,
));

$wp_customize->add_setting('hero_svg_code', array(
  'default' => '',
  'sanitize_callback' => 'wp_kses_post',
));

$wp_customize->add_control('hero_svg_code', array(
  'label' => __('Code SVG', 'theme_tp'),
  'section' => 'hero_SVG',
  'type' => 'textarea',
));

$wp_customize->add_setting('hero_svg_color', array(
  'default' => '#000000',
  'sanitize_callback' => 'sanitize_hex_color', // Sanitizes hex colors
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_svg_color', array(
  'label' => __('Couleur du SVG', 'theme_tp'),
  'section' => 'hero_SVG',
)));



}






}

add_action('customize_register', 'theme_tp_customize_register');