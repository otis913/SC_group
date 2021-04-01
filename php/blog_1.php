<?php

include "./UtilClass.php";
$Util = new UtilClass();

$sql = "SELECT * FROM KNOWLEDGE where knowledgeType = 1 and knowledgeNO = " . $_POST['id'];

// $statement = getPDO()->prepare($sql);
$statement = $Util->getPDO()->prepare($sql);
$statement->execute();
$data = $statement->fetchAll();

foreach ($data as $index => $row) {

    echo " <div class='ex'></div>

    <article>
        <div class='bread'>
            <a href='./main.html'>首頁<a> > <a href='blog_all.html'>多肉知識</a> > <a>" . $row['knowledgeTitle'] . "</a>
        </div>
    </article>
    <article class='blog01'>
        <article class='blog_wrapper'>
            <img src='./img/blogall/" . $row['knowledgeContentPic01'] . "'>
            <p class='blog1_p'>" . $row['knowledgeContent01'] . "</p>
        </article>
        <article class='blog_wrapper'>
            <img src='./img/blogall/" . $row['knowledgeContentPic02'] . "'>
            <p class='blog1_p'>" . $row['knowledgeContent02'] . "</p>
        </article>
        <article class='blog_wrapper'>
            <img src='./img/blogall/" . $row['knowledgeContentPic03'] . "'>
            <p class='blog1_p'>" . $row['knowledgeContent03'] . "</p>
        </article>
        <div class='ex'></div>
    </article>";
}
