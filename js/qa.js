$(document).ready(function() {
  $(".qa_wrapper").click(function() {
    $(".qa_wrapper").slideToggle(700);
    $(".qaBg_wrapper").slideToggle(700);
  });
  $(".question h2").click(function() {
    $(this).parent().find("p").slideToggle();
    $(this).parent().siblings().find("p").slideUp();
  });
  $(".btn").click(function() {
    $(".answer").show();
  });
  $("input").keypress(function(e) {
    if (e.which == 13) {
      $(".answer").show();
      // alert('aaaa')
    }
  });
  $(".cancel").click(function() {
    $(".qaBg_wrapper").slideUp(700);
    $(".qa_wrapper ").slideDown(700);
  });
});
//vue
var app = new Vue({
  el: "#app",
  data: {
    message: "welcome the Succulents Plant world!!!!",
  },
  methods: {},
});