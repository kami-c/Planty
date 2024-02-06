<?php
/*
Plugin Name: Redirection personnalisée de connexion
Description: Un plugin simple pour afficher un lien après une connexion réussie sur WordPress.
Version: 1.0
Author: oc-kami
*/

add_action('init_signon_signin', 'redirection_personnalisee');

function redirection_personnalisee() {
  if (is_user_logged_in()) {
    wp_safe_redirect(site_url('votre-page')); // Remplacez 'votre-page' par l'URL de la page que vous voulez rediriger vers après la connexion
    exit();
  }
}

add_filter('login_redirect', 'url_redirection_personnalisee');

function url_redirection_personnalisee($url) {
  $redirige_vers = apply_filters('login_redirect', $url);
  if (is_user_logged_in()) {
    return site_url('votre-page'); // Remplacez 'votre-page' par l'URL de la page que vous voulez rediriger vers après la connexion
  }
  return $redirige_vers;
}
?>