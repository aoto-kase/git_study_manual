<?php get_header(); ?>

	<div class="contents">
	<section class="contents__distributor">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</section>

	<?php get_template_part('template-parts/contents' , 'point'); ?>

	</div>

<?php get_footer(); ?>
