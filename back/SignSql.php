<?php
// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "00000";
// $db_select = "SUCCULENTS_PLANT";

// $db_host = "localhost";
// $db_user = "tibamefe_ted102";
// $db_pass = "qweasdzxc123";
// $db_select = "tibamefe_ted102_g2";

$db_host = "sg2nlmysql31plsk.secureserver.net:3306";
$db_user = "SUCCULENTS_PLANT";
$db_pass = "can00000";
$db_select = "SUCCULENTS_PLANT";

//建立資料庫連線物件
$dsn = "mysql:host=" . $db_host . ";dbname=" . $db_select;
//建立PDO物件，並放入指定的相關資料
$pdo = new PDO($dsn, $db_user, $db_pass);
