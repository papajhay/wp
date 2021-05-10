<?php

function monpropretheme_supports () {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );//ajouter image
    add_theme_support('menus');//ajout des menus
    register_nav_menu('header', 'En tête du menu');//enregistrement de menu dans l'en tête
    register_nav_menu('footer', 'Pied de page');//enregistrement de menu dans le pied de page
    add_image_size('post_thumbnail', 300, 200, true);
    /*remove_image_size('meduim'); supprimer la taille par defaut de l'image 
    add_image_size('meduim', 500, 500); nouveau taille de l'image*/
    
}
/*
  fonction pour l'enregistrement de chargement de bootstrap , du css , du js , du jquery et du popper 
*/
function monpropretheme_register_assets () {
    wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    wp_register_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',['popper','jquery'],false,true);
    wp_register_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [],false,true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js', [],false,true);
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_script('bootstrap');
}

//fonction pour barre de navigation : ex=>Actualités|montheme
function monpropretheme_title_separator(){
    return '|'; 
}

//fonction pour la class des menus
function monpropretheme_menu_class($classes)
{
  $classes[] = 'nav-item';
  return $classes; 
}

//fonction pour les attributs des menus
function monpropretheme_menu_link_class($attrs)
{
  $attrs['class'] = 'nav-link';
  return $attrs; 
}

//fonction pour generer la pagination(manamboatra) 
function monpropretheme_pagination(){
  $pages = paginate_links(['type' => 'array']);
  if ($pages === null) {
    return;
  }
  //class="mt-4 mb-4" ou class="my-4":rajouter une marge en bas et en haut 
  echo '<nav aria-label="Pagination" class="my-4">';
  echo '<ul class="pagination">';
  foreach ($pages as $page) {
    $active = strpos($page,'current') !== false;//avy eo averina reglages->lecture->les pages du site doivent afficher au plus averina 10
    $class = "page-item";
    if ($active) {
      $class .= " active";
    }
    echo '<li class = "'. $class .'">';
    echo str_replace('page-numbers','page-link',$page);
    echo '</li>';
  }
  echo '</ul>'; 
  echo  '</nav>';
}

//fonction d'enregistrer les nouvelles métadonnées
function monpropretheme_add_custom_box (){
  //'side': methode pour déplacer le contenu dans un autre contexte
  /*add_meta_box ( string  $ id , string  $ title , callable  $ callback ,
   chaîne | tableau | WP_Screen  écran $  =  null ,
   string  $ context  =  'avancé' , chaîne  priorité $  =  'default' ,
    tableau  $ callback_args  =  null  )*/
  //fonction de rajouter une nouvelle métadonnée
 
}

//appel des fonctions: add_action
add_action('after_setup_theme', 'monpropretheme_supports');
add_action('wp_enqueue_scripts','monpropretheme_register_assets');
add_filter('document_title_separator','monpropretheme_title_separator');
add_filter('nav_menu_css_class','monpropretheme_menu_class');
add_filter('nav_menu_link_attributes','monpropretheme_menu_link_class');

require_once('metaboxes/sponso.php');
SponsoMetaBox::register();

