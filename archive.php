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
	  
	  <div class="blog__page-nation">
		  <?php global $wp_rewrite;
		  $paginate_base = get_pagenum_link(1);
		  if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
			  $paginate_format = '';
			  $paginate_base = add_query_arg('paged', '%#%');
		  } else {
			  $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/').
				  user_trailingslashit('page/%#%/', 'paged');
			  $paginate_base .= '%_%';
		  }
		  echo paginate_links(array(
			  'base' => $paginate_base,
			  'format' => $paginate_format,
			  'total' => $wp_query->max_num_pages,
			  'mid_size' => 4,
			  'current' => ($paged ? $paged : 1),
			  'prev_text' => '≪',
			  'next_text' => '≫',
		  )); ?>
	  </div>
	  
  </div>

<?php get_footer(); ?>
