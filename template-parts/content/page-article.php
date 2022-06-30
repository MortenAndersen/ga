<?php
if( class_exists('ACF') ) { 
	if( get_field('aside_left') || is_active_sidebar('aside-left') ) {
		$left = ' al';
	} else {
		$left = '';
	}
	if( get_field('aside_right') || is_active_sidebar('aside-right') ) {
		$right = ' ar';
	} else {
		$right = '';
	}
} else {
	if( is_active_sidebar('aside-left') ) {
		$left = ' al';
	} else {
		$left = '';
	}
	if( is_active_sidebar('aside-right') ) {
		$right = ' ar';
	} else {
		$right = '';
	}
}
while (have_posts()) : the_post();
web_topimg();
echo '<div class="pa' . $left . $right . '">';

	echo '<article>';
		the_content();
	echo '</article>';
	get_template_part('template-parts/aside/aside', 'left');
	get_template_part('template-parts/aside/aside', 'right');

echo '</div>';
endwhile;