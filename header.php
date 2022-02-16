<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php wp_title('-', true, 'right');
          bloginfo('name');  ?></title>

  <?php wp_head(); ?>

</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-logo">
        <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/top/logo01.png" alt="logo01"></a>
      </h1>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-list-item"><a href="<?php echo esc_url(home_url()); ?>">トップ</a></li>
          <li class="header-nav-list-item"><a href="<?php echo esc_url(home_url('/about')); ?>">当社について</a></li>
          <li class="header-nav-list-item"><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></li>
          <li class="header-nav-list-item"><a href="<?php echo esc_url(home_url('/case')); ?>">導入事例</a></li>
          <li class="header-nav-list-item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
        </ul>
      </nav>
      <ul class="header-button-list">
        <li class="ly-button-white"><a href="<?php echo esc_url(home_url('/download')); ?>">資料ダウンロード</a></li>
        <li class="ly-button-white is-blue"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </header>

  <drawer>
    <div class="drawer-icon">
      <div class="drawer-icon__bars">
        <div class="drawer-icon__bar1"></div>
        <div class="drawer-icon__bar2"></div>
        <div class="drawer-icon__bar3"></div>
      </div>
    </div>

    <div class="drawer-content">
      <div class="drawer-content__items">
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url()); ?>">トップ</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/about')); ?>">当社について</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/service')); ?>">サービス</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/case')); ?>">導入事例</a></div>
        <div class="drawer-content__item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></div>
      </div>
      <div class="drawer-content__buttons">
        <div class="drawer-content__button"><a href="<?php echo esc_url(home_url('/download')); ?>">資料ダウンロード</a></div>
        <div class="drawer-content__button"><a class="is-white" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></div>
      </div>
    </div>