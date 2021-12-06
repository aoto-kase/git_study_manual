<?php get_header(); ?>

  <div class="contents">

    <section class="contents__product-detail">
      <div class="contents__product-detail__left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/l-1.png" alt="">
      </div>
      <div class="contents__product-detail__right">
        <h2 class="contents__product-detail__ttl">ULT-X</h2>
        <p class="contents__product-detail__best-seller">#2 Best Seller in Golf Rangefinder</p>
        <h3 class="contents__product-detail__price">$248.99</h3>
        <p class="contents__product-detail__desc">sample text sample text sample text sample text sample text sample text sample text sample text </p>
        <a class="contents__product-detail__link" href="#">Add to Cart</a>
      </div>
    </section>

    <section class="contents__spacer-desc">
      <h3 class="contents__spacer-desc__ttl">Description</h3>
      <i class="fas fa-caret-down"></i>
    </section>

    <section class="contents__catch-copy">
      <div class="contents__img-txt">
        <div class="contents__img-txt__child--equal">
          <img class="contents__catch-copy__img--smaller" src="<?php echo get_template_directory_uri(); ?>/img/d-1.jpg" alt="">
        </div>
        <div class="contents__img-txt__child--equal">
          <h2 class="contents__catch-copy__ttl--middle">AS Far xxxxxxxxx</h2>
          <p>sample text sample textsample textsample textsample textsample textsample text</p>
        </div>
      </div>
    </section>

    <section class="contents__catch-copy">
      <div class="contents__img-txt">
        <div class="contents__img-txt__child--equal">
          <h2 class="contents__catch-copy__ttl--middle">AS Far xxxxxxxxx</h2>
          <p>sample text sample textsample textsample textsample textsample textsample text</p>
        </div>
        <div class="contents__img-txt__child--equal">
          <img class="contents__catch-copy__img--smaller" src="<?php echo get_template_directory_uri(); ?>/img/d-2.jpg" alt="">
        </div>
      </div>
    </section>

    <section class="contents__catch-copy">
      <div class="contents__img-txt">
        <div class="contents__img-txt__child--equal">
          <img class="contents__catch-copy__img--smaller" src="<?php echo get_template_directory_uri(); ?>/img/d-3.gif" alt="">
        </div>
        <div class="contents__img-txt__child--equal">
          <h2 class="contents__catch-copy__ttl--middle">AS Far xxxxxxxxx</h2>
          <p>sample text sample textsample textsample textsample textsample textsample text</p>
        </div>
      </div>
    </section>

    <section class="contents__catch-copy">
      <div class="contents__img-txt">
        <div class="contents__img-txt__child--equal">
          <h2 class="contents__catch-copy__ttl--middle">AS Far xxxxxxxxx</h2>
          <p>sample text sample textsample textsample textsample textsample textsample text</p>
        </div>
        <div class="contents__img-txt__child--equal">
          <img class="contents__catch-copy__img--smaller" src="<?php echo get_template_directory_uri(); ?>/img/d-4.gif" alt="">
        </div>
      </div>
    </section>

    <section class="contents__catch-copy">
      <div class="contents__img-txt">
        <div class="contents__img-txt__child--equal">
          <img class="contents__catch-copy__img--smaller" src="<?php echo get_template_directory_uri(); ?>/img/d-5.jpg" alt="">
        </div>
        <div class="contents__img-txt__child--equal">
          <h2 class="contents__catch-copy__ttl--middle">AS Far xxxxxxxxx</h2>
          <p>sample text sample textsample textsample textsample textsample textsample text</p>
        </div>
      </div>
    </section>

    <section class="contents__embed-youtube">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/uqIuUzQywx0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <section class="contents__related-products">
      <h2 class="contents__related-products__ttl">Related Products</h2>
      <div class="contents__related-products__inner">
        <div class="contents__related-products__item">
          <img class="contents__related-products__img" src="<?php echo get_template_directory_uri(); ?>/img/l-1.png" alt="">
          <p class="contents__related-products__name">VPRO500</p>
          <p class="contents__related-products__price">$148.99</p>
        </div>
        <div class="contents__related-products__item">
          <img class="contents__related-products__img" src="<?php echo get_template_directory_uri(); ?>/img/l-1.png" alt="">
          <p class="contents__related-products__name">VPRO500</p>
          <p class="contents__related-products__price">$148.99</p>
        </div>
        <div class="contents__related-products__item">
          <img class="contents__related-products__img" src="<?php echo get_template_directory_uri(); ?>/img/l-1.png" alt="">
          <p class="contents__related-products__name">VPRO500</p>
          <p class="contents__related-products__price">$148.99</p>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/contents' , 'point'); ?>

  </div>

<?php get_footer(); ?>
