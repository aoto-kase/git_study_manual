<?php

//メインクエリ条件変更
function my_custom_query_vars( $query ) {
	if ( !is_admin() && $query->is_main_query()) {
		if ( is_search() ) {//関索結果ページの表示件数
			$query->set( 'posts_per_page' , 12 );
		}
	}
	return $query;
}
add_action( 'pre_get_posts', 'my_custom_query_vars' );

//ページナビ関数
function my_page_navi() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
	  'prev_text' => '≪',
	  'next_text' => '≫',
    'type'         => 'list',
    'end_size'     => 2,
    'mid_size'     => 2
  ) );
  echo '</nav>';
}

?>