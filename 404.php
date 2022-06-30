<?php
get_header();

if ( is_active_sidebar('no-page') ) {
  echo '<div class="page s-w s-p p-404">';
  	echo '<article>';
    	dynamic_sidebar('no-page');
   	echo '</article>';
  echo '</div>';
} 

get_footer();