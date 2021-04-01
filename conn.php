<?php

// $server_name = "localhost";
// $username = "root";
// $password = "00000";
// $db_name = "SUCCULENTS_PLANT";

// $server_name = "localhost";
// $username = "tibamefe_ted102";
// $password = "qweasdzxc123";
// $db_name = "tibamefe_ted102_g2";
// $conn = new mysqli($server_name, $username, $password, $db_name);

$db_host = "sg2nlmysql31plsk.secureserver.net:3306";
$db_user = "SUCCULENTS_PLANT";
$db_pass = "can00000";
$db_select = "SUCCULENTS_PLANT";

if (!empty($conn->connect_error)) {
    die('資料庫連線錯誤:' . $conn->connect_error);
}

$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"');
