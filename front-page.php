<div id="loading" class="loading">
  <div class="loading-icon-box">
    
  </div>
</div>

<?php get_header(); ?>

<div>
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
                    <img class="fv-slide-img fv-slide-img-out" src="<?php echo $global_image_path . $slide_files_out[$i]; ?>" width="1206" height="1532" alt="">
                    <img class="fv-slide-img fv-slide-img-front" src="<?php echo $global_image_path . $slide_files_front[$i]; ?>" width="1206" height="1532" alt="">
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

  <section class="about">
    <div class="about-inner">
      <div class="about-contents">
        <img class="pink-mountain-img" src="<?php echo $global_image_path ?>pink.png" width="1458" height="446" alt="" loading="lazy">
        <div class="about-contents-bg">
          <div class="about-title-area">
            <p class="about-title-sub">Do you know?</p>
            <div class="about-title-box">
              <h2 class="about-title">知ってる？<br>とれたてのホントの味</h2>
              <img class="about-ha about-ha-01" src="<?php echo $global_image_path ?>ha-01.svg" width="65" height="73" alt="" loading="lazy">
              <img class="about-ha about-ha-02" src="<?php echo $global_image_path ?>ha-02.svg" width="65" height="73" alt="" loading="lazy">
            </div>
            <p class="about-text">Freshly harvested vegetables.<br>Freshly picked fruit.<br>The blessings and deliciousness of nature.</p>
          </div>
          <div class="about-bottom-img">
            <img class="about-wood about-wood-01" src="<?php echo $global_image_path ?>wood-01.png" width="143" height="215" alt="" loading="lazy">
            <img class="about-wood about-wood-02" src="<?php echo $global_image_path ?>wood-02.png" width="172" height="210" alt="" loading="lazy">
          </div>
        </div>
      </div>
    </div>
    <div class="about-01">
      <div class="about-01-contents">
        <div class="about-01-img-box">
          <img class="map-img" src="<?php echo $global_image_path ?>japan.png" width="738" height="545" alt="" loading="lazy">
          <h3>BASED IN</h3>
          <p>SHOWACHO YAMANASHI JAPAN</p>
        </div>
        <div class="about-01-text-box">
          <div class="about-01-num-box">
            <p class="section-sub-title">TORETATE</p>
            <span class="about-01-num">01</span>
          </div>
          <div class="about-01-text-wrap">
            <h4 class="section-tile">とれたて農園とは？</h4>
            <p class="about-01-text">山梨県中巨摩郡昭和町にある、「とれたてに」こだわり、鮮度と素材の旨みを最大限に味わっていただくための野菜・果物づくりを行っている農園。<br>
  農業は命と未来を作ること。<br>
  当社の強みである有機農耕法で、作物と対話し、成長に合わせてじっくりと寄り添いながら、愛情と手間暇を惜しまずかけて育てています。
  ・・・</p>
          </div>
          <div class="about-01-link"><a href="<?php echo esc_url(home_url('/about')); ?>">VIEW MORE</a></div>
        </div>
      </div>
      <?php
      $slide_images = ["about-slide-01.png", "about-slide-02.png", "about-slide-03.png", "about-slide-04.png", "about-slide-05.png"];
      ?>
      <div class="about-slide-img-loop">
        <div class="about-slide-img-box">
          <?php foreach ($slide_images as $slide_image) : ?>
            <img class="about-slide-img" src="<?php echo $global_image_path . $slide_image; ?>" width="300" height="300" alt="" loading="lazy">
          <?php endforeach; ?>
        </div>
        <div class="about-slide-img-box">
          <?php foreach ($slide_images as $slide_image) : ?>
            <img class="about-slide-img" src="<?php echo $global_image_path . $slide_image; ?>" width="300" height="300" alt="" loading="lazy">
          <?php endforeach; ?>
        </div>
        <div class="about-slide-img-box">
          <?php foreach ($slide_images as $slide_image) : ?>
            <img class="about-slide-img" src="<?php echo $global_image_path . $slide_image; ?>" width="300" height="300" alt="" loading="lazy">
          <?php endforeach; ?>
        </div>
      </div>
      <div class="svg-animation">
        <div class="bg-label">
          <svg version="1.0" id="_レイヤー_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.6 224.62">
            <path class="path path-1" d="m4.1,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.39-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-2" d="m216.12,29.88c19.58,0,36.3,6.79,50.16,20.38,13.85,13.59,20.78,30.64,20.78,51.16s-6.93,37.74-20.78,51.26c-13.86,13.52-30.57,20.28-50.16,20.28s-36.47-6.76-50.26-20.28c-13.79-13.52-20.68-30.61-20.68-51.26s6.89-37.57,20.68-51.16,30.54-20.38,50.26-20.38Zm0,7.79c-14.52,0-26.65,5.7-36.37,17.09-9.73,11.39-14.59,26.95-14.59,46.66s4.86,35.47,14.59,46.86c9.72,11.39,21.85,17.02,36.37,16.89,14.39,0,26.48-5.66,36.27-16.99,9.79-11.32,14.69-26.91,14.69-46.76s-4.9-35.27-14.69-46.66-21.88-17.09-36.27-17.09Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-3" d="m305.25,31.47h52.76c15.59,0,27.11,1.73,34.57,5.2,7.46,3.47,12.92,8.53,16.39,15.19,1.06,2.4,1.93,4.86,2.6,7.39.67,2.53,1,5.06,1,7.59,0,8.93-2.5,16.62-7.49,23.08-5,6.46-12.09,10.83-21.28,13.09l28.78,47.56c3.46,5.86,6.46,9.63,8.99,11.29,2.53,1.67,5.4,2.57,8.59,2.7v6.79h-25.38l-39.57-65.35h-30.97v42.36c-.13,5.33.76,9.26,2.7,11.79,1.93,2.53,4.96,4,9.09,4.4v6.79h-40.77v-6.79c4-.4,6.96-1.8,8.89-4.2,1.93-2.4,2.9-6.39,2.9-11.99V54.45c0-5.33-.97-9.22-2.9-11.69-1.93-2.46-4.9-3.96-8.89-4.5v-6.79Zm28.98,66.75h20.58c12.26,0,21.61-2.43,28.08-7.29,6.46-4.86,9.69-12.42,9.69-22.68s-2.97-17.29-8.89-21.88c-5.93-4.6-15.56-6.96-28.88-7.09h-20.58v58.95Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-4" d="m443.13,31.47h78.73c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-5" d="m566.23,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.39-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-6" d="m775.26,29.88l53.96,119.9c2.26,5.2,4.56,8.93,6.89,11.19,2.33,2.27,5.03,3.47,8.09,3.6v6.79h-39.17v-6.79c2.66-.4,4.53-1.1,5.6-2.1,1.06-1,1.6-2.9,1.6-5.7-.13-.4-.37-1.17-.7-2.3-.33-1.13-.7-2.3-1.1-3.5l-7.99-17.99h-69.54l-7.79,16.99c-.8,1.73-1.43,3.2-1.9,4.4-.47,1.2-.63,2.07-.5,2.6-.13,2.13.47,3.83,1.8,5.1,1.33,1.27,3.33,2.1,6,2.5v6.79h-30.97v-6.79c2.93-.13,5.8-1.5,8.59-4.1,2.8-2.6,5.2-5.96,7.19-10.09l44.96-97.12c.53-1.33.96-2.36,1.3-3.1.33-.73.5-1.36.5-1.9,0-.93-.4-1.66-1.2-2.2-.8-.53-2-.8-3.6-.8v-6.79c2.26-.53,4.76-1.66,7.49-3.4,2.73-1.73,4.9-3.46,6.49-5.2h4Zm23.58,95.32l-29.58-65.75h-2.2l-30.57,65.75h62.35Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-7" d="m846.8,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.4-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-8" d="m990.48,31.47h78.74c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-9" d="m1170.93,171.36v-6.79c3.46.53,6.33-.63,8.59-3.5,2.26-2.86,3.4-6.56,3.4-11.09V55.05c-.13-5.2-1.27-9.26-3.4-12.19-2.13-2.93-5-4.46-8.59-4.6v-6.79h28.36l84.95,107.46.6-.21V54.06c-.13-5.2-1.13-8.99-3-11.39-1.87-2.4-4.8-3.86-8.79-4.4v-6.79h31.38v6.79c-4.4.93-7.46,2.5-9.19,4.7-1.73,2.2-2.6,5.9-2.6,11.09v117.3h-6l-95.12-120.7h-.8v99.32c-.13,4,.83,7.43,2.9,10.29,2.06,2.87,5.03,4.3,8.89,4.3v6.79h-31.57Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-10" d="m1393.54,29.88c19.58,0,36.3,6.79,50.16,20.38,13.85,13.59,20.78,30.64,20.78,51.16s-6.93,37.74-20.78,51.26c-13.86,13.52-30.57,20.28-50.16,20.28s-36.47-6.76-50.26-20.28c-13.79-13.52-20.68-30.61-20.68-51.26s6.89-37.57,20.68-51.16,30.54-20.38,50.26-20.38Zm0,7.79c-14.52,0-26.65,5.7-36.37,17.09-9.73,11.39-14.59,26.95-14.59,46.66s4.86,35.47,14.59,46.86c9.72,11.39,21.85,17.02,36.37,16.89,14.39,0,26.48-5.66,36.27-16.99,9.79-11.32,14.69-26.91,14.69-46.76s-4.9-35.27-14.69-46.66-21.88-17.09-36.27-17.09Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-11" d="m1482.67,31.47h40.37v6.79c-4.13.53-7.13,2.03-8.99,4.5-1.87,2.47-2.73,6.36-2.6,11.69v54.75c0,12.92,1.73,23.15,5.2,30.68,3.46,7.53,9.39,13.29,17.79,17.29,3.06,1.6,6.36,2.73,9.89,3.4,3.53.67,7.69,1,12.49,1,4.53.13,8.89-.37,13.09-1.5,4.2-1.13,8.29-2.9,12.29-5.29,7.19-4.26,12.32-10.02,15.39-17.29,3.06-7.26,4.6-18.22,4.6-32.87v-51.76c0-4.66-.93-8.16-2.8-10.49-1.87-2.33-4.8-3.7-8.79-4.1v-6.79h30.97v6.79c-4.13.4-7.09,1.8-8.89,4.2-1.8,2.4-2.7,5.86-2.7,10.39v61.15c-.13,18.78-4.93,33.31-14.39,43.56-9.46,10.26-23.52,15.39-42.17,15.39-21.32,0-36.5-5.4-45.56-16.19-9.06-10.79-13.59-26.91-13.59-48.36v-53.96c0-5.2-.87-9.09-2.6-11.69-1.73-2.6-4.73-4.1-8.99-4.5v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-12" d="m1642.33,31.47h78.74c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-13" d="m1773.22,171.36v-6.79c3.46.53,6.33-.63,8.59-3.5,2.26-2.86,3.4-6.56,3.4-11.09V55.05c-.13-5.2-1.27-9.26-3.4-12.19-2.13-2.93-5-4.46-8.59-4.6v-6.79h28.36l84.95,107.46.6-.21V54.06c-.13-5.2-1.13-8.99-3-11.39-1.87-2.4-4.8-3.86-8.79-4.4v-6.79h31.38v6.79c-4.4.93-7.46,2.5-9.19,4.7-1.73,2.2-2.6,5.9-2.6,11.09v117.3h-6l-95.12-120.7h-.8v99.32c-.13,4,.83,7.43,2.9,10.29,2.06,2.87,5.03,4.3,8.89,4.3v6.79h-31.57Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
          </svg>
          <svg version="1.0" id="_レイヤー_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.6 224.62">
            <path class="path path-14" d="m4.1,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.39-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-15" d="m216.12,29.88c19.58,0,36.3,6.79,50.16,20.38,13.85,13.59,20.78,30.64,20.78,51.16s-6.93,37.74-20.78,51.26c-13.86,13.52-30.57,20.28-50.16,20.28s-36.47-6.76-50.26-20.28c-13.79-13.52-20.68-30.61-20.68-51.26s6.89-37.57,20.68-51.16,30.54-20.38,50.26-20.38Zm0,7.79c-14.52,0-26.65,5.7-36.37,17.09-9.73,11.39-14.59,26.95-14.59,46.66s4.86,35.47,14.59,46.86c9.72,11.39,21.85,17.02,36.37,16.89,14.39,0,26.48-5.66,36.27-16.99,9.79-11.32,14.69-26.91,14.69-46.76s-4.9-35.27-14.69-46.66-21.88-17.09-36.27-17.09Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-16" d="m305.25,31.47h52.76c15.59,0,27.11,1.73,34.57,5.2,7.46,3.47,12.92,8.53,16.39,15.19,1.06,2.4,1.93,4.86,2.6,7.39.67,2.53,1,5.06,1,7.59,0,8.93-2.5,16.62-7.49,23.08-5,6.46-12.09,10.83-21.28,13.09l28.78,47.56c3.46,5.86,6.46,9.63,8.99,11.29,2.53,1.67,5.4,2.57,8.59,2.7v6.79h-25.38l-39.57-65.35h-30.97v42.36c-.13,5.33.76,9.26,2.7,11.79,1.93,2.53,4.96,4,9.09,4.4v6.79h-40.77v-6.79c4-.4,6.96-1.8,8.89-4.2,1.93-2.4,2.9-6.39,2.9-11.99V54.45c0-5.33-.97-9.22-2.9-11.69-1.93-2.46-4.9-3.96-8.89-4.5v-6.79Zm28.98,66.75h20.58c12.26,0,21.61-2.43,28.08-7.29,6.46-4.86,9.69-12.42,9.69-22.68s-2.97-17.29-8.89-21.88c-5.93-4.6-15.56-6.96-28.88-7.09h-20.58v58.95Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-17" d="m443.13,31.47h78.73c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-18" d="m566.23,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.39-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-19" d="m775.26,29.88l53.96,119.9c2.26,5.2,4.56,8.93,6.89,11.19,2.33,2.27,5.03,3.47,8.09,3.6v6.79h-39.17v-6.79c2.66-.4,4.53-1.1,5.6-2.1,1.06-1,1.6-2.9,1.6-5.7-.13-.4-.37-1.17-.7-2.3-.33-1.13-.7-2.3-1.1-3.5l-7.99-17.99h-69.54l-7.79,16.99c-.8,1.73-1.43,3.2-1.9,4.4-.47,1.2-.63,2.07-.5,2.6-.13,2.13.47,3.83,1.8,5.1,1.33,1.27,3.33,2.1,6,2.5v6.79h-30.97v-6.79c2.93-.13,5.8-1.5,8.59-4.1,2.8-2.6,5.2-5.96,7.19-10.09l44.96-97.12c.53-1.33.96-2.36,1.3-3.1.33-.73.5-1.36.5-1.9,0-.93-.4-1.66-1.2-2.2-.8-.53-2-.8-3.6-.8v-6.79c2.26-.53,4.76-1.66,7.49-3.4,2.73-1.73,4.9-3.46,6.49-5.2h4Zm23.58,95.32l-29.58-65.75h-2.2l-30.57,65.75h62.35Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-20" d="m846.8,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.4-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-21" d="m990.48,31.47h78.74c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-22" d="m1170.93,171.36v-6.79c3.46.53,6.33-.63,8.59-3.5,2.26-2.86,3.4-6.56,3.4-11.09V55.05c-.13-5.2-1.27-9.26-3.4-12.19-2.13-2.93-5-4.46-8.59-4.6v-6.79h28.36l84.95,107.46.6-.21V54.06c-.13-5.2-1.13-8.99-3-11.39-1.87-2.4-4.8-3.86-8.79-4.4v-6.79h31.38v6.79c-4.4.93-7.46,2.5-9.19,4.7-1.73,2.2-2.6,5.9-2.6,11.09v117.3h-6l-95.12-120.7h-.8v99.32c-.13,4,.83,7.43,2.9,10.29,2.06,2.87,5.03,4.3,8.89,4.3v6.79h-31.57Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-23" d="m1393.54,29.88c19.58,0,36.3,6.79,50.16,20.38,13.85,13.59,20.78,30.64,20.78,51.16s-6.93,37.74-20.78,51.26c-13.86,13.52-30.57,20.28-50.16,20.28s-36.47-6.76-50.26-20.28c-13.79-13.52-20.68-30.61-20.68-51.26s6.89-37.57,20.68-51.16,30.54-20.38,50.26-20.38Zm0,7.79c-14.52,0-26.65,5.7-36.37,17.09-9.73,11.39-14.59,26.95-14.59,46.66s4.86,35.47,14.59,46.86c9.72,11.39,21.85,17.02,36.37,16.89,14.39,0,26.48-5.66,36.27-16.99,9.79-11.32,14.69-26.91,14.69-46.76s-4.9-35.27-14.69-46.66-21.88-17.09-36.27-17.09Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-24" d="m1482.67,31.47h40.37v6.79c-4.13.53-7.13,2.03-8.99,4.5-1.87,2.47-2.73,6.36-2.6,11.69v54.75c0,12.92,1.73,23.15,5.2,30.68,3.46,7.53,9.39,13.29,17.79,17.29,3.06,1.6,6.36,2.73,9.89,3.4,3.53.67,7.69,1,12.49,1,4.53.13,8.89-.37,13.09-1.5,4.2-1.13,8.29-2.9,12.29-5.29,7.19-4.26,12.32-10.02,15.39-17.29,3.06-7.26,4.6-18.22,4.6-32.87v-51.76c0-4.66-.93-8.16-2.8-10.49-1.87-2.33-4.8-3.7-8.79-4.1v-6.79h30.97v6.79c-4.13.4-7.09,1.8-8.89,4.2-1.8,2.4-2.7,5.86-2.7,10.39v61.15c-.13,18.78-4.93,33.31-14.39,43.56-9.46,10.26-23.52,15.39-42.17,15.39-21.32,0-36.5-5.4-45.56-16.19-9.06-10.79-13.59-26.91-13.59-48.36v-53.96c0-5.2-.87-9.09-2.6-11.69-1.73-2.6-4.73-4.1-8.99-4.5v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-25" d="m1642.33,31.47h78.74c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-26" d="m1773.22,171.36v-6.79c3.46.53,6.33-.63,8.59-3.5,2.26-2.86,3.4-6.56,3.4-11.09V55.05c-.13-5.2-1.27-9.26-3.4-12.19-2.13-2.93-5-4.46-8.59-4.6v-6.79h28.36l84.95,107.46.6-.21V54.06c-.13-5.2-1.13-8.99-3-11.39-1.87-2.4-4.8-3.86-8.79-4.4v-6.79h31.38v6.79c-4.4.93-7.46,2.5-9.19,4.7-1.73,2.2-2.6,5.9-2.6,11.09v117.3h-6l-95.12-120.7h-.8v99.32c-.13,4,.83,7.43,2.9,10.29,2.06,2.87,5.03,4.3,8.89,4.3v6.79h-31.57Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
          </svg>
          <svg version="1.0" id="_レイヤー_3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1918.6 224.62">
            <path class="path path-27" d="m4.1,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.39-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-28" d="m216.12,29.88c19.58,0,36.3,6.79,50.16,20.38,13.85,13.59,20.78,30.64,20.78,51.16s-6.93,37.74-20.78,51.26c-13.86,13.52-30.57,20.28-50.16,20.28s-36.47-6.76-50.26-20.28c-13.79-13.52-20.68-30.61-20.68-51.26s6.89-37.57,20.68-51.16,30.54-20.38,50.26-20.38Zm0,7.79c-14.52,0-26.65,5.7-36.37,17.09-9.73,11.39-14.59,26.95-14.59,46.66s4.86,35.47,14.59,46.86c9.72,11.39,21.85,17.02,36.37,16.89,14.39,0,26.48-5.66,36.27-16.99,9.79-11.32,14.69-26.91,14.69-46.76s-4.9-35.27-14.69-46.66-21.88-17.09-36.27-17.09Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-29" d="m305.25,31.47h52.76c15.59,0,27.11,1.73,34.57,5.2,7.46,3.47,12.92,8.53,16.39,15.19,1.06,2.4,1.93,4.86,2.6,7.39.67,2.53,1,5.06,1,7.59,0,8.93-2.5,16.62-7.49,23.08-5,6.46-12.09,10.83-21.28,13.09l28.78,47.56c3.46,5.86,6.46,9.63,8.99,11.29,2.53,1.67,5.4,2.57,8.59,2.7v6.79h-25.38l-39.57-65.35h-30.97v42.36c-.13,5.33.76,9.26,2.7,11.79,1.93,2.53,4.96,4,9.09,4.4v6.79h-40.77v-6.79c4-.4,6.96-1.8,8.89-4.2,1.93-2.4,2.9-6.39,2.9-11.99V54.45c0-5.33-.97-9.22-2.9-11.69-1.93-2.46-4.9-3.96-8.89-4.5v-6.79Zm28.98,66.75h20.58c12.26,0,21.61-2.43,28.08-7.29,6.46-4.86,9.69-12.42,9.69-22.68s-2.97-17.29-8.89-21.88c-5.93-4.6-15.56-6.96-28.88-7.09h-20.58v58.95Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-30" d="m443.13,31.47h78.73c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-31" d="m566.23,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.39-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-32" d="m775.26,29.88l53.96,119.9c2.26,5.2,4.56,8.93,6.89,11.19,2.33,2.27,5.03,3.47,8.09,3.6v6.79h-39.17v-6.79c2.66-.4,4.53-1.1,5.6-2.1,1.06-1,1.6-2.9,1.6-5.7-.13-.4-.37-1.17-.7-2.3-.33-1.13-.7-2.3-1.1-3.5l-7.99-17.99h-69.54l-7.79,16.99c-.8,1.73-1.43,3.2-1.9,4.4-.47,1.2-.63,2.07-.5,2.6-.13,2.13.47,3.83,1.8,5.1,1.33,1.27,3.33,2.1,6,2.5v6.79h-30.97v-6.79c2.93-.13,5.8-1.5,8.59-4.1,2.8-2.6,5.2-5.96,7.19-10.09l44.96-97.12c.53-1.33.96-2.36,1.3-3.1.33-.73.5-1.36.5-1.9,0-.93-.4-1.66-1.2-2.2-.8-.53-2-.8-3.6-.8v-6.79c2.26-.53,4.76-1.66,7.49-3.4,2.73-1.73,4.9-3.46,6.49-5.2h4Zm23.58,95.32l-29.58-65.75h-2.2l-30.57,65.75h62.35Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-33" d="m846.8,56.85v-26.98l45.36,1.6h39.97l45.36-1.6v26.98h-6.79c-.27-5.33-2.4-9.59-6.4-12.79-4-3.2-9.13-4.8-15.39-4.8h-28.18v109.11c0,5.46.9,9.43,2.7,11.89,1.8,2.47,4.83,3.9,9.09,4.3v6.79h-40.97v-6.79c4.13-.4,7.13-1.83,8.99-4.3,1.86-2.46,2.86-6.43,3-11.89V39.27h-28.38c-6.26,0-11.13,1.43-14.59,4.3-3.47,2.87-5.8,7.29-6.99,13.29h-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-34" d="m990.48,31.47h78.74c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-35" d="m1170.93,171.36v-6.79c3.46.53,6.33-.63,8.59-3.5,2.26-2.86,3.4-6.56,3.4-11.09V55.05c-.13-5.2-1.27-9.26-3.4-12.19-2.13-2.93-5-4.46-8.59-4.6v-6.79h28.36l84.95,107.46.6-.21V54.06c-.13-5.2-1.13-8.99-3-11.39-1.87-2.4-4.8-3.86-8.79-4.4v-6.79h31.38v6.79c-4.4.93-7.46,2.5-9.19,4.7-1.73,2.2-2.6,5.9-2.6,11.09v117.3h-6l-95.12-120.7h-.8v99.32c-.13,4,.83,7.43,2.9,10.29,2.06,2.87,5.03,4.3,8.89,4.3v6.79h-31.57Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-36" d="m1393.54,29.88c19.58,0,36.3,6.79,50.16,20.38,13.85,13.59,20.78,30.64,20.78,51.16s-6.93,37.74-20.78,51.26c-13.86,13.52-30.57,20.28-50.16,20.28s-36.47-6.76-50.26-20.28c-13.79-13.52-20.68-30.61-20.68-51.26s6.89-37.57,20.68-51.16,30.54-20.38,50.26-20.38Zm0,7.79c-14.52,0-26.65,5.7-36.37,17.09-9.73,11.39-14.59,26.95-14.59,46.66s4.86,35.47,14.59,46.86c9.72,11.39,21.85,17.02,36.37,16.89,14.39,0,26.48-5.66,36.27-16.99,9.79-11.32,14.69-26.91,14.69-46.76s-4.9-35.27-14.69-46.66-21.88-17.09-36.27-17.09Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-37" d="m1482.67,31.47h40.37v6.79c-4.13.53-7.13,2.03-8.99,4.5-1.87,2.47-2.73,6.36-2.6,11.69v54.75c0,12.92,1.73,23.15,5.2,30.68,3.46,7.53,9.39,13.29,17.79,17.29,3.06,1.6,6.36,2.73,9.89,3.4,3.53.67,7.69,1,12.49,1,4.53.13,8.89-.37,13.09-1.5,4.2-1.13,8.29-2.9,12.29-5.29,7.19-4.26,12.32-10.02,15.39-17.29,3.06-7.26,4.6-18.22,4.6-32.87v-51.76c0-4.66-.93-8.16-2.8-10.49-1.87-2.33-4.8-3.7-8.79-4.1v-6.79h30.97v6.79c-4.13.4-7.09,1.8-8.89,4.2-1.8,2.4-2.7,5.86-2.7,10.39v61.15c-.13,18.78-4.93,33.31-14.39,43.56-9.46,10.26-23.52,15.39-42.17,15.39-21.32,0-36.5-5.4-45.56-16.19-9.06-10.79-13.59-26.91-13.59-48.36v-53.96c0-5.2-.87-9.09-2.6-11.69-1.73-2.6-4.73-4.1-8.99-4.5v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-38" d="m1642.33,31.47h78.74c6.53.13,11.16-.13,13.89-.8,2.73-.67,6.43-.93,11.09-.8v26.58h-6.79c-1.73-6.26-4.96-10.66-9.69-13.19-4.73-2.53-11.89-3.86-21.48-4h-36.57v57.35h24.98c5.73,0,9.69-.9,11.89-2.7,2.2-1.8,3.7-4.63,4.5-8.49h6.59v30.18h-6.59c-1.33-4.4-2.9-7.36-4.7-8.89-1.8-1.53-5.7-2.3-11.69-2.3h-24.98v59.15h40.97c12.79,0,22.21-1.8,28.28-5.4,6.06-3.6,9.42-9.19,10.09-16.79h6.79l-2.2,29.98h-113.11v-6.79c3.86-.4,6.83-1.86,8.89-4.4,2.06-2.53,3.1-6.46,3.1-11.79V54.45c0-5.6-.97-9.66-2.9-12.19-1.93-2.53-4.96-3.86-9.09-4v-6.79Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
            <path class="path path-39" d="m1773.22,171.36v-6.79c3.46.53,6.33-.63,8.59-3.5,2.26-2.86,3.4-6.56,3.4-11.09V55.05c-.13-5.2-1.27-9.26-3.4-12.19-2.13-2.93-5-4.46-8.59-4.6v-6.79h28.36l84.95,107.46.6-.21V54.06c-.13-5.2-1.13-8.99-3-11.39-1.87-2.4-4.8-3.86-8.79-4.4v-6.79h31.38v6.79c-4.4.93-7.46,2.5-9.19,4.7-1.73,2.2-2.6,5.9-2.6,11.09v117.3h-6l-95.12-120.7h-.8v99.32c-.13,4,.83,7.43,2.9,10.29,2.06,2.87,5.03,4.3,8.89,4.3v6.79h-31.57Z" style="stroke:#fbc6d0; stroke-miterlimit:10; stroke-width:3px;"/>
          </svg>
        </div>
      </div>
    </div>
  </section>
</div>

<div>
<div class="toreate-02">
  <div class="toreate-title">
    <p class="section-sub-title">TORETATE</p>
    <span class="about-01-num">02</span>
  </div>
  <h4 class="section-tile">とれたての野菜</h4>
</div>
<section class="toreate-02-contents">
  <div class="toreate-02-contents-inner">
    <div class="toretate-02-bg">
      <img class="green-mountain-img" src="<?php echo $global_image_path ?>green-bg-2.png" width="1475" height="463" alt="" loading="lazy">
        <img src="<?php echo $global_image_path ?>clover.png" alt="" class="clover-img" width="100" height="77" loading="lazy">
      </div>
      <?php
        $vegetable_class = [
          "1",
          "2",
          "3",
          "4",
          "5",
          "6",
        ];
        $vegetable_img = [
          "vegetable-01.png",
          "vegetable-02.png",
          "vegetable-03.png",
          "vegetable-04.png",
          "vegetable-05.png",
          "vegetable-06.png",
        ];
        $vegetable_img_illust = [
          "morokoshi.png",
          "morokoshi.png",
          "nasu.png",
          "yabataimo.png",
          "kyabetsu.png",
          "brokkori.png",
        ];
        $vegetable_num = [
          "01",
          "02",
          "03",
          "04",
          "05",
          "06",
        ];
        $vegetable_title = [
          "<span>とうもろこし</span><span>ゴールドラッシュ</span>",
          "<span>とうもろこし</span><span>ドルチェドリーム</span>",
          "<span>千両なす</span>",
          "<span>やはたいも</span>",
          "<span>キャベツ</span>",
          "<span>ブロッコリー</span>",
        ];
        $vegetable_text = [
          "「その弾ける食感は初めての体験。」<br>甘味が強くプチプチとした食感はゴールドラッシュならではの朝採り食感。<br>朝６時までに収穫したものを梱包し関東圏でしたら当日配送にてその日のうちに鮮度を保ちお届けできます。<br>その日の内でしたら生でも食べられるほどの鮮度と美味しさ。<br>ぜひ一度試してみてください！",
          "「まるでJuicyなスイーツ」<br>水分量が多く、噛むと溢れ出る甘味が口いっぱいに広がります。<br>基本糖度は18〜20度と高く、<br>様々な試験結果を経て2023年本格的に栽培が始まりまだまだ名前の知られていないトウモロコシです。山梨県昭和町ではいち早くブランド化に取り組み、他の生産地区よりも品質の良い特別なトウモロコシを作ろうとごく限られた農家のみで生産している貴重なトウモロコシ。<br>地域の未来を照らす、生産者の想いがこもった貴重なブランドコーンになります。",
          "千両という名前の通り１シーズンで一つの木に100個以上を収穫します。<br>天候に左右されやすく繊細で、濃紫色で色つやも良く、果肉はやわらかく、歯切れが良いのが特徴。<br>揚げや焼き料理、出汁やつゆで料理をするのがおすすめです。",
          "甲斐市八幡地区を中心に生産されていたことに語源をもつ「やはたいも」。<br>堆積した肥沃な砂質土壌により、白くてきめ細かく、粘りが強く、独特の風味があるのが特徴です。",
          "とれたてのキャベツは、新鮮でサクサクの食感が魅力。土の香りが広がり、生でも蒸しても美味しく召し上がっていただけます。<br>栄養価も高く、ビタミンCや食物繊維を豊富に含みます。とれたてのおいしさを楽しんでみてください。",
          "とれたてのブロッコリーは、鮮度と風味が際立ちます。瑞々しくてみずみずしい食感は、野菜の中でも特に特徴的です。<br>ブロッコリーは、ビタミンC、ビタミンK、食物繊維を豊富に含み、免疫力をサポートして骨を強化します。<br>蒸したり炒めたり、多彩な調理法で楽しむことができるので、その豊かな味わいを堪能してください。",
        ];
        ?>
        <div class="swiper-vegetable">
            <div class="swiper-vegetable-wrapper swiper-wrapper">
              <?php for ($i = 0; $i < 6; $i++): ?>
                <div class="vegetable-slide-img-box swiper-slide vegetable-slide-img-box-<?php echo $vegetable_class[$i]; ?>">
                  <div class="vegetable-img-contents">
                      <p class="vegetable-theme">TORETATE<br>VEGETABLES</p>
                      <img class="vegetable-slide-img" src="<?php echo $global_image_path . $vegetable_img[$i] ?>" width="357" height="541" alt="" loading="lazy">
                      <img class="vegetable-slide-illust" src="<?php echo $global_image_path . $vegetable_img_illust[$i] ?>" alt="" loading="lazy">
                      <p class="vegetable-slide-num"><span>#</span><?php echo $vegetable_num[$i]; ?></p>
                  </div>
                  <div class="vegetable-slide-text-box">
                      <p class="vegetable-slide-sub">とれたての</p>
                      <h2 class="vegetable-name"><?php echo $vegetable_title[$i]; ?></h2>
                      <p class="vegetable-description"><?php echo $vegetable_text[$i]; ?></p>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
            <div class="swiper-button-prev">
              <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev.svg" width="18" height="28" alt="前のスライドへ" loading="lazy">
              <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev.svg" width="18" height="28" alt="" loading="lazy">
              <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev.svg" width="18" height="28" alt="" loading="lazy">
            </div>
            <div class="swiper-button-next">
              <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next.svg" width="18" height="28" alt="次のスライドへ" loading="lazy">
              <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next.svg" width="18" height="28" alt="" loading="lazy">
              <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next.svg" width="18" height="28" alt="" loading="lazy">
            </div>
        </div>
    </div>
    <div class="bg-white"></div>
    <div class="toreate-03">
      <div class="toreate-title">
        <p class="section-sub-title">TORETATE</p>
        <span class="about-01-num">03</span>
      </div>
      <h4 class="section-tile">とれたての果物</h4>
    </div>

    <section class="toreate-03-contents toreate-02-contents">
      <div class="toreate-02-contents-inner">
        <div class="toretate-02-bg">
          <img class="green-mountain-img" src="<?php echo $global_image_path ?>orenge-bg.png" width="1475" height="463" alt="" loading="lazy">
          <img class="orenge-wood-left" src="<?php echo $global_image_path ?>orenge-wood-left.png" alt="" class="clover-img" width="156" height="190" loading="lazy">
          <img class="orenge-wood-right" src="<?php echo $global_image_path ?>orenge-wood-right.png" alt="" class="clover-img" width="159" height="193" loading="lazy">
        </div>
        <?php
            $fruits_class = [
              "1",
              "2",
              "3",
            ];
            $fruits_img = [
              "fruits-01.png",
              "fruits-02.png",
              "fruits-03.png",
            ];
            $fruits_img_illust = [
              "kiui.png",
              "grape.png",
              "cheyenne.png",
            ];
            $fruits_num = [
              "01",
              "02",
              "03",
            ];
            $fruits_title = [
              "<span>キウイフルーツ</span><span>ヘイワード</span>",
              "<span>巨峰 -紫玉-</span>",
              "<span>シャインマスカット</span>",
            ];
            $fruits_text = [
              "完全無農薬で栽培しています。<br>一般的なものより甘みがつよく、とれたて農園では追熟せずにとってすぐの状態で出荷をしています。",
              "とれたての巨峰（紫玉）は、その深い紫色の実が、ジューシーで口の中でとろけるような食感が楽しめます。<br>甘さのピークを迎える季節に、とれたての巨峰の甘美な味わいをご堪能ください。",
              "とれたてのシャインマスカットの鮮やかな緑色の実は、甘く、ジューシーで爽やかな風味が特徴。一口かじれば、トロピカルな香りが広がります。<br>とれたての新鮮な味をぜひ味わってください。",
            ];
          ?>
          <div class="swiper-vegetable">
            <div class="swiper-vegetable-wrapper swiper-wrapper">
              <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="vegetable-slide-img-box swiper-slide vegetable-slide-img-box-<?php echo $fruits_class[$i]; ?>">
                  <div class="vegetable-img-contents">
                      <p class="vegetable-theme">TORETATE<br>FRUITS</p>
                      <img class="vegetable-slide-img" src="<?php echo $global_image_path . $fruits_img[$i] ?>" width="357" height="541" alt="" loading="lazy">
                      <img class="vegetable-slide-illust" src="<?php echo $global_image_path . $fruits_img_illust[$i] ?>" alt="" loading="lazy">
                      <p class="vegetable-slide-num"><span>#</span><?php echo $fruits_num[$i]; ?></p>
                  </div>
                  <div class="vegetable-slide-text-box">
                      <p class="vegetable-slide-sub">とれたての</p>
                      <h2 class="vegetable-name"><?php echo $fruits_title[$i]; ?></h2>
                      <p class="vegetable-description"><?php echo $fruits_text[$i]; ?></p>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
            <div class="swiper-button-prev">
              <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev.svg" width="18" height="28" alt="前のスライドへ" loading="lazy">
              <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev.svg" width="18" height="28" alt="" loading="lazy">
              <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev.svg" width="18" height="28" alt="" loading="lazy">
            </div>
            <div class="swiper-button-next">
              <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next.svg" width="18" height="28" alt="次のスライドへ" loading="lazy">
              <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next.svg" width="18" height="28" alt="" loading="lazy">
              <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next.svg" width="18" height="28" alt="" loading="lazy">
            </div>
          </div>
      </div>
    </section>
  </section>
</div>

<div class="bg-white"></div>
<div class="toreate-03">
  <div class="toreate-title">
    <p class="section-sub-title">TORETATE</p>
    <span class="about-01-num">04</span>
  </div>
  <h4 class="section-tile">とれたての贈りもの</h4>
</div>
<section class="toreate-04-contents toreate-02-contents">
  <div class="toreate-02-contents-inner">
    <div class="toretate-02-bg">
      <img class="green-mountain-img" src="<?php echo $global_image_path ?>sky-bg.png" width="1475" height="463" alt="" loading="lazy">
      <img class="sky-img" src="<?php echo $global_image_path ?>sky-bird.png" alt="" width="169" height="89" loading="lazy">
    </div>
    <?php
        $gift_class = [
          "1",
        ];
        $gift_img = [
          "gift-01.png",
        ];
        $gift_img_illust = [
          "grape-color.png",
        ];
        $gift_num = [
          "01",
        ];
        $gift_title = [
          "<span>ジャム</span>",
        ];
        $gift_text = [
          "テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■テキスト■",
        ];
      ?>
      <div class="swiper-vegetable">
        <div class="swiper-vegetable-wrapper swiper-wrapper">
          <?php for ($i = 0; $i < 1; $i++): ?>
            <div class="vegetable-slide-img-box swiper-slide vegetable-slide-img-box-<?php echo $gift_class[$i]; ?>">
              <div class="vegetable-img-contents">
                  <p class="vegetable-theme">TORETATE<br>GIFTS</p>
                  <img class="vegetable-slide-img" src="<?php echo $global_image_path . $gift_img[$i] ?>" width="357" height="541" alt="" loading="lazy">
                  <img class="vegetable-slide-illust" src="<?php echo $global_image_path . $gift_img_illust[$i] ?>" alt="" loading="lazy">
                  <p class="vegetable-slide-num"><span>#</span><?php echo $gift_num[$i]; ?></p>
              </div>
              <div class="vegetable-slide-text-box">
                  <p class="vegetable-slide-sub">とれたての</p>
                  <h2 class="vegetable-name"><?php echo $gift_title[$i]; ?></h2>
                  <p class="vegetable-description"><?php echo $gift_text[$i]; ?></p>
              </div>
            </div>
          <?php endfor; ?>
        </div>
        <div class="swiper-button-prev">
          <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev-black.svg" width="18" height="28" alt="前のスライドへ" loading="lazy">
          <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev-black.svg" width="18" height="28" alt="" loading="lazy">
          <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev-black.svg" width="18" height="28" alt="" loading="lazy">
        </div>
        <div class="swiper-button-next">
          <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next-black.svg" width="18" height="28" alt="次のスライドへ" loading="lazy">
          <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next-black.svg" width="18" height="28" alt="" loading="lazy">
          <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next-black.svg" width="18" height="28" alt="" loading="lazy">
        </div>
      </div>
  </div>
  <section class="topics">
    <div class="topic-inner">
      <div class="toreate-03">
        <div class="toreate-title">
          <p class="section-sub-title">TORETATE</p>
          <span class="about-01-num">TOPICS</span>
        </div>
      </div>
      <div class="note-contents">
        <div class="swiper-note">
          <div class="swiper-note-wrapper swiper-wrapper">
          <?php note_feed_display('https://note.com/toretatefarm/rss', '5' ,'150'); ?>
          </div>
        <div class="swiper-button-prev">
          <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev-black.svg" width="18" height="28" alt="前のスライドへ" loading="lazy">
          <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev-black.svg" width="18" height="28" alt="" loading="lazy">
          <img class="icon-prev icon-prev-next" src="<?php echo $global_image_path ?>icon-prev-black.svg" width="18" height="28" alt="" loading="lazy">
        </div>
        <div class="swiper-button-next">
          <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next-black.svg" width="18" height="28" alt="次のスライドへ" loading="lazy">
          <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next-black.svg" width="18" height="28" alt="" loading="lazy">
          <img class="icon-next icon-prev-next" src="<?php echo $global_image_path ?>icon-next-black.svg" width="18" height="28" alt="" loading="lazy">
        </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
</section>
