<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
	<meta name="facebook-domain-verification" content="r0hbmk9jy5yyaoda1u7evw135b27cn" />

  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="google-site-verification" content="YwtWmesIHbjWUUWS2vxY-Qey7Km9ZTBv4bJqoZqT_Us" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400|Rubik|Rajdhani:400,600" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_32x32.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon_192x192.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/slick/slick.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick/slick.min.js"></script>
  <?php if( wp_is_mobile() ) : ?>
  <?php else : ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/elevatezoom/jquery.elevatezoom.js"></script>
  <?php endif; ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NQT2PQZ');</script>
<!-- End Google Tag Manager -->
  <?php wp_head(); ?>
	
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '451844552212353');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=451844552212353&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQT2PQZ"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header class="header">
    <div class="header__top">
      <a class="header__top__l-wrapper" href="<?php echo home_url(); ?>"><img class="header__top__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-site.png"></a>
      <nav class="header__top__nav">
        <ul class="header__top__nav__inner">
				<li class="header__top__nav__inner__item"><a href="<?php echo get_permalink( get_page_by_path( 'distributor' )->ID ); ?>" class="header__top__a">販売店紹介</a></li>
				<li class="header__top__nav__inner__item"><a href="<?php echo home_url() . '/blog' ?>" class="header__top__a">ブログ</a></li>
				<li class="header__top__nav__inner__item"><a href="https://members.shop-pro.jp/?mode=members_regi&shop_id=PA01429402" target="_blank" class="header__top__a">保証登録</a></li>
				<li class="header__top__nav__inner__item"><a href="<?php echo get_permalink( get_page_by_path( 'contact-us' )->ID ); ?>" class="header__top__a"><i class="fas fa-envelope"></i> お問い合わせ</a></li>
        </ul>
      </nav>
      <div class="header__top__search">
		  <form class="search__form" action="/" method="get" >
				<input class="search__input" type="text" name="s" id="search" placeholder="Search products…" value="<?php the_search_query(); ?>" />
			</form>
      </div>
      <div class="header__nav-drawer">
        <input id="header__nav-drawer__input" class="header__nav-drawer__unshown" type="checkbox">
        <label id="header__nav-drawer__open" for="header__nav-drawer__input"><span class="header__nav-drawer__hamburger-memu"></span><span class="header__nav-drawer__hamburger-memu__txt">menu</span></label>
        <label id="header__nav-drawer__close" class="header__nav-drawer__unshown" for="header__nav-drawer__input"></label>
        <nav class="header__nav-drawer__content">
          <label class="header__nav-drawer__content__close-lbl" for="header__nav-drawer__input">メニューを閉じる<span class="header__nav-drawer__content__close-lbl__icon"><i class="fas fa-times-circle"></i></span></label>
          <ul class="header__nav-drawer__content__inner">
				<li class="header__nav-drawer__content__li"><a href="<?php echo home_url(); ?>" class="header__nav-drawer__content__a">ホーム</a></li>
				<li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'distributor' )->ID ); ?>" class="header__nav-drawer__content__a">販売店紹介</a></li>
				<li class="header__nav-drawer__content__li"><a href="<?php echo home_url() . '/blog' ?>" class="header__nav-drawer__content__a">ブログ</a></li>
				<li class="header__nav-drawer__content__li"><a href="https://members.shop-pro.jp/?mode=members_regi&shop_id=PA01429402" class="header__nav-drawer__content__a">保証登録</a></li>
				<li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'contact-us' )->ID ); ?>" class="header__nav-drawer__content__a">お問い合わせ</a></li>
				<li class="header__nav-drawer__content__li">
              <a href="<?php echo get_permalink( get_page_by_path( 'list' )->ID ); ?>" class="header__nav-drawer__content__a">製品紹介</a>
              <ul class="header__nav-drawer__content__li__child">
                <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'detail-mini' )->ID ); ?>" class="header__nav-drawer__content__a">MINI</a></li>
                <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'detail-ults-pro' )->ID ); ?>" class="header__nav-drawer__content__a">ULTS PRO</a></li>
                <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'detail-ults' )->ID ); ?>" class="header__nav-drawer__content__a">ULTS</a></li>
                <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'detail-ultx800' )->ID ); ?>" class="header__nav-drawer__content__a">ULT-X 800</a></li>
                <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'detail-silicone' )->ID ); ?>" class="header__nav-drawer__content__a">シリコンケース</a></li>
              </ul>
            </li>
            <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'comparison' )->ID ); ?>" class="header__nav-drawer__content__a">距離計の選び方</a></li>
            <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'about-us' )->ID ); ?>" class="header__nav-drawer__content__a">TecTecTecとは？</a></li>
            <li class="header__nav-drawer__content__li"><a href="<?php echo get_permalink( get_page_by_path( 'faq' )->ID ); ?>" class="header__nav-drawer__content__a">サポート・FAQ</a></li>
          </ul>
        </nav>
      </div>
    </div>
	  <div class="header__middle">
	    <ul class="header__middle__ul">
			<li class="header__middle__li"><a class="header__middle__a" href="https://tectectec.shop-pro.jp/" target="_blank">販売サイト</a></li>
			<li class="header__middle__li"><a class="header__middle__a" href="https://members.shop-pro.jp/?mode=members_regi&shop_id=PA01429402" target="_blank">保証登録</a></li>
    	</ul>
	</div>
    <div class="header__bottom">
      <div class="header__bottom__inner">
        <nav class="header__bottom__nav">
          <ul class="header__bottom__nav__inner">
            <li class="header__bottom__nav__item"><a href="<?php echo home_url(); ?>" class="header__bottom__a">ホーム</a></li>
            <li class="header__bottom__nav__item--drop-down">
              <a href="<?php echo get_permalink( get_page_by_path( 'list' )->ID ); ?>" class="header__bottom__a">製品紹介 <i class="fas fa-angle-down"></i></a>
              <ul class="header__bottom__sub-nav">
                <li class="header__bottom__sub-nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'detail-mini' )->ID ); ?>" class="header__bottom__sub-nav__a">MINI</a></li>
                <li class="header__bottom__sub-nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'detail-ults-pro' )->ID ); ?>" class="header__bottom__sub-nav__a">ULTS PRO</a></li>
                <li class="header__bottom__sub-nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'detail-ults' )->ID ); ?>" class="header__bottom__sub-nav__a">ULTS</a></li>
                <li class="header__bottom__sub-nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'detail-ultx800' )->ID ); ?>" class="header__bottom__sub-nav__a">ULT-X 800</a></li>
                <li class="header__bottom__sub-nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'detail-silicone' )->ID ); ?>" class="header__bottom__sub-nav__a">シリコンケース</a></li>
              </ul>
            </li>
            <li class="header__bottom__nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'comparison' )->ID ); ?>" class="header__bottom__a">距離計の選び方</a></li>
            <li class="header__bottom__nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'about-us' )->ID ); ?>" class="header__bottom__a">TecTecTecとは？</a></li>
            <li class="header__bottom__nav__item"><a href="<?php echo get_permalink( get_page_by_path( 'faq' )->ID ); ?>" class="header__bottom__a">サポート・FAQ</a></li>
			  <li class="header__bottom__nav__item"><a href="https://tectectec.shop-pro.jp/" class="header__bottom__a">購入サイト</a></li>
          </ul>
        </nav>
        <div class="header__bottom__icons">
          <a href="https://tectectec.shop-pro.jp/" target="_blank" class="header__bottom__icon--sc"><i class="fas fa-shopping-cart"></i></a>
          <a href="https://www.facebook.com/tectectecjapan/" target="_blank" class="header__bottom__icon--fb"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/tectectecjapan_official/?hl=ja" target="_blank" class="header__bottom__icon--ig"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCrkp9CizdLJ9d71PPqu41Tg" target="_blank" class="header__bottom__icon--yt"><i class="fab fa-youtube-square"></i></a>
        </div>
      </div>
    </div>

<?php if (  !is_front_page() ||  !is_home() ) : ?>
<div class="header__bottom__inner">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
</div>
<?php endif; ?>

  </header>
