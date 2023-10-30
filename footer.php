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
        <a class="footer-google-map"  href="https://www.google.co.jp/maps/place/2097+Oshikoshi,+Showa,+Nakakoma+District,+Yamanashi+409-3864/@35.6275334,138.5412856,18z/data=!3m1!4b1!4m6!3m5!1s0x601bf73a32b313df:0x9c9deab15b25f18d!8m2!3d35.627532!4d138.5421155!16s%2Fg%2F11gv06hj1y?entry=ttu" target="_blank" rel="noopener noreferrer">
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