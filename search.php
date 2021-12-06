<?php get_header(); ?>

			<div class="contents">
				
				<section class="contents__search">
					<h1 class="contents__search__h1"><span><?php _e( '検索結果:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article class="contents__search__article" role="article">
						
						<h2 class="contents__search__article__h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						
						<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

					</article>

					<?php endwhile; ?>

					<?php my_page_navi(); ?>

					<?php else : ?>

					<p>検索結果がありません。</p>
						
					<?php endif; ?>
				</section>

			</div>

<?php get_footer(); ?>
