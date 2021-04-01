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

<?php
//建立SQL---->
$sql = "SELECT *
        FROM SUCCULENTS_PLANT.PRODUCT
        WHERE productNO = ?";
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
        <h1>商品編輯</h1>
        <div class="bottom_line"></div>

        <div class="product_Edittable">
          <form method="post" action="./product_edit.ajx.php" enctype="multipart/form-data">
            <!-- <form method="post" action="" enctype="multipart/form-data"> -->
            <?php
foreach ($data as $index => $row) {
    ?>
              <table class="table table-striped">
                <tr>
                  <td>商品編號</td>
                  <input type="hidden" name="productNO" value="<?=$row["productNO"]?>" />
                  <td><?=$row["productNO"]?></td>
                </tr>
                <tr>
                  <td>商品類別</td>
                  <td>
                    <select class="productNew_type" name="productType" id="productType">
                      <option value="1">景天科</option>
                      <option value="2">仙人掌科</option>
                      <option value="3">百合科</option>
                      <option value="4">菊科</option>
                      <option value="5">飾品</option>
                      <option value="6">器皿</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>商品名稱</td>
                  <td>
                    <input type="text" id="productName" name="productName" value="<?=$row["productName"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>商品大小</td>
                  <td>
                    <input type="text" id="productSize" name="productSize" value="<?=$row["productSize"]?>" />
                  </td>
                <tr>
                  <td>商品敘述</td>
                  <td>
                    <textarea name="productDes" id="productDes" class="form-control" rows="3" required="required"><?=$row["productDes"]?></textarea>

                  </td>
                </tr>
                <tr>
                  <td>商品價格</td>
                  <td>
                    <input type="text" id="productPrice" name="productPrice" value="<?=$row["productPrice"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>商品庫存量</td>
                  <td>
                    <input type="text" id="productNumber" name="productNumber" value="<?=$row["productNumber"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>商品圖片01</td>
                  <td>
                    <input type="file" name="productNew01" />
                    <img src="../img/product/<?=$row["productImg01"]?>" alt="">
                    <input type="hidden" name="productImg01" value="<?=$row["productImg01"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>商品圖片02</td>
                  <td>
                    <input type="file" name="productNew02" />
                    <img src="../img/product/<?=$row["productImg02"]?>" alt="">
                    <input type="hidden" name="productImg02" value="<?=$row["productImg02"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>商品圖片03</td>
                  <td>
                    <input type="file" name="productNew03" />
                    <img src="../img/product/<?=$row["productImg03"]?>" alt="">
                    <input type="hidden" name="productImg03" value="<?=$row["productImg03"]?>" />
                  </td>
                </tr>
                <tr>
                  <td>商品狀態</td>
                  <td>
                    <?php
$checked1 = "";
    $checked2 = "";
    switch ($row["productStatus"]) {
        case 1:
            $checked1 = "checked";
            break;
        case 2:
            $checked2 = "checked";
            break;
    }
    ?>
                    <input type="radio" name="productStatus" value="1" <?=$checked1?> />上架
                    <input type="radio" name="productStatus" value="2" <?=$checked2?> />下架
                  </td>
                </tr>
                <tr>
                  <!-- <td>商品標籤選擇</td>
                  <td>
                    <select class="productNew_tag" name="" id="">
                      <option value="">新上市</option>
                      <option value="">熱門商品</option>
                      <option value="">客製類</option>
                    </select>
                  </td> -->
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
      if (document.getElementById('productType').value == '') {
        alert("請填寫商品類別");
        return false;
      }
      if (document.getElementById('productName').value == '') {
        alert("請填寫商品名稱");
        return false;
      }
      if (document.getElementById('productSize').value == '') {
        alert("請填寫商品大小);
          return false;
        }
        if (document.getElementById('productDes').value == '') {
          alert("請填寫商品敘述");
          return false;
        }
        if (document.getElementById('productNumber').value == '') {
          alert("請填寫商品數量");
          return false;
        }
        if (document.getElementById('productPrice').value == '') {
          alert("請填寫商品價錢");
          return false;
        }
      }
  </script>
  <script src="./js/leftbar.js"></script>
</body>

</html>