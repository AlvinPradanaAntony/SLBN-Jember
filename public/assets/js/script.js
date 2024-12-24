$(document).ready(function () {
  moment.locale('id');
  function updateDateTime() {
    var momentNow = moment();
    $("#date-part").html(momentNow.format("dddd").substring(0, 20) + ", " + momentNow.format("DD MMMM YYYY"));
    $("#time-part").html(momentNow.format("hh:mm:ss") + ' WIB');
  }
  updateDateTime();
  setInterval(updateDateTime, 1000);

});
