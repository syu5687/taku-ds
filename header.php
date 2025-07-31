<!DOCTYPE html>
<html lang="ja">

<head>
    <?php
      $filename = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);      
    ?>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php if ($filename == 'index') : ?>
       <title>【公式】多久自動車学校 | Taku Driving School</title>
       <?php elseif ($filename == 'camp') : ?>
          <title>　合宿 | 【公式】多久自動車学校</title>
    <?php else: ?>
        <title><?php echo strtoupper($filename); ?> | 【公式】多久自動車学校</title>
    <?php endif; ?>
    <link rel="icon" type="image/png" href="favicon.png" />
    <meta name="description" content="多久自動車学校
    taku-ds" />
    <meta name="keywords" content="多久自動車学校,佐賀県自動車学校,佐賀県指定自動車教習所,佐賀県,多久市,多久,自動車学校,自動車" />
    <meta name="author" content=" content " />
    <meta name="robots" content=" all " />
    <meta name="googlebot" content=" all ">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $filename; ?>.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>

<body>
    <div id="header">
        <div class="headerBar">
            <div class="inner">
                <div class="wrapHeader">
                    <div class="logo">
                        <a class="hover" href="/">
                            <picture>
                                <source media="(max-width:768px)" srcset="assets/images/common/logo-sp.svg">
                                <img src="assets/images/common/logo.svg" alt="" loading="eager" fetchpriority="high">
                            </picture>
                        </a>
                    </div>
                    <div class="boxHeader">
                        <p class="txtRequestHeader"><a href="/contact">入校申し込み・資料請求・お問合せ</a></p>
                        <p class="txtCurrentHeader pc"><a href="/student">在学生用ページ</a></p>
                    </div>
                </div>
                <div class="hamburger sp">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="mainMenu">
            <div class="inner">
                <ul class="listMenu">
                    <li><a href="/">TOP</a></li>
                    <li>
                        <a href="/licence">通学免許</a>
                        <p class="iconMenu sp"><img src="assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                        <ul class="listMenuChild">
                            <li><a href="/licence?tab=progress">入学の流れ</a></li>
                            <li><a href="/licence?tab=price">料金表</a></li>
                            <li><a href="/licence?tab=plan">プラン</a></li>
                            <li class="menuFsz18"><a href="/licence?tab=overview">入学から<br class="pc">免許取得まで</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/camp">合宿免許</a>
                        <p class="iconMenu sp"><img src="assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                        <ul class="listMenuChild">
                            <li><a href="/camp?tab=overviewCamp">概要</a></li>
                            <li><a href="/camp?tab=movingCost">料金表</a></li>
                            <li><a href="/camp?tab=eventCalendar">カレンダー</a></li>
                            <li><a href="/camp?tab=accommodation">宿泊施設</a></li>
                            <li class="menuFsz18"><a href="camp.php?tab=campFlow">入学から<br class="pc">免許取得まで</a></li>
                            <li><a href="/licence">入学の流れ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/course">各種講習</a>
                        <p class="iconMenu sp"><img src="assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                        <ul class="listMenuChild">
                            <li class="menuFsz18"><a href="/course?tab=variousCourse#_paperDriver">ペーパードライバー<br class="pc">講習</a></li>
                            <li class="menuFsz18"><a href="/course?tab=variousCourse#_trainingCor">法人・企業様向け<br class="pc">講習</a></li>
                            <li class="menuFsz18"><a href="/course?tab=seniorCourse#_70YearsOld">高齢者講習<br class="pc">（70〜74歳）</a></li>
                            <li class="menuFsz18"><a href="/course?tab=seniorCourse#_75YearsOld">高齢者講習<br class="pc">（75歳以上）</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/about">学校案内</a>
                        <p class="iconMenu sp"><img src="assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                        <ul class="listMenuChild">
                            <li><a href="/about?tab=basic">本校について</a></li>
                            <li><a href="/about?tab=staff">スタッフ紹介</a></li>
                            <li><a href="/about?tab=reason">指定校を選ぶ理由</a></li>
                            <li><a href="/about?tab=faq">Q&A</a></li>
                            <li class="menuFsz18"><a href="/about?tab=privacy">プライバシー<br>ポリシー</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/news">お知らせ</a>
                        <p class="iconMenu sp"><img src="assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                        <ul class="listMenuChild">
                            <li><a href="/news?tab=noticeNews">お知らせ</a></li>
                            <li><a href="/news?tab=campaignNews">キャンペーン</a></li>
                        </ul>
                    </li>
                    <li><a href="/recruit">求人</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #header -->
    <div id="fixH"></div>
    <?php if ($filename != 'index') : ?>
        <div id="content">
    <?php endif; ?>
    
