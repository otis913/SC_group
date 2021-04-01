<?php
include('./loginCheck.php');
$sql = 'SELECT *              
            from KNOWLEDGE';

$statement = $pdo->prepare($sql);
$statement->execute();

echo "<tr class='table-dark'>
            <th>文章編號</th>
            <th>文章版型</th>
            <th>文章外顯示圖片</th>
            <th>文章標題</th>
            <th>是否修改</th> 
      </tr>";
//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();

foreach ($data as $index => $row) {
      echo "<tr class='table-light'>
              <td>" . $row["knowledgeNO"] . "</td>";
      echo "<td>" . $row["knowledgeType"] . "</td>";
      echo "<td>" . "<img src='../img/blogall/" . $row["knowledgeOutPic"] . " '> " . "</td>";
      echo "<td>" . $row["knowledgeTitle"] . "</td>";
      echo "<td>
              <a href='./knowledge_edit.php?PID=" . $row['knowledgeNO'] . "'>編輯</a>            
        </td>
              </td>
        </tr>";
}
