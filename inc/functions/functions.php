<?php 
// Site logo and name


function allstart_logo() {

    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

    if (has_custom_logo()) {
        echo '<div class="logo"><a href="' . home_url() . '"><img id="logo" width="' . $logo[1] . '" height="' . $logo[2]. '" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a></div>';
    } 
    if ( get_bloginfo( 'name' )  !== '' ) { 
        echo '<div class="name">';
       		echo '<span class="s-name"><a href="' . home_url() . '">' . get_bloginfo( 'name' ) . '</a></span>';          
        if ( get_bloginfo( 'description' )  !== '' ) {
            echo '<span class="s-desc">' . get_bloginfo('description') . '</span>';
        } 
        echo '</div>';
    } 
}



function web_topimg() {
    

    if ( has_post_thumbnail() ) {
        $caption = get_the_post_thumbnail_caption();
    $title = get_post(get_post_thumbnail_id())->post_title;
    $url = get_the_post_thumbnail_url(get_the_ID(),'full');

        echo '<div class="top-post-img" style="background-image: url(' . $url . '">';

        echo '<div class="s-w s-p rel">';
            echo '<div class="top-cap">';
                echo '<div class="ban-tit">' . $title . '</div>';
                if(!empty($caption)) {
                    echo '<div class="ban-tit-sub">' . $caption . '</div>';
                }
            echo '</div>';
        echo '</div>';
        
        echo '</div>';
    }
}