<?php get_header(); ?>

  <div class="contents">
    <section class="contents__product-detail">
      <div class="contents__product-detail__left">
        <ul id="slickSlideshowDetail">
          <li><img id="elevatezoomImgDetail" src="<?php echo get_template_directory_uri(); ?>/img/d-silicon1.png" alt=""></li>
          <li><img id="elevatezoomImgDetail" src="<?php echo get_template_directory_uri(); ?>/img/d-silicon2.png" alt=""></li>
          <li><img id="elevatezoomImgDetail" src="<?php echo get_template_directory_uri(); ?>/img/d-silicon3.png" alt=""></li>
          <li><img id="elevatezoomImgDetail" src="<?php echo get_template_directory_uri(); ?>/img/d-silicon4.png" alt=""></li>
        </ul>
        <ul id="slickThumbnailDetail" class="contents__product-detail__left__thumbnails">
          <li id="slickThumbnailDetailItem"><img src="<?php echo get_template_directory_uri(); ?>/img/d-silicon1.png" class="contents__product-detail__left__thumbnail__img" alt=""></li>
          <li id="slickThumbnailDetailItem"><img src="<?php echo get_template_directory_uri(); ?>/img/d-silicon2.png" class="contents__product-detail__left__thumbnail__img" alt=""></li>
          <li id="slickThumbnailDetailItem"><img src="<?php echo get_template_directory_uri(); ?>/img/d-silicon3.png" class="contents__product-detail__left__thumbnail__img" alt=""></li>
          <li id="slickThumbnailDetailItem"><img src="<?php echo get_template_directory_uri(); ?>/img/d-silicon4.png" class="contents__product-detail__left__thumbnail__img" alt=""></li>
        </ul>
      </div>
      <div class="contents__product-detail__right">
        <h1 class="contents__product-detail__ttl">シリコンケース<br>(VPRO・UTLXシリーズ用)</h1>
		  <p class="contents__product-detail__price">¥1650円(税込)<br><span style="font-size: 18px;">（メーカー希望小売価格）</span></p>
        <h2 class="contents__product-detail__sub-ttl">ワンポイントアクセントに。傷・汚れ防止にも使用できるシリコンケース</h2>
        <p class="contents__product-detail__desc">対応機種は、ULT-XシリーズとVPROシリーズです。</p>
        <a class="contents__product-detail__link" href="https://tectectec.shop-pro.jp/?mode=cate&cbid=2499348&csid=0">カートに入れる</a>
      </div>
    </section>

    <section class="contents__spacer-desc">
      <p class="contents__spacer-desc__ttl">Description</p>
      <i class="fas fa-caret-down"></i>
    </section>

    <section class="contents__silicone__desc">
      <p>シリコンケース （VPRO・UTLXシリーズ用）</p>
    </section>

    <section class="contents__related-products">
      <h2 class="contents__related-products__ttl">Related Products</h2>
      <div class="contents__related-products__inner">
        <div class="contents__related-products__item">
          <a class="contents__related-products__a" href="<?php echo get_permalink( get_page_by_path( 'detail-ultx800' )->ID ); ?>"><img class="contents__related-products__img" src="<?php echo get_template_directory_uri(); ?>/img/d-ultx1.png" alt=""></a>
          <p class="contents__related-products__name">ULT-X 800</p>
          <p class="contents__related-products__price">¥26,400円 (税込)</p>
        </div>
        <div class="contents__related-products__item">
          <a class="contents__related-products__a" href="<?php echo get_permalink( get_page_by_path( 'detail-ultx1000' )->ID ); ?>"><img class="contents__related-products__img" src="<?php echo get_template_directory_uri(); ?>/img/d-ultx1.png" alt=""></a>
          <p class="contents__related-products__name">ULT-X 1000</p>
          <p class="contents__related-products__price">¥29,700円 (税込)</p>
        </div>
        <div class="contents__related-products__item">
          <a class="contents__related-products__a" href="<?php echo get_permalink( get_page_by_path( 'detail-vpro500' )->ID ); ?>"><img class="contents__related-products__img" src="<?php echo get_template_directory_uri(); ?>/img/d-vpro_1.png" alt=""></a>
          <p class="contents__related-products__name">VPRO 500</p>
           <p class="contents__related-products__price">¥18,480円 (税込)</p>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/contents' , 'point'); ?>

  </div>

<?php get_footer(); ?>
