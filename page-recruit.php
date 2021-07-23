<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>

<section class="recruit-concept">
  <div class="recruit-concept__inner">
    <div class="recruit-concept__heading">
      <div class="recruit-concept__title-area">
        <h2 class="recruit-concept__title">Enjoy Creation for Client</h2>
        <h3 class="recruit-concept__subtitle">楽しむ心が良いモノを生む</h3>
      </div>

      <p class="recruit-concept__text">心を弾ましながら<br class="is-sp"> 夢いっぱいのサイトを作ろう！<br class="is-sp"> お客様も自分もみんなが幸せになれるように</p>
    </div>
  </div>
  <div class="recruit-concept__image">
    <img src="<?php get_element_image('recruit01'); ?>" alt="recruit01">
  </div>
</section>
<!-- /.recruit-page -->

<section class="recruit-job">
  <h2 class="section-title__page recruit-job__title">募集中の職種</h2>
  <div class="recruit-job__inner">
    <div class="job-category">
      <h3 class="job-category__title">Webデザイナー</h3>

      <div class="job-category__content">
        <table class="job-category__table">
          <tr>
            <th>雇用形態</th>
            <td>正社員</td>
          </tr>

          <tr>
            <th>給与</th>
            <td>400万円〜600万円（経験・能力を考慮のうえ優遇）</td>
          </tr>

          <tr>
            <th>仕事内容</th>
            <td>Webサイトの制作。サイトのデザインとコーディングを担当していただきます。</td>
          </tr>

          <tr>
            <th>勤務時間</th>
            <td>10:00 〜 19:00（実働8時間、休憩1時間）</td>
          </tr>

          <tr>
            <th>応募資格</th>
            <td>PhotoshopやXDなどのデザインツールの使い方を理解し、コーディングの基礎スキルがある方。 実務未経験でも学校や独学で学習した方を歓迎します。<br>

              ・デザインやコーディングを楽しめる方 <br>
              ・常にアンテナを張って積極的にトレンドや最新の技術を取り入れる方 <br>
              ・お客様と一緒に楽しみながら高い目的を目指せる</td>
          </tr>

        </table>
      </div>
      <div class="job-category__footer">
        <a href="#" class="job-category__link btn btn--location">応募する</a>
        <p class="job-category__link-text">求人サイトへ遷移します</p>
      </div>
    </div>
  </div>
</section>
<!-- /.recruit-job -->

<section class="recruit-video">
  <div class="recruit-video__inner">
    <h2 class="recruit-video__title section-title__page">社内ムービー</h2>

    <div class="video-content"></div>
  </div>
</section>
<!-- /.recruit-video -->

<?php get_template_part('./template/section-contact'); ?>
<?php get_footer(); ?>