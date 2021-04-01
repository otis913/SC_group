<?php
include('./loginCheck.php');

$memberName = $_POST["search_text"];

$sql = 'SELECT *
            FROM 
            SUCCULENTS_PLANT.MEMBER
            where memberType = 1 and memberName like ?';
//執行
$statement = $pdo->prepare($sql);
//給值    
$statement->bindValue(1, '%' . $memberName . '%');
$statement->execute();
//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();
echo "<tr class='table-dark'>
            <th>會員編號</th> 
            <th>會員帳號</th>
            <th>會員姓名</th>
            <th>帳號狀態</th>
            <th>創建時間</th>
            <th>停權與否</th>
          </tr>";

foreach ($data as $index => $row) {
  echo "<tr class='table-light'>
              <td class='memberNO' >" . $row["memberNO"] . "</td>";
  echo "<td>" . $row["memberAccount"] . "</td>";
  echo "<td>" . $row["memberName"] . "</td>";

  $memberStatus_N = $row["memberStatus"];
  switch ($memberStatus_N) {
    case "0":
      $memberStatus_N = '停權';
      break;
    case "1":
      $memberStatus_N = '正常';
      break;
    default:
      $memberStatus_N = '錯誤';
  };
  echo "<td class='Member_status' name='memberStatus' value='" . $row["memberStatus"] . "' >" . $memberStatus_N . "</td>";
  echo "<td>" . $row["memberDate"] . "</td>";
  echo "<td>
        <div class='custom-control custom-switch'>
            <input type='checkbox' class='custom-control-input' id='customSwitch" . $index . "' >
            <label class='custom-control-label' for='customSwitch" . $index . "'></label>
        </div>    
    </td>";
}
