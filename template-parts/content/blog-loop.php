<?php 
if (have_posts()) {
	echo '<div class="b-l s-w s-p">';
	while (have_posts()): the_post();
		$classes = get_post_class( '', $post->ID );
		echo '<article class="' . esc_attr( implode( ' ', $classes ) ) . '">';
		 
	        echo '<h3 class="l-t"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
	        the_excerpt();
	        
		echo '</article>';

	endwhile;
	echo '</div>';
}