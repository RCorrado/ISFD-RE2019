<!-- HEADER -->
<?php get_header(); ?>

<!-- VERIFICAMOS POSTS -->
<section class="body post box-shadow grey">

  <?php if ( have_posts() ) : the_post(); ?>

    <header class="title-container">
      <h1 class="title-post"><?php the_title(); ?></h1>
      <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
    </header>
    <p class="contenido"><?php the_content();?></p>
    <footer class="foot-post">
      <p class="removeItems"><span class="fas fa-tags icon-posts"></span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Categorías:&nbsp;&nbsp;</strong><?php echo the_category(', ');?></p>
      <p class="removeItems"><span class="fas fa-tags icon-posts"></span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Etiquetas:&nbsp;&nbsp;</strong><?php echo the_tags(', ');?></p>
    </footer>

  <?php else : ?>

    <p class="center"><?php _e('No encontramos lo que buscabas :('); ?></p>

  <?php endif; ?>

</section>
  
<!-- FOOTER -->
<?php get_footer(); ?>