<?php
include('./loginCheck.php');

$memberStatus = $_POST["status_stop"];
$memberNO = $_POST["memberNO"];
// echo $memberStatus;
// echo $memberNO;
// exit();

//建立SQL
$sql = "UPDATE SUCCULENTS_PLANT.MEMBER
            set 
            memberStatus = ? where memberNO = ?";

$statement = $pdo->prepare($sql);

//給值    
$statement->bindValue(1, $memberStatus);
$statement->bindValue(2, $memberNO);
$statement->execute();

//導頁
//header("Location: Index.php");    
echo "停權";
