<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，另外後台都會用 session 判別暫存資料，所以要請求 db.php 因為該檔案最上方有啟動session_start()。
require_once '../php/db.php';
require_once '../php/functions.php';
//print_r($_SESSION); //查看目前session內容

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
	//直接轉跳到 login.php
	header("Location: login.php");
}

//取得文章資料，從網址上的 i 取得文章id
$data = get_work($_GET['i']);
if (is_null($data)) {
	//如果文章是null就轉回列表頁
	header("Location: work_list.php");
}
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<title>作品網站-後台編輯作品</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" href="../favicon.ico">
</head>

<body>
	<!-- 頁首 -->
	<?php
	include_once 'menu.php';
	?>

	<!-- 網站內容 -->
	<div class="content">
		<div class="container">
			<!-- 建立第一個 row 空間，裡面準備放格線系統 -->
			<div class="row">
				<!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
				<div class="col-xs-12">
					<form id="edit_work_form">
						<input type="hidden" id="id" value="<?php echo $data['id']; ?>">
						<div class="form-group">
							<label for="title">標題 </label>
							<input type="input" class="form-control" id="title" value="<?php echo $data['title']; ?>"></input>
						</div>
						<?php echo $data['category'] ?>
						<div class="form-group">
							<label for="category">類別 </label> <br>
							<label class="radio-inline">
								<input type="radio" name="category" value="專案" <?php echo ($data['category'] == "專案") ? "checked" : ""; ?>>
								專案 </label>
							<label class="radio-inline">
								<input type="radio" name="category" value="IG影片" <?php echo ($data['category'] == "IG影片") ? "checked" : ""; ?>>
								IG影片 </label>
							<label class="radio-inline">
								<input type="radio" name="category" value="YouTube影片" <?php echo ($data['category'] == "YouTube影片") ? "checked" : ""; ?>>
								YouTube影片 </label>
						</div>

						<div class="form-group">
							<label for="intro">簡介 </label>
							<textarea type="input" class="form-control" id="intro"><?php echo $data['intro']; ?></textarea>
						</div>

						<div class="form-group">
							<label for="team">組員 </label>
							<input type="input" class="form-control" id="team" value="<?php echo $data['team']; ?>"></input>
						</div>

						<div class="form-group">
							<label for="teacher">指導老師 </label>
							<input type="input" class="form-control" id="teacher" value="<?php echo $data['teacher']; ?>"></input>
						</div>

						<div class="form-group">
							<label for="website">網站(假如為影片必須選擇嵌入式網址) </label>
							<input type="input" class="form-control" id="website" value="<?php echo $data['website']; ?>"></input>
						</div>

						<div class="form-group">
							<label for="technology">技術 </label>
							<input type="input" class="form-control" id="technology" value="<?php echo $data['technology']; ?>"></input>
						</div>

						<div class="form-group">
							<label for="image_path1">封面圖片</label>
							<input type="file" name="image_path1" accept="image/gif, image/jpeg, image/png">
							<input type="hidden" id="image_path1" value="">
							<div class="image" id="image1">
								<?php if ($data['cover'] && file_exists("../" . $data['cover'])) : ?>
									<img src='<?php echo "../" . $data['cover']; ?>'>
								<?php endif; ?>
							</div>
							<a href='javascript:void(0);' id="del_image1" class=" btn btn-default">刪除照片</a>
						</div>

						<div class="form-group">
							<label for="image_path2">內部圖片輪播1/4</label>
							<input type="file" name="image_path2" accept="image/gif, image/jpeg, image/png">
							<input type="hidden" id="image_path2" value="">
							<div class="image" id="image2">
								<?php if ($data['pic1'] && file_exists("../" . $data['pic1'])) : ?>
									<img src='<?php echo "../" . $data['pic1']; ?>'>
								<?php endif; ?>
							</div>
							<a href='javascript:void(0);' id="del_image2" class=" btn btn-default">刪除照片</a>
						</div>

						<div class="form-group">
							<label for="image_path3">內部圖片輪播2/4</label>
							<input type="file" name="image_path3" accept="image/gif, image/jpeg, image/png">
							<input type="hidden" id="image_path3" value="">
							<div class="image" id="image3">
								<?php if ($data['pic2'] && file_exists("../" . $data['pic2'])) : ?>
									<img src='<?php echo "../" . $data['pic2']; ?>'>
								<?php endif; ?>
							</div>
							<a href='javascript:void(0);' id="del_image3" class=" btn btn-default">刪除照片</a>
						</div>

						<div class="form-group">
							<label for="image_path4">內部圖片輪播3/4</label>
							<input type="file" name="image_path4" accept="image/gif, image/jpeg, image/png">
							<input type="hidden" id="image_path4" value="">
							<div class="image" id="image4">
								<?php if ($data['pic3'] && file_exists("../" . $data['pic3'])) : ?>
									<img src='<?php echo "../" . $data['pic3']; ?>'>
								<?php endif; ?>
							</div>
							<a href='javascript:void(0);' id="del_image4" class=" btn btn-default">刪除照片</a>
						</div>

						<div class="form-group">
							<label for="image_path5">內部圖片輪播4/4</label>
							<input type="file" name="image_path5" accept="image/gif, image/jpeg, image/png">
							<input type="hidden" id="image_path5" value="">
							<div class="image" id="image5">
								<?php if ($data['pic4'] && file_exists("../" . $data['pic4'])) : ?>
									<img src='<?php echo "../" . $data['pic4']; ?>'>
								<?php endif; ?>
							</div>
							<a href='javascript:void(0);' id="del_image5" class=" btn btn-default">刪除照片</a>
						</div>

						<button type="submit" class="btn btn-default">
							儲存
						</button>
						<div class="loading text-center"></div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- 頁底 -->
	<?php
	include_once 'footer.php';
	?>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script>
		$(document).on("ready", function() {
			/**
			 * 圖片上傳
			 */
			//上傳圖片的input更動的時候
			$("input[name='image_path1']").on("change", function() {
				//產生 FormData 物件
				var file_data = new FormData(),
					file_name = $(this)[0].files[0]['name'],
					save_path = "images/portfolio/";

				//在圖片區塊，顯示loading
				$("#image1").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

				//FormData 新增剛剛選擇的檔案
				file_data.append("file", $(this)[0].files[0]);
				file_data.append("save_path", save_path);
				//透過ajax傳資料
				$.ajax({
					type: 'POST',
					url: '../php/upload_file.php',
					data: file_data,
					cache: false, //因為只有上傳檔案，所以不要暫存
					processData: false, //因為只有上傳檔案，所以不要處理表單資訊
					contentType: false, //送過去的內容，由 FormData 產生了，所以設定false
					dataType: 'html'
				}).done(function(data) {
					console.log(data);
					//上傳成功
					if (data == "yes") {
						//將檔案插入
						$("#image1").html("<img src='../" + save_path + file_name + "'>");
						//給予 #image_path 值，等等存檔時會用
						$("#image_path1").val(save_path + file_name);
					} else {
						//警告回傳的訊息
						alert(data);
					}

				}).fail(function(data) {
					//失敗的時候
					alert("有錯誤產生，請看 console log");
					console.log(jqXHR.responseText);
				});
			});



			/**
			 * 刪除照片
			 */
			$("#del_image1").on("click", function() {
				//如果有圖片路徑，就刪除該檔案
				if ($("#image_path1").val() != '') {
					//透過ajax刪除
					$.ajax({
						type: 'POST',
						url: '../php/del_file.php',
						data: {
							"file": $("#image_path").val()
						},
						dataType: 'html'
					}).done(function(data) {
						console.log(data);
						//上傳成功
						if (data == "yes") {
							//將圖片標籤移除，並清空目前設定路徑
							$("#image1").html("");
							//給予 #image_path 值，等等存檔時會用
							$("#image_path1").val('');
						} else {
							//警告回傳的訊息
							alert(data);
						}

					}).fail(function(data) {
						//失敗的時候
						alert("有錯誤產生，請看 console log");
						console.log(jqXHR.responseText);
					});
				} else {
					alert("無檔案可以刪除");
				}
			});


			//表單送出
			$("#edit_work_form").on("submit", function() {
				//加入loading icon
				$("div.loading").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

				if ($("#title").val() == '') {
					alert("標題未填寫");

					//清掉 loading icon
					$("div.loading").html('');
				} else {
					//使用 ajax 送出 帳密給 verify_user.php
					$.ajax({
						type: "POST",
						url: "../php/update_work.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
						data: {
							id: $("#id").val(), //id
							intro: $("#intro").val(), //介紹
							image_path: $("#image_path").val(), //圖片路徑
							video_path: $("#video_path").val(), //影片路徑
							publish: $("input[name='publish']:checked").val() //發布狀況
						},
						dataType: 'html' //設定該網頁回應的會是 html 格式
					}).done(function(data) {

						//成功的時候
						if (data == "yes") {
							//註冊新增成功，轉跳到登入頁面。
							alert("更新成功，點擊確認回列表");
							window.location.href = "work_list.php";
						} else {
							alert("更新錯誤");
							console.log(data);
						}

					}).fail(function(jqXHR, textStatus, errorThrown) {
						//失敗的時候
						alert("有錯誤產生，請看 console log");
						console.log(jqXHR.responseText);
					});
				}
				return false;
			});


			if (($("input[name='category']:checked").val()) != "專案") {
				$("#intro").attr("disabled", true);
				$("#team").attr("disabled", true);
				$("#teacher").attr("disabled", true);
				$("#technology").attr("disabled", true);
				$("input[name='image_path2']").attr("disabled", true);
				$("input[name='image_path3']").attr("disabled", true);
				$("input[name='image_path4']").attr("disabled", true);
				$("input[name='image_path5']").attr("disabled", true);

			} else {
				$(":input").removeAttr("disabled");
			}
		});
	</script>
</body>

</html>