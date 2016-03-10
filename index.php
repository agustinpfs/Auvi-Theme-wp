<?php 
/*
Template Name: Página index
*/ ?>

<?php get_header(); ?>
<!-- 	<?php dynamic_sidebar('unique-sidebar-id'); ?>
 -->

	<?php rewind_posts(); ?>
	<?php query_posts('cat=3'); ?>
 	<?php include TEMPLATEPATH . '/slider.php' ?>

 	<?php include TEMPLATEPATH . '/social.php' ?>
 <main class="MainIndex">
	<section class="Post">
<!-- 		<?php query_posts('posts_per_page=1&order=Asc&cat=4'); ?>
 -->	
 		<?php rewind_posts(); ?>
 		<?php query_posts('cat=1'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="Post-article">
				<header class="Post-header">
					<h2 class="Post-title">
						<a href="<?php the_permalink(); ?>"> 
							<?php the_title(); ?>
						</a>
					</h2>
					<div class="Post-data">
						<small><?php the_date(); ?></small>
						<i>por <strong><?php the_author(); ?></strong></i>
					</div>
				</header>
				
				<div class="Post-content">
					<figure>
						<?php the_post_thumbnail(medium); ?>
					</figure>
				     <?php the_content('Continuar&nbsp;Leyendo'); ?>
				</div>
<!-- 				<?php the_excerpt(); ?>

 -->			
				<div class="Post-data Post-data--footer  ">
					<div class="Post-cat">
	 					<span>Categoría</span>
	 					<small><?php the_category(); ?></small>
 					</div>
 					<small><em><?php comments_number() ?></em></small>
				</div>			
			</article>		
			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
			<h3>No se encontraron entradas</h3>
		<!-- no posts found -->
		<?php endif; ?>

		
	</section>
	<div class="Post-sidebar">
		<?php include TEMPLATEPATH . '/sidebar-index.php' ?>
	</div>


</main>
<!-- 	<?php get_footer('negro'); ?>
 -->	
 <?php get_footer(); ?>






