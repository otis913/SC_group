<?php
include './loginCheck.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/back_index.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  </link>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- JQ cdn -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js' integrity='sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==' crossorigin='anonymous'></script>
  <title>肉多不怪商品管理</title>
</head>

<body onload="doQuery()">
  <!-- <body> -->
  <div class="wrapper">
    <header>
      <?php
include "./layout/header.php";
?>
    </header>
    <div class="section_main">
      <?php
include "./layout/lefterBar.php";
?>
      <div class="right_main">
        <h1>商品管理</h1>
        <div class="bottom_line"></div>
        <div class="search_name">
          <h2>商品搜尋</h2>
          <input type="text" class="search_text">
          <i class="fas fa-search"></i>
          <!-- <input type="submit" class="search_btn" value="search"> -->
        </div>
        <div class="PDiv_select">
          <select class="productType_select" id='productType_select'>
            <option value="1">景天科</option>
            <option value="2">仙人掌科</option>
            <option value="3">百合科</option>
            <option value="4">菊科</option>
            <option value="5">飾品</option>
            <option value="6">器皿</option>
            <option value="8">賀卡</option>
          </select>
          <a class="inserBtn product_inserBtn" href="./product_creat.php">新增商品</a>
          <div class="table_div table_div_product">
            <table class="table table-striped">
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    // 頁面載入
    function doQuery(str) {
      //Typing your code...
      $.ajax({
        method: "POST",
        url: "./product_M_ajx.php",
        data: {

        },
        dataType: "text",
        success: function(response) {
          //更新html內容
          document.getElementsByClassName('table')[0].innerHTML = response;
          // ----------------------
        },
        error: function(exception) {
          alert("發生錯誤: " + exception.status);
        }
      });
    }
    // 商品名稱搜尋
    $('.fa-search').on('click', () => {
      let search_text = document.getElementsByClassName('search_text')[0].value;
      // console.log(search_text);
      $.ajax({
        method: "POST",
        url: "./product_search.php",
        data: {
          'search_text': search_text,
        },
        dataType: "html",
        success: function(response) {
          //更新html內容
          document.getElementsByClassName('table')[0].innerHTML = response;
          // -----------------
        },
        error: function(exception) {
          alert("發生錯誤: " + exception.status);
        }
      });
    });
    // 商品類別切換
    $('#productType_select').change(() => {
      let option_value = parseInt($('#productType_select').val());
      // console.log(typeof(option_value))
      $.ajax({
        method: "POST",
        url: "./product_T.php",
        data: {
          'option_value': option_value
        },
        dataType: "text",
        success: function(response) {
          //更新html內容
          document.getElementsByClassName('table')[0].innerHTML = response;
          // ----------------------
        },
        error: function(exception) {
          alert("發生錯誤: " + exception.status);
        }
      });
    });
  </script>
  <script src="./js/leftbar.js"></script>
</body>

</html>