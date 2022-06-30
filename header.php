<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
</head>

<body id="top" <?php body_class();?>>
  <?php 
  wp_body_open();

echo '<a href="#main" class="screen-reader-text">Skip to main content</a>';

if ( is_active_sidebar('top') ) {
  echo '<div class="pre-hea">';
    echo '<div class="t">';
      dynamic_sidebar('top');
    echo '</div>';
  echo '</div>';
}

echo '<header class="hea sti-hea">';
  get_template_part('template-parts/nav/main', 'menu');
echo '</header>';
echo '<main id="main">';

if ( is_active_sidebar('pre-content') ) {
  echo '<div class="pre-con">';
    dynamic_sidebar('pre-content');
  echo '</div>';
}