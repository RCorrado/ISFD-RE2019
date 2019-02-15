<?php
  /**
  * Template Name: Novedades
  */
?>

<!-- HEADER -->
<?php get_header();?>

<!-- VERIFICAMOS POSTS -->
<?php 
$posts_per_page = 10;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page'  =>  $posts_per_page,
              'offset'          =>  ($paged-1)*$posts_per_page,
              'order'           =>  'DESC',
              'category_name'   =>  'Noticias'
        );
$posts = query_posts($args);

if(count($posts) > 0): ?>

  <section class="body">

    <?php foreach($posts as $post):
      setup_postdata( $post ); ?>

      <article class="box-shadow grey post">
        <header class="title-container">
          <h1 class="title-post"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
        </header>
        <p class="contenido-post contenido">

          <?php if((has_post_thumbnail())) : ?>

            <a href="<?php the_permalink();?>"><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail thumbnail'));?></a>

          <?php endif;?>
                    
          <span><?php the_excerpt();?></span>
        </p>  
      </article>

    <?php endforeach;
    if ($wp_query->max_num_pages > 1) : ?>

      <div class="box-shadow grey post arrow-div">
        <span><?php next_posts_link('<span class="fas fa-arrow-circle-left icon-posts"></span> Anterior',true); ?></span>  
        <span><?php previous_posts_link('<span class="fas fa-arrow-circle-right icon-posts"></span> Siguiente',true); ?></span>
      </div>

    <?php endif; ?>                  
  </section>

<?php else: ?>

  <p class="center"><?php _e('No hay entradas que mostrar, todavía'); ?></p>

<?php endif; ?>

<!-- FOOTER -->
<?php get_footer(); ?>