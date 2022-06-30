<?php
if (has_nav_menu('main-menu')):
    $main_nav = array(
    'theme_location' => 'main-menu',
    'container'      => false,
    'items_wrap'     => '<ul class="f-l">' . "\n" . '%3$s</ul>',
);
echo '<nav class="main-m s-w s-p mob-m js-m-tog">';
    wp_nav_menu($main_nav);
    get_template_part('img/menu', 'icon-close');
echo '</nav>';
endif;

get_template_part('img/menu', 'icon');
