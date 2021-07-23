<?php get_header(); ?>

<?php get_template_part('./template/pages-heroarea'); ?>


<section class="article">
  <?php if (have_posts()) : ?>
    <div class="article__inner">
      <?php while (have_posts()) : 
        the_post(); ?>
        <div class="article__heading">
          <div class="article__title-area">
            <h1 class="article__title"><?php the_title(); ?></h1>
          </div>
          <div class="article__label-area">
            <time class="news-content__time"><?php the_time('Y.m.d'); ?></time>
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
        </div>
        <!-- article__heading -->

        <div class="article__body">
          <div class="eye-catching-img">
            <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else {
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/ogp.png" alt="article-png">';
              }
            ?>
          </div>
          <div class="article__content">
            <?php the_content(); ?>
          </div>
          <!-- article__content -->

          <div class="shere">
            <div class="shere-item">
              <div class="fb-like" data-href="http://localhost:3000/article.html" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
            </div>
          </div>
          <!-- /.shere -->
        </div>
        <!-- /.article__body -->
        <?php
          $prev_post = get_previous_post(true);
          $next_post = get_next_post(true);
        ?>
        <div class="article__footer">
          <div class="post-pager">
            <?php if($prev_post) : ?>
            <div class="post-pager__previous">
              <a href="<?php echo get_permalink($prev_post->ID); ?>" class="post-pager__title"><?php echo get_the_title($prev_post); ?></a>
            </div>
            <?php endif; ?>
            <?php if($next_post) : ?>
            <div class="post-pager__next">
              <a href="<?php echo get_permalink($next_post->ID); ?>" class="post-pager__title"><?php echo get_the_title($next_post); ?></a>
            </div>
            <?php endif; ?>
          </div>
          <div class="location-page__news">
            <a href="<?php echo home_url('category/news/'); ?>" class="news-page__link">NEWS一覧</a>
          </div>
        </div>
        <!-- article__footer -->
    </div>
  <?php endwhile; ?>
</section>
<?php endif; ?>
<!-- /.article -->

<?php get_template_part('./template/section-contact'); ?>

<?php get_footer(); ?>