<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>

<div class="breadcrumb">
  <div class="breadcrumb__inner">
    <span class="breadcrumb__text">
      <a class="breadcrumb__text-link" href="./index.html">home</a>
    </span>
    <span class="breadcrumb__text">
      news
    </span>
  </div>
</div>
<!-- /.breadcrumb -->

<section class="news-page">
  <div class="news-page__body">
    <div class="news-content__list">
      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.02.01</time>
          <div class="news-content__label">
            <span class="label-category">制作実績</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">Webデザインニュースサイト「ウェブマガジン」に取材いただきました</p>
        </div>
      </a>

      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.01.25</time>
          <div class="news-content__label">
            <span class="label-category">お知らせ</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">Smoothiesta様のWebサイトを制作いたしました</p>
        </div>
      </a>

      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.01.20</time>
          <div class="news-content__label">
            <span class="label-category">採用</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">Webデザイナーを１名募集中です！</p>
        </div>
      </a>

      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.01.20</time>
          <div class="news-content__label">
            <span class="label-category">採用</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">（２行のテキストの場合）テキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入るテキストが入る</p>
        </div>
      </a>

      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.01.20</time>
          <div class="news-content__label">
            <span class="label-category">採用</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
      </a>

      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.01.20</time>
          <div class="news-content__label">
            <span class="label-category">採用</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
      </a>

      <a href="./article.html" class="news-content__item">
        <div class="news-content__heading">
          <time class="news-content__time">2030.01.20</time>
          <div class="news-content__label">
            <span class="label-category">採用</span>
          </div>
        </div>
        <div class="news-content__body">
          <p class="news-content__text">テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
      </a>
    </div>
  </div>
  <div class="news-page__footer">
    <div class="pagenation">
      <div class="pagenation__item">
        <a href="#" class="pagenation__link --current">1</a>
        <a href="#" class="pagenation__link">2</a>
        <a href="#" class="pagenation__link">3</a>
      </div>
    </div>
  </div>
</section>
<!-- /.news-page -->

<?php get_template_part('./template/section-contact'); ?>

<?php get_footer(); ?>