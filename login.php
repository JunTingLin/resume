<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，因為此檔案放在 admin 裡，要找到 db.php 就要回上一層 ../php 裡面才能找到
require_once 'php/db.php';

//如過有 $_SESSION['is_login'] 這個值，以及 $_SESSION['is_login'] 為 true 都代表已登入
if (isset($_SESSION['is_login']) && $_SESSION['is_login']) {
    //直接轉跳到 index.php 後端首頁
    header("Location: backend/index.php");
}
?>
<!DOCTYPE html>
<html lang="zh-TW" class="no-js">

<head>
    <?php include_once 'head.php'; ?>
</head>

<body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
        <div class="page-content">

            <!-- 左側導覽列 -->
            <?php include_once 'nav.php'; ?>

            <div class="content-area single-page-area">
                <div class="single-page-content">
                    <div class="section-content vcentered">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <h1 id="login_title">後台登入</h1>
                                <form class="login">
                                    <div class="form-group">
                                        <label for="username">帳號</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="請輸入帳號" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">密碼</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
                                    </div>
                                    <button type="submit" class="btn btn-default">
                                        登入
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src='js/perfect-scrollbar.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
</body>