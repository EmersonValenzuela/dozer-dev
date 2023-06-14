$(function () {
  $.ajax({
    url: "http://localhost/dozer-dev/home/get_data",
    method: "post",
    dataType: "json",
    data: { table: "users" },
  })
    .done((i) => {
      let row = i.row;
      row.forEach((r) => {
        $("#country option[value=" + r.country + "]").attr("selected", true);
        $("#field_study option[value=" + r.field_study + "]").attr("selected", true);
        $("#level_education option[value=" + r.level_education + "]").attr("selected", true);
      });
    })
    .always(() => {})
    .fail((err) => {
      console.log(err.responseText);
    });
});
