<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>
<section class="works-page">
  <div class="works-page__inner">
    <div class="works-page__content">
      <a href="#" class="works-item">
        <div class="works-item__image">
          <img src="<?php get_element_image_works('citylab'); ?>" alt="">
        </div>
        <p class="works-item__text">Smoothiesta 様</p>
      </a>
      <a href="#" class="works-item">
        <div class="works-item__image">
          <img src="<?php get_element_image_works('lamina'); ?>" alt="">
        </div>
        <p class="works-item__text">Web Conference 様</p>
      </a>
      <a href="#" class="works-item">
        <div class="works-item__image">
          <img src="<?php get_element_image_works('smoothiesta'); ?>" alt="">
        </div>
        <p class="works-item__text">LAMINA 様</p>
      </a>
      <a href="#" class="works-item">
        <div class="works-item__image">
          <img src="<?php get_element_image_works('tabilog'); ?>" alt="">
        </div>
        <p class="works-item__text">CITYLab 様</p>
      </a>
      <a href="#" class="works-item">
        <div class="works-item__image">
          <img src="<?php get_element_image_works('web-conference'); ?>" alt="">
        </div>
        <p class="works-item__text">TABILOG 様</p>
      </a>
    </div>
  </div>
</section>
<!-- /.works-page -->
<?php get_template_part('./template/section-contact'); ?>;
<?php get_footer(); ?>