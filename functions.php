<?php

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  set_post_thumbnail_size(760, 485);
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '1.0.0', 'all');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init()
{
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
    )
  );
}
add_action('init', 'my_menu_init');


/**
 * カテゴリーを1つだけ表示
 *
 * @param boolean $anchor aタグで出力するかどうか.
 * @param integer $id 投稿id.
 * @return void
 */

function my_the_post_category($anchor = true, $id = 0)
{
  global $post;
  //引数が渡されなければ投稿IDを見るように設定
  if (0 === $id) {
    $id = $post->ID;
  }

  //カテゴリー一覧を取得
  $this_categories = get_the_category($id);
  if ($this_categories[0]) {
    if ($anchor) { //引数がtrueならリンク付きで出力
      echo '<a href="' . esc_url(get_category_link($this_categories[0]->term_id)) . '">' . esc_html($this_categories[0]->cat_name) . '</a>';
    } else { //引数がfalseならカテゴリー名のみ出力
      echo esc_html($this_categories[0]->cat_name);
    }
  }
}

/**
 * archive-case.phpを表示させる
 */
// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'case'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * 新固定ページ命名規則
 * 子ページ（download-thanks,contact-thanks）を
 * テンプレートファイルとして認識させる
 */
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
  global $wp_query;

  $template = get_page_template_slug();
  $pagename = $wp_query->query['pagename'];

  if ($pagename && !$template) {
    $pagename = str_replace('/', '-', $pagename);
    $decoded = urldecode($pagename);

    if ($decoded == $pagename) {
      array_unshift($templates, "page-{$pagename}.php");
    }
  }

  return $templates;
}

/**
 * WP Mail SMTPでメール送信元が効かなかったので設定。（証明書エラーとは関係ない）
 */
add_filter('wp_mail_from', function () {
  return 'info@gmail.com'; // 送信元メールアドレス
});

// これ以降が証明書エラーのための設定。
function my_wp_mail_smtp_custom_options($phpmailer)
{
  if (isset($phpmailer->SMTPAuth)) {
    if ($phpmailer->SMTPAuth == true) {
      $phpmailer->SMTPOptions = array('ssl' =>
      array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      ));
    }
  }
  return $phpmailer;
}
add_filter("wp_mail_smtp_custom_options", "my_wp_mail_smtp_custom_options");
