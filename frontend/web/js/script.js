let container = $("#ajaxContoiner");
$("#search-input").on("keyup", function (e) {
  let form = $("#search-form");
  e.preventDefault();
  let url = form[0].action;
  let query = $(this).val();
  if (query === "") {
    container.html(oldValueOfContainer);
  }
  send(url, query);
});
$("#search-form").on("submit", function (e) {
  e.preventDefault();
  let url = $(this)[0].action;
  let query = $("#search-input").val();
  send(url, query);
});
function send(url, data) {
  $.get(url, { q: data }, function (data, textStatus, jqXHR) {
    if (data.status == 200) {
      container.html(data.data);
      console.log(data);
    }
  });
  let targetOffset = $('#course_wrapper').offset().top;
  $('#course_wrapper').animate({scrollTop: targetOffset}, 2500);
  console.log(targetOffset);
}
