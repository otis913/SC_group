<?php
include './loginCheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  </link>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- JQ cdn -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js' integrity='sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==' crossorigin='anonymous'></script>

  <link rel="stylesheet" href="../css/back_index.css">

  <title>肉多不怪課程管理</title>
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
        <h1>課程管理</h1>
        <div class="bottom_line"></div>
        <div class="table_div table_div_hand">
          <!-- <form action=""> -->
            <table class="table table-striped table_hand">
              <tr class="table-dark"></tr>
              <th>課程編號</th>
              <th>課程名稱</th>
              <th>課程價格</th>
              <th>客滿人數</th>
              <th>是否編輯</th>
              </tr>
              <!-- <tr>
                <td>001</td>
                <td>手捏陶器+多肉組盆</td>
                <td>1688</td>
                <td>
                  <i class="fas fa-minus hand_hide"></i>
                  <i class="fas fa-plus hand_show"></i>
                </td>
                <td>
                  <a href="./handClass_edit.html">編輯</a>
                </td>
              </tr>
              <tr class="hand_content">
                <td>001</td>
                <td class="table__hideText">
                  <ol>
                    <li>1.從盆器設計,釉色挑選,多肉植物,每一個步驟都可以參與製作</li>
                    <li>2.教你怎麼玩多肉!當季的當然最健康最好養</li>
                    <li>3.從介質挑選及介紹,多肉植物脫盆到組盆,每一個細節都是自己親手參與</li>
                  </ol>
                </td>
                <td>1688</td>
                <td class="table__hideText">
                  <ul>
                    <li>2021/03/04</li>
                    <li>2021/03/05</li>
                    <li>2021/03/06</li>
                    <li>2021/03/07</li>
                    <li>2021/03/08</li>
                  </ul>
                </td> -->
              </tr>
            </table>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>

  <script>
    function doQuery(str) {
      //Typing your code...
      $.ajax({
        method: "POST",
        url: "./handclass_M_ajx.php",
        data: {
          Name: str
        },
        dataType: "text",
        success: function(response) {
          //更新html內容
          document.getElementsByClassName('table')[0].innerHTML = response;
        },
        error: function(exception) {
          alert("發生錯誤: " + exception.status);
        }
      });
    }
  </script>
  <script src="./js/leftbar.js"></script>
</body>

</html>