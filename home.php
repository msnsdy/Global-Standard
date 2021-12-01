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

  <section class="news-wrapper">
    <div class="inner news-wrapper-inner">


      <div class="news-main">
        <div class="news-main-title">
          ニュース
        </div>
        <ul class="news-main-items">
          <?php //記事があればnews-main以下を表示し、記事数ぶん表示
          if (have_posts()) : while (have_posts()) : the_post();
          ?>
              <li class="news-main-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="news-main-item-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                  </div>
                  <div class="news-main-item-body">
                    <div class="news-main-item-meta">
                      <?php // カテゴリー１つ目の名前を表示
                      $days = 3;
                      $post_entry = get_the_time('U');
                      $article = time() - ($days * 86400);
                      $category = get_the_category();
                      if ($category[0]) {
                        if ($post_entry > $article) {
                          echo '<div class="news-main-item-label is-newPost">' . $category[0]->cat_name . '</div>';
                        } else {
                          echo '<div class="news-main-item-label">' . $category[0]->cat_name . '</div>';
                        }
                      }

                      ?>
                      <div class="news-main-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></div>
                    </div>
                    <div class="news-main-item-title">
                      <p>
                        <?php
                        if (mb_strlen($post->post_title, 'UTF-8') > 40) {
                          $title = mb_substr($post->post_title, 0, 40, 'UTF-8');
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </p>
                    </div>
                  </div>
                </a>
              </li>
          <?php endwhile;
          endif; ?>
        </ul>

        <div class="pagination">
          <?php
          echo
          paginate_links(
            array(
              'end_size' => 0,
              'mid_size' => 1,
              'prev_next' => true,
              'prev_text' => '<div class="page-prev"></div>',
              'next_text' => '<div class="page-next"></div>',
            )
          );
          ?>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </section>

  <?php get_footer(); ?>