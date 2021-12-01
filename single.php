<?php get_header(); ?>

<main>
  <section class="company-top news--top">
    <div class="company-top-wrapper">
      <h2 class="company-top-title">NEWS</h2>
      <p class="company-top-subtitle">ニュース</p>
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



  <section class="news-wrapper single-wrapper">
    <div class="inner news-wrapper-inner">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="single-main">
            <div class="single-meta">
              <div class="single-label"><?php my_the_post_category(true); ?></div>
              <div class="single-date" datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j') ?></div>
            </div>
            <h1 class="single-title"><?php the_title(); ?></h1>
            <div class="single-thumbnail">
              <?php
              if (has_post_thumbnail()) {
                the_post_thumbnail('post-thumbnail');
              }
              ?>
            </div>
            <?php
            //本文の表示
            the_content(); ?>
            <div class="single-post-links">
              <div class="single-post-link">
                <?php if (get_previous_post()) : ?>
                  <?php previous_post_link('%link', '< 前の記事へ'); ?>
                <?php endif; ?>
              </div>
              <div class="single-post-link">
                <?php if (get_next_post()) : ?>
                  <?php next_post_link('%link', '次の記事へ >'); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <!-- /.single-main -->
      <?php endwhile;
      endif; ?>

      <?php get_sidebar(); ?>
      <!-- /.sidebar -->
    </div>
  </section>
  <!-- /.news-wrapper -->

  <?php get_footer(); ?>