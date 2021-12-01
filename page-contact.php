<?php get_header(); ?>

<main>
  <section class="company-top contact--top">
    <div class="company-top-wrapper">
      <h2 class="company-top-title">CONTACT</h2>
      <p class="company-top-subtitle">お問い合わせ</p>
    </div>
  </section>
  <!-- /.company-top -->

  <!-- breadcrumb -->
  <div class="breadcrumb">
    <div class="inner">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!-- /.breadcrumb -->

  <section class="contact">
    <div class="inner contact-inner">
      <p class="contact-message">
        研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>
        2日以内に担当者からメールにてご連絡いたします。
      </p>
      <h2 class="contact-title">お問い合わせ</h2>
      <div class="contact-items">
        <?php echo do_shortcode('[contact-form-7 id="128" title="お問い合わせフォーム"]'); ?>
      </div>
    </div>
  </section>
  <!-- /.contact -->

  <?php get_footer(); ?>