<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>
<section class="service-page">
    <div class="service-page__inner">
      <div class="service-page__item">
        <div class="service-page__image">
          <img src="<?php get_element_image('service01'); ?>" alt="">
        </div>
        <div class="service-page__body">
          <h2 class="service-page__title">Webサイト制作</h2>
          <p class="service-page__text">新規サイトはもちろん、サイトリニューアルやランディングページ制作も承っております。
            サイトのゴールはお客様の夢や目的を実現することです。そのためにまずはしっかりとお話をうかがい、サイトに必要な要素を洗い出します。その後、ワイヤーフレーム（サイトのレイアウト）の作成、デザインの制作、コーディングと進みます。制作の過程でお客様とのお打ち合わせを数回実施させていただき、ご要望とご意見を反映しながらサイトを制作していきます。
          </p>
        </div>
      </div>

      <div class="service-page__item">
        <div class="service-page__image">
          <img src="<?php get_element_image('service02'); ?>" alt="">
        </div>
        <div class="service-page__body">
          <h2 class="service-page__title">Webサイト運用</h2>
          <p class="service-page__text">サイトの更新作業や独自のアクセス解析に基づいたサイト改善のご提案が可能です。
            日々の面倒な更新作業は私たちにおまかせください。テキストの修正やリンクの張り替えなどの簡単な作業から、特集ページやバナーのデザインまで可能です。
            また、アクセス解析によるサイト改善も承っております。ご購入やお申込数などにお悩みでしたらぜひご相談ください。サイトの課題を発見し、改善案のご提案から実装までワンストップで対応いたします。
          </p>
        </div>
      </div>

      <div class="service-page__item">
        <div class="service-page__image">
          <img src="<?php get_element_image('service03'); ?>" alt="">
        </div>
        <div class="service-page__body">
          <h2 class="service-page__title">アプリ開発</h2>
          <p class="service-page__text">
            スマートフォンアプリ開発の他、Vue.jsやReactによるWebアプリの開発が可能です。開発力のみならず、充実したユーザー体験をもたらすためのUXデザインにも自信があります。作って終わり、ではなくユーザーに愛されるUI（ユーザーインターフェース）を実現し、アプリ開発によるお客様の事業の目的を達成する推進力となることを目指します。
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /.service-page -->
  <?php get_template_part('./template/section-contact'); ?>
<?php get_footer(); ?>