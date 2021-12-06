<?php get_header(); ?>

<div class="contents">
  <section class="contents__warrentry">
    <h2 class="contents__warrentry__h2">無料会員登録</h2>
    <h3 class="contents__warrentry__h3">会員登録のメリット</h3>
    <p class="contents__warrentry__p">
      当社のレーザー距離計をご購入のお客様は会員登録して頂くだけで「１年延長保証」をおつけしています。（通常保証と合わせて２年保証）
    </p>
    <p class="contents__warrentry__p">
      TecTecTecジャパンのカスタマーサービスです。会員登録に関して気になる点がございましたら、お気軽にお問合せ下さい。私達カスタマーサービスチームはメールでのお問い合わせは２４時間以内に返信致します。
    </p>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <p class="contents__warrentry__p--center">さらに抽選で毎月１名様にお好きな距離計をプレゼントしています！</p>

  </section>

  <?php get_template_part('template-parts/contents' , 'point'); ?>

</div>

<?php get_footer(); ?>
