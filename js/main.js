jQuery(function () {

  const $headerSelecter = jQuery('.header');
  const $headerMenuSelecter = jQuery('.header-menu');
  const $pagetopButton = jQuery('.page-top');

  // スクロール後、ヘッダーの背景色が変わる

  // 変更後 -> ヘッダーメニューにactive要素追加

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 0) {
      $headerSelecter.addClass('header--active');
      $headerMenuSelecter.addClass('header-menu--active');
      $pagetopButton.addClass('page-top--active');
    } else {
      $headerSelecter.removeClass('header--active');
      $headerMenuSelecter.removeClass('header-menu--active');
      $pagetopButton.removeClass('page-top--active');
    }
  });

  // ページトップリンク
  const $pageTop = jQuery('#page-top, a[href="#"]');
  const $scrollSpeed = 400;

  $pageTop.on('click', function () {
    jQuery('body, html').animate({
      scrollTop: 0
    }, $scrollSpeed);

    return false; //リンク無効化
  });

  // ドロワーメニュー

  const drawerBtn = jQuery('.drawer-btn');
  const drawerMenu = jQuery('#drawer-menu');

  drawerBtn.on('click', function () {
    jQuery(this).toggleClass('drawer-btn--active');
    drawerMenu.toggleClass('drawer-menu--active');
    jQuery('.header-logo').toggleClass('header-logo--hide')
  });

});