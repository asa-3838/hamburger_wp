jQuery("#menu_btn").click(function () {
  jQuery(".l-main__back").toggleClass("is-open");
  jQuery(".l-main__right").toggleClass("is-open");
  jQuery(".p-sidebar__button").toggleClass("is-open");
  jQuery("body").toggleClass("no-scroll");
});
//×ボタンをクリックすれば、クラスis-openを削除し、サイドバー展開
jQuery("#close_btn").click(function () {
  jQuery(".l-main__back").toggleClass("is-open");
  jQuery(".l-main__right").toggleClass("is-open");
  jQuery(".p-sidebar__button").toggleClass("is-open");
  jQuery("body").toggleClass("no-scroll");
});

jQuery(window).on('resize', function(){
  if (jQuery(".l-main__right").hasClass("is-open")) {
  jQuery(".l-main__back").removeClass("is-open");
  jQuery(".l-main__right").removeClass("is-open");
  jQuery(".p-sidebar__button").removeClass("is-open");
  jQuery("body").remove("no-scroll");
  }
});