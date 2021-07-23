<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>Pon Design</title>
  <?php wp_head(); ?>

</head>

<body>
  <!-- トップページ -->

  <header class="header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
        <img src="<?php get_element_image('logo', 'svg'); ?>" alt="header-logo">
      </a>
      <nav class="header-menu is-pc">
        <?php
        wp_nav_menu(
          //.header-listを置き換えて、PC用メニューを動的に表示する
          array(
            'depth' => 1,
            'theme_location' => 'global', //グローバルメニューをここに表示すると指定
            'container' => 'false',
            'menu_class' => 'header-menu__list',
          )
        );
        ?>
      </nav>

      <div class="drawer-btn is-sp">
        <span class="drawer-btn__item"></span>
        <span class="drawer-btn__item"></span>
        <span class="drawer-btn__item"></span>
      </div>
    </div>

    <nav class="drawer-menu is-sp" id="drawer-menu">
      <?php global_nav_menu('drawer', 'drawer'); ?>
    </nav>

  </header>
  <!-- /.header -->