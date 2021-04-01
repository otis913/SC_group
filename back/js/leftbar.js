$(document).ready(() => {
  var nowTitle = document.title;
  var nowPage = document.querySelectorAll(`[data-page]`);

  for (let i = 0; i < nowPage.length; i++) {
    if (nowPage[i].dataset.page == nowTitle) {
      $(nowPage[i]).addClass('a_click');
    }
  }

  // $('.hand_show').click(() => {
  //   $('.hand_content').slideToggle();
  // });

  // $('.hand_hide').click(() => {
  //   console.log(456);
  //   $('.hand_content').slideUp();
  // });

  // $('.hand_show').click(() => {
  //   console.log(123);
  //   $('.hand_content').slideDown();
  // });

  // var hand_hide = document.getElementsByClassName('hand_hide');
  // var hand_show = document.getElementsByClassName('hand_show');

  // console.log(typeof(hand_hide));
  // console.log(hand_show);

  // var h1 = document.querySelector('h1');


  // h1.addEventListener("click", () => {
  //   // console.log(h1);
  //   // alert(h1);

  // });

  // hand_hide.addEventListener("click", () => {
  //   console.log(456);
  // });

  // hand_show.addEventListener("click", () => {
  //   console.log(123);
  // });
  $('.hand_hide').on('click', () => {
    console.log("133");
    // $('.hand_content').fadeOut();
  })

  document.addEventListener("click", function(e) {
      // console.log(e.target)
      if (e.target.matches('.hand_show')) {

      }
    })
    // $('.hand_show').onclick(() => {
    //   console.log(123);
    //   $('.hand_content').fadeIn();
    // });
});