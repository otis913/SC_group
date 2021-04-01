<?php
include('./loginCheck.php');
$orderNO = $_POST["orderNO"];
$o_status = $_POST["o_status"];
//建立SQL
$sql = "UPDATE SUCCULENTS_PLANT.ORDER
            set 
            orederStatus = ? where orderNO = ?";
$statement = $pdo->prepare($sql);
//給值    
$statement->bindValue(1, $o_status);
$statement->bindValue(2, $orderNO);
$statement->execute();
