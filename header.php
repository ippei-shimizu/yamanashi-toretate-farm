<?php global $global_image_path; ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo $global_image_path; ?>favicon.ico">
  <title>山梨とれたて農園 | </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.css" integrity="sha512-15OzXDrYC/wTgcjNDIx6+2LiAHCPnS9DiKQj/dhgdRMpdW+W4AoSjxism+gRaDobBaFN+UONPGic1ttu5mpWxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header-inner">
    <?php if (is_front_page()) : ?>
      <p class="header-center-text">SINCE 2017.05</p>
    <?php endif; ?>
    <div class="header-title-box">
      <img class="header-title" src="<?php echo $global_image_path; ?>logo-text.png" width="503" height="74" alt="山梨とれたて農園">
      <p class="header-title-sub">Yamanashi Toretate Farm</p>
    </div>
    <div class="header-nav-area">
      <div class="nav-bg">
        <span class="nav-bg-line nav-bg-line-1">
          <img class="loop_shape" src="<?php echo $global_image_path; ?>nav-bg-line.svg" alt="">
        </span>
        <span class="nav-bg-line nav-bg-line-2">
          <img class="loop_shape" src="<?php echo $global_image_path; ?>nav-bg-line.svg" alt="">
        </span>
      </div>
        <nav class="header-nav">
          <ul class="header-nav-box">
            <?php
            $titles = ["ABOUT", "CONTACT", "TOPICS", "INSTAGRAM"];
            $links = ["/about", "/contact", "/#topics", "https://www.instagram.com/yamanashitoretatenouen/"];

            foreach ($titles as $index => $title) :
                $isExternal = ($title == "INSTAGRAM") ? ' target="_blank" rel="noopener noreferrer"' : '';
                $link = ($title == "INSTAGRAM") ? $links[$index] : home_url($links[$index]);
            ?>
                <li class="header-list">
                    <a href="<?php echo esc_url($link); ?>"<?php echo $isExternal; ?>>
                        <?php echo $title; ?>
                    </a>
                </li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo $global_image_path; ?>logo.svg" alt="山梨とれたて農園" width="49" height="35">
        </a>
        <a class="shop-link" href="<?php echo esc_url(home_url('/contact')); ?>">
          <img src="<?php echo $global_image_path; ?>icon-shop.svg" alt="オンラインショップ" width="76" height="76">
        </a>  
    </div>
    </div>
  </header>