<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'php/db.php';

//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once 'php/functions.php';

$work = get_work($_GET['i']);
?>

<!DOCTYPE html>
<html lang="zh-TW" class="no-js">

<head>
    <?php 
    include_once 'head.php';
    include_once 'js_quote.php';
    //work這頁因為有照片幻燈片的關係，故引用於head區塊
    ?>
    
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

    <div class="">
        <div class="">


            <div id="ajax-page" class="ajax-page-content">
                <div class="ajax-page-wrapper">
                    <div class="ajax-page-nav">
                        <div class="nav-item ajax-page-prev-next">
                            <a class="ajax-page-load" href="portfolio-3.php"><i class="lnr lnr-chevron-left"></i></a>
                            <a class="ajax-page-load" href="portfolio-2.php"><i class="lnr lnr-chevron-right"></i></a>
                        </div>
                        <div class="nav-item">
                            <a href="index.php#portfolio"><i class="lnr lnr-cross"></i></a>
                        </div>
                    </div>

                    <div class="ajax-page-title">
                        <h1><?php echo $work["title"] ?></h1>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 col-md-8 portfolio-block">
                            <div class="owl-carousel portfolio-page-carousel">
                                <div class="item">
                                    <img src="<?php echo $work["pic1"] ?>" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo $work["pic2"] ?>" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo $work["pic3"] ?>" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo $work["pic4"] ?>" alt="" />
                                </div>
                            </div>


                            <p><i class="fa fa-bell" aria-hidden="true"></i> 此為部分內容，詳細請點隔壁連結網址</p>

                            <script type="text/javascript">
                                jQuery(document).ready(function($) {
                                    $('.portfolio-page-carousel').imagesLoaded(function() {
                                        $('.portfolio-page-carousel').owlCarousel({
                                            smartSpeed: 1200,
                                            items: 1,
                                            loop: true,
                                            dots: true,
                                            nav: true,
                                            navText: false,
                                            margin: 10,
                                            autoHeight: true
                                        });
                                    });
                                });
                            </script>
                        </div>

                        <div class="col-sm-4 col-md-4 portfolio-block">
                            <!-- Project Description -->
                            <div class="project-description">
                                <div class="block-title">
                                    <h3>說明</h3>
                                </div>
                                <ul class="project-general-info">
                                    <li>
                                        <p><i class="fa fa-user"></i> <?php echo $work["team"] ?></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-graduation-cap"></i>指導:<?php echo $work["teacher"] ?> 教授</p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-globe"></i> <a href="<?php echo $work["website"] ?>" target="_blank"><?php echo $work["title"] ?></a></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-calendar"></i> <?php echo $work["upload_date"] ?></p>
                                    </li>
                                </ul>

                                <p class="text-justify"><?php echo $work["intro"] ?></p>
                                <!-- /Project Description -->

                                <!-- Technology -->
                                <div class="tags-block">
                                    <div class="block-title">
                                        <h3>技術</h3>
                                    </div>
                                    <ul class="tags">
                                        <!-- php分割字串 -->
                                        <?php foreach (mb_split("、", $work["technology"]) as $a_tech) : ?>
                                            <li><a><?php echo $a_tech ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <!-- /Technology -->

                            </div>
                            <!-- Project Description -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>



</html>