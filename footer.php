<section class="forms">
      <div class="forms-bg --download">
        <h2 class="forms-title">DOWNLOAD</h2>
        <p class="forms-subtitle">資料ダウンロード</p>
        <div class="forms-button forms-download-button">
          <a href="<?php echo esc_url(home_url('/download')); ?>">View more</a>
        </div>
      </div>
      <div class="forms-bg --contact">
        <h2 class="forms-title">CONTACT</h2>
        <p class="forms-subtitle">お問い合わせ</p>
        <div class="forms-button forms-contact-button">
          <a href="<?php echo esc_url(home_url('/contact')); ?>">View more</a>
        </div>
      </div>
      <!-- /.contact -->
    </section>
    <!-- /.forms -->
  </main>

  <footer class="footer">
    <div class="footer-contents">
      <h2 class="footer-title">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/Global standard.png" alt="">
        </a>
      </h2>
      <div class="footer-access">
        <p>〒550-1000　大阪市西区土佐堀9-5-5<br>
          TEL　<a href="tel:06-123-4567">06-123-4567</a><br>
          FAX　06-123-4568</p>
      </div>
      <p class="footer-copyright">©︎2021 Global Standard. All Rights Reserved.</p>
      <div class="totop">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icon/top/icon-top.svg" alt="icon-top"></a>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>

</html>