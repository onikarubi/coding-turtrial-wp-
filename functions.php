<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
  wp_enqueue_style('plugin', 'https://unpkg.com/swiper/swiper-bundle.css', array(), '1.0.0', 'all');
  wp_enqueue_script('plugin', '//unpkg.com/swiper/swiper-bundle.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper/swiper.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_script_init');

function get_element_image($image_name, $image_type = 'jpg') {
  echo esc_url(get_template_directory_uri() . '/img/' . $image_name . '.' . $image_type);
}

function get_element_image_works($image_name) {
  echo esc_url(get_template_directory_uri() . '/img/works/' . $image_name . '.jpg');
}
