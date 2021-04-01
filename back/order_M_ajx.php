<?php
include('./loginCheck.php');

$sql = 'SELECT *
             FROM SUCCULENTS_PLANT.ORDER
             order by orderNO desc';


// $sql = 'SELECT orderNO, 
//                FK_ORDER_DETAIL_orderNO,
//                orderDate,
//                orderMethod,
//                orderPayStatus,
//                orederStatus
//              FROM SUCCULENTS_PLANT.ORDER o
//              left JOIN ORDER_DETAIL od on o.orderNO = od.FK_ORDER_DETAIL_orderNO';


$statement = $pdo->prepare($sql);
$statement->execute();
echo "<tr class='table-dark'>
            <th>訂單編號</th>
            <th>會員編號</th>
            <th>訂單日期</th> 
            <th>訂單付款狀態</th>
            <th>訂單狀態</th>
            <th>修改訂單狀態</th>
          </tr>";

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();


foreach ($data as $index => $row) {
    echo "<tr class='table-light '>
              <td class='orderNO'>" . $row["orderNO"] . "</td>";
    echo "<td>" . $row["FK_ORDER_memberNO"] . "</td>";
    echo "<td>" . $row["orderDate"] . "</td>";

    $orderPayStatus = $row["orderPayStatus"];
    switch ($orderPayStatus) {
        case "1":
            $orderPayStatus = "未付款";
            break;
        case "2":
            $orderPayStatus = "已付款";
            break;
    };
    echo "<td>" . $orderPayStatus . "</td>";

    $orderPayStatus = $row["orderPayStatus"];
    switch ($orderPayStatus) {
        case "1":
            $orderPayStatus = "訂單處理中";
            break;
        case "2":
            $orderPayStatus = "訂單完成";
            break;
        case "3":
            $orderPayStatus = "訂單取消";
            break;
    };
    echo "<td class='o_status'>" . $orderPayStatus . "</td>";
    echo "<td class='o_td_select'>
        <select name='orederStatus' class='o_select' id='o_select" . $index . "'>
            <option value='1' class='o_Dispose' >訂單處理中</option>
            <option value='2' class='o_Carry' >訂單完成</option>
            <option value='3' class='o_Cancle' >取消訂單</option>
        </select>
     </td>
    </tr>";
}
