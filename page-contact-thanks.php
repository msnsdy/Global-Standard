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
      <p class="contact-thanks-message">
        お問い合わせありがとうございました。<br>
        2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
      </p>
      <p class="contact-thanks-message">
        →<a href="<?php echo esc_url(home_url()); ?>">トップへ戻る</a>
      </p>
    </div>
  </section>
  <!-- /.contact -->

  <?php get_footer(); ?>