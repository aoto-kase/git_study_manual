<?php get_header(); ?>

  <div class="contents single">

    <?php if(have_posts()): the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    <?php endif; ?>

<?php if ( get_post_type() === 'blog' ): ?>
<div style="margin-top: 3rem;">
<h2 class="h2post">関連記事</h2>
<?php

$categories = get_the_category($post->ID);
$category_ids = array();
foreach($categories as $category) :
 array_push($category_ids, $category->cat_ID);
endforeach;
 
$args = array(
    'post_type' => 'blog', //投稿タイプを指定
    'posts_per_page' => 3,
    'category__in' => $category_ids, //現在のカテゴリの投稿にフィルタ
    'post__not_in' => array($post->ID), //現在のページを除外
	'orderby' => 'rand'
);
 
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
 while ($the_query->have_posts()) : $the_query->the_post();
?>
 
<a href="<?php the_permalink(); ?>">
 <article class="related-post"  style="padding:0rem 1rem;">
	 <p class="post-title"><?php the_title(); ?></p>
 </article>
</a>
 
<?php
   endwhile;
endif;
wp_reset_postdata();
?>
</div>
<?php endif; ?>

	  <div class="pagination">
		  <div class="link-before"><?php previous_post_link('%link', '« 前の記事へ'); ?></div>
		  <div class="link-top home"><a href="/"><img src="/wp-content/uploads/2020/09/home.png"><span>ホームへ戻る</span></a></div>
		  <div class="link-top blog"><a href="/blog"><img src="/wp-content/uploads/2020/09/blog.png"><span>ブログへ戻る</span></a></div>
		  <div class="link-after"><?php next_post_link('%link', '次の記事へ »');?></div>
	  </div>
  </div>

<?php get_footer(); ?>
