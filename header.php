<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Description" content="WebSite oficial del Instituto Superior de Formación Docente Nro. 156 'Dr. Palmiro Bogliano'">
	<meta name="keywords" content="isfd156, palmiro, bogliano, instituto, formacion, docencia, educacion">
	<meta author="Raúl Corrado">
	<title><?php bloginfo('name');?></title>
	<?php wp_head();?>
</head>
<body>
	<header>
		<nav class="navbar grey">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logofinal.png" id="logo" alt="logo"></a>
			<ul class="menu-block">
				<li class="menu-item"><?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?></li>
			</ul>
			<div class="menu-burger">
				<span class="burger-item"></span>
				<span class="burger-item"></span>
				<span class="burger-item"></span>
			</div>
		</nav>
	</header>