<?php
if( class_exists('ACF') ) { 
    if( get_field('aside_right') || is_active_sidebar('aside-right') ) {
        echo '<aside class="a-r">';
            the_field('aside_right');
            dynamic_sidebar('aside-right');
        echo '</aside>';
    }
} else {
    if( is_active_sidebar('aside-right') ) {
        echo '<aside class="a-r">';
            dynamic_sidebar('aside-right');
        echo '</aside>';
    }
}