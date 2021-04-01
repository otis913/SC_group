<?php

include("./UtilClass.php");
	$Util = new UtilClass();

if (!empty($conn->connect_error)) {
  die('資料庫連線錯誤:' . $conn->connect_error);
$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');
$account = $_POST["account"];

//==========================================================

//建立SQL
$sql = "SELECT count(memberAccount) FROM SUCCULENTS_PLANT.MEMBER WHERE memberAccount = ?  GROUP BY memberAccount";
//執行
// $statement = $pdo->prepare($sql);
$result = $conn->query('$sql');
//給值
// $statement->bindValue(1 , $account); 
// $statement->execute();
// $data = $statement->fetch();
$data = $result->fetch_assoc();
//   print_r($data);
//    exit();
if($data>0){

 echo "<script>alert('帳號重複，請重新註冊!'); location.href = '../Login.html';</script>";}
