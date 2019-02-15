<?php
  /**
  * Template Name: Nosotros
  */
?>

<!-- HEADER -->
<?php get_header(); ?>

<!-- VERIFICAMOS POSTS -->
<section class="body post box-shadow grey">
  <?php if ( have_posts() ) : the_post(); ?>
    <p class="contenido"><?php the_content();?></p>
    <hr class="wrapper text-black">
    <h5 class="center">Encontranos</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.5298970351746!2d-59.864893685187745!3d-36.781843579952394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959427749ece7a1d%3A0x25767011ae07df8b!2sEscuela+Normal+Superior+Bernardino+Rivadavia!5e0!3m2!1ses!2sar!4v1549543699864" frameborder="0" allowfullscreen></iframe>
  <?php else : ?>
    <h5 class="center">Encontranos</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.5298970351746!2d-59.864893685187745!3d-36.781843579952394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959427749ece7a1d%3A0x25767011ae07df8b!2sEscuela+Normal+Superior+Bernardino+Rivadavia!5e0!3m2!1ses!2sar!4v1549543699864" frameborder="0" allowfullscreen></iframe>
  <?php endif; ?>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>