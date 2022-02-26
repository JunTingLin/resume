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

//取得部落格資料，從網址上的 i 取得文章id
$data = get_certificate($_GET['i']);
if (is_null($data)) {
  //如果文章是null就轉回列表頁
  header("Location: resume_list.php");
}
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <title>作品網站-後台編輯證書</title>
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
          <form id="edit_certificate_form">
            <input type="hidden" id="id" value="<?php echo $data['id']; ?>">
            <div class="form-group">
              <label for="name">證照名稱 </label>
              <input type="input" class="form-control" id="name" value="<?php echo $data['name']; ?>"></input>
            </div>

            <div class="form-group">
              <label for="serial_number">證書ID </label>
              <input type="input" class="form-control" id="serial_number" value="<?php echo $data['serial_number']; ?>"></input>
            </div>

            <div class="form-group">
              <label for="score">分數 </label>
              <input type="input" class="form-control" id="score" value="<?php echo $data['score']; ?>"></input>
            </div>

            <div class="form-group">
              <label for="image_path">封面位置</label>
              <input type="file" name="image_path" accept="image/gif, image/jpeg, image/png">
              <input type="hidden" id="image_path" value="<?php echo $data['cover']; ?>">
              <div class="image">
                <?php if ($data['cover'] && file_exists("../" . $data['cover'])) : ?>
                  <img src='<?php echo "../" . $data['cover']; ?>'>
                <?php endif; ?>
              </div>
              <a href='javascript:void(0);' class="del_image btn btn-default">刪除照片</a>
            </div>

            <div class="form-group">
              <label for="pdf_path">pdf證書路徑</label>
              <input type="file" name="pdf_path" accept=".pdf">
              <input disabled id="pdf_path" value="<?php echo $data['path']; ?>">
              <a href='javascript:void(0);' class="del_pdf btn btn-default">刪除檔案</a>
            </div>

            <div class="form-group">
              <label for="date">取得日期 </label>
              <input type="date" class="form-control" id="date" value="<?php echo $data['date']; ?>"></input>
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
      $("input[name='image_path']").on("change", function() {
        //產生 FormData 物件
        var file_data = new FormData(),
          file_name = $(this)[0].files[0]['name'],
          save_path = "img/clients/";

        //在圖片區塊，顯示loading
        $("div.image").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

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
            $("div.image").html("<img src='../" + save_path + file_name + "'>");
            //給予 #image_path 值，等等存檔時會用
            $("#image_path").val(save_path + file_name);
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

      $("a.del_image").on("click", function() {
        //如果有圖片路徑，就刪除該檔案
        if ($("#image_path").val() != '') {
          //透過ajax刪除
          $.ajax({
            type: 'POST',
            url: '../php/del_file.php',
            data: {
              "file": $("#image_path").val()
            },
            dataType: 'html'
          }).done(function(data) {
            //上傳成功
            if (data == "yes") {
              //將圖片標籤移除，並清空目前設定路徑
              $("div.image").html("");
              //給予 #image_path 值，等等存檔時會用
              $("#image_path").val('');
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

      /**
       * 檔案上傳
       */
      //上傳圖片的input更動的時候
      $("input[name='pdf_path']").on("change", function() {
        //產生 FormData 物件
        var file_data = new FormData(),
          file_name = $(this)[0].files[0]['name'],
          save_path = "doc/";


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
            //給予 #pdf_path 值，等等存檔時會用
            $("#pdf_path").val(save_path + file_name);
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
       * 刪除檔案
       */

      $("a.del_pdf").on("click", function() {
        //如果有圖片路徑，就刪除該檔案
        if ($("#image_path").val() != '') {
          //透過ajax刪除
          $.ajax({
            type: 'POST',
            url: '../php/del_file.php',
            data: {
              "file": $("#pdf_path").val()
            },
            dataType: 'html'
          }).done(function(data) {
            //上傳成功
            if (data == "yes") {
              //給予 #image_path 值，等等存檔時會用
              $("#pdf_path").val('');
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
      $("#edit_certificate_form").on("submit", function() {
        //加入loading icon
        $("div.loading").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');

        if ($("#name").val() == '') {
          alert("標題未填寫");

          //清掉 loading icon
          $("div.loading").html('');
        } else {
          //使用 ajax 送出 
          $.ajax({
            type: "POST",
            url: "../php/update_certificate.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 update_certificate.php
            data: {
              id: $("#id").val(), //id
              name: $("#name").val(), //名稱
              serial_number: $("#serial_number").val(), //ID序號
              score: $("#score").val(), //分數
              image_path: $("#image_path").val(), //封面
              pdf_path: $("#pdf_path").val(), //pdf路徑
              date: $("#date").val(), //日期

            },
            dataType: 'html' //設定該網頁回應的會是 html 格式
          }).done(function(data) {

            //成功的時候
            if (data == "yes") {
              //更新成功，轉跳到登入頁面。
              alert("更新成功，點擊確認回列表");
              window.location.href = "resume_list.php";
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


    });
  </script>
</body>

</html>