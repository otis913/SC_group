

<?php


//取得會員ID(前台專用)
function getMemberID(){
    if(!isset($_SESSION)){
        session_start(); 
    }
    return isset($_SESSION["memberNO"]) ? $_SESSION["memberNO"] : ""; 
};
// print_r (getMemberID());
// print_r ($_SESSION["memberNO"]);

if(getMemberID() == ""){
    // echo "";
print_r(json_encode(""));

}else{
    include("./UtilClass.php");
	$Util = new UtilClass();

    // include("./conn.php");
    // getmember();
    // echo "有抓到seeseion";
    // print_r ($_SESSION["memberNO"]);
    // echo $_SESSION["memberNO"];

// session_start();
$memberNO = $_SESSION["memberNO"];
$sql = 'SELECT * FROM `MEMBER` where memberNO =' . $memberNO;
//執行
$statement = $Util->getPDO()->prepare($sql);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

// $result = $conn->query($sql);
// $data = $result->fetch_assoc();
print_r(json_encode($data));


// function getmember(){
//     include("./UtilClass.php");
//     $Util = new UtilClass();
//     $sql = 'SELECT * FROM `MEMBER` where memberNO =' . $memberNO;

//     //執行
//     $statement = $Util->getPDO()->prepare($sql);
//     $statement->execute();
//     $member = $statement->fetchAll(PDO::FETCH_ASSOC);
//     print_r(json_encode($member));
// }
}
// $Member = new MemberClass();
// // 登入檢查
// if($Member->getMemberID() == ""){
//     //交回給Product.php裡的AJAX(addToCar)處理轉頁至Login.php
//     echo "沒有抓到";
// }else{
//     include("./handleLogin.php");
// // session_start();
// // $memberNO = $_SESSION["memberNO"];
// }

// session_start();
// $memberNO = $_SESSION["memberNO"];
// if(!isset($_SESSION)){
//     session_start(); 
// // $memberNO = $_SESSION["memberNO"];
    
// }
// return isset($_SESSION["memberNO"]) ? $_SESSION["memberNO"] : "";

// if (count($row) =="") {
//     echo "";
// }else{
//     session_start();
//     $memberNO = $_SESSION["memberNO"];
// }
// return isset($_SESSION["MemberID"]) ? $_SESSION["MemberID"] : ""; 

// if(getMemberID() == ""){
    // if($Member->getMemberID() == ""){

// if(count($row) == ""){

    //交回給Product.php裡的AJAX(addToCar)處理轉頁至Login.php
    // echo "";}
    // else{
    // $_SESSION["memberNO"] = $memberNO;

    // }
    // if(!isset($_SESSION)){
    //     session_start(); 
    // }
    // return isset($_SESSION["MemberID"]) ? $_SESSION["MemberID"] : ""

    
?>