<?php

include("./UtilClass.php");
	$Util = new UtilClass();

if (!empty($conn->connect_error)) {
	die('資料庫連線錯誤:' . $conn->connect_error);
}
$conn->query('SET NAMES UTF8');
$conn->query('SET time_zone ="+8:00"'); ?>
<!-- 導入後端資料 開始 -->
<!-- 會員中心資料 -->
<?php
session_start();
$memberNO = $_SESSION["memberNO"];
// echo "123=".$memberNO;
// exit();
$sql = 'SELECT * FROM `MEMBER` where memberNO =' . $memberNO;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// print_r($row);
// $memberNO = (int)$_SESSION["memberNO"];
// $sql2 = 'SELECT * FROM `ORDER` where FK_ORDER_memberNO = ' . $memberNO;
// $result2 = $conn->query($sql2);
// $row2 = $result2->fetch_assoc();
// $orderNO = isset($row2['orderNO']);


// 處理詳細資料的變數部分- 付款方式 paymethod
// $row2Method = $row2['orderMethod'];
// $row2Methodstr = (string)$row2Method;
// $type = $row2Methodstr;
// switch ($type) {
// 	case '0';
// 		$paymethod = '貨到付款';
// 		break;
// 	case '1';
// 		$paymethod = '信用卡';
// 		break;
// }
// $type = 1;
// switch ($type) {
// 	case '0';
// 		$paymethod = '貨到付款';
// 		break;
// 	case '1';
// 		$paymethod = '信用卡';
// 		break;
// }
// 處理詳細資料的變數部分- 訂單狀態
// 0取消訂單1訂單處理中2訂單完成
// if (($orderNO)) {
// 	$orderStatus = $row2['orederStatus'];
// 	$orderStatus = (string)$orderStatus;
// 	$type = $orderStatus;
// 	switch ($type) {
// 		case '0';
// 			$status = '取消訂單';
// 			break;
// 		case '1';
// 			$status = '訂單處理中';
// 			break;
// 		case '2';
// 			$status = '訂單完成';
// 			break;
// 	}
// }

// $memberNO = $_SESSION["memberNO"];
// $sql4 = 'SELECT * FROM `CARD` where FK_CARD_memberNO = ' . $memberNO;
// $result4 = $conn->query($sql4);
// $row4 = $result4->fetch_assoc();
?>

<!-- 導入後端資料 結束 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>會員中心</title>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	</link>
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">
	<!-- vue cdn  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.js"></script>
	<!-- aos動畫效果 -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- 自己的css -->
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<!-- test -->
	<!-- header開始，要放在body下面 -->
	<div class="header_bg">
		<div class="headers">
			<div class="navs">
				<a href="../main.html"><img src="../img/logo.png" alt=""></a>
				<ul>
					<li><a href="../shop.html">商品專區</a></li>
					<li><a href="../custom.html">客製多肉</a></li>
					<li><a href="../mindtest.html">心理測驗</a></li>
					<li><a href="../HandMake.html">手作課程</a></li>
					<li><a href="../blog_all.html">多肉知識</a></li>
				</ul>
			</div>
			<ol>
				<li><a href="../shopCart.html"><i class="fas fa-shopping-basket"></i></a></li>
				<li><a href="./member.php"><i class="fas fa-user"></i></a></li>
				<li><a href="./logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
			</ol>
			<div class="ham">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- header結束 -->
	<section class="full_wrapper">
		<div class="ex"></div><!-- 用來推header高度的 -->
		<article>
			<div class="bread">
				<a href="../main.html">首頁</a> > <a href="#">會員中心</a>
			</div>
		</article>
		<article class="mem_wrapper">
			<!-- 左邊按鈕區塊 -->
			<ul class="mem_btn">
				<li class="-mem_this">個人資料</li>
				<li>訂單查詢</li>
				<li>我有問題</li>
				<!-- <li>我的收藏</li> -->

			</ul>
			<!-- 右邊內容區塊 -->
			<div class="mem_main">
				<!-- 個人資料 -->
				<div class="center_wrapper -mem_show" id="app">
					<h1>個人資料</h1>
					<div class="center_contain2">
						<div class="mem_photo">
							<label for="upFile">
								<input type="file" name="upFile" id="upFile" style="display: none" />
								<img src="../img/PeopleAvatars.png" />
								<i class="fas fa-camera"></i>
							</label>
						</div>
						<form id="validationForm" method="POST" action="./update.php">
							<div class="mem_wrp">
								<label for="">姓名：</label>
								<input type="text" value="<?php echo $row['memberName'] ?> " disabled>
							</div>
							<div class="mem_wrp">
								<label for="">帳號：</label>
								<input type="text" value="<?php echo $row['memberAccount'] ?> " disabled>
							</div>
							<div class="mem_wrp ">
								<label for="">密碼：</label>
								<input type="text" value="<?php echo $row['memberPassword'] ?> " class="TetstText pass" disabled name="pass">
								<input type="button" value='修改' onclick="ChangeDisabled(1)">
								<input type="button" class="save keydown" value='' onclick="ChangeDisabled(2)">
							</div>
							<div class="mem_wrp ">
								<label for="">電話：</label>
								<input type="text" value="<?php echo $row['memberCellPhone'] ?> " class="TetstText" id='phone' disabled name="phone">
								<input type="button" value='修改' onclick="ChangeDisabledPhone(1)">
								<input type="button" class="save keydown" value='' onclick="ChangeDisabledPhone(2)">
								<br />
							</div>
							<div class="mem_wrp">
								<label for="">地址： </label>
								<input type="text" value="<?php echo $row['memberAddress'] ?> " class="TetstText address" disabled name="address">
								<input type="button" value='修改' onclick="ChangeDisabledAdd(1)">
								<input type="button" value='' class="save keydown" onclick="ChangeDisabledAdd(2)">
							</div>
							<div class="judge error correct "></div>
							<input type="submit" value="確認修改" class="mem_submit">
							<div id="error2"></div>
						</form>
					</div>
				</div>
				<!-- 個人資料結束 -->
				<!-- 訂單查詢 -->
				<div class="center_wrapper">
					<h1>訂單查詢</h1>
					<div class="center_contain">
						<!-- 情況1 -->
						<!-- <p>您現在還沒有訂單喔！</p> -->
						<?php
						$memberNO = $_SESSION["memberNO"];
						$sql_detail = 'select DISTINCT `o`.`orderNO`, `o`.`orderTotal`, `o`.`orderDate`
													from `order_detail` d 
													join `order` o on d.FK_ORDER_DETAIL_orderNO = o.orderNO 
													where FK_ORDER_memberNO =' . $memberNO;
						$result_detail = $conn->query($sql_detail);
						// $row_product = $result->fetch_assoc();
						while ($row_detail = $result_detail->fetch_assoc()) {
							// echo $row_detail['orderNO']
							// print_r($result_detail);
							// echo $row_detail['orderTotal'];
						?>
							<!-- 情況2 訂單進來了 -->
							<div class="mem_order">
								<form action="./update.php" method="POST">
									<ul class="mem_order_top">
										<li class="mem_time">
											<div class="tit">訂單時間</div>
											<span name="orderTime"><?php echo $row_detail['orderDate'] ?></span>
										</li>

										<li class="mem_no">
											<div class="tit">訂單編號</div>
											<span name="orderNo"><?php echo $row_detail['orderNO'] ?></span>
										</li>

										<li class="mem_pay">
											<div class="tit">付款方式</div>
											<span name="orderMethods">信用卡付款</span>
										</li>

										<li class="mem_totle">
											<div class="tit">訂單金額</div>
											<span class="orderMoney" name="orderMoney">
												<?php echo $row_detail['orderTotal'] ?>
											</span>
										</li>

										<li class="mem_status">
											<div class="tit">訂單狀態</div>
											<span name="orderStatus">訂單處理中</span>
										</li>

									</ul>

								</form>
								<div class="mem_open">訂單明細 <i class="fas fa-plus mem_open"></i></div>
								<?php
								// }
								?>
								<form action="">
									<div class="order_list_wrapper">
										<?php
										$order_no =  $row_detail['orderNO'];
										// echo $order_no;
										$sql_productname = ' select
																						d.orderDetailNO,
																						d.number,
																						d.handClassDate,
																						d.handClassPrice,
																						d.handClassName,
																						p.productName,
																						p.productPrice,
																						p.productImg01,
																						d.FK_ORDER_DETAIL_customPlantNO
																					from `order` o 
																						join `order_detail` d on d.FK_ORDER_DETAIL_orderNO = o.orderNO 
																						left join `product` p on d.FK_ORDER_DETAIL_productNO = p.productNO
																					where o.orderNO =' . $order_no;

										$result_1 = $conn->query($sql_productname);
										while ($rowProductname =  $result_1->fetch_assoc()) {
											if (!empty($rowProductname['productName'])) {
										?>
												<ol class="order_list_title">
													<li>商品名稱</li>
													<li>數量</li>
													<li>價格</li>
												</ol>
												<ol>
													<!-- <li>商品名稱</li> -->
													<li>
														<?php
														echo  $rowProductname['productName'];
														?>
													</li>
													<li>
														<?php
														echo $rowProductname['number'];
														?>
													</li>
													<li>
														<?php
														echo  $rowProductname['productPrice'];
														?>
													</li>
												<?php
											} else if (!empty($rowProductname['FK_ORDER_DETAIL_customPlantNO'])) {
												?>
												</ol>
												<!-- 客製多肉 -->
												<ol class="order_list_title">
													<li>客製多肉</li>
													<li>數量</li>
													<li>價錢</li>
												</ol>
												<ol class="mem_order_list">
													<li>
														<span>客製多肉</span>
													</li>
													<li>
														<span>1</span>
													</li>
													<li>
														<span>1660</span>
													</li>
												<?php
											} else if (!empty($rowProductname['handClassName'])) {
												?>
												</ol>
												<!-- 手作課程 -->
												<ol class="order_list_title">
													<li>課程名稱</li>
													<li>報名人數</li>
													<li>報名日期</li>
													<li>課程價錢</li>
												</ol>
												<ol class="mem_order_list">
													<li>
														<?php
														echo $rowProductname['handClassName'];
														?>
													</li>
													<li>
														<?php
														echo $rowProductname['number'];
														?>
													</li>
													<li>
														<?php
														echo $rowProductname['handClassDate'];
														?>
													</li>
													<li>
														<?php
														echo $rowProductname['handClassPrice'];
														?>
													</li>
												<?php
											}
												?>
												</ol>
											<?php
										}
											?>
									</div>
								</form>
							</div>
						<?php
						}
						?>

						<!-- 情況2結束 訂單進來了 -->
					</div>
				</div>
				<!-- ====== -->
				<div class="center_wrapper">
					<h1>訂單查詢</h1>
					<div class="center_contain">
						<!-- 情況1 -->
						<!-- <p>您現在還沒有訂單喔！</p> -->
						<!-- 情況2 訂單進來了 -->
						<div class="mem_order">
							<form action="./update.php" method="POST">
								<ul class="mem_order_top">
									<li class="mem_time">
										<div class="tit">訂單時間</div>
										<span name="orderTime"></span>
									</li>
									<li class="mem_no">
										<div class="tit">訂單編號</div>
										<span name="orderNo"></span>
									</li>
									<li class="mem_pay">
										<div class="tit">付款方式</div>
										<span name="orderMethods"></span>
									</li>
									<li class="mem_totle">
										<div class="tit">訂單金額</div>
										<span class="orderMoney" name="orderMoney"></span>
									</li>
									<li class="mem_status">
										<div class="tit">訂單狀態</div>
										<span name="orderStatus">目前尚無訂單</span>
									</li>
								</ul>
							</form>
							<div class="mem_open">訂單明細 <i class="fas fa-plus mem_open"></i></div>
							<form action="">
								<div class="order_list_wrapper">
									<!-- 賀卡訂製 -->
									<!-- <ul class="mem_order_list">
										<li class="pro_list">
											<div class="list_column">
												<div class="pro_item">
													<span>
													</span>
												</div>
											</div>
											<span class="productPrice"></span>
										</li>
									</ul> -->
									<!-- 手作課程 -->
									<!-- <ul class="mem_order_list">
										<li class="pro_list">
											<div class="list_column">
												<div class="pro_item">
													<span>
													</span>
													<span>
													</span>
												</div>
											</div>
											<span class="handClassPrice">
											</span>  -->
									<!-- <span><i class="fas fa-star"></i></span> -->
									<!-- </li>
									</ul>-->
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- 我有問題 -->
				<div class="center_wrapper nobg">
					<div class="mem_qa">
						<input type="text" placeholder="輸入問題 ...">
						<input type="submit" value="新增問題" class="mem_qanew">
					</div>
					<div class="mem_answer_all">
						<div class="mem_answer">
							<div class="mem_qs_wrapper ">
								<img src="../img/PeopleAvatars.png" alt="">
								<div class="mem_qs_box">
									<p>消費者問問題</p>
									<time class="mem_push">2021/1/30 13:30</time>
								</div>
							</div>
							<div class="line_down"></div>
							<!-- 對話區塊 -->
							<div class="mem_talk">
								<div class="mem_ans_wrapper ">
									<img src="../img/member/1.png" alt="">
									<div class="mem_ans_box">
										<p>我是客服</p>
										<time>2021/1/30 13:32</time>
									</div>
								</div>
								<div class="mem_ans_wrapper ">
									<img src="../img/member/2.png" alt="">
									<div class="mem_ans_box">
										<p>我是消費者</p>
										<time>2021/1/30 13:35</time>
									</div>
								</div>
								<div class="mem_ans_wrapper ">
									<img src="../img/member/1.png" alt="">
									<div class="mem_ans_box">
										<p>我是客服</p>
										<time>2021/1/30 13:40</time>
									</div>
								</div>
							</div>
							<!-- 對話區塊結束 -->
							<div class="mem_reply">
								<input type="text" placeholder="輸入內容 ...">
								<input type="submit" value="回覆問題" class="mem_qareplay">
							</div>
						</div>
					</div>
				</div>
				<!-- 我有問題結束 -->
			</div>
		</article>
		<div class="ex"></div>
		<div class="ex"></div>
	</section>


	<!-- QA仙人掌開始，放在footer上面 -->
	<section class="qa_pos">
		<div class="qa_wrapper">
			<img src="img/QA/QA_LOGO.png" alt="">
		</div>
		<div class="qaBg_wrapper" id="app">
			<div class="qaBg">
				<img src="img/QA/QA_close.png" alt="" class="cancel">
				<ul>
					<li class="question">
						<h2>Q:想更換或取消訂單，怎麼辦呢？</h2>
						<p>A:植栽沒有提供七天鑑賞期，恕無法退貨。</p>
					</li>
					<li class="question">
						<h2>Q:請問植栽可以配送國外嗎？</h2>
						<p>A:植物無配送國外之服務，但如欲購買空盆，請加入 LINE ID：@succulents_plant，由專人為你服務。</p>
					</li>
					<li class="question">
						<h2>Q:我突然想更換或是取消訂單，會怎麼辦呢？</h2>
						<p>A:送達時間 24 小時內不得取消訂單，若需更改訂單請於送達時間前 24 小時內聯繫客服（LINE ID：@succulents_plant），由專人為你服務。</p>
					</li>
					<div class="cusQUS">{{message}}</div>
					<div class="answer">We Will Help You!!!Please Contact Me LINE ID:@succulents_plant</div>
				</ul>
				<div class="cusQ">
					<div class="adimit">
						<input type="text" v-model="message">
						<button class="btn">送出</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- QA仙人掌結束 -->

	<!-- footer start -->
	<footer>
		<article>
			<div class="brand_info">
				<ul>
					<li><a href="../shop.html">商品專區</a></li>
					<li><a href="../custom.html">客製多肉</a></li>
					<li><a href="../mindtest.html">心理測驗</a></li>
					<li><a href="../HandMake.html">手作課程</a></li>
					<li><a href="../blog_all.html">多肉知識</a></li>
				</ul>
				<ol>
					<li><a ref=""><i class="fab fa-facebook-square"></i></a></li>
					<li><a ref=""><i class="fab fa-youtube"></i></a></li>
					<li><a ref=""><i class="fab fa-twitter"></i></a></li>
				</ol>
				<p>ⓒ Copyright Shimabara Shokuhin All Rights Reserved. </p>
			</div>
			<div class="line"></div>
			<div class="logo_info">
				<a href="../main.html"><img src="../img/icon_logo_footer.png" alt=""></a>
				<p>tel : 02-2338-8365</p>
				<p>e-mail : Succulents Monster@gmail.com </p>
				<p>address : 104 台北市中山區南京東路三段219號</p>
				<p>open : 週一至週日 11:00 – 18:30</p>
			</div>
		</article>
	</footer>
	<!-- footer end -->
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- aos動畫效果 -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- bubble_btn動畫效果 -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
	<script src="js/bubblebtn.js"></script>
	<!-- 每一個頁面都要引入以下這兩個js -->
	<script src="../js/member.js"></script>
	<!-- <script src="../js/shopcart.js"></script> -->
	<script src="../js/header.js"></script>
	<script src="../js/qa.js"></script>
	<script src="../js/login.js"></script>
	<script>
		// 1.新增問題

		$('.mem_answer .mem_qa :text').focus(function() {
			$(this).val('');
		});
		$('body').on('click', '.mem_qanew', (event) => {
			const target = event.target
			if (target.matches(`.mem_qanew,.mem_qanew *`)) {
				// console.log('534534')
				let mem_qanew = $('.mem_qa :text').val();
				let d = new Date();
				let today = `${d.toLocaleDateString()} ${d.getHours()}:${d.getMinutes()}`;
				if ($('.mem_qa :text').val() === '') {
					// alert('是空值');
				} else {
					$(`.mem_answer_all`).prepend(`
                            <div class="mem_answer">
                                <div class="mem_qs_wrapper ">
                                    <img src="../img//member/2.png" alt="">
                                        <div class="mem_qs_box">
                                            <p>${mem_qanew}</p>
                                            <time class="mem_push">${today}</time>
                                        </div>
                                </div>
                                <div class="line_down"></div>
                                <div class="mem_talk"></div>
                                <div class="mem_reply">
                                    <input type="text" placeholder="輸入內容 ...">
                                    <input type="submit" value="回覆問題" class="mem_qareplay">
                                </div>
                            </div>`);
					// alert('是有值');
				}

				$('.mem_qa :text').val('');
			}

		});
		// 2.回覆問題
		$(`.mem_answer .mem_reply :text`).focus(function() {
			$(`.mem_answer .mem_reply :text`).val('');
			// alert('新增回覆問題關注');
			console.log(222)
		});

		$('body').on('click', '.mem_qareplay', function() {
			// console.log(111)
			let mem_text = $($(this).siblings(".mem_reply :text")).val();
			let d = new Date();
			let today = `${d.toLocaleDateString()} ${d.getHours()}:${d.getMinutes()}`;
			// alert('新增回覆問題');
			if (mem_text === '') {
				// alert('是空值');
			} else {
				// alert('有值');
				$($(this).parents(".mem_answer").children(".mem_talk")).append(`
                            <div class="mem_ans_wrapper ">
                                <img src="../img/member/2.png" alt="">
                                <div class="mem_ans_box">
                                    <p>${mem_text}</p>
                                    <time>${today}</time>
                                </div>
                            </div>`);
			}
			$(`.mem_answer .mem_reply :text`).val('');
		});
		// });
	</script>
</body>

</html>