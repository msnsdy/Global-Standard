jQuery(function ($) {

  /* mvスライド */
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    speed: 500,

    autoplay: {
      delay: 3000,
    },

  });

  /* headerドロワーメニュー */
  $('.drawer-icon').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('is-active');
    $('.drawer-content').toggleClass('is-active');
    $('.header').toggleClass('is-drawer-open');
    return false;
  })

  /* page-caseのスクロール */
  $('a[href^="#"]').click(function () {
    let speed = 300;
    let id = $(this).attr("href");
    let target = $("#" == id ? "html" : id);
    let position = $(target).offset().top;
    $("html, body").animate(
      {
        scrollTop: position
      },
      speed
    );
    return false;
  });

  /* Q&Aのドロワー*/
  $('.faqs-item-question').click(function () {
    $(this).next().slideToggle(200);
    $(this).children().toggleClass('is-open');
    $(this).next().toggleClass('is-open');
  });

  /* トップページに戻るボタン */
  const pagetop = $('.totop');
  //クリックしたら0.5秒かけてトップに戻る
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false
  });

  /* お問い合わせフォーム selectボックスの色をoptionによって変える */
  $('#your-select').on('change', function() {
    let elem = document.getElementById('your-select');
    if(elem.value !== "") {
      $('#your-select').removeClass('is-empty');
    } else {
      $('#your-select').toggleClass('is-empty');
    }
  });
})