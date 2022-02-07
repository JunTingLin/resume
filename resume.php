<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫
require_once 'php/db.php';

//載入 functions.php 檔案，透過裡面的方法取得資料庫的資料
require_once 'php/functions.php';

$experiences = get_experiences();
$skills = get_skills();
$certificates = get_certificates();
$knowledges = get_knowledges();

?>

<section data-id="resume" class="animated-section">
    <div class="page-title">
        <h2>個人簡歷</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <div class="col-xs-12 col-sm-7">

                <div class="block-title">
                    <h3>教育背景</h3>
                </div>

                <div class="timeline timeline-second-style clearfix">
                    <?php foreach ($experiences as $an_exp) : ?>
                        <?php if ($an_exp["category"] == "教育") : ?>
                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period"><?php echo date("Y-m", strtotime($an_exp["date_start"])) . "~<br>" . date("Y-m", strtotime($an_exp["date_end"])); ?></h5>
                                    <span class="item-company"><?php echo $an_exp["title"] ?></span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title"><?php echo $an_exp["subtitle"] ?></h4>
                                    <p><?php echo $an_exp["intro"] ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="white-space-50"></div>

                <div class="block-title">
                    <h3>工作經驗</h3>
                </div>

                <div class="timeline timeline-second-style clearfix">
                    <?php foreach ($experiences as $an_exp) : ?>
                        <?php if ($an_exp["category"] == "工作") : ?>
                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">2020.07 - 2020.08</h5>
                                    <span class="item-company">家教</span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title">電腦影片剪輯</h4>
                                    <p>輔到學生使用剪輯軟體-威力導演完成影片專案，自編教材，從0到1，帶學生入手</p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>


            </div>

            <!-- Skills & Certificates -->
            <div class="col-xs-12 col-sm-5">
                <!-- Design Skills -->
                <div class="block-title">
                    <h3>設計/排版/後製 <span>技能</span></h3>
                </div>

                <div class="skills-info skills-second-style">
                    <?php foreach ($skills as $skill) : ?>
                        <?php if ($skill["category"] == "美術") : ?>
                            <div class="skill clearfix">
                                <h4><?php echo $skill["name"] ?></h4>
                                <div class="skill-value"><?php echo $skill["percent"] ?></div>
                            </div>
                            <div class="skill-container skill-1">
                                <div class="skill-percentage" style="width: <?php echo $skill["percent"] ?>%;"></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <!-- End of Design Skills -->

                <div class="white-space-10"></div>

                <!-- Coding Skills -->
                <div class="block-title">
                    <h3>程式設計 <span>技能</span></h3>
                </div>

                <div class="skills-info skills-second-style">
                    <?php foreach ($skills as $skill) : ?>
                        <?php if ($skill["category"] == "程式設計") : ?>
                            <div class="skill clearfix">
                                <h4><?php echo $skill["name"] ?></h4>
                                <div class="skill-value"><?php echo $skill["percent"] ?></div>
                            </div>
                            <div class="skill-container skill-1">
                                <div class="skill-percentage" style="width: <?php echo $skill["percent"] ?>%;"></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <!-- End of Coding Skills -->

                <div class="white-space-10"></div>

                <!-- Knowledges -->
                <div class="block-title">
                    <h3>知識</h3>
                </div>

                <ul class="knowledges">
                    <?php foreach($knowledges as $k){
                        echo "<li>{$k['name']}</li>";
                    }
                    ?>  
                </ul>
                <!-- End of Knowledges -->
            </div>
            <!-- End of Skills & Certificates -->
        </div>

        <div class="white-space-50"></div>

        <!-- Certificates -->
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>專業證照</h3>
                </div>
            </div>
        </div>

        <div class="row">

            <?php foreach ($certificates as $certificate) : ?>
                <div class="col-xs-12 col-sm-6">
                    <a href="<?php echo $certificate["path"] ?>" target="_blank">
                        <div class="certificate-item clearfix">
                            <div class="certi-logo">
                                <img src="<?php echo $certificate["cover"] ?>" alt="logo">
                            </div>

                            <div class="certi-content">
                                <div class="certi-title">
                                    <h4><?php echo $certificate["name"] ?></h4>
                                </div>

                                <?php if ( ! is_null($certificate["serial_number"])) : ?>
                                    <div class="certi-other">
                                        <span>ID: <?php echo $certificate["serial_number"] ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if ( ! is_null($certificate["score"])) : ?>
                                    <div class="certi-other">
                                        <span>score: <?php echo $certificate["score"] ?></span>
                                    </div>
                                <?php endif; ?>

                                <div class="certi-other">
                                    <span><?php echo $certificate["date"] ?></span>
                                </div>
                                <div class="certi-company">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- End of Certificates -->
    </div>
</section>