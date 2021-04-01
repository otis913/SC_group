<?php

include "./UtilClass.php";
$Util = new UtilClass();

// session_start();
// $memberNO = $_SESSION["memberNO"];
$data = json_decode(file_get_contents("php://input"));
// $all_data = $data -> allData;
$order_data = $data->order_all;
$member_data = $data->member_all;
$pro_data = $data->pro_all;
$cus_data = $data->cus_all;
$hand_data = $data->hand_all;

// print_r ($order_data);
// print_r ($member_data);
// print_r ($pro_data);
// print_r ($cus_data);
print_r($hand_data);

// 訂單資料
foreach ($order_data as $index => $item) {
    // echo $item->order_id;
    // echo $item->memberPassword;
    $orderNO = $item->order_id; //訂單編號
    $orderTotal = $item->order_totale; //總金額
    $orderName = $item->order_name; //姓名
    $orderCellPhone = $item->order_memberCellPhone; //電話
    $orderAddress = $item->order_memberAddress; //地址

}
$orderPayStatus = 2;

// 會員資料
foreach ($member_data as $index => $item) {
    $memberNO = $item->memberNO; //會員ID
}
// insert訂單
$sql = "INSERT INTO SUCCULENTS_PLANT.ORDER
          (orderNO, orderTotal, orderName, orderCellPhone, orderAddress,orderPayStatus, FK_ORDER_memberNO, orderDate )
          VALUES (  ?,  ?,  ?,  ?,  ?,  ?,  ?, NOW() )";
//   $statement = $Util->getPDO()->prepare($sql);
$statement = $Util->getPDO()->prepare($sql);

$statement->bindValue(1, $orderNO);
$statement->bindValue(2, $orderTotal);
$statement->bindValue(3, $orderName);
$statement->bindValue(4, $orderCellPhone);
$statement->bindValue(5, $orderAddress);
$statement->bindValue(6, $orderPayStatus);
$statement->bindValue(7, $memberNO);
$statement->execute();

// 課程
foreach ($hand_data as $index => $item):
    $handClassNO = $item->handClassNO; //課程ID
    $handClassDate = $item->handClassDate; //課程日期
    $handClassPeople = $item->handClassPeople; //課程人數
    $handClassName = $item->handClassName; //課程名稱
    $handClassPrice = $item->handClassPrice; //課程價錢
endforeach;
$n_handClassDate = strval($handClassDate);
// $n_handClassNO =strval($handClassNO);

$sql2 = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
        (FK_ORDER_DETAIL_orderNO, `number` , orderCard,
        handClassName,  handClassDate, `HDNO` ,handClassPrice)
        VALUES (  ?,  ?,  0,  ?,  ? , ?, ?)";
// -- select  FROM HANDCLASS where ;
//   echo strtotime($handclassDate).PHP_EOL;

$statement = $Util->getPDO()->prepare($sql2);
$statement->bindValue(1, $orderNO);
$statement->bindValue(2, $handClassPeople);
//   $statement->bindValue(3, $handClassNO);
$statement->bindValue(3, $handClassName);
$statement->bindValue(4, $n_handClassDate);
$statement->bindValue(5, $handClassNO);
$statement->bindValue(6, $handClassPrice);
$statement->execute();

//   訂單明細
// 商品
foreach ($pro_data as $index => $item):
    $pro_id = $item->pro_id; //產品ID
    $pro_count = $item->pro_count; //產品數量
    $pro_card = $item->pro_cardcustom; //有無卡片

    // print_r($item);
    // $pro_card = false;
    // if(isset($item->pro_cardcustom)){
    //     $pro_card = $item->pro_cardcustom;//有無卡片
    // }

    //------
    if ($pro_card == true):
        $pro_cardReceivePeople = $item->pro_cardReceivePeople; //卡片收禮人
        $pro_cardSendText = $item->pro_cardSendText; //卡片內容
        $pro_cardSendPeople = $item->pro_cardSendPeople; //卡片送禮人

        $cardNO = date("is");
        // echo $cardNO;
        // exit();
        // 卡片
        $sql = "INSERT INTO SUCCULENTS_PLANT.CARD
		        (cardReceivePople, cardContentText, cardSendPople,FK_CARD_memberNO,FK_CARD_productNO, cardNO)
		        VALUES ( ?, ?,  ?,  ?, ?, ?  )";

        $statement = $Util->getPDO()->prepare($sql);
        $statement->bindValue(1, $pro_cardReceivePeople);
        $statement->bindValue(2, $pro_cardSendText);
        $statement->bindValue(3, $pro_cardSendPeople);
        $statement->bindValue(4, $memberNO);
        $statement->bindValue(5, $pro_id);
        $statement->bindValue(6, $cardNO);
        $statement->execute();

        // ,SUCCULENTS_PLANT.CARD
        // , cardReceivePople, cardContentText, cardSendPople
        // 明細
        $sql = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
		        (FK_ORDER_DETAIL_orderNO,   orderCard,  FK_ORDER_DETAIL_productNO,  `number`,    `FK_ORDER_DETAIL_cardNO`)
		        VALUES (  ?,   1,  ?,  ?, ?)";
        // -- where FK_ORDER_DETAIL_orderNO = ? ;
        $statement = $Util->getPDO()->prepare($sql);
        $statement->bindValue(1, $orderNO);
        $statement->bindValue(2, $pro_id);
        $statement->bindValue(3, $pro_count);
        $statement->bindValue(4, $cardNO);
        $statement->execute();

        //無卡片
    else:
        $sql2 = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
		        (FK_ORDER_DETAIL_orderNO,orderCard,FK_ORDER_DETAIL_productNO,`number`)
		        VALUES (?, 0, ?, ?)
		        -- from SUCCULENTS_PLANT.ORDER
		        -- where FK_ORDER_DETAIL_orderNO = :orderNo";
        // number
        // pro_count
        // $statement = $Util->getPDO()->prepare($sql);
        echo $pro_id . PHP_EOL;
        echo $orderNO . PHP_EOL;
        echo $pro_count . PHP_EOL;
        // $input2 = array(
        //     ':orderNO'=>$orderNO,
        //     ':pro_id'=>$pro_id,
        //     ':pro_count'=>$pro_count,
        // );
        $statement = $Util->getPDO()->prepare($sql2);
        $statement->bindValue(1, $orderNO);
        $statement->bindValue(2, $pro_id);
        $statement->bindValue(3, $pro_count);
        // $statement->bindValue(4, $handClassNO);

        // // echo $orderNO;
        // $statement2->execute($input2);
        $statement->execute();

    endif;
endforeach;

// 客製
foreach ($cus_data as $index => $item):
    $cus_card = $item->confirmCheck;
    $cusNO = date("s");
    if ($cus_card == true):
        $cardReceivePeople = $item->cardReceivePeople; //卡片收禮人
        $card = $item->card; //卡片內容
        $cardSendPeople = $item->cardSendPeople; //卡片送禮人
        // $cardNO_cus = rand(1000000, 9999999);
        $cardNO_cus = date("is");

        $sql = "INSERT INTO SUCCULENTS_PLANT.CARD
		    (cardReceivePople, cardContentText, cardSendPople,FK_CARD_memberNO, cardNO)
		    VALUES (  ?,  ?,  ?,  ?, ? )";
        $statement = $Util->getPDO()->prepare($sql);

        $statement->bindValue(1, $cardReceivePeople);
        $statement->bindValue(2, $card);
        $statement->bindValue(3, $cardSendPeople);
        $statement->bindValue(4, $memberNO);
        $statement->bindValue(5, $cardNO_cus);
        $statement->execute();

        $sq2 = "INSERT INTO SUCCULENTS_PLANT.CUSTOM_PLANT
		    (customPlantNO)
		    VALUES ( ? )";
        $statement = $Util->getPDO()->prepare($sq2);
        $statement->bindValue(1, $cusNO);
        $statement->execute();

        $sq3 = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
		  (FK_ORDER_DETAIL_orderNO, FK_ORDER_DETAIL_cardNO, orderCard, `number`, FK_ORDER_DETAIL_customPlantNO)
		  VALUES (  ?, ?, 1, 1, ?)";
        $statement = $Util->getPDO()->prepare($sq3);
        $statement->bindValue(1, $orderNO);
        $statement->bindValue(2, $cardNO_cus);
        $statement->bindValue(3, $cusNO);
        $statement->execute();

        //   無卡片
    else:
        $sql = "INSERT INTO SUCCULENTS_PLANT.CUSTOM_PLANT
		    (customPlantNO)
		    VALUES ( ? )";
        $statement = $Util->getPDO()->prepare($sql);
        $statement->bindValue(1, $cusNO);
        $statement->execute();

        $sq2 = "INSERT INTO SUCCULENTS_PLANT.ORDER_DETAIL
		    (FK_ORDER_DETAIL_orderNO,   orderCard, `number`, FK_ORDER_DETAIL_customPlantNO)
		    VALUES (  ?, 0, 1, ?)";
        $statement = $Util->getPDO()->prepare($sq2);
        $statement->bindValue(1, $orderNO);
        $statement->bindValue(2, $cusNO);
        $statement->execute();

    endif;
endforeach;
