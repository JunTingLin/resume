-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3307
-- 產生時間： 2023-01-25 16:59:05
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

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
(5, '109學年度-榮獲管理學院-院長獎', '頒獎', '能拿到管理學院院長獎，並由院長親自頒發感到非常開心， 我的態度一直是秉持著做每件事都要努力盡力，大學的時光內除了課業外，也參加社團(程式設計研究社)、 參加系學會(新聞部)，跑過學校淨灘、107電影院...等等休閒活動，另外也不斷自我摸索 上網學習探索自己，展望未來。', '管院獲獎學生', '努力、堅持、學習、獲獎、成就', 'img/blog/award1.jpg', 'img/blog/award2.jpg', '2021-12-28', '0000-00-00'),
(6, 'Google Developer Student Club @ NCU', '活動', '除了參加程式設計研究社外， 這學期也開始加入學校Google Developer Student Club中央大學Google開發者社群的社課活動， 每隔幾周都會有不同的主題，大家一起討論一起實作，最有印象的是phpの黑魔法合輯：Laravel的活動， 了解到現在業界最常使用的框架MVC的技術， module、view、controller用controller來調用相關的view頁面，可以減輕工程師的負擔， 後續維護上也比較容易，不需要每一頁每一頁都修改相同的東西。 之後還接觸到google開放原始碼軟體套件Flutter， 透過線上FlutLab設計一個可以抓取中央氣象局api的UI介面， 學Flutter的好處也在於用一種程式語言(dart)寫一份Code能同時讓iOS與Android平台使用， 也支援Web以及桌面應用程式，一舉兩得。當然參加google club學到的還有Docker、goolge GCP等等。', 'Google Club社員', 'GCP、Flutter、Vertex AI、Laravel、Docker', 'img/blog/ncu_gdsc1.png', 'img/blog/ncu_gdsc2.png', '2022-05-16', NULL),
(13, '110學年度-榮獲管理學院-院長獎', '頒獎', '很榮幸能再次獲得院長獎的殊榮，自己在大二上下兩學期付出的努力是有收穫的，也希望大三能夠繼續加油。', '管院獲獎學生', '努力 堅持 學習 獲獎 成就', 'img/blog/award3.jpg', 'img/blog/award4.jpg', '2022-12-27', '0000-00-00');

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
  `date_end` date DEFAULT NULL COMMENT '結束日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `experiences`
--

INSERT INTO `experiences` (`id`, `category`, `title`, `subtitle`, `intro`, `date_start`, `date_end`) VALUES
(1, '教育', '中央大學', '資訊管理學系', '「資手遮天，管遍天下，中央資管，全國第一」，是中央資管系的口號， 除了宿營、系烤、系卡、資管營外，學校校運會也是中央資管系一年一度的一大盛事， 中央資管系在校運會的表現一直還不錯，但其實是因為長期準備練習使然， 「要這麼得？先學會怎麼栽！」，中央資管不只傳授專業科目，更啟發我們人生哲學， 努力不懈的精神。', '2020-09-01', '2024-07-01'),
(2, '教育', '再興中學', '資優班', '從國中一路到高中，對再興有著濃厚的情感， 再興像是嚴父也像是慈母，管得非常嚴，有髮禁， 服裝統一整齊劃一，有晚自習周六也必須上課， 但本質都是為我們好，希望未來能有一番成就。', '2017-09-01', '2020-07-01'),
(3, '工作', '家教', '電腦影片剪輯', '輔導學生使用剪輯軟體-威力導演完成影片專案，自編教材，從0到1，帶學生入手', '2020-07-01', '2020-09-01'),
(4, '工作', '中央大學應地所', '網管', '大三開始很榮幸面試上中央大學應用地質研究所的網管工作，主要負責所上官網的維護，使用WordPress進行網站架設，定期備份與更新資料；另外會負責維護網路設備，DHCP、DNS、Web server，這些都是架在NAS主機上，並且配有UPS，要定期去掃ip、踢mac等工作；還有協助所上整個的資安上的安全防護。', '2022-09-12', NULL);

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
  `percent` int(11) NOT NULL COMMENT '%',
  `icon_path` text NOT NULL COMMENT 'svg的點格',
  `icon_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `category`, `name`, `percent`, `icon_path`, `icon_color`) VALUES
(1, '美術', 'Adobe Premiere Pro', 90, '<path d=\"M10.15 8.42a2.93 2.93 0 00-1.18-.2 13.9 13.9 0 00-1.09.02v3.36l.39.02h.53c.39 0 .78-.06 1.15-.18.32-.09.6-.28.82-.53.21-.25.31-.59.31-1.03a1.45 1.45 0 00-.93-1.46zM19.75.3H4.25A4.25 4.25 0 000 4.55v14.9c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zm-7.09 11.65c-.4.56-.96.98-1.61 1.22-.68.25-1.43.34-2.25.34l-.5-.01-.43-.01v3.21a.12.12 0 01-.11.14H5.82c-.08 0-.12-.04-.12-.13V6.42c0-.07.03-.11.1-.11l.56-.01.76-.02.87-.02.91-.01c.82 0 1.5.1 2.06.31.5.17.96.45 1.34.82.32.32.57.71.73 1.14.15.42.23.85.23 1.3 0 .86-.2 1.57-.6 2.13zm6.82-3.15v1.95c0 .08-.05.11-.16.11a4.35 4.35 0 00-1.92.37c-.19.09-.37.21-.51.37v5.1c0 .1-.04.14-.13.14h-1.97a.14.14 0 01-.16-.12v-5.58l-.01-.75-.02-.78c0-.23-.02-.45-.04-.68a.1.1 0 01.07-.11h1.78c.1 0 .18.07.2.16a3.03 3.03 0 01.13.92c.3-.35.67-.64 1.08-.86a3.1 3.1 0 011.52-.39c.07-.01.13.04.14.11v.04z\"/>', '#9999FF'),
(2, '美術', 'Adobe Photoshop', 65, '<path d=\"M9.85 8.42c-.37-.15-.77-.21-1.18-.2-.26 0-.49 0-.68.01-.2-.01-.34 0-.41.01v3.36c.14.01.27.02.39.02h.53c.39 0 .78-.06 1.15-.18.32-.09.6-.28.82-.53.21-.25.31-.59.31-1.03.01-.31-.07-.62-.23-.89-.17-.26-.41-.46-.7-.57zM19.75.3H4.25C1.9.3 0 2.2 0 4.55v14.899c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zm-7.391 11.65c-.399.56-.959.98-1.609 1.22-.68.25-1.43.34-2.25.34-.24 0-.4 0-.5-.01s-.24-.01-.43-.01v3.209c.01.07-.04.131-.11.141H5.52c-.08 0-.12-.041-.12-.131V6.42c0-.07.03-.11.1-.11.17 0 .33 0 .56-.01.24-.01.49-.01.76-.02s.56-.01.87-.02c.31-.01.61-.01.91-.01.82 0 1.5.1 2.06.31.5.17.96.45 1.34.82.32.32.57.71.73 1.14.149.42.229.85.229 1.3.001.86-.199 1.57-.6 2.13zm7.091 3.89c-.28.4-.671.709-1.12.891-.49.209-1.09.318-1.811.318-.459 0-.91-.039-1.359-.129-.35-.061-.7-.17-1.02-.32-.07-.039-.121-.109-.111-.189v-1.74c0-.029.011-.07.041-.09.029-.02.06-.01.09.01.39.23.8.391 1.24.49.379.1.779.15 1.18.15.38 0 .65-.051.83-.141.16-.07.27-.24.27-.42 0-.141-.08-.27-.24-.4-.16-.129-.489-.279-.979-.471-.51-.18-.979-.42-1.42-.719-.31-.221-.569-.51-.761-.85-.159-.32-.239-.67-.229-1.021 0-.43.12-.84.341-1.21.25-.4.619-.72 1.049-.92.469-.239 1.059-.349 1.769-.349.41 0 .83.03 1.24.09.3.04.59.12.86.23.039.01.08.05.1.09.01.04.02.08.02.12v1.63c0 .04-.02.08-.05.1-.09.02-.14.02-.18 0-.3-.16-.62-.27-.96-.34-.37-.08-.74-.13-1.12-.13-.2-.01-.41.02-.601.07-.129.03-.24.1-.31.2-.05.08-.08.18-.08.27s.04.18.101.26c.09.11.209.2.34.27.229.12.47.23.709.33.541.18 1.061.43 1.541.73.33.209.6.49.789.83.16.318.24.67.23 1.029.011.471-.129.94-.389 1.331z\"/>', '#31A8FF'),
(3, '美術', 'Adobe Illustrator', 30, '<path d=\"M10.53 10.73c-.1-.31-.19-.61-.29-.92-.1-.31-.19-.6-.27-.89-.08-.28-.15-.54-.22-.78h-.02c-.09.43-.2.86-.34 1.29-.15.48-.3.98-.46 1.48-.14.51-.29.98-.44 1.4h2.54c-.06-.211-.14-.46-.23-.721-.09-.269-.18-.559-.27-.859zM19.75.3H4.25C1.9.3 0 2.2 0 4.55v14.9c0 2.35 1.9 4.25 4.25 4.25h15.5c2.35 0 4.25-1.9 4.25-4.25V4.55C24 2.2 22.1.3 19.75.3zM14.7 16.83h-2.091c-.069.01-.139-.04-.159-.11l-.82-2.38H7.91l-.76 2.35c-.02.09-.1.15-.19.141H5.08c-.11 0-.14-.061-.11-.18L8.19 7.38c.03-.1.06-.21.1-.33.04-.21.06-.43.06-.65-.01-.05.03-.1.08-.11h2.59c.08 0 .12.03.13.08l3.65 10.3c.03.109 0 .16-.1.16zm3.4-.15c0 .11-.039.16-.129.16H16.01c-.1 0-.15-.061-.15-.16v-7.7c0-.1.041-.14.131-.14h1.98c.09 0 .129.05.129.14v7.7zm-.209-9.03c-.231.24-.571.37-.911.35-.33.01-.65-.12-.891-.35-.23-.25-.35-.58-.34-.92-.01-.34.12-.66.359-.89.242-.23.562-.35.892-.35.391 0 .689.12.91.35.22.24.34.56.33.89.01.34-.11.67-.349.92z\"/>', '#FF9A00'),
(4, '美術', 'Microsoft Word', 90, '<path d=\"M23.004 1.5q.41 0 .703.293t.293.703v19.008q0 .41-.293.703t-.703.293H6.996q-.41 0-.703-.293T6 21.504V18H.996q-.41 0-.703-.293T0 17.004V6.996q0-.41.293-.703T.996 6H6V2.496q0-.41.293-.703t.703-.293zM6.035 11.203l1.442 4.735h1.64l1.57-7.876H9.036l-.937 4.653-1.325-4.5H5.38l-1.406 4.523-.938-4.675H1.312l1.57 7.874h1.641zM22.5 21v-3h-15v3zm0-4.5v-3.75H12v3.75zm0-5.25V7.5H12v3.75zm0-5.25V3h-15v3Z\"/>', '#2B579A'),
(5, '美術', 'Microsoft PowerPoint', 95, '<path d=\"M13.5 1.5q1.453 0 2.795.375 1.342.375 2.508 1.06 1.166.686 2.12 1.641.956.955 1.641 2.121.686 1.166 1.061 2.508Q24 10.547 24 12q0 1.453-.375 2.795-.375 1.342-1.06 2.508-.686 1.166-1.641 2.12-.955.956-2.121 1.641-1.166.686-2.508 1.061-1.342.375-2.795.375-1.29 0-2.52-.305-1.23-.304-2.337-.884-1.108-.58-2.063-1.418-.955-.838-1.693-1.893H.997q-.411 0-.704-.293T0 17.004V6.996q0-.41.293-.703T.996 6h3.89q.739-1.055 1.694-1.893.955-.837 2.063-1.418 1.107-.58 2.337-.884Q12.21 1.5 13.5 1.5zm.75 1.535v8.215h8.215q-.14-1.64-.826-3.076-.686-1.436-1.782-2.531-1.095-1.096-2.537-1.782-1.441-.685-3.07-.826zm-5.262 7.57q0-.68-.228-1.166-.229-.486-.627-.79-.399-.305-.938-.446-.539-.14-1.172-.14H2.848v7.863h1.84v-2.742H5.93q.574 0 1.119-.17t.978-.493q.434-.322.698-.802.263-.48.263-1.114zM13.5 21q1.172 0 2.262-.287t2.056-.82q.967-.534 1.776-1.278.808-.744 1.418-1.664.61-.92.984-1.986.375-1.067.469-2.227h-9.703V3.035q-1.735.14-3.27.908T6.797 6h4.207q.41 0 .703.293t.293.703v10.008q0 .41-.293.703t-.703.293H6.797q.644.715 1.412 1.271.768.557 1.623.944.855.387 1.781.586Q12.54 21 13.5 21zM5.812 9.598q.575 0 .915.228.34.229.34.838 0 .27-.124.44-.123.17-.31.275-.188.105-.422.146-.234.041-.445.041H4.687V9.598Z\"/>', '#B7472A'),
(6, '程式設計', 'Assembly', 80, '', ''),
(7, '程式設計', 'JavaSE/EE', 100, '', ''),
(8, '程式設計', 'HTML', 90, '<path d=\"M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z\"/>', '#E34F26'),
(9, '程式設計', 'CSS', 80, '<path d=\"M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z\"/>', '#1572B6'),
(10, '程式設計', 'JavaScript', 70, '<path d=\"M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z\"/>', '#F7DF1E'),
(11, '程式設計', 'jQuery', 70, '<path d=\"M1.525 5.87c-2.126 3.054-1.862 7.026-.237 10.269.037.079.078.154.118.229.023.052.049.1.077.15.013.027.031.056.047.082.026.052.054.102.081.152l.157.266c.03.049.057.097.09.146.056.094.12.187.178.281.026.04.05.078.079.117a6.368 6.368 0 00.31.445c.078.107.156.211.24.315.027.038.058.076.086.115l.22.269c.028.03.055.067.084.099.098.118.202.233.306.35l.005.006a3.134 3.134 0 00.425.44c.08.083.16.165.245.245l.101.097c.111.105.223.209.34.309.002 0 .003.002.005.003l.057.05c.102.089.205.178.31.26l.125.105c.085.068.174.133.26.2l.137.105c.093.07.192.139.287.207.035.025.07.05.106.073l.03.023.28.185.12.08c.148.094.294.184.44.272.041.02.084.044.123.068.108.062.22.125.329.183.06.034.122.063.184.094.075.042.153.083.234.125a.324.324 0 01.056.023c.033.015.064.031.096.047.12.06.245.118.375.175.024.01.05.02.076.034.144.063.289.123.438.182.034.01.07.027.105.04.135.051.274.103.411.152l.05.018c.154.052.305.102.46.15.036.01.073.023.111.033.16.048.314.105.474.137 10.273 1.872 13.258-6.177 13.258-6.177-2.508 3.266-6.958 4.127-11.174 3.169-.156-.036-.312-.086-.47-.132a13.539 13.539 0 01-.567-.182l-.062-.024c-.136-.046-.267-.097-.4-.148a1.615 1.615 0 00-.11-.04c-.148-.06-.29-.121-.433-.184-.031-.01-.057-.024-.088-.036a23.44 23.44 0 01-.362-.17 1.485 1.485 0 01-.106-.052c-.094-.044-.188-.095-.28-.143a3.947 3.947 0 01-.187-.096c-.114-.06-.227-.125-.34-.187-.034-.024-.073-.044-.112-.066a15.922 15.922 0 01-.439-.27 2.107 2.107 0 01-.118-.078 6.01 6.01 0 01-.312-.207c-.035-.023-.067-.048-.103-.073a9.553 9.553 0 01-.295-.212c-.042-.034-.087-.066-.132-.1-.088-.07-.177-.135-.265-.208l-.118-.095a10.593 10.593 0 01-.335-.28.258.258 0 00-.037-.031l-.347-.316-.1-.094c-.082-.084-.166-.164-.25-.246l-.098-.1a9.081 9.081 0 01-.309-.323l-.015-.016c-.106-.116-.21-.235-.313-.355-.027-.03-.053-.064-.08-.097l-.227-.277a21.275 21.275 0 01-.34-.449C2.152 11.79 1.306 7.384 3.177 3.771m4.943-.473c-1.54 2.211-1.454 5.169-.254 7.508a9.111 9.111 0 00.678 1.133c.23.33.484.721.793.988.107.122.223.24.344.36l.09.09c.114.11.232.217.35.325l.016.013a9.867 9.867 0 00.414.342c.034.023.063.05.096.073.14.108.282.212.428.316l.015.009c.062.045.128.086.198.13.028.018.06.042.09.06.106.068.21.132.318.197.017.007.032.016.048.023.09.055.188.108.282.157.033.02.065.035.1.054.066.033.132.068.197.102l.032.014c.135.067.273.129.408.19.034.014.063.025.092.039.111.048.224.094.336.137.05.017.097.037.144.052.102.038.21.073.31.108l.14.045c.147.045.295.104.449.13C22.164 17.206 24 11.098 24 11.098c-1.653 2.38-4.852 3.513-8.261 2.628a8.04 8.04 0 01-.449-.13c-.048-.014-.09-.029-.136-.043-.104-.036-.211-.07-.312-.109l-.144-.054c-.113-.045-.227-.087-.336-.135-.034-.015-.065-.025-.091-.04-.14-.063-.281-.125-.418-.192l-.206-.107-.119-.06a5.673 5.673 0 01-.265-.15.62.62 0 01-.062-.035c-.106-.066-.217-.13-.318-.198-.034-.019-.065-.042-.097-.062l-.208-.136c-.144-.1-.285-.208-.428-.313-.032-.029-.063-.053-.094-.079-1.499-1.178-2.681-2.79-3.242-4.613-.59-1.897-.46-4.023.56-5.75m4.292-.147c-.909 1.334-.996 2.99-.37 4.46.665 1.563 2.024 2.79 3.608 3.37.065.025.128.046.196.07l.088.027c.092.03.185.063.28.084 4.381.845 5.567-2.25 5.886-2.704-1.043 1.498-2.792 1.857-4.938 1.335a4.85 4.85 0 01-.516-.16 6.352 6.352 0 01-.618-.254 6.53 6.53 0 01-1.082-.66c-1.922-1.457-3.113-4.236-1.859-6.5\"/>', '#0769AD'),
(12, '程式設計', 'PHP', 80, '<path d=\"M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z\"/>', '#777BB4'),
(13, '程式設計', 'SQL', 80, '<path d=\"M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z\"/>', '#4479A1'),
(14, '程式設計', 'Git', 80, '<path d=\"M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.078 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.6 0-.539-.541-.674-1.337-.404-1.996L12.86 8.955v6.525c.176.086.342.203.488.348.713.721.713 1.883 0 2.6-.719.721-1.889.721-2.609 0-.719-.719-.719-1.879 0-2.598.182-.18.387-.316.605-.406V8.835c-.217-.091-.424-.222-.6-.401-.545-.545-.676-1.342-.396-2.009L7.636 3.7.45 10.881c-.6.605-.6 1.584 0 2.189l10.48 10.477c.604.604 1.582.604 2.186 0l10.43-10.43c.605-.603.605-1.582 0-2.187\"/>', '#F05032'),
(15, '程式設計', 'Linux', 85, '<path d=\"M12.504 0c-.155 0-.315.008-.48.021-4.226.333-3.105 4.807-3.17 6.298-.076 1.092-.3 1.953-1.05 3.02-.885 1.051-2.127 2.75-2.716 4.521-.278.832-.41 1.684-.287 2.489a.424.424 0 00-.11.135c-.26.268-.45.6-.663.839-.199.199-.485.267-.797.4-.313.136-.658.269-.864.68-.09.189-.136.394-.132.602 0 .199.027.4.055.536.058.399.116.728.04.97-.249.68-.28 1.145-.106 1.484.174.334.535.47.94.601.81.2 1.91.135 2.774.6.926.466 1.866.67 2.616.47.526-.116.97-.464 1.208-.946.587-.003 1.23-.269 2.26-.334.699-.058 1.574.267 2.577.2.025.134.063.198.114.333l.003.003c.391.778 1.113 1.132 1.884 1.071.771-.06 1.592-.536 2.257-1.306.631-.765 1.683-1.084 2.378-1.503.348-.199.629-.469.649-.853.023-.4-.2-.811-.714-1.376v-.097l-.003-.003c-.17-.2-.25-.535-.338-.926-.085-.401-.182-.786-.492-1.046h-.003c-.059-.054-.123-.067-.188-.135a.357.357 0 00-.19-.064c.431-1.278.264-2.55-.173-3.694-.533-1.41-1.465-2.638-2.175-3.483-.796-1.005-1.576-1.957-1.56-3.368.026-2.152.236-6.133-3.544-6.139zm.529 3.405h.013c.213 0 .396.062.584.198.19.135.33.332.438.533.105.259.158.459.166.724 0-.02.006-.04.006-.06v.105a.086.086 0 01-.004-.021l-.004-.024a1.807 1.807 0 01-.15.706.953.953 0 01-.213.335.71.71 0 00-.088-.042c-.104-.045-.198-.064-.284-.133a1.312 1.312 0 00-.22-.066c.05-.06.146-.133.183-.198.053-.128.082-.264.088-.402v-.02a1.21 1.21 0 00-.061-.4c-.045-.134-.101-.2-.183-.333-.084-.066-.167-.132-.267-.132h-.016c-.093 0-.176.03-.262.132a.8.8 0 00-.205.334 1.18 1.18 0 00-.09.4v.019c.002.089.008.179.02.267-.193-.067-.438-.135-.607-.202a1.635 1.635 0 01-.018-.2v-.02a1.772 1.772 0 01.15-.768c.082-.22.232-.406.43-.533a.985.985 0 01.594-.2zm-2.962.059h.036c.142 0 .27.048.399.135.146.129.264.288.344.465.09.199.14.4.153.667v.004c.007.134.006.2-.002.266v.08c-.03.007-.056.018-.083.024-.152.055-.274.135-.393.2.012-.09.013-.18.003-.267v-.015c-.012-.133-.04-.2-.082-.333a.613.613 0 00-.166-.267.248.248 0 00-.183-.064h-.021c-.071.006-.13.04-.186.132a.552.552 0 00-.12.27.944.944 0 00-.023.33v.015c.012.135.037.2.08.334.046.134.098.2.166.268.01.009.02.018.034.024-.07.057-.117.07-.176.136a.304.304 0 01-.131.068 2.62 2.62 0 01-.275-.402 1.772 1.772 0 01-.155-.667 1.759 1.759 0 01.08-.668 1.43 1.43 0 01.283-.535c.128-.133.26-.2.418-.2zm1.37 1.706c.332 0 .733.065 1.216.399.293.2.523.269 1.052.468h.003c.255.136.405.266.478.399v-.131a.571.571 0 01.016.47c-.123.31-.516.643-1.063.842v.002c-.268.135-.501.333-.775.465-.276.135-.588.292-1.012.267a1.139 1.139 0 01-.448-.067 3.566 3.566 0 01-.322-.198c-.195-.135-.363-.332-.612-.465v-.005h-.005c-.4-.246-.616-.512-.686-.71-.07-.268-.005-.47.193-.6.224-.135.38-.271.483-.336.104-.074.143-.102.176-.131h.002v-.003c.169-.202.436-.47.839-.601.139-.036.294-.065.466-.065zm2.8 2.142c.358 1.417 1.196 3.475 1.735 4.473.286.534.855 1.659 1.102 3.024.156-.005.33.018.513.064.646-1.671-.546-3.467-1.089-3.966-.22-.2-.232-.335-.123-.335.59.534 1.365 1.572 1.646 2.757.13.535.16 1.104.021 1.67.067.028.135.06.205.067 1.032.534 1.413.938 1.23 1.537v-.043c-.06-.003-.12 0-.18 0h-.016c.151-.467-.182-.825-1.065-1.224-.915-.4-1.646-.336-1.77.465-.008.043-.013.066-.018.135-.068.023-.139.053-.209.064-.43.268-.662.669-.793 1.187-.13.533-.17 1.156-.205 1.869v.003c-.02.334-.17.838-.319 1.35-1.5 1.072-3.58 1.538-5.348.334a2.645 2.645 0 00-.402-.533 1.45 1.45 0 00-.275-.333c.182 0 .338-.03.465-.067a.615.615 0 00.314-.334c.108-.267 0-.697-.345-1.163-.345-.467-.931-.995-1.788-1.521-.63-.4-.986-.87-1.15-1.396-.165-.534-.143-1.085-.015-1.645.245-1.07.873-2.11 1.274-2.763.107-.065.037.135-.408.974-.396.751-1.14 2.497-.122 3.854a8.123 8.123 0 01.647-2.876c.564-1.278 1.743-3.504 1.836-5.268.048.036.217.135.289.202.218.133.38.333.59.465.21.201.477.335.876.335.039.003.075.006.11.006.412 0 .73-.134.997-.268.29-.134.52-.334.74-.4h.005c.467-.135.835-.402 1.044-.7zm2.185 8.958c.037.6.343 1.245.882 1.377.588.134 1.434-.333 1.791-.765l.211-.01c.315-.007.577.01.847.268l.003.003c.208.199.305.53.391.876.085.4.154.78.409 1.066.486.527.645.906.636 1.14l.003-.007v.018l-.003-.012c-.015.262-.185.396-.498.595-.63.401-1.746.712-2.457 1.57-.618.737-1.37 1.14-2.036 1.191-.664.053-1.237-.2-1.574-.898l-.005-.003c-.21-.4-.12-1.025.056-1.69.176-.668.428-1.344.463-1.897.037-.714.076-1.335.195-1.814.12-.465.308-.797.641-.984l.045-.022zm-10.814.049h.01c.053 0 .105.005.157.014.376.055.706.333 1.023.752l.91 1.664.003.003c.243.533.754 1.064 1.189 1.637.434.598.77 1.131.729 1.57v.006c-.057.744-.48 1.148-1.125 1.294-.645.135-1.52.002-2.395-.464-.968-.536-2.118-.469-2.857-.602-.369-.066-.61-.2-.723-.4-.11-.2-.113-.602.123-1.23v-.004l.002-.003c.117-.334.03-.752-.027-1.118-.055-.401-.083-.71.043-.94.16-.334.396-.4.69-.533.294-.135.64-.202.915-.47h.002v-.002c.256-.268.445-.601.668-.838.19-.201.38-.336.663-.336zm7.159-9.074c-.435.201-.945.535-1.488.535-.542 0-.97-.267-1.28-.466-.154-.134-.28-.268-.373-.335-.164-.134-.144-.333-.074-.333.109.016.129.134.199.2.096.066.215.2.36.333.292.2.68.467 1.167.467.485 0 1.053-.267 1.398-.466.195-.135.445-.334.648-.467.156-.136.149-.267.279-.267.128.016.034.134-.147.332a8.097 8.097 0 01-.69.468zm-1.082-1.583V5.64c-.006-.02.013-.042.029-.05.074-.043.18-.027.26.004.063 0 .16.067.15.135-.006.049-.085.066-.135.066-.055 0-.092-.043-.141-.068-.052-.018-.146-.008-.163-.065zm-.551 0c-.02.058-.113.049-.166.066-.047.025-.086.068-.14.068-.05 0-.13-.02-.136-.068-.01-.066.088-.133.15-.133.08-.031.184-.047.259-.005.019.009.036.03.03.05v.02h.003z\"/>', '#FCC624'),
(16, '程式設計', 'GCP Cloud', 65, '<path d=\"M12.19 2.38a9.344 9.344 0 0 0-9.234 6.893c.053-.02-.055.013 0 0-3.875 2.551-3.922 8.11-.247 10.941l.006-.007-.007.03a6.717 6.717 0 0 0 4.077 1.356h5.173l.03.03h5.192c6.687.053 9.376-8.605 3.835-12.35a9.365 9.365 0 0 0-2.821-4.552l-.043.043.006-.05A9.344 9.344 0 0 0 12.19 2.38zm-.358 4.146c1.244-.04 2.518.368 3.486 1.15a5.186 5.186 0 0 1 1.862 4.078v.518c3.53-.07 3.53 5.262 0 5.193h-5.193l-.008.009v-.04H6.785a2.59 2.59 0 0 1-1.067-.23h.001a2.597 2.597 0 1 1 3.437-3.437l3.013-3.012A6.747 6.747 0 0 0 8.11 8.24c.018-.01.04-.026.054-.023a5.186 5.186 0 0 1 3.67-1.69z\"/>', '#4285F4'),
(17, '程式設計', 'Azure Cloud', 65, '<path d=\"M22.379 23.343a1.62 1.62 0 0 0 1.536-2.14v.002L17.35 1.76A1.62 1.62 0 0 0 15.816.657H8.184A1.62 1.62 0 0 0 6.65 1.76L.086 21.204a1.62 1.62 0 0 0 1.536 2.139h4.741a1.62 1.62 0 0 0 1.535-1.103l.977-2.892 4.947 3.675c.28.208.618.32.966.32m-3.084-12.531 3.624 10.739a.54.54 0 0 1-.51.713v-.001h-.03a.54.54 0 0 1-.322-.106l-9.287-6.9h4.853m6.313 7.006c.116-.326.13-.694.007-1.058L9.79 1.76a1.722 1.722 0 0 0-.007-.02h6.034a.54.54 0 0 1 .512.366l6.562 19.445a.54.54 0 0 1-.338.684\"/>', '#0078D4'),
(18, '程式設計', 'Docker', 50, '<path d=\"M13.983 11.078h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 00.186-.186V3.574a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185m0 2.716h2.118a.187.187 0 00.186-.186V6.29a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.887c0 .102.082.185.185.186m-2.93 0h2.12a.186.186 0 00.184-.186V6.29a.185.185 0 00-.185-.185H8.1a.185.185 0 00-.185.185v1.887c0 .102.083.185.185.186m-2.964 0h2.119a.186.186 0 00.185-.186V6.29a.185.185 0 00-.185-.185H5.136a.186.186 0 00-.186.185v1.887c0 .102.084.185.186.186m5.893 2.715h2.118a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185m-2.93 0h2.12a.185.185 0 00.184-.185V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.083.185.185.185m-2.964 0h2.119a.185.185 0 00.185-.185V9.006a.185.185 0 00-.184-.186h-2.12a.186.186 0 00-.186.186v1.887c0 .102.084.185.186.185m-2.92 0h2.12a.185.185 0 00.184-.185V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.082.185.185.185M23.763 9.89c-.065-.051-.672-.51-1.954-.51-.338.001-.676.03-1.01.087-.248-1.7-1.653-2.53-1.716-2.566l-.344-.199-.226.327c-.284.438-.49.922-.612 1.43-.23.97-.09 1.882.403 2.661-.595.332-1.55.413-1.744.42H.751a.751.751 0 00-.75.748 11.376 11.376 0 00.692 4.062c.545 1.428 1.355 2.48 2.41 3.124 1.18.723 3.1 1.137 5.275 1.137.983.003 1.963-.086 2.93-.266a12.248 12.248 0 003.823-1.389c.98-.567 1.86-1.288 2.61-2.136 1.252-1.418 1.998-2.997 2.553-4.4h.221c1.372 0 2.215-.549 2.68-1.009.309-.293.55-.65.707-1.046l.098-.288Z\"/>', '#2496ED');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `knowledges`
--
ALTER TABLE `knowledges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
