<?php
  class PageBase {
    private $slug_name;

    private $subtitle_name = array(
      'news' => 'お知らせ',
      'service' => '事業内容',
      'works' => '制作実績',
      'company' => '私たちについて',
      'recruit' => '採用情報',
      'contact' => 'お問い合わせ'
    );

    private function get_slug_name() {
      global $post;
      $this->slug_name = $post->post_name;
      return $this->slug_name;
    }

    private function change_subtitle() {
      return $this->subtitle_name[$this->get_slug_name()];
    }

    public function display_menu_title() {
      echo $this->get_slug_name();
    }

    public function display_menu_subtitle() {
      echo $this->change_subtitle();
    }

    public function setting_test($function) {
      var_dump($function);
    }
  }

  $new_instance = new PageBase();

?>

<div class="heroarea heroarea--pages">
  <div class="heroarea__inner heroarea__inner--pages">
    <div class="page">
      <h2 class="page__title"><?php $new_instance->display_menu_title(); ?></h2>
      <p class="page__subtitle"><?php $new_instance->display_menu_subtitle(); ?></p>
    </div>
  </div>
</div>
<!-- /.heroarea__pages -->
