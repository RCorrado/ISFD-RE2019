<?php
	/**
	* Template Name: Normativa
	*/
?>


<!-- HEADER -->
<?php get_header(); ?>

<!--CONTENIDO -->
<section class="body">
	<h1 class="title-container"><?php the_title(); ?></h1>

	<?php
	$args = array('order'           =>  'DESC',
	              'category_name'	=>	'Normativa'
	        );
    $posts = query_posts($args);?>

    <article class="box-shadow grey post docs-container">
       	<?php if(count($posts) > 0):
       		foreach($posts as $post) :
       			setup_postdata($post)?>
       			<article class="doc-article">
       				<h3><a href="<?php the_permalink();?>"><span class="fas fa-file doc-post"></span></a></h3>
       				<p><a href="<?php the_permalink();?>" rel="bookmark" title="<?php echo get_the_excerpt(); ?>"><?php echo wp_trim_words(get_the_excerpt(), 2, '...'); ?></a></p>
       			</article>
       		<?php endforeach;
       	else :?>
       		<p class="center"><?php _e('No hay entradas que mostrar, todavía'); ?></p>
       	<?php endif;?>
    </article>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>