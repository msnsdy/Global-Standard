<?php get_header(); ?>

<main>
  <section class="company-top download--top">
    <div class="company-top-wrapper">
      <h2 class="company-top-title">DOWNLOAD</h2>
      <p class="company-top-subtitle">資料ダウンロード</p>
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

  <section class="download">
    <div class="inner">
      <div class="download-wrapper">
        <div class="download-document">
          <h3 class="download-docTitle">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h3>
          <div class="download-pamphlet">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/download/pamphlet.png" alt="ダウンロード資料">
          </div>
          <p class="download-docText">
            急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br><br>
            英語に苦手意識のある方でもご安心ください。<br>ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>まずはこちらの資料をごらんください。
          </p>
        </div>
        <div class="download-form">
          <h3 class="download-form-title">
            資料請求いただき<br>
            ありがとうございました！
          </h3>
          <div class="download-form-items download-form-thanks">
            <p class="download-form-text">
              資料は以下のリンクよりダウンロードください。<br>
              →<a href="https://drive.google.com/file/d/1FfeRwOZ-sdjgVD3yQxfvsccZHSrUzd8i/view?usp=sharing&export=download" target="_blank">資料のダウンロードリンクはこちら</a>
            </p>
            <p class="download-form-text">
              また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>