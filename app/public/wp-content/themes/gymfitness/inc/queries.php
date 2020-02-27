<?php

function gymfitness_lista_clases(){ ?>
  <ul class="lista-clases">
    <?php
    $args = array(
      'post_type' =>'gymfitness_clases',
      'posts_per_page' => 10, //Se dice que se ponga -1 para que muestre todo, pero las buenas practicas tambien que pongas 10000
      'orderby' => 'title',
      'order' => 'ASC'
    );
    $clases = new WP_Query($args);
    while ( $clases -> have_posts() ) : $clases -> the_post(); ?>

     <li class="clase card">
       <?php the_post_thumbnail('mediano'); ?>
       <div class="contenido">
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>
        <p><?php the_field('dias_clases'); ?></p>
       </div>
     </li>

   <?php endwhile; wp_reset_postdata(); ?> <!-- Agregamos la funcion wp_reset_postdata() para que corte con el proceso de wp_query() utilizado más arriba. -->
  </ul>
<?php
}
