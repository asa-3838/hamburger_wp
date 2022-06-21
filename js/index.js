jQuery("#menu_btn").click(function () {
  jQuery("body").toggleClass("no-scroll");
  jQuery(".l-main__back").toggleClass("is-open");
  jQuery(".l-main__right").toggleClass("is-open");
  jQuery(".p-sidebar__button").toggleClass("is-open");
  
});
//×ボタンをクリックすれば、クラスis-openを削除し、サイドバー展開
jQuery("#close_btn").click(function () {
  jQuery("body").toggleClass("no-scroll");
  jQuery(".l-main__back").toggleClass("is-open");
  jQuery(".l-main__right").toggleClass("is-open");
  jQuery(".p-sidebar__button").toggleClass("is-open");
});

jQuery(window).on('resize load', function(){
  if (jQuery(".l-main__right").hasClass("is-open")) {
    jQuery("body").remove("no-scroll");
    jQuery(".l-main__back").removeClass("is-open");
    jQuery(".l-main__right").removeClass("is-open");
    jQuery(".p-sidebar__button").removeClass("is-open");
    location.reload();
  }
});