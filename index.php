<?php get_header(); ?>

<main>
  <section class="top">
    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bg/top/mv-1.jpg" alt="mv-1" media="(min-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg/top/sp/workplace-1.jpg" alt="workplace-1">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bg/top/mv-2.jpg" alt="mv-2" media="(min-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg/top/sp/workplace-2.jpg" alt="workplace-2">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/bg/top/mv-3.jpg" alt="mv-3" media="(min-width:767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg/top/sp/workplace-3.jpg" alt="workplace-3">
          </picture>
        </div>
      </div>
    </div>
    <div class="top-title">
      <h2 class="top-title-wrapper">
        <div class="top-title-above">
          <p class="top-title__font">YOU CAN</p>
          <p class="top-title__font -space">CHANGE</p>
        </div>
        <div class="top-title-under">
          <p class="top-title__font">THE WORLD</p>
        </div>
      </h2>
      <p class="top-title__font--sub">世界で活躍できるグローバルな人材を育てる</p>
    </div>
  </section>
  <!-- /.top -->

  <section class="company-skew about">
    <div class="about-bg"></div>
    <div class="inner about-inner">
      <div class="section-head">
        <div class="section-titles">
          <h2 class="section-title-main">ABOUT US</h2>
          <p class="section-title-sub">当社について</p>
        </div>
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="section-link">
          <div class="section-link-text">View more</div>
          <div class="section-link-arrow"></div>
          <div class="section-link-circle"></div>
        </a>
      </div>
      <div class="about-content">
        <div class="about-message">
          <p>急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
          </p><br>
          <p>コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。</p><br>
          <p>文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p>
        </div>
        <div class="about-picture"><img src="<?php echo get_template_directory_uri(); ?>/img/picture/top/img-company.jpg" alt="img-company"></div>
      </div>
    </div>
  </section>
  <!-- /.about -->

  <section class="company-skew service">
    <div class="inner service-inner">
      <div class="section-head">
        <div class="section-titles">
          <h2 class="section-title-main">SERVICE</h2>
          <p class="section-title-sub">サービス</p>
        </div>
        <a href="<?php echo esc_url(home_url('/service')); ?>" class="section-link is-black">
          <div class="section-link-text">View more</div>
          <div class="section-link-arrow"></div>
          <div class="section-link-circle"></div>
        </a>
      </div>
      <ul class="service-cards">
        <li class="service-card">
          <div class="service-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/top/img-service01.jpg" alt="img-service01">
            <div class="service-card-title">
              <p>ビジネス英語研修</p>
            </div>
          </div>
          <p class="service-card-text">
            ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
          </p>
        </li>
        <li class="service-card">
          <div class="service-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/top/img-service02.jpg" alt="img-service01">
            <div class="service-card-title">
              <p>異文化</p><br>
              <p>コミュニケーション研修</p>
            </div>
          </div>
          <p class="service-card-text">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
            言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
        </li>
        <li class="service-card">
          <div class="service-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/picture/top/img-service03.jpg" alt="img-service01">
            <div class="service-card-title">
              <p>ビジネス留学</p><br>
              <p>サポートプログラム</p>
            </div>
          </div>
          <p class="service-card-text">
            将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
            通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
          </p>
        </li>
      </ul>
    </div>
  </section>
  <!-- /.service -->

  <section class="company-skew case">
    <div class="inner">
      <div class="section-head">
        <div class="section-titles is-white">
          <h2 class="section-title-main">CASE STUDY</h2>
          <p class="section-title-sub">導入事例</p>
        </div>
        <a href="<?php echo esc_url(home_url('/case')); ?>" class="section-link --case">
          <div class="section-link-text">View more</div>
          <div class="section-link-arrow"></div>
          <div class="section-link-circle"></div>
        </a>
      </div>
      <ul class="case-cards">
        <a href="<?php echo esc_url(home_url('/case')); ?>#aaa" class="case-card">
          <div class="case-card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/img-case01.png" alt="AAA株式会社"></div>
          <div class="case-card-name">AAA株式会社　様</div>
          <div class="case-card-category">ビジネス英語研修</div>
        </a>
        <a href="<?php echo esc_url(home_url('/case')); ?>#bbb" class="case-card">
          <div class="case-card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/img-case02.png" alt="合同会社BBB"></div>
          <div class="case-card-name">合同会社BBB　様</div>
          <div class="case-card-category">異文化コミュニケーション</div>
        </a>
        <a href="<?php echo esc_url(home_url('/case')); ?>#ccc" class="case-card">
          <div class="case-card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/img-case03.png" alt="株式会社CCC"></div>
          <div class="case-card-name">株式会社CCC　様</div>
          <div class="case-card-category">ビジネス留学プログラム</div>
        </a>
        <a href="<?php echo esc_url(home_url('/case')); ?>#ddd" class="case-card">
          <div class="case-card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/img-case04.png" alt="DDD株式会社"></div>
          <div class="case-card-name">DDD株式会社　様</div>
          <div class="case-card-category">異文化コミュニケーション</div>
        </a>
        <a href="<?php echo esc_url(home_url('/case')); ?>#eee" class="case-card">
          <div class="case-card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/img-case05.png" alt="EEE株式会社"></div>
          <div class="case-card-name">EEE株式会社　様</div>
          <div class="case-card-category">ビジネス留学プログラム</div>
        </a>
        <a href="<?php echo esc_url(home_url('/case')); ?>#fff" class="case-card">
          <div class="case-card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/img-case06.png" alt="FFF株式会社"></div>
          <div class="case-card-name">FFF株式会社　様</div>
          <div class="case-card-category">ビジネス英語研修</div>
        </a>
      </ul>
    </div>
  </section>
  <!-- /.case -->

  <section class="company-skew news">
    <div class="inner news-inner">
      <div class="section-head">
        <div class="section-titles">
          <h2 class="section-title-main">NEWS</h2>
          <p class="section-title-sub">新着情報</p>
        </div>
        <a href="<?php echo esc_url(home_url('/news')); ?>" class="section-link is-black">
          <div class="section-link-text">View more</div>
          <div class="section-link-arrow"></div>
          <div class="section-link-circle"></div>
        </a>
      </div>
      <div class="news-items">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $posts = get_posts($args);
        foreach ($posts as $post) : setup_postdata($post);
        ?>
          <div class="news-item">
            <a class="news-link" href="<?php the_permalink(); ?>">
              <div class="news-item-head">
                <?php
                $category = get_the_category();
                if ($category[0]) {
                  echo '<div class="news-item-label">' . $category[0]->cat_name . '</div>';
                }
                ?>
                <div class="news-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></div>
              </div>
              <div class="news-item-title"><?php the_title(); ?></div>
            </a>
          </div>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <!-- /.news -->

  <?php get_footer(); ?>