<?php
//判斷網址假如含有index.php，網址列就不需要補上index.php
$str =  strpos($_SERVER['PHP_SELF'], "index.php") != false ? "" : "index.php";
// echo $str;

?>
<header id="site_header" class="header mobile-menu-hide">
    <div class="header-content">
        <div class="header-photo">
            <img src="img/main_photo.jpg" alt="林俊霆">
        </div>
        <div class="header-titles">
            <h2>林俊霆</h2>
            <h4>Lin, Jun-Ting</h4>
        </div>
    </div>

    <ul class="main-menu">
        <li>
            <a href="<?php echo $str ?>#home" class="nav-anim">
                <span class="menu-icon lnr lnr-home"></span>
                <span class="link-text">首頁</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $str ?>#about-me" class="nav-anim">
                <span class="menu-icon lnr lnr-user"></span>
                <span class="link-text">關於我</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $str ?>#resume" class="nav-anim">
                <span class="menu-icon lnr lnr-graduation-hat"></span>
                <span class="link-text">個人簡歷</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $str ?>#portfolio" class="nav-anim">
                <span class="menu-icon lnr lnr-briefcase"></span>
                <span class="link-text">我的作品</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $str ?>#blog" class="nav-anim">
                <span class="menu-icon lnr lnr-book"></span>
                <span class="link-text">部落格</span>
            </a>
        </li>
        <li>
            <a href="<?php echo $str ?>#contact" class="nav-anim">
                <span class="menu-icon lnr lnr-envelope"></span>
                <span class="link-text">聯絡我</span>
            </a>
        </li>
    </ul>

    <div class="social-links">
        <ul>
            <li><a href="https://github.com/JunTingLin" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100009889784302" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/timothy_lin_91218/" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>

    <div class="header-buttons">
        <a href="doc/CV.pdf" target="_blank" class="btn btn-primary">Download CV</a>
    </div>
    <div class="header-buttons">
        <a href="login.php"  class="btn btn-primary"><span class="menu-icon lnr lnr-lock"></span>登入</a>
    </div>
    
    

    <div class="copyrights">© <?php echo date("Y") ?> JungTing All rights reserved.</div>

    

</header>