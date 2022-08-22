-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3307
-- 產生時間： 2022-07-10 16:44:10
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL COMMENT '標題',
  `category` varchar(15) NOT NULL COMMENT '種類',
  `intro` text NOT NULL COMMENT '簡介',
  `people` varchar(30) NOT NULL COMMENT '人物',
  `tag` text NOT NULL COMMENT '標籤',
  `cover` text NOT NULL COMMENT '封面',
  `pic` text NOT NULL COMMENT '內文圖片',
  `date_start` date NOT NULL COMMENT '開始日期',
  `date_end` date DEFAULT NULL COMMENT '結束日期(可無)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category`, `intro`, `people`, `tag`, `cover`, `pic`, `date_start`, `date_end`) VALUES
(1, '迎新宿營', '活動', '迎新宿營算是人生中蠻重要的活動，看似不起眼的兩天一夜露營其實收穫很大，因為我個性比較文靜， 但宿營的學長姐們就是會逼每個都要玩都要參與，也因為這樣我打開偶包放膽去玩，有的是動頭腦的有的是動態遊戲的， 真的玩得不亦樂乎，也因此交到大學許多知己，這個活動可以說是開啟大學生活的閃耀大門。', '宿營-第一小隊', '露營、大學之路、遊戲、朋友', 'img/blog/Camping1.JPG', 'img/blog/Camping2.JPG', '2020-09-26', '2020-09-27'),
(2, '資管嘉年華-美宣組', '活動', '中央大學資管系資管嘉年華是大四學長姊們展現辛苦專題製作成果的活動，當時身為大一的我就主動加入活動策畫的一份子，我加入的是美宣組，主要負責海報製作、工作人員的名牌設計、拍貼機樣板圖片設計、場邊佈置、紀念品設計等等，並且在活動當天協助動線流程、拍照與攝影，光這個工作量可見要花非常多時間開會討論以及製作設計，還記得當初除了各組固定開會外，不同組(活動組、策展組)還要開三次籌會，兩次小籌，最後一次總籌。這個活動也讓我學習到Adobe Photoshop、Adobe Illustrator專業軟體、海報送印流程、攝影技巧、團隊合作等等，最後所有組員也去吃慶功宴慶祝這次活動的圓滿結束。', '美宣組組員', 'Photoshop、Illustrator、攝影、團隊合作、海報印刷', 'img/blog/MIS_carnival1.jpg', 'img/blog/MIS_carnival2.JPG', '2020-10-01', '2020-12-05'),
(3, '系學會-新聞部', '活動', '當初面試上系學會新聞部時非常興奮，因為新聞部負責的系上內容剛好是我的最愛， 我喜愛剪輯攝影，在新聞部跟同儕切磋後，更增進了我這方面的知識，在部內除了負責 系上活動的攝影外，還要剪輯各式系上活動宣傳片(運動會、資管之夜、密室逃脫、傳情、送舊)， 也在學校舉辦過攝影比賽，除了技術上的知識外，更重要的是學習團隊合作與溝通。', '109新聞部部員', '系學會、新聞部、團隊合作、Adobe Premiere Pro 攝影、部出遊', 'img/blog/MIS_club1.jpg', 'img/blog/MIS_club2.jpg', '2020-10-01', '2021-09-01'),
(4, '中央程式設計研究社', '活動', '加入程研社是我覺得收穫最多的，每次的社課都會請厲害的大神，舉凡學長姐或校友回來， 每次固定一個主題，印象較深的是linux，透過VM ware灌Ubuntu ISO，介紹常用指令，並透過 SSH建立本基端與虛擬主機的連線；還有像是git，我就是從上完那堂社課後才發現git的強大， 以前專案都複製好多份出來，命名copy1、copy2，既容易搞混又佔記憶體空間，有了這個強大的版本 控制系統，可以輕易管控版本，每個版本加上commit提交，更是便於多人撰寫專案，push上去pull回來 ，輕鬆搞定；當然還上了很多不同主題的社課，舉凡Laravel網頁框架、網頁安全CTF等等，都讓我獲益良多。', '程研社社員', 'Linux、Ubuntu、git、Laravel', 'img/blog/ncu_coding_club1.png', 'img/blog/ncu_coding_club2.png', '2021-02-02', NULL),
(5, '榮獲管理學院-院長獎', '頒獎', '能拿到管理學院院長獎，並由院長親自頒發感到非常開心， 我的態度一直是秉持著做每件事都要努力盡力，大學的時光內除了課業外，也參加社團(程式設計研究社)、 參加系學會(新聞部)，跑過學校淨灘、107電影院...等等休閒活動，另外也不斷自我摸索 上網學習探索自己，展望未來。', '管院獲獎學生', '努力、堅持、學習、獲獎、成就', 'img/blog/award1.jpg', 'img/blog/award2.jpg', '2021-12-28', NULL),
(6, 'Google Developer Student Club @ NCU', '活動', '除了參加程式設計研究社外， 這學期也開始加入學校Google Developer Student Club中央大學Google開發者社群的社課活動， 每隔幾周都會有不同的主題，大家一起討論一起實作，最有印象的是phpの黑魔法合輯：Laravel的活動， 了解到現在業界最常使用的框架MVC的技術， module、view、controller用controller來調用相關的view頁面，可以減輕工程師的負擔， 後續維護上也比較容易，不需要每一頁每一頁都修改相同的東西。 之後還接觸到google開放原始碼軟體套件Flutter， 透過線上FlutLab設計一個可以抓取中央氣象局api的UI介面， 學Flutter的好處也在於用一種程式語言(dart)寫一份Code能同時讓iOS與Android平台使用， 也支援Web以及桌面應用程式，一舉兩得。當然參加google club學到的還有Docker、goolge GCP等等。', 'Google Club社員', 'GCP、Flutter、Vertex AI、Laravel、Docker', 'img/blog/ncu_gdsc1.png', 'img/blog/ncu_gdsc2.png', '2022-05-16', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL COMMENT '證照名稱',
  `serial_number` varchar(30) DEFAULT NULL COMMENT '證書ID',
  `score` int(10) DEFAULT NULL COMMENT '分數',
  `cover` text NOT NULL COMMENT '封面位置',
  `path` text NOT NULL COMMENT 'pdf證書路徑',
  `date` date NOT NULL COMMENT '日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `serial_number`, `score`, `cover`, `path`, `date`) VALUES
(1, 'Java SE 8 Programmer OCA', '286101419OCAJSE8', 88, 'img/clients/oracle_logo.png', 'doc/Oracle Certified Associate, Java SE 8 Programmer.pdf\"', '2021-07-28'),
(2, 'Java SE 8 Programmer OCP', '286101419OCPJSE8', 86, 'img/clients/oracle_logo.png', 'doc/Oracle Certified Professional, Java SE 8 Programmer.pdf', '2021-09-08'),
(3, 'Java EE 7 Application Develope', '286101419OCPJEE7AD', 85, 'img/clients/oracle_logo.png', 'doc/Oracle Certified Professional, Java EE 7 Application Developer.pdf', '2022-07-07'),
(4, 'TOEIC多益藍色證書', NULL, 810, 'img/clients/TOEIC_logo.jpg', 'doc/多益藍色證書.pdf', '2021-08-26'),
(5, '中華民國電腦教育發展協會認證證書', NULL, NULL, 'img/clients/CCEA_logo.png', 'doc/中華民國電腦教育發展協會認證證書.pdf', '2020-03-16'),
(6, '電子知識力創客能力證書', 'T0C200151', NULL, 'img/clients/TEMI_logo.png', 'doc/電子知識力創客能力證書.pdf', '2020-03-21');

-- --------------------------------------------------------

--
-- 資料表結構 `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL COMMENT '種類',
  `title` varchar(30) NOT NULL COMMENT '學校名稱or工作',
  `subtitle` varchar(30) NOT NULL COMMENT '系/班級or職位',
  `intro` text NOT NULL COMMENT '簡介',
  `date_start` date NOT NULL COMMENT '開始日期',
  `date_end` date NOT NULL COMMENT '結束日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `experiences`
--

INSERT INTO `experiences` (`id`, `category`, `title`, `subtitle`, `intro`, `date_start`, `date_end`) VALUES
(1, '教育', '中央大學', '資訊管理學系', '「資手遮天，管遍天下，中央資管，全國第一」，是中央資管系的口號， 除了宿營、系烤、系卡、資管營外，學校校運會也是中央資管系一年一度的一大盛事， 中央資管系在校運會的表現一直還不錯，但其實是因為長期準備練習使然， 「要這麼得？先學會怎麼栽！」，中央資管不只傳授專業科目，更啟發我們人生哲學， 努力不懈的精神。', '2020-09-01', '2024-07-01'),
(2, '教育', '再興中學', '資優班', '從國中一路到高中，對再興有著濃厚的情感， 再興像是嚴父也像是慈母，管得非常嚴，有髮禁， 服裝統一整齊劃一，有晚自習周六也必須上課， 但本質都是為我們好，希望未來能有一番成就。', '2017-09-01', '2020-07-01'),
(3, '工作', '家教', '電腦影片剪輯', '輔導學生使用剪輯軟體-威力導演完成影片專案，自編教材，從0到1，帶學生入手', '2020-07-01', '2020-09-01');

-- --------------------------------------------------------

--
-- 資料表結構 `knowledges`
--

CREATE TABLE `knowledges` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `knowledges`
--

INSERT INTO `knowledges` (`id`, `name`) VALUES
(1, '行銷'),
(2, '出版'),
(3, '數位設計'),
(4, '社群媒體'),
(5, '時間管理大師'),
(6, '網路安全'),
(7, 'AI人工智慧'),
(8, 'CTF'),
(9, '計算機概論');

-- --------------------------------------------------------

--
-- 資料表結構 `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL COMMENT '種類',
  `name` varchar(30) NOT NULL COMMENT '技能名稱',
  `percent` int(11) NOT NULL COMMENT '%'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `category`, `name`, `percent`) VALUES
(1, '美術', 'Adobe Premiere Pro', 95),
(2, '美術', 'Adobe Photoshop', 65),
(3, '美術', 'Adobe Illustrator', 40),
(4, '美術', 'Microsoft Word/PowerPoint', 90),
(5, '程式設計', 'JavaScript', 20),
(6, '程式設計', 'PHP', 50),
(7, '程式設計', 'HTML/CSS', 80),
(8, '程式設計', 'Java', 95),
(9, '程式設計', 'Assembly', 30);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL COMMENT '帳號',
  `password` varchar(60) NOT NULL COMMENT '密碼',
  `name` varchar(15) NOT NULL COMMENT '使用者姓名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(1, 'junting', 'A46B8B55BD982CB4A99D41A5A6D819DB', '林俊霆');

-- --------------------------------------------------------

--
-- 資料表結構 `works`
--

CREATE TABLE `works` (
  `id` int(11) NOT NULL COMMENT '作品id',
  `title` varchar(30) NOT NULL COMMENT '標題',
  `category` varchar(30) NOT NULL COMMENT '類別',
  `intro` text DEFAULT NULL COMMENT '簡介',
  `team` varchar(30) DEFAULT NULL COMMENT '組員',
  `teacher` varchar(15) DEFAULT NULL COMMENT '指導老師',
  `website` text NOT NULL COMMENT '網站',
  `technology` varchar(60) DEFAULT NULL COMMENT '技術',
  `cover` text NOT NULL COMMENT '封面圖片',
  `pic1` text DEFAULT NULL COMMENT '內部圖片輪播',
  `pic2` text DEFAULT NULL,
  `pic3` text DEFAULT NULL,
  `pic4` text DEFAULT NULL,
  `upload_date` date DEFAULT NULL COMMENT '上傳時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `works`
--

INSERT INTO `works` (`id`, `title`, `category`, `intro`, `team`, `teacher`, `website`, `technology`, `cover`, `pic1`, `pic2`, `pic3`, `pic4`, `upload_date`) VALUES
(1, 'NCU soccer game(Assembly)', '專案', '透過MASM32的函式庫搭配上課所學的ASM語法，打造出雙方可以互玩的足球射門遊戲， 一位玩家透過WASD控制方向，一位玩家透過上下左右控制移動，進對方球門得分， 獲勝後出現該玩家的大頭貼，按ENTER可再繼續遊戲。', '林俊霆、王柏勛、林采璇、洪琬哲', '鄭旭詠', 'https://github.com/JunTingLin/NCU_soccer_game', 'Assembly、C++、Masm32、MSDN Library', 'img/portfolio/project1_ASM.jpg', 'img/portfolio/project1_ASM_menu.jpg', 'img/portfolio/project1_ASM_xy_position.png', 'img/portfolio/project1_ASM_victor_player1.jpg', 'img/portfolio/project1_ASM_victor_player2.jpg', '2022-01-01'),
(2, 'Ordering system (Java)', '專案', '不管是點套餐還是單點，全部都是由外部的CSV檔讀取， 可以很方便的更換菜單更換套餐組合，不需動到程式碼， 並且最後會列出收據明細給客人，會在店內的交易紀錄檔記錄下每筆訂單、時間等資訊。', '林俊霆、洪琬哲、謝理致、陳侑宣', '陳仲儼', 'https://github.com/JunTingLin/java_ordering_system', 'java、eclipse', 'img/portfolio/project2_java.jpg', 'img/portfolio/project2_java_1.png', 'img/portfolio/project2_java_2.png', 'img/portfolio/project2_java_3.png', 'img/portfolio/project2_java_4.png', '2021-06-18'),
(3, '蝦皮爬蟲&賣家競品分析(Python)', '專案', '在剛成為賣家不熟悉市場時 , 定價策略顯得尤其重要 為了找到在蝦皮上最佳銷售策略，所以撰寫了這支蝦皮賣家競品分析。 此次的目標很簡單，掌握競品情報來提高自己銷售業績：<br>\n1.找出商品的人氣特性<br>\n2.透過觀察價格分布決定價格,並預估收益<br>\n3.實際搜尋<br>\n4.找出賣家地理位置分布,決定賣場要設哪', '林俊霆、許珀維', '何政勳', 'https://github.com/brankhsu/python-project-crawler', 'Python、PyCharm', 'img/portfolio/project3_python.jpg', 'img/portfolio/project3_python_1.JPG', 'img/portfolio/project3_python_2.JPG', 'img/portfolio/project3_python_3.JPG', 'img/portfolio/project3_python_4.JPG', '2021-12-29'),
(4, '再興中學2020畢業MV', 'IG影片', NULL, NULL, NULL, 'https://www.instagram.com/p/CCL3WtMn6vc/?utm_source=ig_embed&ig_rid=4833dd43-5bba-417c-a3dd-9682aac03ef8', NULL, 'img/portfolio/THSH2020.png', NULL, NULL, NULL, NULL, NULL),
(5, '畢業典禮 高三愛班進場影片', 'YouTube影片', NULL, NULL, NULL, 'https://www.youtube.com/embed/VQvxd4mFkR8', NULL, 'img/portfolio/THSH2020_love.png', NULL, NULL, NULL, NULL, NULL),
(6, '2020高三愛班謝師宴影片', 'YouTube影片', NULL, NULL, NULL, 'https://www.youtube.com/embed/WAjTvYZWGW0', NULL, 'img/portfolio/THSH2020_teacher.jpg', NULL, NULL, NULL, NULL, NULL),
(7, '陳仲儼教授-教學傑出選拔', 'YouTube影片', '', '', '', 'https://www.youtube.com/embed/JIUy_HhOj-Q', '', 'img/portfolio/Professor_Chen.png', '', '', '', '', '2022-02-27'),
(8, 'multithread_project(java)', '專案', '本次OS作業要繳交Thread 小程式，因為對java比較熟悉，故選用java作為程式語言，用eclipse IDE開發。網路上看到許多用java多執行緒實現TCP網路的socket程式設計，但有鑑於求新求變，故基於TCP的架構下設計成可以「多人」連上sever「對玩」的井字小遊戲。', '林俊霆', '周立德', 'https://github.com/JunTingLin/multithread_project', 'java、eclipse、multi thread、web socket、java swing', 'img/portfolio/project4_java.jpg', 'img/portfolio/project4_java_1.png', 'img/portfolio/project4_java_2.png', 'img/portfolio/project4_java_3.png', '', '2022-05-18');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `knowledges`
--
ALTER TABLE `knowledges`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `knowledges`
--
ALTER TABLE `knowledges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `works`
--
ALTER TABLE `works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '作品id', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
