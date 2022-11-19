$(function () {
  $("#all-pupil")
    .DataTable({
      paging: true,
      lengthChange: false,
      searching: false,
      ordering: true,
      autoWidth: false,
      responsive: true,
      info:false,
      buttons: ["excel", "pdf", "print"],
    })
    .buttons()
    .container()
    .appendTo("#all-pupil_wrapper .col-md-6:eq(0)");


});
