<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DEFTONES TOUR</title>	
</head>
<body>
	<header>
		<center>
	<h2><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<h4>resumen: <?php the_field('resumen'); ?>	</h4>
	<?php the_post_thumbnail("large"); ?>
		<?php the_content(); ?> 
		   <h4>fuente: <?php the_field('fuente'); ?></h4>
			
		</center>
	</header>

</body>
</html>