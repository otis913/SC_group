// let btn_yellow = document.getElementsByClassName("btn_yellow")[0];
// btn_yellow.addEventListener("click", function() {
//   return false;
// var isPhone = /^09[0-9]{8}$/;
// var isgmail = /^([A-Za-z0-9_\-\.])+\@(gmail.com)$/;
// // var ispwd = /^\d{4}$/;
// var ispwd = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;



// let account = document.getElementsByClassName('registered_ID')[0].value;
// let pwd = document.getElementsByClassName('registered_pwd')[0].value.trim();
// console.log(pwd);

// let name = document.getElementsByClassName('name')[0].value;
// let address = document.getElementsByClassName('address')[0].value;
// let phone = document.getElementsByClassName('phone')[0].value;
// if (name == '') {
//   alert("請填寫[名子]");
//   return false;
// }
//  else if (!isgmail.test(account)) {
//   alert("帳號格式錯誤");
//   return false;
// } 
// else if (!ispwd.test(pwd)) {
//   // alert("密碼格式錯誤");
//   return false;
// } 
// else if (address == '') {
//   alert("請填寫[地址]");
//   return false;
// }
//  else if (!isPhone.test(phone)) {
//   alert("電話格式錯誤");
//   return false;
// }
// });
$(document).ready(function() {
  $('.Signin_enter_bg_x').click(function() {
    $('.Signin_enter_bg').hide();
    $('.registered_enter_bg').hide();
  });
  $('.Signin_login_btn').click(function() {
    $('.Signin_login').addClass('Signin_block');
    $('.Signin_reg').removeClass('Signin_block');
  });
  $('.Signin_reg_btn').click(function() {
    $('.Signin_reg').addClass('Signin_block');
    $('.Signin_login').removeClass('Signin_block');
  });
  $('.Signin_reg_btn').click(function() {
    $('.Signin_reg_btn').addClass('Signin_reg_btn_color');
    $('.Signin_login_btn').addClass('Signin_login_btn_color');
  });
  $('.Signin_login_btn').click(function() {
    $('.Signin_reg_btn').removeClass('Signin_reg_btn_color');
    $('.Signin_login_btn').removeClass('Signin_login_btn_color');
  });

  //填寫登入開始
  $('.Signin_enter_btn').click(function() {
    let theText = '';
    let failed_id = false;
    let failed_password = false;
    $('span').remove();
    $('.Signin_enter_text li:nth-child(1) :text').each(function() {
      if ($(this).val() === '') {
        failed_id = true;
      }
      // alert(this);
    });
    if (failed_id == true) {
      // alert('輸入不完全');
      $('.Signin_enter_text li:nth-child(1)').append('<span>請輸入帳號</span>');
    } else {
      // alert('成功');
      $(':text').each(function() {
        theText += $(this).val() + ' ';
      });
    }
    $('.Signin_enter_text li:nth-child(2) :password').each(function() {

      if ($('.Signin_enter_text li:nth-child(2) :password').val() === '') {
        failed_password = true;
      }
      // alert(this);
    });
    if (failed_password == true) {
      // alert('輸入不完全');
      $('.Signin_enter_text li:nth-child(2)').append('<span>請輸入密碼</span>');
    } else {
      // alert('成功');
      $(':text').each(function() {
        theText += $(this).val() + ' ';
      });
    }
  });
  //填寫登入結束

  //填寫註冊開始
  $('.Signin_reg .btn_yellow a').click(function() {
    let theText = '';
    let theArr = false;
    let failed_id = false;
    let failed_password = false;
    let failed_name = false;
    let failed_add = false;
    let failed_tel = false;
    $('span').remove();
    $('.registered_enter_text li:nth-child(1) :text').each(function() {
      if ($('.registered_enter_text li:nth-child(1) :text').val() === '') {
        failed_name = true;
        // alert('請輸入');
      }
    });

    if (failed_name == true) {
      // alert('請輸入姓名');
      $('.registered_enter_text li:nth-child(1)').append('<span>請輸入姓名</span>');
    } else {
      $(':text').each(function() {
        theText += $(this).val() + '';
      });
    }
    $('.registered_enter_text li:nth-child(2) :text').each(function() {
      if ($('.registered_enter_text li:nth-child(2) :text').val() === '') {
        failed_id = true;
        // alert('請輸入帳號');
      }
    });
    if (failed_id == true) {
      $('.registered_enter_text li:nth-child(2)').append('<span>請輸入帳號</span>');
    } else {
      $(':text').each(function() {
        theText += $(this).val() + '';
      });
    }
    $('.registered_enter_text li:nth-child(3) :password').each(function() {
      if ($('.registered_enter_text li:nth-child(3) :password').val() === '') {
        failed_password = true;
      }
    });
    if (failed_password == true) {
      $('.registered_enter_text li:nth-child(3)').append('<span>請輸入密碼</span>');
    } else {
      $(':password').each(function() {
        theText += $(this).val() + '';
      });
    }
    $('.registered_enter_text li:nth-child(5) :text').each(function() {
      if ($('.registered_enter_text li:nth-child(5) :text').val() === '') {
        failed_add = true;
        // alert('地址');
      }
    });
    if (failed_add == true) {
      $('.registered_enter_text li:nth-child(5)').append('<span>請輸入地址</span>');
    }
    $('.registered_enter_text li:nth-child(6) :text').each(function() {
      if ($('.registered_enter_text li:nth-child(6) :text').val() === '') {
        failed_tel = true;
      }
    });
    if (failed_tel == true) {
      $('.registered_enter_text li:nth-child(6)').append('<span>請輸入電話</span>');
    }
  });
  //填寫註冊結束

  // 會員註冊流程開始

  // 檢查帳號是否重複

  // $('.registered_ID').on("keyup",function(){
  //     let registereds_value = $(this).val();
  //     if(registereds_value != ''){
  //         $.ajax({
  //             type : "POST", 
  //             url : "./php/login.php",  
  //             data : { 
  //               ID : $(this).val() 
  //             },
  //             dataType : 'html' 
  //             }).done(function(data){
  //                 console.log(data);
  //                 if(data == 'yes'){

  //                     $('span').remove();
  //                     $('.registered_enter_text li:nth-child(2)').append('<span>帳號已被註冊</span>');

  //                 }else{
  //                 //  alert('此帳號已註冊');

  //                 }


  //             }).fail(function(){
  //                 // 失敗
  //                     alert('Error');
  //         });
  //     }else{

  //     }

  // });

  // 會員註冊流程開始

});

// var isPhone = /^([0-9]{3,4}-)?[0-9]{7,8}$/;
// var reg2 = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,10}$/;
// let phone = document.getElementsByClassName('phone')[0].value;
// let phone = document.getElementsByClassName('phone')[0].value;
// // alert(phone);
// let pwd = document.getElementsByClassName("registered_pwd").value.trim();
// let pwd_span = document.getElementsByClassName("regis_span_pwd")[0];
// let phone_span = document.getElementsByClassName("regis_span_cellphone")[0];

// alert(isPhone.test(phone));
// if (!isPhone.test(phone)) {
//     // alert('aaaa');
//     // alert('手機號碼輸入有誤！');
//     // phoneTxt.style.color = "red";
//     // phone_span.classList.add("-on");
//     alert("電話格式錯誤");
//     return false;
// }
// if (!reg2.test(pwd)) {
//     // alert('手機號碼輸入有誤！');
//     // phoneTxt.style.color = "red";
//     // pwd_span.classList.add("-on");
//     alert("密碼格式錯誤");
//     return false;
// }