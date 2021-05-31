<?php

add_action('init', 'dw_custom_post_type');

function dw_custom_post_type(){
    register_post_type('project', [
        'label'=>'Projets',
        'labels'=> [
            'singular_name'=>'Projet',
            'add_new_itme'=>'Ajouter un nouveau projet'
        ],
        'description'=>'Tous mes projets.',
        'public'=>true,
        'menu_position'=>5,
        'supports' => ['title','editor','thumbnail'],
        'menu_icon'=>'dashicons-code-standards',
        'rewrite'=>[
            'slug'=>'projects'
        ]
    ]);
}

/* ****
 *  Return the attributes of an img
 * ****/

function dw_the_img_attributes($id, $sizes = []) {
    $src = wp_get_attachment_url($id);
    $thumbnail_meta =  get_post_meta($id);


    $sizes = array_map(function($size) use ($id) {
        $data = wp_get_attachment_image_src($id, $size);


        return $data[0] . ' ' . $data[1] . 'w';
    }, $sizes);


    $srcset = implode(', ', $sizes);
    $alt = $thumbnail_meta['_wp_attachment_image_alt'][0] ?? null;


    return 'src="' . $src . '" srcset="' . $srcset . '" alt="' . $alt . '"';
}


/* *****
 * Return a menu structure for display
 * *****/
function dw_bem($base, $modifiers = [])
{
    $classes = array_map(function($modifier) use ($base) {
        return $base . '--' . $modifier;
    }, $modifiers);

    return implode(' ', $classes);
}


/* *****
 * Return a menu structure for display
 * *****/
function dw_menu($location)
{
    // 1. Récupérer l'identifiant (WP_post) de mon menu $location
    $locations = get_nav_menu_locations();
    $menu = $locations[$location];

    // 2. Récupérer les liens (instances WP_Post) du menu en question
    $links = wp_get_nav_menu_items($menu);

    // 3. Formater les objets (liens) récupérés pour qu'ils soient utilisables
    $links = array_map(function($result) {
        // Récupérer l'objet de la page courante
        global $post;

        $link = new \stdClass();

        $link->classes = $result->classes[0];
        $link->url = $result->url;
        $link->label = $result->title;
        $link->modifiers = [];

        // Est-ce que le lien représente la page courante ?
        if(intval($result->object_id) === intval($post->ID)) {
            $link->modifiers[] = 'current';
        }

        // Est-ce que le lien possède une icone (ACF) à afficher ?
       /* if($icon = get_field('icon', $result->ID)) {
            $link->modifiers[] = $icon;
        }*/

        return $link;
    }, $links);

    // 4. Retourner le tableau ainsi créé
    return $links;
}


/* *****
* Register navigation menus
* *****/

add_action('init', 'dw_custom_navigation_menus');

function dw_custom_navigation_menus() {
    register_nav_menus([
        'main' => 'Navigation principale',
        'footer' => 'Navigation en pied de page',
        'media'=> 'Réseaux',
    ]);
}


/* *****
 * Return a compiled asset's URI
 * *****/
function dw_asset($path)
{
    return rtrim(get_template_directory_uri(), '/') . '/public/' . ltrim($path, '/');
}


/* *****
*Disable the wordpress gutenberg editor
* *****/

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
return false;
}

/* *****
 * Add theme supports
 * *****/

add_action('after_setup_theme', 'dw_add_theme_supports');

function dw_add_theme_supports()
{
    add_theme_support('post-thumbnails', ['post', 'project']);
}

/* *****
 * Add custom thumbnail sizes
 * *****/

add_action('after_setup_theme', 'dw_add_image_sizes');

function dw_add_image_sizes() {
    add_image_size('trip-header', 1024, 312, true);
}
