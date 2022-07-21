<?php
//啟動 session 等下要來儲存 連線後的資訊，前面加上 @ 是為了要讓此方法執行時，若有錯誤訊息不要顯示。
@session_start();
require_once "config.php";

//宣告一個 link 變數，並執行連結資料庫函式 mysqli_connect()，連結結果會帶入 link 當中
$_SESSION['link'] = mysqli_connect(db_host, db_user, db_pw, db_name);

if ($_SESSION['link'])
{
  //若傳回正值，就代表已經連線
  //設定連線編碼為UTF-8
  //mysqli_query(資料庫連線, "語法內容") 為執行sql語法的函式
  mysqli_query($_SESSION['link'], "SET NAMES utf8");
  //echo "已正確連線";
}
else
{
  //否則就代表連線失敗 mysqli_connect_error() 是顯示連線錯誤訊息
  echo '無法連線mysql資料庫 :<br/>' . mysqli_connect_error();
}
?>