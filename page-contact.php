<?php get_header(); ?>
<?php get_template_part('./template/pages-heroarea'); ?>
<section class="contact-form">
    <div class="contact-form__inner">
      <h2 class="contact-form__title">Webサイトの制作のご依頼やお見積りなど、<br class="is-sp">お気軽にご相談ください。</h2>

      <div class="contact-form__wrapper">
        <div class="contact-form__body">
          <form action="#" id="js-form">
            <div class="form-group__list">
              <div class="form-group">
                <div class="form-group__heading">
                  <label for="#" class="form-group__label">お問い合わせ種別</label>
                  <span class="form-group__required">*必須</span>
                </div>
                <div class="form-group__body">
                  <div class="radio-item">
                    <input class="input-radio" name="form-radio" type="radio">
                    <label class="input-radio__text">お仕事のご依頼・ご相談</label>
                  </div>
                  <div class="radio-item">
                    <input class="input-radio" name="form-radio" type="radio">
                    <label class="input-radio__text">お見積りのご依頼</label>
                  </div>
                  <div class="radio-item">
                    <input class="input-radio" name="form-radio" type="radio">
                    <label class="input-radio__text">採用について</label>
                  </div>
                  <div class="radio-item">
                    <input class="input-radio" name="form-radio" type="radio">
                    <label class="input-radio__text">その他</label>
                  </div>
                </div>
              </div>
              <!-- form-group -->
  
              <div class="form-group">
                <div class="form-group__heading">
                  <label class="form-group__label">お名前</label>
                  <span class="form-group__required">*必須</span>
                </div>
  
                <div class="form-group__body">
                  <input type="text" class="form-group__input">
                </div>
              </div>
              <!-- form-group -->
  
              <div class="form-group">
                <div class="form-group__heading">
                  <label class="form-group__label">会社名</label>
                </div>
  
                <div class="form-group__body">
                  <input type="text" class="form-group__input">
                </div>
              </div>
              <!-- form-group -->
  
              <div class="form-group">
                <div class="form-group__heading">
                  <label class="form-group__label">メールアドレス</label>
                  <span class="form-group__required">*必須</span>
                </div>
  
                <div class="form-group__body">
                  <input type="email" class="form-group__input">
                </div>
              </div>
              <!-- form-group -->
  
              <div class="form-group">
                <div class="form-group__heading">
                  <label class="form-group__label">お電話番号</label>
                  <span class="form-group__warning">（半角数字ハイフンなし）</span>
                </div>
  
                <div class="form-group__body">
                  <input type="tel" class="form-group__input form-group__number">
                </div>
              </div>
              <!-- form-group -->
  
              <div class="form-group">
                <div class="form-group__heading">
                  <label class="form-group__label">お問い合わせ内容</label>
                  <span class="form-group__required">*必須</span>
                </div>
  
                <div class="form-group__body">
                  <textarea type="text" class="form-group__input form-group__textarea"></textarea>
                </div>
              </div>
              <!-- form-group -->
  
              <div class="form-group">
                <div class="form-group__heading">
                  <label class="form-group__label">PON DESIGNをどちらでお知りになりましたか？</label>
                  <span class="form-group__required">*必須</span>
                </div>
  
                <div class="form-group__body">
                  <select class="form-group__select">
                    <option value="">選択してください</option>
                    <option value="Google/Yahoo検索">Google/Yahoo検索</option>
                    <option value="SNS">SNS</option>
                    <option value="ブログ">ブログ</option>
                    <option value="友人や知人">友人や知人</option>
                    <option value="その他">その他</option>
                  </select>
                </div>
              </div>
              <!-- form-group -->
            </div>

            <div class="form-group__submit">
              <input type="submit" class="btn btn--more btn--submit" value="送信する">
            </div>
          </form>
        </div>
        <!-- /.contact-form__body -->
      </div>
    </div>
  </section>
<?php get_footer(); ?>