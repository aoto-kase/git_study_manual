<footer class="footer">
  <div class="footer__top">
    <div class="footer__column">
      <nav>
        <ul class="footer__column__items">
          <li class="footer__column__item"><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' )->ID ); ?>" class="footer__link">プライバシーポリシー</a></li>
          <li class="footer__column__item"><a href="https://members.shop-pro.jp/?mode=members_regi&shop_id=PA01429402" target="_blank" class="footer__link">保証に関して</a></li>
			<?php $cat = get_term_by('slug','news','category');?>
			<li class="footer__column__item"><a href="<?php echo get_category_link($cat->term_id);?>" target="_blank" class="footer__link">お知らせ</a></li>
			<li class="footer__column__item"><a href="<?php echo home_url() . '/blog' ?>" class="footer__link">ブログ</a></li>

        </ul>
      </nav>
    </div>
    <div class="footer__column">
      <nav>
        <ul class="footer__column__items">
          <li class="footer__column__item"><a href="<?php echo get_permalink( get_page_by_path( 'contact-us' )->ID ); ?>" class="footer__link"> <i class="fas fa-envelope"></i> お問い合わせ</a></li>
			<li class="footer__column__item"><a href="<?php echo get_permalink( get_page_by_path( 'trade-in' )->ID ); ?>" class="footer__link">下取り</a></li>
			<li class="footer__column__item"><a href="<?php echo get_permalink( get_page_by_path( 'distributor' )->ID ); ?>" class="footer__link">販売店紹介</a></li>
			<li class="footer__column__item"><a href="<?php echo get_permalink( get_page_by_path( 'sitemap' )->ID ); ?>" class="footer__link">サイトマップ</a></li>
        </ul>
      </nav>
    </div>
    <div class="footer__column">
    </div>
    <div class="footer__column">
      <p class="footer__column__ttl">Follow us</p>
      <div class="footer__column__inner">
        <a href="https://www.facebook.com/tectectecjapan/" target="_blank" class="footer__column__icon--fb"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/tectectecjapan_official/?hl=ja" target="_blank" class="footer__column__icon--ig"><i class="fab fa-instagram"></i></a>
		  <a href="https://www.youtube.com/channel/UCrkp9CizdLJ9d71PPqu41Tg" target="_blank" class="footer__column__icon--yt"><i class="fab fa-youtube-square"></i></a>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <small class="footer__copyright">© TecTecTec 2019</small>
  </div>
</footer>

<script type="text/javascript">
  /* ================================
  start slick (top page)=== =========
  ===================================*/
  $(function(){
    $('#slickSlideshowTop').slick({
      autoplay      : true ,
      autoplaySpeed : 2500 ,
      speed         : 800 ,
      dots          : true ,
      arrows        : false ,
      centerMode    : true ,
      centerPadding : '0' ,
      infinite      : true
    });
  });
  /* ================================
  start slick (detail page) =========
  ===================================*/
  $(function(){
    var slider = "#slickSlideshowDetail"; // スライダー
    var thumbnailItem = "#slickThumbnailDetail #slickThumbnailDetailItem"; // サムネイル画像アイテム
    // サムネイル画像アイテムに data-index でindex番号を付与
    $(thumbnailItem).each(function(){
     var index = $(thumbnailItem).index(this);
     $(this).attr("data-index",index);
    });
    // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
    $(slider).on('init',function(slick){
     var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
     $(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
    });
    //slickスライダー初期化
    $(slider).slick({
      autoplay: false,
      arrows: false,
      fade: true,
      infinite: false
    });
    //サムネイル画像アイテムをクリックしたときにスライダー切り替え
    $(thumbnailItem).on('click',function(){
      var index = $(this).attr("data-index");
      $(slider).slick("slickGoTo",index,false);
    });
    //サムネイル画像のカレントを切り替え
    $(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
      $(thumbnailItem).each(function(){
        $(this).removeClass("thumbnail-current");
      });
      $(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
    });
  });
  /* ================================
  start elevatezoom (detail page) ===
  ===================================*/
  $(function(){
    $('#elevatezoomImgDetail').elevateZoom({
      zoomType  : 'lens' ,
      lensShape : 'round' ,
      lensSize  : 200 ,
      zoomLevel : 2
    });
  });

</script>
<?php wp_footer(); ?>
</body>
</html>
