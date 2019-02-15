<!-- HEADER -->
<?php get_header(); ?>

<!-- VERIFICAMOS POSTS -->
<section class="body">

  <?php if ( have_posts() ) : 
    while (have_posts()) : the_post(); ?>

      <article class="post box-shadow grey">
        <header class="title-container">
          <h1 class="title-post"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h1>
          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
        </header>
        <p class="contenido"><?php the_content();?></p>
      </article>

    <?php endwhile;?>

    <div class="box-shadow grey post arrow-div">

      <?php if(get_next_posts_link()): ?>

        <span><?php next_posts_link('<span class="fas fa-arrow-circle-left icon-posts"></span> Anterior',true); ?></span>

      <?php endif;
      if(get_previous_posts_link()): ?>

        <span><?php previous_posts_link('<span class="fas fa-arrow-circle-right icon-posts"></span> Siguiente',true); ?></span>
      
      <?php endif;?>

    </div>

  <?php else : ?>
  
    <p class="center"><?php _e('No encontramos lo que buscabas :('); ?></p>
  
  <?php endif; ?>

</section>

<!-- FOOTER -->
<?php get_footer(); ?>