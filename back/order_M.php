<?php
include './loginCheck.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/back_index.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	</link>
	<!-- google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700;900&display=swap" rel="stylesheet">
	<!-- JQ cdn -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js' integrity='sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==' crossorigin='anonymous'></script>
	</script>
	<title>肉多不怪訂單管理</title>
</head>

<body onload="doQuery()">
	<!-- <body> -->
	<div class="wrapper">
		<header>
			<?php
include "./layout/header.php";
?>
		</header>
		<div class="section_main">
			<?php
include "./layout/lefterBar.php";
?>
			<div class="right_main">
				<h1>訂單管理</h1>
				<div class="bottom_line"></div>
				<div class="table_div table_div_order">
					<table class="table table-striped">
					</table>
				</div>
			</div>

			<script>
				function doQuery(str) {
					//Typing your code...
					$.ajax({
						method: "POST",
						url: "./order_M_ajx.php",
						data: {
							Name: str
						},
						dataType: "html",
						success: function(response) {
							//更新html內容
							document.getElementsByClassName('table')[0].innerHTML = response;
							// ----------------------
							// 載入偵測訂單狀況顯示option
							function change_status() {
								var tr_number = document.getElementsByTagName('tr').length;
								for (let i = 0; i < (tr_number) - 1; i++) {
									let o_select = document.getElementById(`o_select${i}`);
									let option0 = o_select[0];
									let option1 = o_select[1];
									let option2 = o_select[2];
									let o_status = document.getElementsByClassName('o_status');
									// let o_selectALL = document.getElementsByClassName('o_select');
									if (o_status[i].innerText == '訂單處理中') {
										option0.setAttribute('selected', 'selected');
									} else if (o_status[i].innerText == '訂單完成') {
										option1.setAttribute('selected', 'selected');
									} else if (o_status[i].innerText == '訂單取消') {
										option2.setAttribute('selected', 'selected');
									}

									$(`#o_select${i}`).change(function() {
										let option_value = $(`#o_select${i}`).val();
										let o_status = $(`#o_select${i}`).parent().parent().children('.o_status');
										const text = $(`#o_select${i} option`).eq($(`#o_select${i}`).val() - 1).text();
										o_status.text(text);
										// let option = $(`#o_select${i}`);
										// let option_value = $(`#o_select${i}`).val();
										// let change_place = $(`#o_select${i}`).parent().parent().children('.o_status');
										// const text = $(`#o_select${i} option`).eq($(`#o_select${i}`).val() - 1).text();
										// change_place.text(text)
										// 		// if (o_status.text(text)) {
										// 		// 	$.ajax({
										// 		// 		method: "POST",
										// 		// 		url: "./order_change.php",
										// 		// 		data: {
										// 		// 			'orderNO': order_No,
										// 		// 			'o_status': option_value
										// 		// 		},
										// 		// 		dataType: "text",
										// 		// 		success: function(response) {
										// 		// 			//更新html內容
										// 		// 			alert("訂單狀態已修改");
										// 		// 			// o_status.text(text);
										// 		// 		},
										// 		// 		error: function(exception) {
										// 		// 			alert("發生錯誤: " + exception.status);
										// 		// 		}
										// 		// 	});
										// 		// }
									});
								}
							};
							change_status();
						},
						error: function(exception) {
							alert("發生錯誤: " + exception.status);
						}
					});
				}
			</script>
			<script src="./js/leftbar.js"></script>
</body>

</html>