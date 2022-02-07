<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'php/db.php';

//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once 'php/functions.php';

$blog = get_blog($_GET['i']);
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

          <article class="post">

            <div class="post-thumbnail">
              <img src="<?php echo $blog["pic"] ?>" alt="image">
            </div>

            <div class="post-content">
              <!-- /Entry header -->
              <header class="entry-header">
                <!-- Entry meta -->
                <div class="entry-meta entry-meta-top">
                  <span><a href="#" rel="category tag"><?php echo $blog["category"] ?></a></span>
                </div>
                <!-- /Entry meta -->

                <h2 class="entry-title"><?php echo $blog["title"] ?></h2>
              </header>
              <!-- /Entry header -->

              <!-- Entry content -->
              <div class="entry-content">
                <div class="row">
                  <div class=" col-xs-12 col-sm-12 ">
                    <div class="col-inner">
                      <p><?php echo $blog["intro"] ?></p>


                    </div>
                  </div>
                </div>
              </div>
              <!-- /Entry content -->

              <div class="entry-meta entry-meta-bottom">
                <div class="date-author">
                  <span class="entry-date">
                    <a href="#" rel="bookmark">
                      <?php if ($blog["date_end"] == null) : ?>
                        <i class="far fa-clock"></i> <span class="entry-date"> <?php echo $blog["date_start"] ?></span>
                      <?php else : ?>
                        <i class="far fa-clock"></i> <span class="entry-date"> <?php echo $blog["date_start"] . " ~ " . $blog["date_end"] ?></span>
                      <?php endif; ?>
                    </a>
                  </span>
                  <span class="author vcard">
                    <a class="url fn n" href="#" rel="author"> <i class="fas fa-user"></i> <?php echo $blog["people"] ?></a>
                  </span>
                </div>

                <!-- Share Buttons -->
                <div class="entry-share btn-group share-buttons">
                  <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Facebook">
                    <i class="fab fa-facebook-f"></i>
                  </a>

                  <a href="#" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn" target="_blank" title="Share on Twitter">
                    <i class="fab fa-twitter"></i>
                  </a>

                  <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn" title="Share on LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
                <!-- /Share Buttons -->
              </div>

              <div class="post-tags">
                <div class="tags">
                  <!-- php分割字串 -->
                  <?php foreach (mb_split("、", $blog["tag"]) as $a_tag) : ?>
                    <a href="#" rel="tag"><?php echo $a_tag ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </article>

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

</html>