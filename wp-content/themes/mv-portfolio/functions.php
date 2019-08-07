<?php

/*
    Wordpress components
 */
add_theme_support( 'post-thumbnails' );


/*
    Register main menu
 */

register_nav_menu( 'main-other', 'Navigation du site' );



/*
    Menu structure as array
 */

function mv_getMenu($location)
{
    $menu = [];
    $locations = get_nav_menu_locations();
    foreach (wp_get_nav_menu_items($locations[$location]) as $post) {
        $item = new stdClass();
        $item->url = $post->url;
        $item->label = $post->title;
        $item->children = [];

        if ($post->menu_item_parent) {
            $menu[$post->menu_item_parent]->children[$post->ID] = $item;
        } else {
            $menu[$post->ID] = $item;
        }
    }
    return $menu;

}


// remove unused menu from side-bar
function remove_menus() {
remove_menu_page( 'edit.php' );                    //Posts
remove_menu_page( 'edit-comments.php' );           //Comments
remove_menu_page( 'upload.php' );                  //Medias
}
add_action( 'admin_menu', 'remove_menus' );

