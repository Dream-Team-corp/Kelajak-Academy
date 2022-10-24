$(function () {
  $("#all-pupil")
    .DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#all-pupil_wrapper .col-md-6:eq(0)");
});
