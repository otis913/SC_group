<?php
include('./loginCheck.php');

$sql = 'select *
     from PRODUCT';

$statement = $pdo->prepare($sql);
$statement->execute();
echo "<tr class='table-dark'>
            <th>商品編號</th>
            <th>商品類別</th>
            <th>商品名稱</th>
            <th>商品庫存量</th>
            <th>商品圖片01</th>
            <th>商品狀態</th>
            <th>是否編輯</th>
          </tr>";

//抓出全部且依照順序封裝成一個二維陣列
$data = $statement->fetchAll();


foreach ($data as $index => $row) {
	echo "<tr class='table-light'>
              <td>" . $row["productNO"] . "</td>";
	$productType = $row["productType"];
	switch ($productType) {
		case "1":
			$productType = '景天科';
			break;
		case "2":
			$productType = '仙人掌科';
			break;
		case "3":
			$productType = '百合科';
			break;
		case "4":
			$productType = '菊科';
			break;
		case "5":
			$productType = '飾品';
			break;
		case "6":
			$productType = '器皿';
			break;
		case "7":
			$productType = '客製植物';
			break;
		case "8":
			$productType = '賀卡';
			break;
		case "9":
			$productType = '手做課程';
			break;
		default:
			$productType = '錯誤';
	};
	echo "<td>" . $productType . "</td>";
	echo "<td>" . $row["productName"] . "</td>";
	echo "<td>" . $row["productNumber"] . "</td>";
	echo '<td ><img src="../img/product/' . $row['productImg01'] . '"></td>';
	$productStatus = $row["productStatus"];
	switch ($productStatus) {
		case "1":
			$productStatus = '上架';
			break;
		case "2":
			$productStatus = '下架';
			break;
		default:
			$productStatus = '錯誤';
	};
	echo "<td>" . $productStatus . "</td>";
	echo "<td>
          <a href='./product_edit.php?PID=" . $row['productNO'] . "'>編輯</a>
        </td>
      </tr>";
}
