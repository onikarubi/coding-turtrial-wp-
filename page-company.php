<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>
<section class="company company-page">
  <div class="company__inner">
    <div class="company__inner-wrapper">
      <div class="company__heading">
        <h2 class="section-title section-title__page">メッセージ</h2>
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
            <p class="message__text">お客様の夢を叶えること。<br>
              それがWebサイトのゴールであり、私たちが目指すことです。<br>
              だからこそちゃんと成果を出すサイトを全力でお作りします。<br>
              お客様の笑顔を見たい。<br>
              夢を実現する手助けをさせてください。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="company-ceo">
  <div class="company-ceo__inner">
    <div class="company-ceo__image">
      <img src="<?php echo get_element_image('ceo'); ?>" alt="ceo">
    </div>
    <div class="company-ceo__textarea">
      <p class="company-ceo__text">
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        <br>
        <br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        <br>
        <br>
        代表取締役社長 猫山ポン太郎
      </p>
    </div>
  </div>
</div>

<section class="overview">
  <div class="overview__inner">
    <div class="overview__heading">
      <h2 class="section-title section-title__page">会社概要</h2>
    </div>

    <table class="overview__table">
      <tbody>
        <tr>
          <th>社名</th>
          <td>株式会社PON DESIGN</td>
        </tr>
        <tr>
          <th>設立</th>
          <td>2020.01.10</td>
        </tr>
        <tr>
          <th>代表取締役</th>
          <td>猫山ポン太郎</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>1,000,000円</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>〒555-5555 東京都千代田区 ポンビルディング 606</td>
        </tr>
      </tbody>
    </table>

    <div class="overview-where">
      <div class="overview-where__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8280303808788!2d139.76493611525882!3d35.68123618019432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1625547004517!5m2!1sja!2sjp" style="border:0;" width="100%" height="100%"></iframe>
      </div>

      <a href="https://goo.gl/maps/sx9Vw8Lfe5nw26zy5" class="overview-where__link">Google mapで見る</a>
    </div>
  </div>
</section>
<!-- /.overview -->
<?php get_template_part('./template/section-contact'); ?>
<?php get_footer(); ?>