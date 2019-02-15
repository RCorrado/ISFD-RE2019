<!-- HEADER -->
<?php get_header(); ?>

<!--PRIMER SLIDER-->
<section id="body-static">
	<article id="info" class="articulo">
		<h1>Profesorados</h1>

		<?php 
			$ppp = -1;
			$args = array('posts_per_page'	=> $ppp,
							'category_name'		=> 'Cartera',
							'order' => 'ASC',
							'offset', 1);
			$posts = get_posts($args); ?>

		<span class="arrow left grey box-shadow"><</span>
		<span class="arrow right grey box-shadow">></span>
		<div class="slide box-shadow grey">

			<?php if (count($posts) > 0) :
				foreach ($posts as $post) :
					setup_postdata($post); ?>

					<div class="contenido-container">

						<?php if((has_post_thumbnail())) : ?>

							<p class="contenido"><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail thumbnail'));?></p>

						<?php else : ?>
							
							<img class="contenido" src="<?php echo get_template_directory_uri(); ?>/img/logofinal.png" class="thumb" alt="contenido">
						
						<?php endif; ?>
										
						<div class="back-pop">
							<article class="popup box-shadow white structure-pop">
								<span class="fas fa-times-circle cerrar"></span>
								<h3 class="pop-title"><?php the_title();?></h3>
								<p class="pop-body"><?php the_excerpt();?></p>
								<p><a href="<?php the_permalink();?>" class="black text-white pop-button button">Más info</a></p>
							</article>
						</div>
					</div>

				<?php endforeach;
			else : ?>
				<div class="imagen">
					<h2>¡Oops!</h2>
					<p>No hay contenido por ahora :(</p>
				</div>
			<?php endif;?>
		</div>
	</article>

	<!-- SEGUNDO SLIDER -->
	<article id="noticias" class="articulo">
		<h1>Noticias</h1>

		<?php $args = array('posts_per_page'	=> 	4,
				                     'order'    =>  'DESC',
				                     'category_name'=>	'Noticias'
				               );
         $posts = query_posts($args);
         if(count($posts) > 0):
			if (get_next_posts_link) : ?>

				<a href="..//wordpress/noticias" class="arrow button slide-foot grey box-shadow">Ver más</a>
				
			<?php endif; ?>

			<div class="slide box-shadow grey">
					
				<?php foreach($posts as $post):
	               	setup_postdata( $post ); ?>

	               	<div class="imagen">

						<?php if((has_post_thumbnail())) : ?>

							<p><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail thumb'));?></p>

						<?php else : ?>

							<img src="<?php echo get_template_directory_uri(); ?>/img/logofinal.png" class="thumb" alt="contenido">
							
						<?php endif; ?>
						<h3 class="title-notice"><a href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo wp_trim_words(get_the_title(), 3, '...'); ?></a></h3>
					</div>

				<?php endforeach; ?>

			</div>

		<?php else:?>

			<div class="slide box-shadow grey">			
				<div class="imagen">
					<h2>¡Oops!</h2>
					<p>No hay contenido por ahora :(</p>
				</div>
			</div>

		<?php endif;?>

	</article>
</section>

<!-- FOOTER -->
<?php get_footer(); ?>