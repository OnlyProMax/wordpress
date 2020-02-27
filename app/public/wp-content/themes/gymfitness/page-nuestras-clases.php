<!-- Loop de wordpress -->
<?php get_header() ?>
<!-- Agrega las páginas que se vayan agregando con el nombre. -->
  <main class="contenedor pagina seccion">
    <div class="contenido-principal text-center">
      <!-- Traemos el loopPaginas -->
      <?php get_template_part( 'template-parts/loopPaginas' ); ?>

      <?php gymfitness_lista_clases(); ?>
    </div>
  </main>

<?php get_footer(); ?>
