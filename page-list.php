<?php get_header(); ?>

  <div class="contents">

    <section class="contents__product">
      <h2 class="contents__product__ttl">Golf Rangefinder</h2>
      <!--<p class="contents__product__sub-ttl">Build confidence in your golf game with the help of a golf rangefinder. Technology can give you the perfect distance. Save you golf strokes and money!</p>-->
      <div class="contents__product__list-items">
        <div class="contents__product__item">
          <a href="<?php echo get_permalink( get_page_by_path( 'detail-ults-pro' )->ID ); ?>"><img class="contents__product__img" src="<?php echo get_template_directory_uri(); ?>/img/d-ults-pro-1.jpg" alt=""></a>
          <p class="contents__product__txt">ULTS PRO</p>
          <p class="contents__product__price">¥44,550</p>
        </div>
        <div class="contents__product__item">
          <a href="<?php echo get_permalink( get_page_by_path( 'detail-ults' )->ID ); ?>"><img class="contents__product__img" src="<?php echo get_template_directory_uri(); ?>/img/d-ults-1.jpg" alt=""></a>
          <p class="contents__product__txt">ULTS</p>
          <p class="contents__product__price">¥35,750</p>
        </div>
        <div class="contents__product__item">
          <a href="<?php echo get_permalink( get_page_by_path( 'detail-ultx800' )->ID ); ?>"><img class="contents__product__img" src="<?php echo get_template_directory_uri(); ?>/img/d-ultx1.jpg" alt=""></a>
          <p class="contents__product__txt">ULT-X 800</p>
          <p class="contents__product__price">¥26,400</p>
        </div>
        <div class="contents__product__item">
          <a href="<?php echo get_permalink( get_page_by_path( 'detail-mini' )->ID ); ?>"><img class="contents__product__img" src="<?php echo get_template_directory_uri(); ?>/img/d-mini.jpg" alt=""></a>
          <p class="contents__product__txt">MINI</p>
          <p class="contents__product__price">¥16,390</p>
        </div>
        <div class="contents__product__item">
          <a href="<?php echo get_permalink( get_page_by_path( 'detail-silicone' )->ID ); ?>"><img class="contents__product__img" src="<?php echo get_template_directory_uri(); ?>/img/silicon.jpeg" alt=""></a>
          <p class="contents__product__txt">シリコンケース</p>
          <p class="contents__product__price">¥1,650</p>
        </div>
      </div>
    </section>

    <section class="contents__compare-func">
      <h2 class="contents__compare-func__h2">製品スペック表</h2>
      <div class="contents__compare-func__t-wrapper">
        <figure><img id="TABLE_img" class="contents__product__img" src="<?php echo get_template_directory_uri(); ?>/img/l-table.png" alt="製品スペック表"></figure>
      </div>
    </section>

    <?php get_template_part('template-parts/contents' , 'point'); ?>

  </div>

<?php get_footer(); ?>
