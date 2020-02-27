<?php while(have_posts() ): the_post(); ?>
<!-- Agrega Titulo -->
<h1 class="text-center texto-primario"><?php the_title(); ?></h1>

<!-- Esta función sirve para mostrar la imágen destacada que se agrega en el panel de wordpress. -->
<?php if(has_post_thumbnail() ):
  //Tamaños de imágenes.
        the_post_thumbnail('blog',array('class' => 'imagen-destacada')); //usamos un array y dentro le agregamos el atributo class para definirle una.
      else:
        echo "no hay imágen, por favor agregar una.";
      endif;
?>
<!-- Agrega contenido/texto -->
<?php the_content(); ?>
<?php endwhile;?>
