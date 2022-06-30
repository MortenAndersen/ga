<?php
if( class_exists('ACF') ) { 
    if( get_field('aside_left') || is_active_sidebar('aside-left') ) {
        echo '<aside class="a-l">';
            the_field('aside_left');
            dynamic_sidebar('aside-left');
        echo '</aside>';
    }
} else {
    if( is_active_sidebar('aside-left') ) {
        echo '<aside class="a-l">';
            dynamic_sidebar('aside-left');
        echo '</aside>';
    }
}