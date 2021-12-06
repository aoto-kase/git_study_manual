<?php get_header(); ?>

  <div class="contents category"> 
	  <h1><?php single_cat_title(); ?></h1>
    <?php if(have_posts()):?>
	    <?php while(have_posts()):the_post();?>
	    <p class="contents__news-field__item">
			<?php the_time('Y.m.d');?>　<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	  	</p>
	    <?php endwhile;?>
    <?php endif;?>
  </div>

<?php get_footer(); ?>
