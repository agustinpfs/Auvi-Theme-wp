<section class="SidebarIndex">
	<br><br>
	<br>

	<aside class="audio">
	<?php rewind_posts(); ?>
	<?php query_posts('cat=5'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="">
			<?php the_content(); ?>
		
		</div>
		<?php endwhile; ?>
		<?php endif; ?>	
	</aside>
	<?php dynamic_sidebar('unique-sidebar-id'); ?>
</section>