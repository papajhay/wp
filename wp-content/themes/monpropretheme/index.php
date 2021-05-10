<?php



get_header() ?>

    <?php if(have_posts()): ?>
        <div class="row">
            <?php while(have_posts()): the_post(); ?>
            <div class="col-sm-4">
               <div class="card">
                    <!--affichage de l'image-->
                    <?php the_post_thumbnail('card-header',['class'=>'card-img-top','alt'=>'','style'=>'height:auto'])?>
                    <div class="card-body">
                         <h5 class="card-title"><?php the_title() ?></h5>
                         <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                         <p class="card-text">
                           <!-- the_excerpt() : permet d'afficher le resumé d'un article-->   
                              <?php the_excerpt() ?>
                         </p> 
                           <!--the_permalink () : lien vers l'url-->
                         <a href="<?php the_permalink()?>" class="card-link">Voir plus</a>
                    </div>
               </div>
            </div>
            <?php endwhile ?>  
        </div>

      <?php monpropretheme_pagination() ?>  
     
        
     <!--methode fi-afficher page tsi1-1
         1-the_posts_pagination();
         2-echo paginate_links();
         3-previous_post_link();
           next_post_link(); 
     --> 
     <!--?php the_posts_pagination(); ?-->
       <?php echo paginate_links();?> 

     <!-- affichage de page : précedent ou suivant--> 
        <!--?=  previous_post_link();  ?-->     
        <!--?=  next_post_link(); ?-->


       

     <?php else: ?>
        <h1>Pas d'articles</h1>
     <?php endif; ?>   

<?php get_footer() ?>