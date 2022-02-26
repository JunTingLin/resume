<?php
//啟動 session ，這樣才能夠取用 $_SESSION['link'] 的連線，做為資料庫的連線用
@session_start();

/**
 * 取得所有經驗
 */
function get_experiences()
{
  //宣告空的陣列
  $datas = array();

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `experiences`;";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
    if (mysqli_num_rows($query) > 0) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query)) {
        $datas[] = $row;
      }
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $datas;
}
/**
 * 取得單筆經驗
 */
function get_experience($id)
{
  //宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `experiences` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) == 1) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      $result = mysqli_fetch_assoc($query);
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}


/**
 * 取得所有技能
 */
function get_skills()
{
  //宣告空的陣列
  $datas = array();

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `skills`;";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
    if (mysqli_num_rows($query) > 0) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query)) {
        $datas[] = $row;
      }
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $datas;
}
/**
 * 取得單筆技能
 */
function get_skill($id)
{
  //宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `skills` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) == 1) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      $result = mysqli_fetch_assoc($query);
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 取得所有知識
 */
function get_knowledges()
{
  //宣告空的陣列
  $datas = array();

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `knowledges`;";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
    if (mysqli_num_rows($query) > 0) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query)) {
        $datas[] = $row;
      }
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $datas;
}


/**
 * 取得所有證書
 */
function get_certificates()
{
  //宣告空的陣列
  $datas = array();

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `certificates`;";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
    if (mysqli_num_rows($query) > 0) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query)) {
        $datas[] = $row;
      }
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $datas;
}
/**
 * 取得單篇證書
 */
function get_certificate($id)
{
  //宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `certificates` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) == 1) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      $result = mysqli_fetch_assoc($query);
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }
  //回傳結果
  return $result;
}

/**
 * 取得所有作品
 */
function get_works()
{
  //宣告空的陣列
  $datas = array();

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `works`;";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
    if (mysqli_num_rows($query) > 0) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query)) {
        $datas[] = $row;
      }
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $datas;
}

/**
 * 取得單篇作品
 */
function get_work($id)
{
  //宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `works` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) == 1) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      $result = mysqli_fetch_assoc($query);
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}


/**
 * 取得所有部落格文章
 */
function get_blogs()
{
  //宣告空的陣列
  $datas = array();

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `blogs`;";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
    if (mysqli_num_rows($query) > 0) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      while ($row = mysqli_fetch_assoc($query)) {
        $datas[] = $row;
      }
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $datas;
}

/**
 * 取得單篇部落格文章
 */
function get_blog($id)
{
  //宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `blogs` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) == 1) {
      //取得的量大於0代表有資料
      //while迴圈會根據查詢筆數，決定跑的次數
      //mysqli_fetch_assoc 方法取得 一筆值
      $result = mysqli_fetch_assoc($query);
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 檢查資料庫有無該使用者名稱
 */
function verify_user($username, $password)
{
  //宣告要回傳的結果
  $result = null;
  //先把密碼用md5加密
  $password = md5($password);
  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `user` WHERE `username` = '{$username}' AND `password` = '{$password}'";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_num_rows 回傳 $query 請求的結果數量有幾筆，為一筆代表找到會員且密碼正確。
    if (mysqli_num_rows($query) == 1) {
      //取得使用者資料
      $user = mysqli_fetch_assoc($query);

      //在session李設定 is_login 並給 true 值，代表已經登入
      $_SESSION['is_login'] = TRUE;
      //紀錄登入者的id，之後若要隨時取得使用者資料時，可以透過 $_SESSION['login_user_id'] 取用
      $_SESSION['login_user_id'] = $user['id'];

      //回傳的 $result 就給 true 代表驗證成功
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 新增作品
 */
function add_work($title, $category, $intro, $team, $teacher, $website, $technology, $image_path1, $image_path2, $image_path3, $image_path4, $image_path5)
{
  //宣告要回傳的結果
  $result = null;


  //上傳時間
  $upload_date = date("Y-m-d");


  //處理圖片路徑
  $image_path_value1 = "'{$image_path1}'";
  if ($image_path1 == '') $image_path_value1 = 'NULL';

  $image_path_value2 = "'{$image_path2}'";
  if ($image_path2 == '') $image_path_value2 = 'NULL';

  $image_path_value3 = "'{$image_path3}'";
  if ($image_path3 == '') $image_path_value3 = 'NULL';

  $image_path_value4 = "'{$image_path4}'";
  if ($image_path4 == '') $image_path_value4 = 'NULL';

  $image_path_value5 = "'{$image_path5}'";
  if ($image_path5 == '') $image_path_value5 = 'NULL';



  //新增語法
  $sql = "INSERT INTO `works` (`title`, `category`, `intro`, `team`, `teacher`, `website`, `technology`,`cover`, `pic1`, `pic2`, `pic3`, `pic4`, `upload_date`)
  				VALUE ('{$title}', '{$category}', '{$intro}', '{$team}', '{$teacher}', '{$website}',  '{$technology}', '{$image_path1}', '{$image_path2}', '{$image_path3}', '{$image_path4}', '{$image_path5}', '{$upload_date}');";


  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 刪除作品
 */
function del_work($id)
{
  //宣告要回傳的結果
  $result = null;

  //先取得該作品資訊，作為之後要刪除檔案用，此用本檔案中的 get_work 方法來取得作品資訊。
  $work = get_work($id);

  if ($work) {
    //有作品才進行刪除工作
    //若有圖檔資料，以及圖檔有存在，就刪除
    if ($work['cover'] && file_exists("../" . $work['cover'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $work['cover']);
    }
    if ($work['pic1'] && file_exists("../" . $work['pic1'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $work['pic1']);
    }
    if ($work['pic2'] && file_exists("../" . $work['pic2'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $work['pic2']);
    }
    if ($work['pic3'] && file_exists("../" . $work['pic3'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $work['pic3']);
    }
    if ($work['pic4'] && file_exists("../" . $work['pic4'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $work['pic4']);
    }



    //刪除作品語法
    $sql = "DELETE FROM `works` WHERE `id` = {$id};";

    //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
    $query = mysqli_query($_SESSION['link'], $sql);

    //如果請求成功
    if ($query) {
      //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
      if (mysqli_affected_rows($_SESSION['link']) == 1) {
        //取得的量大於0代表有資料
        //回傳的 $result 就給 true 代表有該帳號，不可以被新增
        $result = true;
      }
    } else {
      echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
    }
  }

  //回傳結果
  return $result;
}

/**
 * 更新作品
 */
function update_work($id, $title, $category, $intro, $team, $teacher, $website, $technology, $image_path1, $image_path2, $image_path3, $image_path4, $image_path5)
{
  //宣告要回傳的結果
  $result = null;



  //更新語法
  $sql = "UPDATE `works` SET `title` = '{$title}', `category` = '{$category}', `intro` = '{$intro}', `team` = '{$team}', `teacher` = '{$teacher}', `website` = '{$website}', `technology` = '{$technology}', `cover` = '{$image_path1}', `pic1` = '{$image_path2}', `pic2` = '{$image_path3}', `pic3` = '{$image_path4}', `pic4` = '{$image_path5}'
  				  WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 新增部落格
 */
function add_blog($title, $category, $intro, $people, $tag, $image_path1, $image_path2, $date_start, $date_end)
{
  //宣告要回傳的結果
  $result = null;

  //新增語法
  $sql = "INSERT INTO `blogs` (`title`, `category`, `intro`, `people`, `tag`, `cover`, `pic`,`date_start`, `date_end`)
  				VALUE ('{$title}', '{$category}', '{$intro}', '{$people}', '{$tag}', '{$image_path1}',  '{$image_path2}', '{$date_start}', '{$date_end}');";


  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 刪除部落格
 */
function del_blog($id)
{
  //宣告要回傳的結果
  $result = null;

  //先取得該作品資訊，作為之後要刪除檔案用，此用本檔案中的 get_work 方法來取得作品資訊。
  $blog = get_blog($id);

  if ($blog) {
    //有作品才進行刪除工作
    //若有圖檔資料，以及圖檔有存在，就刪除
    if ($blog['cover'] && file_exists("../" . $blog['cover'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $blog['cover']);
    }
    if ($blog['pic'] && file_exists("../" . $blog['pic'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $blog['pic']);
    }




    //刪除作品語法
    $sql = "DELETE FROM `blogs` WHERE `id` = {$id};";

    //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
    $query = mysqli_query($_SESSION['link'], $sql);

    //如果請求成功
    if ($query) {
      //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
      if (mysqli_affected_rows($_SESSION['link']) == 1) {
        //取得的量大於0代表有資料
        //回傳的 $result 就給 true 代表有該帳號，不可以被新增
        $result = true;
      }
    } else {
      echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
    }
  }

  //回傳結果
  return $result;
}

/**
 * 更新部落格
 */
function update_blog($id, $title, $category, $intro, $people, $tag, $image_path1, $image_path2, $date_start, $date_end)
{
  //宣告要回傳的結果
  $result = null;


  //更新語法
  $sql = "UPDATE `blogs` SET `title` = '{$title}', `category` = '{$category}', `intro` = '{$intro}', `people` = '{$people}', `tag` = '{$tag}', `cover` = '{$image_path1}', `pic` = '{$image_path2}', `date_start` = '{$date_start}', `date_end` = '{$date_end}'
  				  WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 新增經驗
 */
function add_experience($title, $subtitle, $category, $intro, $date_start, $date_end)
{
  //宣告要回傳的結果
  $result = null;

  //新增語法
  $sql = "INSERT INTO `experiences` (`title`, `subtitle`, `category`, `intro`, `date_start`, `date_end`)
  				VALUE ('{$title}', '{$subtitle}', '{$category}', '{$intro}', '{$date_start}', '{$date_end}');";


  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}
/**
 * 刪除經驗
 */
function del_experience($id)
{
  //宣告要回傳的結果
  $result = null;

  //刪除作品語法
  $sql = "DELETE FROM `experiences` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 更新經驗
 */
function update_experience($id, $title, $subtitle, $category, $intro, $date_start, $date_end)
{
  //宣告要回傳的結果
  $result = null;


  //更新語法
  $sql = "UPDATE `experiences` SET `title` = '{$title}', `subtitle` = '{$subtitle}', `category` = '{$category}', `intro` = '{$intro}', `date_start` = '{$date_start}', `date_end` = '{$date_end}'
  				  WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}
/**
 * 新增技能
 */
function add_skill($category, $name, $percent)
{
  //宣告要回傳的結果
  $result = null;

  //新增語法
  $sql = "INSERT INTO `skills` (`category`, `name`, `percent`)
  				VALUE ('{$category}', '{$name}', '{$percent}');";


  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}
/**
 * 刪除經驗
 */
function del_skill($id)
{
  //宣告要回傳的結果
  $result = null;

  //刪除作品語法
  $sql = "DELETE FROM `skills` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}
/**
 * 更新技能
 */
function update_skill($id, $category, $name, $percent)
{
  //宣告要回傳的結果
  $result = null;


  //更新語法
  $sql = "UPDATE `skills` SET `category` = '{$category}', `name` = '{$name}', `percent` = '{$percent}'
  				  WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 新增知識
 */
function add_knowledge($name)
{
  //宣告要回傳的結果
  $result = null;

  //新增語法
  $sql = "INSERT INTO `knowledges` (`name`)
  				VALUE ('{$name}');";


  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}
/**
 * 刪除知識
 */
function del_knowledge($id)
{
  //宣告要回傳的結果
  $result = null;

  //刪除作品語法
  $sql = "DELETE FROM `knowledges` WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}


/**
 * 新增證書
 */
function add_certificate($name, $serial_number, $score, $image_path, $pdf_path, $date)
{
  //宣告要回傳的結果
  $result = null;

  //新增語法
  $sql = "INSERT INTO `certificates` (`name`, `serial_number`, `score`, `cover`, `path`,`date`)
  				VALUE ('{$name}', '{$serial_number}', '{$score}', '{$image_path}', '{$pdf_path}', '{$date}');";


  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}

/**
 * 刪除證書
 */
function del_certificate($id)
{
  //宣告要回傳的結果
  $result = null;

  //先取得該作品資訊，作為之後要刪除檔案用，此用本檔案中的 get_work 方法來取得作品資訊。
  $certificate = get_certificate($id);

  if ($certificate) {
    //有作品才進行刪除工作
    //若有圖檔資料，以及圖檔有存在，就刪除
    if ($certificate['cover'] && file_exists("../" . $certificate['cover'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $certificate['cover']);
    }
    if ($certificate['path'] && file_exists("../" . $certificate['path'])) {
      //unlink 為刪除檔案的方法，把上一層找到 files/ 裡面的檔案，做刪除
      unlink("../" . $certificate['path']);
    }




    //刪除作品語法
    $sql = "DELETE FROM `certificates` WHERE `id` = {$id};";

    //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
    $query = mysqli_query($_SESSION['link'], $sql);

    //如果請求成功
    if ($query) {
      //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
      if (mysqli_affected_rows($_SESSION['link']) == 1) {
        //取得的量大於0代表有資料
        //回傳的 $result 就給 true 代表有該帳號，不可以被新增
        $result = true;
      }
    } else {
      echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
    }
  }

  //回傳結果
  return $result;
}

/**
 * 更新證書
 */
function update_certificate($id, $name, $serial_number, $score, $image_path, $pdf_path, $date)
{
  //宣告要回傳的結果
  $result = null;


  //更新語法
  $sql = "UPDATE `certificates` SET `name` = '{$name}', `serial_number` = '{$serial_number}', `score` = '{$score}', `cover` = '{$image_path}', `path` = '{$pdf_path}', `date` = '{$date}'
  				  WHERE `id` = {$id};";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query) {
    //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
    if (mysqli_affected_rows($_SESSION['link']) == 1) {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    } else {
      echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
    }
  }

  //回傳結果
  return $result;
}
