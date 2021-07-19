<?php get_header(); ?>

<div class="heroarea">
  <div class="heroarea__inner">
    <div class="heroarea__heading">
      <h1 class="heroarea__title">WEB <br class="is-sp">DESIGN <br class="is-sp">SPECIALIST</h1>
      <h2 class="heroarea__subtitle">お客様の夢を叶える<br class="is-sp">Webサイトを制作</h2>
    </div>

    <div class="heroarea__footer">
      <a href="#" class="btn btn--transparent">CONTACT</a>
    </div>
  </div>

  <div class="heroarea-scroll__text">SCROLL</div>
  <!-- <span class="heroarea-scroll__bar"></span> -->
</div>

<section class="section news">
  <div class="news__inner">
    <div class="news-head">
      <h2 class="section-title">NEWS</h2>
      <p class="section-subtitle">お知らせ</p>
    </div>

    <div class="news-content">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => '3',
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $new_archives = new WP_Query($args);
      ?>

      <?php if ($new_archives->have_posts()) : ?>
        <div class="news-content__list">
          <?php while ($new_archives->have_posts()) :
            $new_archives->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="news-content__item">
              <div class="news-content__heading">
                <time class="news-content__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <div class="news-content__label">
                    <span class="label-category">
                      <?php
                        $post_tag_name = get_the_tags();
                        if ($post_tag_name[0]) {
                          echo $post_tag_name[0]->name;
                        }
                      ?>
                    </span>
                  </div>
              </div>

              <div class="news-content__body">
                <p class="news-content__text"><?php the_title(); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- /.section news -->

<section class="section service">
  <div class="service__inner">
    <div class="service__heading">
      <h2 class="section-title">SERVICE</h2>
      <p class="section-subtitle">事業内容</p>
    </div>
    <div class="service-content">
      <div class="service-content__list">
        <div class="service-content__item">
          <div class="service-content__img">
            <img src="<?php get_element_image('service01'); ?>" alt="service01.jpg">
          </div>
          <div class="service-content__body">
            <h3 class="service-content__title">Webサイト制作</h3>
            <p class="service-content__text">新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。</p>
          </div>
        </div>

        <div class="service-content__item">
          <div class="service-content__img">
            <img src="<?php get_element_image('service02'); ?>" alt="service02.jpg">
          </div>
          <div class="service-content__body">
            <h3 class="service-content__title">Webサイト運用</h3>
            <p class="service-content__text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案をいたします。</p>
          </div>
        </div>

        <div class="service-content__item">
          <div class="service-content__img">
            <img src="<?php get_element_image('service03'); ?>" alt="service03.jpg">
          </div>
          <div class="service-content__body">
            <h3 class="service-content__title">アプリ開発</h3>
            <p class="service-content__text">スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。</p>
          </div>
        </div>

      </div>
    </div>

    <div class="service__footer is-pc">
      <a href="./service.html" class="btn btn--more">more</a>
    </div>
  </div>
</section>
<!-- /.section service -->

<section class="works">
  <div class="works__inner">
    <div class="works-img__wrapper">
      <!-- Slider main container -->
      <div class="swiper-container" id="swiper01">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="<?php get_element_image_works('citylab'); ?>" alt=""></div>
          <div class="swiper-slide"><img src="<?php get_element_image_works('lamina'); ?>" alt=""></div>
          <div class="swiper-slide"><img src="<?php get_element_image_works('smoothiesta'); ?>" alt=""></div>
          <div class="swiper-slide"><img src="<?php get_element_image_works('tabilog'); ?>" alt=""></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <div class="works-content">
      <div class="works-content__heading">
        <h2 class="section-title">WORKS</h2>
        <p class="section-subtitle">制作実績</p>
      </div>
      <div class="works-content__body">
        <p class="works-content__text message-text">様々なジャンルのWebサイト制作が可能です。<br> ご購入やお申込み数の増加などを実現します！</p>
      </div>
      <div class="works-content__footer">
        <a href="./works.html" class="btn btn--more">more</a>
      </div>
    </div>
  </div>
</section>
<!-- /.works -->

<section class="company">
  <div class="company__inner">
    <div class="company__inner-wrapper">
      <div class="company__heading">
        <h2 class="section-title">COMPANY</h2>
        <p class="section-subtitle">私たちについて</p>
      </div>
      <div class="company__body">
        <div class="message">
          <div class="message__heading is-pc">
            <span class="message__title">サイトのゴール =
              夢を叶えること</span>
            <div class="message__under-line"></div>
          </div>
          <div class="message__heading is-sp">
            <span class="message__title">サイトのゴール =</span>
            <span class="message__title">夢を叶えること</span>
          </div>

          <div class="message__body">
            <p class="message__text">お客様の夢を叶えること。<br class="is-sp">
              それがWebサイトのゴールであり、私たちが目指すことです。<br>
              だからこそちゃんと成果を出すサイトを全力でお作りします。<br>
              お客様の笑顔を見たい。<br>
              夢を実現する手助けをさせてください。</p>
          </div>
        </div>
      </div>

      <div class="company__footer">
        <a href="./company.html" class="btn btn--more">more</a>
      </div>
    </div>
  </div>
</section>
<!-- /.company -->

<section class="recquit">
  <div class="recquit__inner">
    <div class="recquit__img-inner is-sp">
      <img src="<?php get_element_image('recruit'); ?>" alt="recruit">
    </div>
    <div class="recquit__left">
      <div class="recquit-message__heading">
        <h2 class="section-title">RECRUIT</h2>
        <p class="section-subtitle">採用情報</p>
      </div>
      <div class="recquit-message__body">
        <p class="recquit-message__text message-text">私たちと一緒に働きませんか？</p>
      </div>
      <div class="recquit-message__footer">
        <a href="./recruit.html" class="btn btn--more">more</a>
      </div>
    </div>
    <div class="recquit__right is-pc">
      <img src="<?php get_element_image('recruit'); ?>" alt="recruit">
    </div>
  </div>
</section>
<!-- /.recquit -->

<?php get_template_part('./template/section-contact'); ?>
<?php get_footer(); ?>