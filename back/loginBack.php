<?php
include './SignSql.php';

//建立SQL
$sql = "SELECT *
      FROM SUCCULENTS_PLANT.MEMBER
      WHERE memberType = 0
      and memberAccount = ? and memberPassword = ?";
//執行
$statement = $pdo->prepare($sql);
//給值
$statement->bindValue(1, $_POST["account"]);
$statement->bindValue(2, $_POST["password"]);
$statement->execute();
$Mem = $statement->fetchAll();
//依資料筆數判斷是否為會員
if (count($Mem) >= 0) {

    //寫入Session(後台專用)
    function setSessionB($UserID)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["BackendUserID"] = $UserID;
    }
    //將登入資訊寫入session
    setSessionB($_POST["account"]);

    //導回後台首頁
    header("Location: member_M.php");
} else {
    //跳出提示停留在後台登入頁
    echo "<script>
          alert('帳號或密碼錯誤!');
          location.href = 'Login.html';
        </script>";
}
