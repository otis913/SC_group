<?php
include "./UtilClass.php";
$Util = new UtilClass();

// // ---------------------------------------
$classNo = $_POST["classNo"];

$sql = 'SELECT *
     from HANDCLASS
     where handClassNO = ?';

$statement = $Util->getPDO()->prepare($sql);

$statement->bindValue(1, $classNo);
$statement->execute();

$data = $statement->fetch();
// // ---------------------------------------

echo json_encode($data);
