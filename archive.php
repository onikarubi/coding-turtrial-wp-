<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>

<section class="news-page">
  <div class="news-page__body">
    <?php if (have_posts()) : ?>
      <div class="news-content__list">
        <?php while(have_posts()) : the_post() ?>
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
  <div class="news-page__footer">
    <div class="pagenation">
      <?php
      echo
        paginate_links(
          array(
            'end_size' => 1,
            'mid_size' => 1, //もし2に変更した場合、両方のファイルを修正する必要がある
            'prev_next' => false,
          )
        );
      ?>
    </div>
  </div>
</section>
<!-- /.news-page -->

<?php get_template_part('./template/section-contact'); ?>

<?php get_footer(); ?>