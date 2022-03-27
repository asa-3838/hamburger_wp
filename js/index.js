jQuery("#menu_btn").click(function () {
  jQuery(".l-main__body").toggleClass("is-open");
  jQuery(".l-main__back").toggleClass("is-open");
  jQuery(".l-main__right").toggleClass("is-open");
  jQuery(".p-sidebar__button").toggleClass("is-open");
});
//×ボタンをクリックすれば、クラスis-openを削除し、サイドバー展開
jQuery("#close_btn").click(function () {
  jQuery(".l-main__body").toggleClass("is-open");
  jQuery(".l-main__back").toggleClass("is-open");
  jQuery(".l-main__right").toggleClass("is-open");
  jQuery(".p-sidebar__button").toggleClass("is-open");
});