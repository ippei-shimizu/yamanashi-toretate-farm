<?php get_header(); ?>

<section class="contact-fv about-fv">
  <div class="about-fv-inner">
    <div class="about-fv-bg fade-up-after">
      <img class="about-fv-bg-img" src="<?php echo $global_image_path ?>fv-contact.png" width="1440" height="583" alt="">
    </div>
    <h2 class="about-fv-title fade-up">
    CONTACT
    <span class="contact-fv-sub">お問い合わせ</span>
    </h2>
    <div class="fv-scroll-assist"></div>
  </div>
</section>

<div class="contact-msg">
  <div class="contact-msg-inner">
    <p class="contact-msg-text fade-up">
    山梨とれたて農園の活動について、作物や加工品の購入について。<br>
お問い合わせは下記のフォームに必要事項をご記入の上、お送りください。<br>
近日中にご返答させていただきます。
    </p>
    <div class="products-send-wrap">
      <div class="products-title-box fade-up">
        <div class="products-border"></div>
        <h2 class="products-title">商品の発送について</h2>
        <div class="products-border"></div>
      </div>
      <h3 class="products-title-sub">農産物のご注文は、<span>完全予約制</span>となっております。</h3>
      <p class="products-text">※農産物によって発送のタイミングが異なります。<br>
詳細はお問い合わせフォーム、またはお電話にてお問い合わせください。</p>
    </div>
    <div class="products-table fade-up">
      <div class="products-item">
        <h4 class="products-name">ゴールドラッシュ</h4>
        <p class="products-price">10〜12本　5kg<br>¥5000（税込）</p>
      </div>
      <div class="item-border"></div>
      <div class="products-item">
        <h4 class="products-name">ドルチェドリーム</h4>
        <p class="products-price">8本　4kg<br>¥7000（税込）</p>
      </div>
      <div class="item-border"></div>
      <div class="products-item">
        <h4 class="products-name">シャインマスカット</h4>
        <p class="products-price">3kg<br>¥10000（税込）</p>
      </div>
      <p class="products-description">商品は全て送料込みの価格です。<br>クール便にてお届けいたします。</p>
    </div>
  </div>
</div>

<div class="form">
<?php echo do_shortcode('[contact-form-7 id="7205bdc" title="お問い合わせフォーム"]'); ?>
</div>

<?php get_footer(); ?>