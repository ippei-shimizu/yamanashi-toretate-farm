<?php global $global_image_path; ?>

<footer class="footer">
  <div class="footer-inner">
    <div class="footer-bg">
      <img class="footer-bg-img" src="<?php echo $global_image_path ?>footer-bg-img.png" width="1440" height="1208" alt="" loading="lazy">
    </div>
    <div class="footer-grid">
      <div class="footer-shop">
        <div class="coming-soon">COMING SOON...</div>
        <p class="shop-text">ONLINE STORE</p>
      </div>
      <div class="footer-info-wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img class="footer-logo" src="<?php echo $global_image_path ?>logo-white.png" width="236" height="188" alt="" loading="lazy"></a>
        <p class="footer-info">
        〒409-3864<br>山梨県中巨摩郡昭和町押越2097
        </p>
        <a class="footer-google-map"  href="https://www.google.co.jp/maps/place/JA+Yamanashimirai+Kakutetate+Land+Yamashiro/@35.6289961,138.5760349,17z/data=!3m1!4b1!4m6!3m5!1s0x601bfa17fe803815:0xf7d144139fa7c274!8m2!3d35.6289918!4d138.5786098!16s%2Fg%2F1vxcwhcq?entry=ttu" target="_blank" rel="noopener noreferrer">
          <p class="google-map-text">Google map</p>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>/contact" class="contact-link">お問い合わせ</a>
        <a href="tel:0552-00-0000" class="tel-number">0552-00-0000</a>
        <a href="https://www.instagram.com/yamanashitoretatenouen/" class="instagram-link" target="_blank" rel="noopener noreferrer"></a>
      </div>
      <p class="footer-copy">&copy; TORETATE NOUEN</p>
    </div>
  </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.js" integrity="sha512-rBoFCxH4xQ7PyI9atv97YuFNLXBf4vKJoA3578CMugbM01FbEwJ68fe3hhL3aKRlqZHlxCtlagXIcQ0GZJyhvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>