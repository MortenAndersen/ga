<?php
function webspeed_widgets_init()
{
    // Top
    register_sidebar(
        array(
            'name'          => __('Top', 'allstart-domain'),
            'id'            => 'top',
            'description'   => __('Øverst på siden', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-top %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="w-t">',
            'after_title'   => '</h5>',
        )
    );

    // Aside
    register_sidebar(
        array(
            'name'          => __('Aside left', 'allstart-domain'),
            'id'            => 'aside-left',
            'description'   => __('Venstre sidebar', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-a w-a-l %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="w-t">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Aside Indlæg', 'allstart-domain'),
            'id'            => 'aside-single',
            'description'   => __('Sidebar på Indlæg', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-a w-a-s %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="w-t">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Aside right', 'allstart-domain'),
            'id'            => 'aside-right',
            'description'   => __('Højre sidebar', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-a w-a-r %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="w-t">',
            'after_title'   => '</h4>',
        )
    );

    // Pre content
    register_sidebar(
        array(
            'name'          => __('Pre content', 'allstart-domain'),
            'id'            => 'pre-content',
            'description'   => __('Widget før indhold', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-p-c %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="w-t">',
            'after_title'   => '</h4>',
        )
    );

    // Post content
    register_sidebar(
        array(
            'name'          => __('Post content', 'allstart-domain'),
            'id'            => 'post-content',
            'description'   => __('Widget efter indhold', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-pos-c %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="w-t">',
            'after_title'   => '</h4>',
        )
    );


    // Pre Footer
    register_sidebar(
        array(
            'name'          => __('Pre Footer', 'allstart-domain'),
            'id'            => 'pre-footer',
            'description'   => __('Før sidefod', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-p-f %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="w-t">',
            'after_title'   => '</h5>',
        )
    );

    // Footer
    register_sidebar(
        array(
            'name'          => __('Footer', 'allstart-domain'),
            'id'            => 'footer',
            'description'   => __('Sidefod', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-f %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="w-t">',
            'after_title'   => '</h4>',
        )
    );

    // Post Footer
    register_sidebar(
        array(
            'name'          => __('Post Footer', 'allstart-domain'),
            'id'            => 'post-footer',
            'description'   => __('Efter sidefod', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-p-f %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="w-t">',
            'after_title'   => '</h5>',
        )
    );




    // 404 widget
    register_sidebar(
        array(
            'name'          => __('404', 'allstart-domain'),
            'id'            => 'no-page',
            'description'   => __('404 siden', 'allstart-domain'),
            'before_widget' => '<div id="%1$s" class="w w-404 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="w-t">',
            'after_title'   => '</h5>',
        )
    );

}

add_action('widgets_init', 'webspeed_widgets_init');
