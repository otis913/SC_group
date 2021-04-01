<?php
    include('./SignSql.php');

    $sql = 'select *
    from RETURN_QUESTION';  

    $statement = $pdo->prepare($sql);   
    $statement->execute();  

    //抓出全部且依照順序封裝成一個二維陣列
    $data = $statement->fetchAll();

    echo "<tr class='table-dark'>
            <th>回報編號</th>
            <th>回報日期</th>
            <th>會員編號</th>
            <th>處理狀態</th>
            <th>是否回復</th>
          </tr>";
    
    foreach($data as $index => $row){
        echo "<tr class='table-light'>
              <td>".$row["returnQuesNO"]."</td>";
        echo "<td>".$row["returnQuesDate"]."</td>";
        echo "<td>".$row["FK_RETURN_QUESTION_memberNO"]."</td>";      

        $returnQues_status=$row["returnQues_status"];
        switch ($returnQues_status) {
            case "0":
                $returnQues_status = '還沒回覆';
            break;
            case "1":
                $returnQues_status = '正常';
            break;
            default:
                $returnQues_status = '錯誤';
        };
        echo "<td>".$returnQues_status."</td>";

        echo "<td>
              <a href='./report_edit.html'>編輯</a>
              </td>";
    }
