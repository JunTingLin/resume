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

      <!-- Mobile Navigation -->
      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- End Mobile Navigation -->

      <!-- Arrows Nav -->
      <div class="lmpixels-arrows-nav">
        <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
        <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
      </div>
      <!-- End Arrows Nav -->

      <div class="content-area">
        <div class="animated-sections">
          <!-- Home Subpage -->
          <section data-id="home" class="animated-section start-page">
            <div class="section-content vcentered">

              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="title-block">
                    <!-- <h2>林俊霆</h2> -->
                    <img src="img/myName_Ch.png">
                    <div class="owl-carousel text-rotation">
                      <div class="item">
                        <div class="sp-subtitle">全端工程師</div>
                      </div>

                      <div class="item">
                        <div class="sp-subtitle">美工設計</div>
                      </div>

                      <div class="item">
                        <div class="sp-subtitle">影片剪輯</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End of Home Subpage -->

          <!-- About Me Subpage -->
          <?php include_once 'about_me.php'; ?>
          <!-- End of About Me Subpage -->

          <!-- Resume Subpage -->
          <?php include_once 'resume.php'; ?>
          <!-- End of Resume Subpage -->

          <!-- portfolio Subpage -->
          <?php include_once 'work_list.php'; ?>
          <!-- End of portfolio Subpage -->

          <!-- Blog Subpage -->
          <?php include_once 'blog_list.php'; ?>
          <!-- End of Blog Subpage -->

          <!-- Contact Subpage -->
          <?php include_once 'contact.php'; ?>
          <!-- End of Contact Subpage -->


        </div>
      </div>

    </div>
  </div>

  <?php
  include_once 'js_quote.php';
  ?>
</body>

</html>