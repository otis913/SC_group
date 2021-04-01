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

<?php

//建立SQL---->
$sql = "SELECT *
        FROM HANDCLASS
        WHERE handClassNO = ?";
//執行
$statement = $pdo->prepare($sql);
//給值
$statement->bindValue(1, $_GET["PID"]);
$statement->execute();
$data = $statement->fetchAll();
?>

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
        <h1>課程編輯</h1>
        <div class="bottom_line"></div>
        <div class="table_div table_div_handEdit">
          <form method="post" action="./handclass_edit.ajx.php" enctype="multipart/form-data">
            <?php
foreach ($data as $index => $row) {
    ?>
              <table class="table table-striped">
                <tr class="table-dark">
                  <td>課程編號</td>
                  <td><?=$row["handClassNO"]?></td>
                  <input type="hidden" name="handClassNO" value="<?=$_GET["PID"]?>" />
                </tr>
                <tr>
                  <td>課程名稱</td>
                  <td>
                    <input type="text" name="handClassName" value="<?=$row["handClassName"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>課程敘述</td>
                  <td>
                    <textarea name="handClassContent" cols="30" rows="10"><?=$row["handClassContent"]?></textarea>
                  </td>
                </tr>
                <tr>
                  <td>課程價錢</td>
                  <td>
                    <input type="text" name="handClassPrice" value="<?=$row['handClassPrice']?>" />
                  </td>
                </tr>
                <tr>
                  <td>最多人數</td>
                  <td>
                    <input type="text" name="handClassPeople" value="<?=$row["handClassPeople"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>課程日期</td>
                  <td>
                    <input type="text" name="handClassDate" value="<?=$row["handClassDate"]?>" />
                  </td>
                </tr>

              <?php
}
;

?>
              </table>
              <div class="cancel_check">
                <input type="button" name="cancel" id="cancel" value="取消" onclick="javascript:history.go(-1);">
                <input type="submit" name="submitBtn" id="submitBtn" value="確定" onclick="return doSubmit();">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function doSubmit() {
      if (document.getElementById('handClassName').value == '') {
        alert("請填寫課程名稱");
        return false;
      }
      if (document.getElementById('handClassContent').value == '') {
        alert("請填寫課程敘述");
        return false;
      }
      if (document.getElementById('handClassPrice').value == '') {
        alert("請填寫課程金額");
        return false;
      }
      if (document.getElementById('handClassPeople').value == '') {
        alert("請填寫最多上課人數");
        return false;
      }
      if (document.getElementById('handClassDate').value == '') {
        alert("請填寫上課日期");
        return false;
      }
    }
  </script>
  <script src="./js/leftbar.js"></script>
</body>

</html>