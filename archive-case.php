<?php get_header(); ?>

<main>
  <section class="company-top about--top">
    <div class="company-top-wrapper">
      <h2 class="company-top-title">CASE STUDY</h2>
      <p class="company-top-subtitle">導入事例</p>
    </div>
  </section>
  <!-- /.company-top -->

  <!-- breadcrumb -->
  <div class="breadcrumb">
    <div class="inner">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!-- /breadcrumb -->

  <section class="case-study">
    <div class="inner">
      <nav class="case-study-nav">
        <ul class="case-study-nav-list">
          <li class="case-study-nav-item">
            <a href="#service1">ビジネス英語研修</a>
          </li>
          <li class="case-study-nav-item">
            <a href="#service2">異文化コミュニケーション</a>
          </li>
          <li class="case-study-nav-item">
            <a href="#service3">ビジネス留学プログラム</a>
          </li>
        </ul>
      </nav>
      <!-- /.case-study-nav -->


      <div class="cases" id="service1">
        <div class="cases-head">
          <h2 class="cases-title">ビジネス英語研修</h2>
          <h3 class="cases-sub-title">Business English Training</h3>
        </div>
        <ul class="cases-items">
          <?php
          $related_query = new WP_Query(
            $args = array(
              'post_type' => 'case',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'business',
                  'field' => 'slug',
                  'terms' => 'training'
                )
              )
            )
          );
          ?>
          <?php while ($related_query->have_posts()) : ?>
            <?php $related_query->the_post(); ?>

            <li class="cases-item" id="<?php echo $post->post_name; ?>">
              <div class="cases-item-head">
                <div class="cases-item-heading">
                  <p class="cases-item-business"><?php the_field('business_field'); ?></p>
                  <p class="cases-item-name"><?php the_field('company'); ?><span>様</span></p>
                </div>
                <div class="cases-item-logo">
                  <img src="<?php the_field('logo'); ?>" alt="<?php the_field('company')  ?>">
                </div>
              </div>
              <div class="cases-item-body">
                <h3 class="cases-item-title">研修コース：<span><?php the_field('plan'); ?></span></h3>
                <ul class="cases-lists">
                  <li class="cases-list">
                    <h4 class="cases-list-title">研修の目的</h4>
                    <p class="cases-list-text"><?php echo nl2br(get_field('before')); ?></p>
                  </li>
                  <li class="cases-list">
                    <h4 class="cases-list-title">選んだ理由</h4>
                    <p class="cases-list-text"><?php echo nl2br(get_field('reason')); ?></p>
                  </li>
                  <li class="cases-list">
                    <h4 class="cases-list-title">導入後の成果・効果</h4>
                    <p class="cases-list-text">
                      <?php echo nl2br(get_field('after')); ?>
                    </p>
                  </li>
                </ul>
              </div>
            </li><!-- /.cases-item -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul><!-- /.cases-items -->
      </div>

      <div class="ly-btn-white-arrow cases-button">
        <a href="<?php echo esc_url(home_url('/service')) ?>#service1">ビジネス英語研修の詳細</a>
      </div><!-- /.cases-button -->

      <div class="cases" id="service2">
        <div class="cases-head">
          <h2 class="cases-title">異文化コミュニケーション</h2>
          <h3 class="cases-sub-title">Cross-cultural communication</h3>
        </div>
        <ul class="cases-items">
          <?php
          $related_query = new WP_Query(
            $args = array(
              'post_type' => 'case',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'business',
                  'field' => 'slug',
                  'terms' => 'cross'
                )
              )
            )
          );
          ?>
          <?php while ($related_query->have_posts()) : ?>
            <?php $related_query->the_post(); ?>
            <li class="cases-item" id="<?php echo $post->post_name; ?>">
              <div class="cases-item-head">
                <div class="cases-item-heading">
                  <p class="cases-item-business"><?php the_field('business_field'); ?></p>
                  <p class="cases-item-name"><?php the_field('company'); ?><span>様</span></p>
                </div>
                <div class="cases-item-logo">
                  <img src="<?php the_field('logo'); ?>" alt="<?php the_field('company')  ?>">
                </div>
              </div>
              <div class="cases-item-body">
                <h3 class="cases-item-title">研修コース：<span><?php the_field('plan'); ?></span></h3>
                <ul class="cases-lists">
                  <li class="cases-list">
                    <h4 class="cases-list-title">研修の目的</h4>
                    <p class="cases-list-text"><?php echo nl2br(get_field('before')); ?></p>
                  </li>
                  <li class="cases-list">
                    <h4 class="cases-list-title">選んだ理由</h4>
                    <p class="cases-list-text"><?php echo nl2br(get_field('reason')); ?></p>
                  </li>
                  <li class="cases-list">
                    <h4 class="cases-list-title">導入後の成果・効果</h4>
                    <p class="cases-list-text">
                      <?php echo nl2br(get_field('after')); ?>
                    </p>
                  </li>
                </ul>
              </div>
            </li><!-- /.cases-item -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul><!-- /.cases-items -->
      </div>

      <div class="ly-btn-white-arrow cases-button">
        <a href="<?php echo esc_url(home_url('/service')) ?>#service2">異文化コミュニケーションの詳細</a>
      </div><!-- /.cases-button -->

      <div class="cases" id="service3">
        <div class="cases-head">
          <h2 class="cases-title">ビジネス留学プログラム</h2>
          <h3 class="cases-sub-title">Business study abroad program</h3>
        </div>
        <ul class="cases-items">
          <?php
          $related_query = new WP_Query(
            $args = array(
              'post_type' => 'case',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'business',
                  'field' => 'slug',
                  'terms' => 'abroad'
                )
              )
            )
          );
          ?>
          <?php while ($related_query->have_posts()) : ?>
            <?php $related_query->the_post(); ?>

            <li class="cases-item" id="<?php echo $post->post_name; ?>">
              <div class="cases-item-head">
                <div class="cases-item-heading">
                  <p class="cases-item-business"><?php the_field('business_field'); ?></p>
                  <p class="cases-item-name"><?php the_field('company'); ?><span>様</span></p>
                </div>
                <div class="cases-item-logo">
                  <img src="<?php the_field('logo'); ?>" alt="<?php the_field('company')  ?>">
                </div>
              </div>
              <div class="cases-item-body">
                <h3 class="cases-item-title">研修コース：<span><?php the_field('plan'); ?></span></h3>
                <ul class="cases-lists">
                  <li class="cases-list">
                    <h4 class="cases-list-title">研修の目的</h4>
                    <p class="cases-list-text"><?php echo nl2br(get_field('before')); ?></p>
                  </li>
                  <li class="cases-list">
                    <h4 class="cases-list-title">選んだ理由</h4>
                    <p class="cases-list-text"><?php echo nl2br(get_field('reason')); ?></p>
                  </li>
                  <li class="cases-list">
                    <h4 class="cases-list-title">導入後の成果・効果</h4>
                    <p class="cases-list-text">
                      <?php echo nl2br(get_field('after')); ?>
                    </p>
                  </li>
                </ul>
              </div>
            </li><!-- /.cases-item -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul><!-- /.cases-items -->
      </div><!-- /.cases -->

      <div class="ly-btn-white-arrow cases-button">
        <a href="<?php echo esc_url(home_url('/service')) ?>#service3">ビジネス留学プログラムの詳細</a>
      </div><!-- /.cases-button -->

    </div>
  </section>

  <?php get_footer(); ?>