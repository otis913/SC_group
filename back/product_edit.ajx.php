<?php
include('./loginCheck.php');

//取得POST過來的值  

$productType = $_POST["productType"];
$productName = $_POST["productName"];
$productSize = $_POST["productSize"];
$productDes = $_POST["productDes"];
$productPrice = $_POST["productPrice"];
$productNumber = $_POST["productNumber"];
$productStatus = $_POST["productStatus"];
$productImg01 = $_POST["productImg01"];
$productImg02 = $_POST["productImg02"];
$productImg03 = $_POST["productImg03"];

// echo $productType;
// exit();

$productNO =  $_POST["productNO"];


//先判斷是否更新(上傳)商品圖?
// if ($_FILES["productNew01"]["size"] > 0) {

//   //判斷圖片是否上傳成功?
//   if ($_FILES["productNew01"]["error"] > 0) {
//     //返回訊息文字
//     $message = "上傳失敗: 錯誤代碼" . $_FILES["productNew01"]["error"];
//   } else {
//     //Server上的暫存檔路徑含檔名
//     $filePath_Temp = $_FILES["productNew01"]["tmp_name"];

//     //欲放置的檔案路徑
//     $filePath = $file->getFilePath() . $_FILES["productNew01"]["name"];

//     //將暫存檔搬移到正確位置
//     if (copy($filePath_Temp, $filePath)) {
//       //修改後的商品圖片名稱
//       $productImg01 = $_FILES["productNew01"]["name"];
//     } else {
//       $message = "拷貝/移動上傳圖片失敗";
//     }
//   }
// }

if ($_FILES["productNew01"]["size"] > 0) {

  //判斷圖片是否上傳成功?
  if ($_FILES["productNew01"]["error"] > 0) {
    //返回訊息文字
    $message = "上傳失敗: 錯誤代碼" . $_FILES["productNew01"]["error"];
  } else {
    //Server上的暫存檔路徑含檔名
    $filePath_Temp = $_FILES["productNew01"]["tmp_name"];

    //欲放置的檔案路徑
    $filePath = $file->getFilePath() . $_FILES["productNew01"]["name"];

    //將暫存檔搬移到正確位置
    if (copy($filePath_Temp, $filePath)) {
      //修改後的商品圖片名稱
      $productImg01 = $_FILES["productNew01"]["name"];
    } else {
      $message = "拷貝/移動上傳圖片失敗";
    }
  }
}


//返回訊息文字
$message = "修改成功!";

//建立SQL
$sql = "UPDATE PRODUCT
          set 
          productType = ?, productName = ?, productSize = ?,  productDes = ?, productPrice = ?,productNumber = ?,  productStatus = ?, productImg01 = ?
          where productNO = ?";

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
$statement->bindValue(8, $productImg01);
$statement->bindValue(9, $productNO);
$statement->execute();

//導頁
//header("Location: Index.php");    
echo "<script>alert('" . $message . "');location.href = './product_M.php';</script>";
