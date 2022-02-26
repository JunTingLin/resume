<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，另外後台都會用 session 判別暫存資料，所以要請求 db.php 因為該檔案最上方有啟動session_start()。
require_once '../php/db.php';
require_once '../php/functions.php';
//print_r($_SESSION); //查看目前session內容

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
if (!isset($_SESSION['is_login']) || !$_SESSION['is_login']) {
  //直接轉跳到 login.php
  header("Location: ../login.php");
}

//取得所有文章
$experiences = get_experiences();
$skills = get_skills();
$knowledges = get_knowledges();
$certificates = get_certificates()

?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <title>作品網站-後台簡歷列表</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
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
          <a href='experience_add.php' class="btn btn-info">新增經驗</a>
        </div>
        <div class="col-xs-12">
          <!-- 資料列表 -->
          <table class="table table-hover table-responsive">
            <caption>experiences talbe</caption>
            <thead>
              <tr>
                <th>學校名稱or工作</th>
                <th>系/班級or職位</th>
                <th>類別</th>
                <th>簡介</th>
                <th>開始日期</th>
                <th>結束日期</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($experiences) : ?>
                <?php foreach ($experiences as $experience) : ?>
                  <tr>
                    <td><?php echo $experience['title']; ?></td>
                    <td><?php echo $experience['subtitle']; ?></td>
                    <td><?php echo $experience['category']; ?></td>
                    <td><?php echo mb_substr($experience['intro'], 0, 15, "UTF-8") . "<br>... MORE"; ?></td>
                    <td><?php echo $experience['date_start']; ?></td>
                    <td><?php echo $experience['date_end']; ?></td>
                    <td>
                      <a href='experience_edit.php?i=<?php echo $experience['id']; ?>' class="btn btn-success">編輯</a>
                      <a href='javascript:void(0);' class='btn btn-danger del_experience' data-id="<?php echo $experience['id']; ?>">刪除</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="5">無資料</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="col-xs-6">
          <a href='skill_add.php' class="btn btn-info">新增技能</a>
        </div>
        <div class="col-xs-6">
          <a href='knowledge_add.php' class="btn btn-info">新增知識標籤</a>
        </div>
        <div class="col-xs-6">
          <table class="table table-hover table-responsive">
            <caption>skills talbe</caption>
            <thead>
              <tr>
                <th>種類</th>
                <th>技能名稱</th>
                <th>百分比%</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($skills) : ?>
                <?php foreach ($skills as $skill) : ?>
                  <tr>
                    <td><?php echo $skill['category']; ?></td>
                    <td><?php echo $skill['name']; ?></td>
                    <td><?php echo $skill['percent']; ?></td>
                    <td>
                      <a href='skill_edit.php?i=<?php echo $skill['id']; ?>' class="btn btn-success">編輯</a>
                      <a href='javascript:void(0);' class='btn btn-danger del_skill' data-id="<?php echo $skill['id']; ?>">刪除</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="5">無資料</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <div class="col-xs-6">
          <table class="table table-hover table-responsive">
            <caption>knowledges talbe</caption>
            <thead>
              <tr>
                <th>標籤名稱</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($knowledges) : ?>
                <?php foreach ($knowledges as $knowledge) : ?>
                  <tr>
                    <td><?php echo $knowledge['name']; ?></td>
                    <td>
                      <a href='javascript:void(0);' class='btn btn-danger del_knowledge' data-id="<?php echo $knowledge['id']; ?>">刪除</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="5">無資料</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="col-xs-12">
          <a href='certificate_add.php' class="btn btn-info">新增證書</a>
        </div>
        <div class="col-xs-12">
          <!-- 資料列表 -->
          <table class="table table-hover table-responsive">
            <caption>certificates talbe</caption>
            <thead>
              <tr>
                <th>證照名稱</th>
                <th>證書ID</th>
                <th>分數</th>
                <th>封面位置</th>
                <th>pdf證書路徑</th>
                <th>日期</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($certificates) : ?>
                <?php foreach ($certificates as $certificate) : ?>
                  <tr>
                    <td><?php echo $certificate['name']; ?></td>
                    <td><?php echo $certificate['serial_number']; ?></td>
                    <td><?php echo $certificate['score']; ?></td>
                    <td><?php echo $certificate['cover']; ?></td>
                    <td><?php echo $certificate['path']; ?></td>
                    <td><?php echo $certificate['date']; ?></td>
                    <td>
                      <a href='certificate_edit.php?i=<?php echo $certificate['id']; ?>' class="btn btn-success">編輯</a>
                      <a href='javascript:void(0);' class='btn btn-danger del_certificate' data-id="<?php echo $certificate['id']; ?>">刪除</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td colspan="5">無資料</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
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

      //刪除1
      $("a.del_experience").on("click", function() {
        //宣告變數
        var c = confirm("您確定要刪除嗎？"),
          this_tr = $(this).parent().parent();
        if (c) {
          $.ajax({
            type: "POST",
            url: "../php/del_experience.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
            data: {
              id: $(this).attr("data-id") //文章id
            },
            dataType: 'html' //設定該網頁回應的會是 html 格式
          }).done(function(data) {
            //成功的時候

            if (data == "yes") {
              //註冊新增成功，轉跳到登入頁面。
              alert("刪除成功，點擊確認從列表移除");
              this_tr.fadeOut();
            } else {
              alert("刪除錯誤:" + data);
            }

          }).fail(function(jqXHR, textStatus, errorThrown) {
            //失敗的時候
            alert("有錯誤產生，請看 console log");
            console.log(jqXHR.responseText);
          });
        }
        return false;
      });

      //刪除2
      $("a.del_skill").on("click", function() {
        //宣告變數
        var c = confirm("您確定要刪除嗎？"),
          this_tr = $(this).parent().parent();
        if (c) {
          $.ajax({
            type: "POST",
            url: "../php/del_skill.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
            data: {
              id: $(this).attr("data-id") //文章id
            },
            dataType: 'html' //設定該網頁回應的會是 html 格式
          }).done(function(data) {
            //成功的時候

            if (data == "yes") {
              //註冊新增成功，轉跳到登入頁面。
              alert("刪除成功，點擊確認從列表移除");
              this_tr.fadeOut();
            } else {
              alert("刪除錯誤:" + data);
            }

          }).fail(function(jqXHR, textStatus, errorThrown) {
            //失敗的時候
            alert("有錯誤產生，請看 console log");
            console.log(jqXHR.responseText);
          });
        }
        return false;
      });


      //刪除3
      $("a.del_knowledge").on("click", function() {
        //宣告變數
        var c = confirm("您確定要刪除嗎？"),
          this_tr = $(this).parent().parent();
        if (c) {
          $.ajax({
            type: "POST",
            url: "../php/del_knowledge.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
            data: {
              id: $(this).attr("data-id") //文章id
            },
            dataType: 'html' //設定該網頁回應的會是 html 格式
          }).done(function(data) {
            //成功的時候

            if (data == "yes") {
              //註冊新增成功，轉跳到登入頁面。
              alert("刪除成功，點擊確認從列表移除");
              this_tr.fadeOut();
            } else {
              alert("刪除錯誤:" + data);
            }

          }).fail(function(jqXHR, textStatus, errorThrown) {
            //失敗的時候
            alert("有錯誤產生，請看 console log");
            console.log(jqXHR.responseText);
          });
        }
        return false;
      });

      //刪除4
      $("a.del_certificate").on("click", function() {
        //宣告變數
        var c = confirm("您確定要刪除嗎？"),
          this_tr = $(this).parent().parent();
        if (c) {
          $.ajax({
            type: "POST",
            url: "../php/del_certificate.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
            data: {
              id: $(this).attr("data-id") //文章id
            },
            dataType: 'html' //設定該網頁回應的會是 html 格式
          }).done(function(data) {
            //成功的時候

            if (data == "yes") {
              //註冊新增成功，轉跳到登入頁面。
              alert("刪除成功，點擊確認從列表移除");
              this_tr.fadeOut();
            } else {
              alert("刪除錯誤:" + data);
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