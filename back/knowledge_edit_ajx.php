<?php
include('./loginCheck.php');

//取得POST過來的值

$knowledgeType = $_POST["knowledgeType"];
$knowledgeTitle = $_POST["knowledgeTitle"];
$knowledgeContent01 = $_POST["knowledgeContent01"];
$knowledgeContent02 = $_POST["knowledgeContent02"];
$knowledgeContent03 = $_POST["knowledgeContent03"];
$knowledgeNO = $_POST["knowledgeNO"];

//返回訊息文字
$message = "修改成功!";

//建立SQL
$sql = "UPDATE KNOWLEDGE
            set 
            knowledgeType = ?, knowledgeTitle = ?, knowledgeContent01 = ?, knowledgeContent02 = ?,  knowledgeContent03 = ?
            where knowledgeNO = ?";

//執行
$statement = $pdo->prepare($sql);

//給值    
$statement->bindValue(1, $knowledgeType);
$statement->bindValue(2, $knowledgeTitle);
$statement->bindValue(3, $knowledgeContent01);
$statement->bindValue(4, $knowledgeContent02);
$statement->bindValue(5, $knowledgeContent03);
$statement->bindValue(6, $knowledgeNO);
$statement->execute();

//導頁
//header("Location: Index.php");    
echo "<script>alert('" . $message . "'); location.href = './knowledge_M.php';</script>";
