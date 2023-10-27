<?php get_header(); ?>

<section class="fv">
  <div class="fv-inner">
    <div class="fv-contents">
      <div class="fv-img-box">
        <img class="fv-img-left" src="<?php echo $global_image_path; ?>fv-yasai.png" width="480" height="582" alt="" loading="lazy">
        <img class="fv-img-right" src="<?php echo $global_image_path; ?>fv-yasai-02.png" width="223" height="224" alt="" loading="lazy">
      </div>
      <?php
      $slide_files_out = [
          "fv-slide-01-out.png",
          "fv-slide-02-out.png",
          "fv-slide-03-out.png",
          "fv-slide-04-out.png"
      ];

      $slide_files_front = [
          "fv-slide-01-front.png",
          "fv-slide-02-front.png",
          "fv-slide-03-front.png",
          "fv-slide-04-front.png"
      ];
      ?>
      <div class="swiper-container">
          <div class="swiper-wrapper">
              <?php for ($i = 0; $i < count($slide_files_out); $i++) : ?>
              <div class="fv-slide-img-box swiper-slide">
                  <img class="fv-slide-img fv-slide-img-out" src="<?php echo $global_image_path . $slide_files_out[$i]; ?>" width="1206" height="1532" alt="" loading="lazy">
                  <img class="fv-slide-img fv-slide-img-front" src="<?php echo $global_image_path . $slide_files_front[$i]; ?>" width="1206" height="1532" alt="" loading="lazy">
              </div>
              <?php endfor; ?>
          </div>
          <div class="swiper-pagination"></div>
      </div>
      <div class="fv-title-area">
        <p class="fv-title-sub">Do you know?</p>
        <h2 class="fv-title">
          <span>知ってる？</span>
          <span>とれたてのホントの味</span>
        </h2>
        <p class="fv-text">Freshly harvested vegetables.<br>Freshly picked fruit.<br>The blessings and deliciousness of nature.</p>
      </div>
    </div>
  </div>
  <div class="scroll-assist">
    <p>scroll</p>
    <div class="scroll-assist-border"></div>
  </div>
</section>

<?php get_footer(); ?>