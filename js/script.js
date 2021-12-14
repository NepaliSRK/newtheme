jQuery(function () {

  // alert ('test');

});

jQuery(document).ready(function ($) {
  $("form.ajax").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: news_ajax_object.ajaxurl,
      type: "POST",
      dataType: "type",
      data: {
        action: "news_add_post",
        name: $(".name").val(),
        message: $(".message").val(),
      }, success: function (response) {
        console.log(response);
      }, error: function (response) {
        console.log(response);
      }
    });

    $("form.ajax")[0].reset();
  });


});
