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
  <title>肉多不怪訊息管理</title>
</head>
<!-- <body onload="doQuery()"> -->

<body>
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
        <h1>訊息管理</h1>
        <div class="bottom_line"></div>
        <div class="table_div table_div_reportEdit">
          <form action="">
            <table class="table table-striped">
              <tr>
                <td>回報編號</td>
                <td></td>
              </tr>
              <tr>
                <td>會員編號</td>
                <td></td>
              </tr>
              <tr>
                <td>回報日期</td>
                <td></td>
              </tr>
              <tr>
                <td>回報內文</td>
                <td></td>
              </tr>
              <tr>
                <td>回覆內文</td>
                <td>
                  <textarea name="" id="input" class="form-control" rows="3" required="required">
                    </textarea>
                </td>
              </tr>
            </table>
            <div class="cancel_check">
              <input type="button" value="取消" />
              <input type="button" value="確定" />
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>

  <script>
    function doQuery(str) {
      //Typing your code...
      $.ajax({
        method: "POST",
        url: "./report_edit.php",
        data: {
          Name: str
        },
        dataType: "html",
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