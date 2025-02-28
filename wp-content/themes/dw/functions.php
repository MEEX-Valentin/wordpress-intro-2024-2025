<?php

// Gutenberg est le nouvel éditeur de contenu prorpre à wordpress
// il ne nous intéresse pas pour l'utilisation du thème que nous
// allons créer. On va donc le désactiver:

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );
// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
// Disable default front-end styles.
add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );
    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );
    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );

// Activer l'utilisation des vignettes (image de couverture) sur nos post types:
add_theme_support( 'post-thumbnails', ['recipe']);
add_theme_support( 'post-thumbnails', ['travel']);

// Enregistrer de nouveaux "types de contenu", qui seront stockés dans la table
// "wp_posts", avec un identifiant de type spécifique dans la colonne "post_type":


register_post_type('recipe', [
    'label' => 'Recettes',
    'description' => 'Les recettes liées à nos voyages',
    'menu_position' => 7,
    'menu_icon' => 'dashicons-carrot',
    'public' => true,
    'rewrite' => ['slug' => 'recettes',],
    'supports' => ['title', 'excerpt', 'editor', 'thumbnail'],
]);

register_post_type('travel', [
    'label' => 'Voyages',
    'description' => 'Les voyages que nous avons réalisés',
    'menu_position' => 6,
    'menu_icon' => 'dashicons-airplane',
    'public' => true,
    'rewrite' => ['slug' => 'voyages',],
    'supports' => ['title', 'excerpt', 'editor', 'thumbnail'],
]);


// Paramètres des tailles d'images pour le générateur de thumbnails de wordpress

// sans recadrage:
add_image_size('travel-side', 420, 420);

// avec recadrage:
add_image_size('travel-header', 1920, 400, true);