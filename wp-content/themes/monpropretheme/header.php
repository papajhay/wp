<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonction qui permet d'insérer toutes les informations d'un en-tête-->
    <?php wp_head()?>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary md-4">
                <!--blog info('name')= affichage titre du site sur l'url -->
                <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                  //affichage un menu de navigation: wp_nav_menu
                  wp_nav_menu([
                     //emplacement des menus: 'theme_location'  
                    'theme_location' => 'header',
                    //retirer le container et ne plus avoir le div: 'container'
                    'container' => false,
                    //changer la class des menus: 'menu_class'
                    'menu_class' => 'navbar-nav mr-auto'
                ])
                 ?>
                <!--
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    </ul>
                    --> 
                   <!-- Fonction retourner le code html de formulaire de contact -->
                  <?= get_search_form() ?> 
                </div>
        </nav>
        
      
    <div class="container">
    
