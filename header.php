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
      <a href="./index.html" class="header-logo">
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
      <ul class="drawer-menu__list">
        <li class="drawer-menu__item"><a href="./news.html" class="drawer-menu__link">NEWS</a></li>
        <li class="drawer-menu__item"><a href="./service.html" class="drawer-menu__link">SERVICE</a></li>
        <li class="drawer-menu__item"><a href="./works.html" class="drawer-menu__link">WORKS</a></li>
        <li class="drawer-menu__item"><a href="./company.html" class="drawer-menu__link">COMPANY</a></li>
        <li class="drawer-menu__item"><a href="./recruit.html" class="drawer-menu__link">RECRUIT</a></li>
        <li class="drawer-menu__item"><a href="./contact.html" class="drawer-menu__link">CONTACT</a></li>
      </ul>
    </nav>

  </header>
  <!-- /.header -->