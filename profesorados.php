<?php
  	/**
  	* Template Name: Profesorados
	*/
?>


<!-- HEADER -->
<?php get_header(); ?>

<!--CONTENIDO -->
<section class="body">
	<h1 class="title-container"><?php the_title(); ?></h1>

	<?php
	$args = array('order'           =>  'DESC',
	              'category_name'	=>	'Cartera'
	      	);
    $posts = query_posts($args);?>

    <article class="box-shadow grey post doc-article">

       	<?php if(count($posts) > 0):
       		foreach($posts as $post) :
       			setup_postdata($post)?>

       			<h3 class="doc-article prof-posts"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
       		
       		<?php endforeach;
       	else :?>

       		<p class="center"><?php _e('No hay entradas que mostrar, todavía'); ?></p>

       	<?php endif;?>
       	
    </article>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>