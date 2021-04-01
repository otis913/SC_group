<?php
function getSessionB()
{
  if (!isset($_SESSION)) {
    session_start();
  }
  return isset($_SESSION["BackendUserID"]) ?
    $_SESSION["BackendUserID"] : "";
}
//登入檢查
if (getSessionB() == "") {
  echo "<script>
          alert('請先登入'); 
          location.href = 'Login.html';
        </script>";
} else {
  include('./SignSql.php');
}
