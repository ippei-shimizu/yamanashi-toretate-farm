<?php
function my_theme_styles_and_scripts() {
  if ( ! is_admin() ) {
    $version = filemtime(get_template_directory() . '/css/style.css');
    wp_enqueue_style('my-style', get_template_directory_uri() . '/css/style.css', array(), $version);

    $version = filemtime(get_template_directory() . '/js/common.js');
    wp_enqueue_script('my-script', get_template_directory_uri() . '/js/common.js', array(), $version, true);
    
    if (is_front_page()) {
      $version = filemtime(get_template_directory() . '/js/top.js');
      wp_enqueue_script('top-script', get_template_directory_uri() . '/js/top.js', array(), $version, true);
    }
    if (is_page("about") || is_page("contact")) {
      $version = filemtime(get_template_directory() . '/js/about.js');
      wp_enqueue_script('top-script', get_template_directory_uri() . '/js/about.js', array(), $version, true);
    }
  }
}

add_action('wp_enqueue_scripts', 'my_theme_styles_and_scripts');

function my_admin_theme_style() {
  wp_enqueue_style('my-admin-theme', get_template_directory_uri() . '/admin-style.css');
}

add_action('admin_enqueue_scripts', 'my_admin_theme_style');

//アイキャッチ画像を有効化//
add_theme_support('post-thumbnails');

add_filter( 'widget_text', 'do_shortcode' );

// 画像パス変数
function set_global_variables() {
  global $global_image_path;
  $global_image_path = get_template_directory_uri() . '/assets/images/';
}
add_action('after_setup_theme', 'set_global_variables');


function note_feed_display($feedUrl, $num = 1 , $length = 80) {
    if(!$feedUrl) { return false; } 
    $i = 0; 
    if ($length != 0) { $length = ($length * 2) + 2; } 
    require_once "feed.php"; 
    $feed = new Feed;

    try { 
        $rss = $feed->loadRss($feedUrl); 

        if(!$rss) { 
            throw new \Exception('feedが取得できませんでした'); 
        } 

        if($rss->item) { 
            foreach ($rss->item as $item) { 
                if ($i >= $num) { 
                    break;
                } 
                $title = $item->title;
                $link = $item->link; 
                $timestamp = strtotime($item->pubDate);
                $date = date("Y.m.d", $timestamp); 
                $thumbnail = $item->children('media', true)->thumbnail;
                if (!($thumbnail) || empty($thumbnail)) { 
                    $thumbnail = "https://assets.st-note.com/production/uploads/images/119232144/profile_eb10478f33821925e9bac65cabcd689d.jpg?fit=bounds&format=jpeg&quality=85&width=330"; 
                } 

                $description = $item->description; 
                $description = str_replace("続きをみる", "", $description); 
                $description = strip_tags($description); 
                if(mb_strlen($description) > 75) { 
                  $description = mb_substr($description, 0, 75, 'utf-8') . '';
              }

                $str = <<<EOM
                <div class="note-slide swiper-slide"> 
                    <a href="{$link}" class="note-link-wrapper" target="_blank" rel="noopener noreferrer">
                        <img class="note-img" src="{$thumbnail}" alt="{$title}"> 
                        <p class="note-date">{$date}</p>
                        <h3 class="note-title">{$title}</h3>
                        <p class="note-excerpt">{$description}</p>
                        <div class="note-hover">
                            <p class="note-hover-text">VIEW MORE</p>
                            <div class="note-hover-area"></div>
                        </div>
                    </a>
                </div>
                EOM;

                echo $str; 
                $i++; 
            }
        } else { 
            throw new \Exception('feed itemが取得できませんでした'); 
        } 

    } catch(\Exception $e) { 
        echo '<!-- ' .$e->getMessage(). ' -->'; 
    }
}
