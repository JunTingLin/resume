<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'php/db.php';

//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once 'php/functions.php';

$datas = get_works();

?>


<section data-id="portfolio" class="animated-section">
    <div class="page-title">
        <h2>我的作品</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <!-- Portfolio Content -->
                <div class="portfolio-content">

                    <ul class="portfolio-filters">
                        <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">所有</a>
                        </li>
                        <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_project">專案</a>
                        </li>
                        <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_IG-videos">IG影片</a>
                        </li>
                        <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube影片</a>
                        </li>
                    </ul>

                    <!-- Portfolio Grid -->
                    <div class="portfolio-grid three-columns">
                        <?php foreach ($datas as $row) :
                            $c = "";
                            switch ($row["category"]) {
                                case "專案":
                                    $c = "category_project";
                                    break;
                                case "IG影片":
                                    $c = "category_IG-videos";
                                    break;
                                case "YouTube影片":
                                    $c = "category_youtube-videos";
                                    break;
                            }
                        ?>


                            <figure class="item standard" data-groups='["category_all", "<?php echo $c ?>"]'>
                                <div class="portfolio-item-img">
                                    <img src=<?php echo $row["cover"] ?> alt=<?php echo $row["title"] ?> title="" />
                                    <?php if ($row["category"] == "專案") : ?>
                                        <a href="work.php?i=<?php echo $row["id"] ?>" class=""></a>
                                    <?php else : ?>
                                        <a href="<?php echo $row["website"] ?>" class="lightbox mfp-iframe"></a>
                                    <?php endif; ?>
                                </div>

                                <i class="far fa-file-alt"></i>
                                <h4 class="name"><?php echo $row["title"] ?></h4>
                                <span class="category"><?php echo $row["category"] ?></span>
                            </figure>


                        <?php endforeach; ?>

                        
                    </div>
                </div>
                <!-- End of Portfolio Content -->
            </div>
        </div>
    </div>
</section>