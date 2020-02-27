<!-- Loop de wordpress -->
<?php get_header() ?>
<!-- Agrega las páginas que se vayan agregando con el nombre. -->
  <main class="contenedor pagina seccion con-sidebar">
    <div class="contenido-principal">
      <!-- Traemos el loopPaginas -->
      <?php get_template_part( 'template-parts/loopPaginas' ); ?>
    </div>
  <?php get_sidebar(); ?>
  </main>

<?php get_footer(); ?>
