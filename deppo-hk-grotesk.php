<?php
/*
Plugin Name: Deppo HK Grotesk
Plugin URI: https://github.com/eracom/deppo-hk-grotesk
Description: corrige un bug pour les utilisateurs de thème enfant de Deppo.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https://github.com/eracom/deppo-hk-grotesk
*/
 
function load_infini_font() {
	
  // Corrige un bug de Deppo: 
  
  // Le chemin du CSS deppo-font-enqueue est faux si on utilise un thème enfant, il pointe vers le style enfant.
  
  // 1) Desactiver la fonte originale de Deppo
  
   wp_dequeue_style( 'deppo-font-enqueue' );
  
  // 2) Charger le CSS correct
  
   wp_enqueue_style( 'hkgrotesk-style', get_template_directory_uri() . '/assets/fonts/hk-grotesk/stylesheet.css' );
        
}
add_action( 'wp_enqueue_scripts', 'load_infini_font', 11 );