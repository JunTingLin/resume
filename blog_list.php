<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'php/db.php';

//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once 'php/functions.php';

$datas = get_blogs();
?>

<section data-id="blog" class="animated-section">
    <div class="page-title">
        <h2>部落格</h2>
    </div>

    <div class="section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="blog-masonry two-columns clearfix">

                    <?php foreach ($datas as $row) : ?>
                        <!-- Blog Post -->
                        <div class="item post-1">
                            <div class="blog-card">
                                <div class="media-block">
                                    <div class="category">
                                        <a href="#"><?php echo $row["category"] ?></a>
                                    </div>
                                    <a href="blog.php?i=<?php echo $row["id"] ?>">
                                        <img src="<?php echo $row["cover"] ?>" class="size-blog-masonry-image-two-c" alt="" title="" />
                                        <div class="mask"></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <?php if ($row["date_end"] == null) : ?>
                                        <div class="post-date"><?php echo $row["date_start"] ?></div>
                                    <?php else : ?>
                                        <div class="post-date"><?php echo $row["date_start"]." ~ ".$row["date_end"] ?> </div>
                                    <?php endif; ?>
                                    <a href="blog.php?i=<?php echo $row["id"] ?>">
                                        <h4 class="blog-item-title"><?php echo $row["title"] ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post -->

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>


</section>