<div class="Single-header">
	<?php get_header(); ?>	
</div>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="Page">
		<section class="Page-content">
		<?php include TEMPLATEPATH . '/contact.php' ?>
			<div class="Page-title">
				<h1><?php the_title(); ?></h1>
			</div>
			<figure>
				<?php the_post_thumbnail('medium'); ?>
			</figure>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</section>
		<aside class="Page-sidebar">
			<?php include TEMPLATEPATH . '/sidebar-index.php' ?>
		</aside>
	</main>
	<?php get_footer(); ?>




