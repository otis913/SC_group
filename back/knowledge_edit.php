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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </script>
  <title>肉多不怪文章管理</title>

  <?php

//建立SQL---->
$sql = 'SELECT *
            from KNOWLEDGE
            where knowledgeNO = ?';

//執行
$statement = $pdo->prepare($sql);
//給值
$statement->bindValue(1, $_GET["PID"]);
$statement->execute();
$data = $statement->fetchAll();

?>
</head>

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
        <div class="knowledge_content">
          <h1>文章編輯</h1>
          <div class="bottom_line"></div>
          <a class="inserBtn knowledge_inserBtn" href="./knowledge_creat.php">新增文章</a>
          <div class="table_div table_div_knowEdit">
            <form method="post" action="./knowledge_edit_ajx.php" enctype="multipart/form-data">
              <?php
foreach ($data as $index => $row) {
    ?>
                <table class="table table-striped">
                  <tr>
                    <td>文章編號</td>
                    <td><?=$row["knowledgeNO"]?></td>
                    <input type="hidden" name="knowledgeNO" value="<?=$_GET["PID"]?>" />
                  </tr>
                  <tr>
                    <td>文章版型</td>
                    <td>
                      <?php
$checked1 = "";
    $checked2 = "";
    switch ($row["knowledgeType"]) {
        case 1:
            $checked1 = "checked";
            break;
        case 2:
            $checked2 = "checked";
            break;
    }
    ?>
                      <input type="radio" name="knowledgeType" value="1" <?=$checked1?> />版型1
                      <input type="radio" name="knowledgeType" value="2" <?=$checked2?> />版型2
                      <!-- <input type="radio" name="knowledgeType" value="3" checked />版型3 -->
                    </td>
                  </tr>
                  <tr>
                    <td>文章外顯示圖片</td>
                    <td>
                      <input type="file" name="knowledgeOutPic" />
                      <img src="../img/blogall/<?=$row['knowledgeOutPic']?>" alt="">
                    </td>
                  </tr>
                  <tr>
                    <td>文章標題</td>
                    <td>
                      <input type="text" name="knowledgeTitle" value="<?=$row["knowledgeTitle"]?>" />
                    </td>
                  </tr>
                  <tr>
                    <td>內文01</td>
                    <td>
                      <textarea name="knowledgeContent01" class="form-control" rows="3" required="required"><?=$row["knowledgeContent01"]?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>內文02</td>
                    <td>
                      <textarea name="knowledgeContent02" class="form-control" rows="3"><?=$row["knowledgeContent02"]?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>內文03</td>
                    <td>
                      <textarea name="knowledgeContent03" class="form-control" rows="3"><?=$row["knowledgeContent03"]?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td>圖片01</td>
                    <td>
                      <input type="file" id="article_pic01">
                      <img src="../img/blogall/<?=$row["knowledgeContentPic01"]?>" alt="">
                    </td>
                  </tr>
                  <tr>
                    <td>圖片02</td>
                    <td>
                      <input type="file" id="article_pic02">
                      <img src="../img/blogall/<?=$row["knowledgeContentPic02"]?>" alt="">
                    </td>
                  </tr>
                  <tr>
                    <td>圖片03</td>
                    <td>
                      <input type="file" id="article_pic03">
                      <img src="../img/blogall/<?=$row["knowledgeContentPic03"]?>" alt="">
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
  </div>
  <script>
    function doSubmit() {
      if (document.getElementById('knowledgeTitle').value == '') {
        alert("請填寫文章標題");
        return false;
      }
      if (document.getElementById('knowledgeContent01').value == '') {
        alert("請填寫文章內文");
        return false;
      }
    }
  </script>

  <script src="./js/leftbar.js"></script>
</body>

</html>