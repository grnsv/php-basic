$(document).ready(function () {

  //выбираем все теги с именем  modal
  $('a[name=modal]').click(function (e) {
    //Отменяем поведение ссылки
    e.preventDefault();
    //Получаем тег A
    var id = $(this).attr('href');

    //Получаем ширину и высоту окна
    var winH = $(window).height();
    var winW = $(window).width();

    //Устанавливаем всплывающее окно по центру
    $(id).css('top', winH / 2 - $(id).height() / 2);
    $(id).css('left', winW / 2 - $(id).width() / 2);

    //эффект перехода
    $(id).fadeIn(500);

    $(".content").empty();
    if (e.target.src) {
      $(".content").append($(document.createElement("img")).attr("src", e.target.src));
    }
  });

  //если нажата кнопка закрытия окна
  $('.modalwindow .close').click(function (e) {
    //Отменяем поведение ссылки
    e.preventDefault();
    $('.modalwindow').fadeOut(500);
  });

});