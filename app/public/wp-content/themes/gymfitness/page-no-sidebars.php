<!-- Loop de wordpress -->
<?php
/*
* Template Name: Contenido centrado (Sin Sidebar)
*/
get_header() ?>
<!-- Agrega las páginas que se vayan agregando con el nombre. -->
<?php while(have_posts() ): the_post(); ?>
  <main class="contenedor pagina seccion">
    <div class="contenido-principal">
      <!-- Traemos el loopPaginas -->
      <?php get_template_part( 'template-parts/loopPaginas' ); ?>
    </div>
  </main>

<?php get_footer(); ?>
