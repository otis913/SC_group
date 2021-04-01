<?php
include('./loginCheck.php');
$sql = "SELECT *
        FROM SUCCULENTS_PLANT.PPRODUCT";
$statement = $pdo->prepare($sql);

if ($_FILES["newPic01"]["error"] > 0) {
  echo "移動上傳圖片01失敗";
} else {
  //Server上的暫存檔路徑含檔名
  // $fileName_arr = $_FILES["file"]["name"];
  // $fileTmpName_arr = $_FILES["file"]["tmp_name"];
  $fileName01 = $_FILES["newPic01"]["name"];
  $fileTmpName01 = $_FILES["newPic01"]["tmp_name"];
  $fileName02 = $_FILES["newPic02"]["name"];
  $fileTmpName02 = $_FILES["newPic02"]["tmp_name"];
  $fileName03 = $_FILES["newPic03"]["name"];
  $fileTmpName03 = $_FILES["newPic03"]["tmp_name"];

  $filePath_Temp1 = $fileTmpName01;
  $filePath_Temp2 = $fileTmpName02;
  $filePath_Temp3 = $fileTmpName03;
  //檔案最終存放位置
  $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
  // $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
  // return $_SERVER["DOCUMENT_ROOT"] . "./EC/Upload/";
  // $filePath = $Util->getFilePath() . $_FILES["ProductImage"]["name"];

  // $filePath = $ServerRoot . "./20210225/back/img/" . $fileName_arr[$i];
  $filePath1 = $ServerRoot . "./20210225/img/product/" . $fileName01;
  $filePath2 = $ServerRoot . "./20210225/img/product/" . $fileName02;
  $filePath3 = $ServerRoot . "./20210225/img/product/" . $fileName03;
  //將暫存檔搬移到正確位置
  move_uploaded_file($filePath_Temp1, $filePath1);
  move_uploaded_file($filePath_Temp2, $filePath2);
  move_uploaded_file($filePath_Temp3, $filePath3);
  //取得POST過來的值
  $productType = $_POST["productType"];
  $productName = $_POST["productName"];
  $productSize = $_POST["productSize"];
  $productDes = $_POST["productDes"];
  $productPrice = $_POST["productPrice"];
  $productNumber = $_POST["productNumber"];
  $productStatus = $_POST["productStatus"];
  $sql = "INSERT INTO SUCCULENTS_PLANT.PRODUCT
                  (`productType`, `productName`,  `productSize`,  `productDes`, `productPrice`,
                    `productNumber`,  `productStatus`,  `productImg01`, `productImg02`, `productImg03`,`plantLive`) 
                  VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?, 1)";
  //執行
  $statement = $pdo->prepare($sql);
  //給值
  $statement->bindValue(1, $productType);
  $statement->bindValue(2, $productName);
  $statement->bindValue(3, $productSize);
  $statement->bindValue(4, $productDes);
  $statement->bindValue(5, $productPrice);
  $statement->bindValue(6, $productNumber);
  $statement->bindValue(7, $productStatus);
  $statement->bindValue(8, $_FILES["newPic01"]["name"]);
  $statement->bindValue(9, $_FILES["newPic02"]["name"]);
  $statement->bindValue(10, $_FILES["newPic03"]["name"]);
  $statement->execute();
  // }
  echo "<script>alert('新增成功!'); location.href = './product_M.php';</script>";
}
