<?php
include('./loginCheck.php');
$sql = "SELECT * 
        FROM SUCCULENTS_PLANT.KNOWLEDGE";
$statement = $pdo->prepare($sql);

if ($_FILES["knowledgeOutPic"]["error"] > 0) {
  echo "移動上傳外顯圖片失敗";
} else {
  $fileOutName = $_FILES["knowledgeOutPic"]["name"];
  $fileOutTmpName = $_FILES["knowledgeOutPic"]["tmp_name"];
  $fileName01 = $_FILES["newPic01"]["name"];
  $fileTmpName01 = $_FILES["newPic01"]["tmp_name"];
  $fileName02 = $_FILES["newPic02"]["name"];
  $fileTmpName02 = $_FILES["newPic02"]["tmp_name"];
  $fileName03 = $_FILES["newPic03"]["name"];
  $fileTmpName03 = $_FILES["newPic03"]["tmp_name"];

  $filePath_OutTemp = $fileOutTmpName;
  $filePath_Temp1 = $fileTmpName01;
  $filePath_Temp2 = $fileTmpName02;
  $filePath_Temp3 = $fileTmpName03;
  //檔案最終存放位置
  $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
  // $filePath = $ServerRoot . "./20210225/back/img/" . $fileName_arr[$i];
  $filePathT = $ServerRoot . "./20210225/img/blogall/" . $fileOutName;
  $filePath1 = $ServerRoot . "./20210225/img/blogall/" . $fileName01;
  $filePath2 = $ServerRoot . "./20210225/img/blogall/" . $fileName02;
  $filePath3 = $ServerRoot . "./20210225/img/blogall/" . $fileName03;
  //將暫存檔搬移到正確位置
  move_uploaded_file($filePath_OutTemp, $filePathT);
  move_uploaded_file($filePath_Temp1, $filePath1);
  move_uploaded_file($filePath_Temp2, $filePath2);
  move_uploaded_file($filePath_Temp3, $filePath3);
  //取得POST過來的值
  $knowledgeType = $_POST["knowledgeType"];
  $knowledgeTitle = $_POST["knowledgeTitle"];
  $knowledgeContent01 = $_POST["knowledgeContent01"];
  $knowledgeContent02 = $_POST["knowledgeContent02"];
  $knowledgeContent03 = $_POST["knowledgeContent03"];
  //執行
  $statement = $pdo->prepare($sql);
  $sql = "INSERT INTO SUCCULENTS_PLANT.KNOWLEDGE
          ( `knowledgeTitle`, `knowledgeType`, 
          `knowledgeContent01`, `knowledgeContent02`, `knowledgeContent03`, `knowledgeOutPic`, 
          `knowledgeContentPic01`, `knowledgeContentPic02`, `knowledgeContentPic03` ) 
          VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ?,  ? )";
  //執行
  $statement = $pdo->prepare($sql);
  //給值
  $statement->bindValue(1, $knowledgeTitle);
  $statement->bindValue(2, $knowledgeType);
  $statement->bindValue(3, $knowledgeContent01);
  $statement->bindValue(4, $knowledgeContent02);
  $statement->bindValue(5, $knowledgeContent03);
  $statement->bindValue(6, $_FILES["knowledgeOutPic"]["name"]);
  $statement->bindValue(7, $_FILES["newPic01"]["name"]);
  $statement->bindValue(8, $_FILES["newPic02"]["name"]);
  $statement->bindValue(9, $_FILES["newPic03"]["name"]);
  $statement->execute();
  echo "<script>alert('新增成功!'); location.href = './knowledge_M.php';</script>";
}
