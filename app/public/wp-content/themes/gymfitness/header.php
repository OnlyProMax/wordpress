<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Funcion para inyectar la hoja de estilos y js -->
    <?php wp_head(); ?>
    <title></title>
  </head>
  <body>
<header class="site-header">
  <div class="contenedor">
    <div class="barra-navegacion">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo sitio">
      </div>
      <?php
      $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'nav',
        'container_class' => 'menu-principal'
      );
      wp_nav_menu($args);
      ?>
    </div>
  </div>
</header>
