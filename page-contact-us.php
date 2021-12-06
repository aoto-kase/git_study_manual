<?php get_header(); ?>

  <div class="contents">
    <section class="contents__contact-us">
      <h2 class="contents__contact-us__h2">TecTecTecジャパンの連絡先</h2>
      <p>TecTecTecジャパンのカスタマーサービスです。何か気になる点がございましたら、お気軽にお問合せ下さい。<br>
        私達カスタマーサービスチームはメールでのお問い合わせは２４時間以内に返信致します。</p>

      <br>
      <br>

      <h2 class="contents__contact-us__h2">メールでのお問い合わせ</h2>

       <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
         <?php the_content(); ?>
       <?php endwhile; endif; ?>

      <br>
      <br>

      <h2 class="contents__contact-us__h2">お電話での問い合わせも受け付けております。</h2>
      <p><a class="contents__contact-us__cta" href="tel:0120-957-188">0120-957-188</a></p>
      <p>受付時間：平日の９時～１２時　１３時～１６時　土・日・祝日は除く</p>

    </section>

    <?php get_template_part('template-parts/contents' , 'point'); ?>

  </div>

<?php get_footer(); ?>
