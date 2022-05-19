<?php get_header(); ?>

	<section class="container">
		
			<?php $articulos= new wp_query([
						'showposts' => 6,
						"post_type"=> "empleos"
					]);
			while($articulos->have_posts()) {
				$articulos->the_post(); ?>
				<div class="row mb-4 caja">
					<div class="col-sm-3"> 
							<?php the_post_thumbnail("thumbnail"); ?>
					</div>
					<div class="col-sm-9 font"> 
						<h2><a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
					<p>Publicado por <?php the_author(); ?> a las <?php the_time("d/m/Y"); ?> </p>	
						<?php the_excerpt(); ?>
					</div>	
				</div>		






			<?php } ?>


		

	</section>
	<?php get_footer(); ?>
	