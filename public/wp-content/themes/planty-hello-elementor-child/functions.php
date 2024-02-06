<?php 
/* Child theme generated with WPS Child Theme Generator */

// Si mon thème existe
if ( ! function_exists( 'theme_enqueue_styles' ) )
{
  // Actionne le chargement des scripts dans le thème
  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
  function theme_enqueue_styles()
  {
    // Chargement du style.css du thème parent Hello Elementor
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Chargement du style.css du thème enfant Planty pour nos personnalisations
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css' ));
  }

  // Lien Admin
  // Modification des éléments du menu
  function custom_admin_link($items, $menu) {
    // Si l'utilisateur n'est pas connecté, le code à l'intérieur de l'instruction 'if' sera exécuté
    if (!is_user_logged_in()) {
      // Boucle recherchant dans le tableau les éléments du menu
      foreach ($items as $key => $item) {
        // Si le titre de l'élément du menu est égal à 'Admin'
        if ($item->title === 'Admin') {
          // Supprime l'élément du tableau 
          unset($items[$key]);
          break;
        }
      }
    }
    return $items;
  }
  
  // Filtre modifiant les éléments du menu
  add_filter('wp_get_nav_menu_items', 'custom_admin_link', 1, 2);

}