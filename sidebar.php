<aside class="sidebar">
  <div class="widget widget-recent">
    <div class="widget-title">新着記事</div>
    <ul class="widget-recent-items">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $new_posts = get_posts($args);
      foreach ($new_posts as $post) : setup_postdata($post);
      ?>
        <li class="widget-recent-item">
          <a href="<?php the_permalink(); ?>">
            <div class="widget-recent-item-thumbnail">
              <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="widget-recent-item-body">
              <div class="widget-recent-item-meta">
                <?php // カテゴリー１つ目の名前を表示
                $days = 3;
                $post_entry = get_the_time('U');
                $article = time() - ($days * 86400);
                $category = get_the_category();
                if ($category[0]) {
                  if ($post_entry > $article) {
                    echo '<div class="widget-recent-item-label is-newPost">' . $category[0]->cat_name . '</div>';
                  } else {
                    echo '<div class="widget-recent-item-label">' . $category[0]->cat_name . '</div>';
                  }
                }
                ?>
                <div class="widget-recent-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></div>
              </div>
              <div class="widget-recent-item-title">
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>32){
                    $title= mb_substr($post->post_title, 0, 32, 'UTF-8');
                    echo $title.'...';
                  }else{
                    echo $post->post_title;
                  }
                ?>
              </div>
            </div>
          </a>
        </li>
      <?php
      endforeach;
      wp_reset_postdata();
      ?>
    </ul>
  </div>
  <div class="widget widget-category">
    <div class="widget-title">カテゴリ</div>
    <ul class="widget-category-items">
      <?php
      $args = array(
        'parent' => 0,
        'orderby' => 'title',
        'order' => 'ASC'
      );
      $categories = get_categories($args);
      foreach ($categories as $category) :
      ?>
        <li class="widget-category-item">
          <a href="<?php echo get_category_link($category->term_id); ?>" class="widget-category-link"><?php echo $category->name; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</aside>