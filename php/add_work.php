<?php
//載入資料庫與處理的方法
require_once 'db.php';
require_once 'functions.php';

//判別有無在登入狀態
if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
	//執行新增使用者的方法，直接把整個 $_POST個別的照順序變數丟給方法。
	$add_result = add_work($_POST['title'], $_POST['category'], $_POST['intro'], $_POST['team'], $_POST['teacher'], $_POST['website'], $_POST['technology'], $_POST['image_path1'], $_POST['image_path2'], $_POST['image_path3'], $_POST['image_path4'], $_POST['image_path5']);
	if($add_result)
	{
		//若為true 代表新增成功，印出yes
		echo 'yes';
	}
	else
	{
		//若為 null 或者 false 代表失敗
		echo 'no';	
	}
}
else
{
	//若為 null 或者 false 代表失敗
	echo 'no';	
}
?>