<?php
include('./loginCheck.php');

$sql = 'SELECT * 
            FROM 
            SUCCULENTS_PLANT.HANDCLASS';

$statement = $pdo->prepare($sql);

//     $statement = $pdo->prepare($sql);    
$statement->execute();

$data = $statement->fetchAll();

echo "<tr class='table-dark'>
            <th>課程編號</th>
            <th>課程名稱</th>
            <th>課程價格</th>
            <th>客滿人數</th>
            <th>現在報名人數</th>
            <th>是否編輯</th>
          </tr>";

foreach ($data as $index => $row) {
  echo "<tr class='table-light'>
                  <td>" . $row["handClassNO"] . "</td>";
  echo "<td>" . $row["handClassName"] . "</td>";
  echo "<td>" . $row["handClassPrice"] . "</td>";
  echo "<td>" . $row['handClassPeople'] . "</td>";
  echo "<td>" . $row['handClassNowPeople'] . "</td>";

  echo "<td>     
        <a href='./handclass_edit.php?PID=" . $row['handClassNO'] . "'>編輯</a>                                          
        </td>";
}
