<?php 
echo '<div class="pa s-p pa-se">';
	echo '<article>';
		if ( have_posts() ) { 
			echo '<h1 class="search-results">' . __( 'Search Results for', 'allstart-domain' ) . ': <span>' . get_search_query() . '</span></h1>';
		} else { 
			echo '<h1 class="search-results">' . __( 'Nothing Found', 'allstart-domain' ) . ': <span>' . get_search_query() . '</span></h1>';
			echo '<p><strong>' . __( 'Search Suggestions', 'allstart-domain') . ':</strong></p>';
			echo '<ol class="search-suggest">';
				echo '<li>' . __( 'Check your spelling', 'allstart-domain') . '</li>';
				echo '<li>' . __( 'Try more general words', 'allstart-domain') . '</li>';
				echo '<li>' . __( 'Try different words that mean the same thing', 'allstart-domain') . '</li>';
			echo '</ol>';
 		} 

		
		if ( have_posts() ) {
	        echo '<ol class="search-results">';
	            while ( have_posts() ) : the_post();
	                echo '<li class="s-r-t--' . get_post_type() . '"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a><div class="excerpt">' . get_the_excerpt() . '</div></li>';
	            endwhile;
	        echo '</ol>';
	    }

	echo '</article>';
echo '</div>';