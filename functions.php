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

/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
      'footer-sp' => 'フッターメニュー(sp)',
    )
  );
}
add_action('init', 'my_menu_init');

//メニューの<li>からID除去
function removeMenuId($id)
{
  return $id = array();
}
add_filter('nav_menu_item_id', 'removeMenuId', 10);

//メニューの<li>からクラス追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function get_element_image($image_name, $image_type = 'jpg')
{
  echo esc_url(get_template_directory_uri() . '/img/' . $image_name . '.' . $image_type);
}

function get_element_image_works($image_name)
{
  echo esc_url(get_template_directory_uri() . '/img/works/' . $image_name . '.jpg');
}

// グローバルメニューの動的表示

function global_nav_menu($menu_tag, $menu_selecter)
{
  $args = array(
    'depth' => 1,
    'theme_location' => $menu_tag,
    'container' => 'false',
    'menu_class' => $menu_selecter . '-menu__list',
    'add_li_class' => $menu_selecter . '-menu__item'
  );

  $global_menu = wp_nav_menu($args);

  return $global_menu;
}



