<?php 
echo '<div class="po s-w s-p">';
while (have_posts()) : the_post();
	the_title('<h1>', '</h1>');
	the_content();
	comments_template();
endwhile;
echo '</div>';