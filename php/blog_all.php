<?php

include "./UtilClass.php";
$Util = new UtilClass();

$sql = "SELECT * FROM SUCCULENTS_PLANT.KNOWLEDGE";

// $statement = getPDO()->prepare($sql);
$statement = $Util->getPDO()->prepare($sql);

$statement->execute();
$data = $statement->fetchAll();

foreach ($data as $index => $row) {

    echo "<a href='blog_" . $row['knowledgeType'] . ".html?id=" . $row['knowledgeNO'] . "'>
                        <div class='blog_word'>
                            <img src='./img/blogall/" . $row['knowledgeOutPic'] . "'>
                            <p>" . $row['knowledgeTitle'] . "</p>
                        </div>
                </a>";
}
