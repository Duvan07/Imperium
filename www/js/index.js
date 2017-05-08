$(document).ready(function () {
  organizar();
  $(window).resize(function () {
    organizar();
  });
});

function organizar() {
  if ($("#contPrin1").length) {
    var alto = Number($(window).height()) - (70 + 70);
    $('#contPrin1, #contPrin2, #contPrin3').css({
      minHeight: alto,
      maxHeight: alto
    });
    $('#contPrin3').css({
      minHeight: alto - 30,
      maxHeight: alto - 30,
      marginTop: 15
    });
  }
}