<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header">
    <div class="headerBar">
        <div class="inner">
            <div class="wrapHeader">
                <div class="logo">
                    <a class="hover" href="<?php homeUrl(); ?>">
                        <picture>
                            <source media="(max-width:768px)" srcset="<?php themeUrl(); ?>/assets/images/common/logo-sp.svg">
                            <img src="<?php themeUrl(); ?>/assets/images/common/logo.svg" alt="" loading="eager" fetchpriority="high">
                        </picture>
                    </a>
                </div>
                <div class="boxHeader">
                    <p class="txtRequestHeader"><a href="<?php homeUrl(); ?>/contact">入校申し込み・資料請求・お問合せ</a></p>
                    <p class="txtCurrentHeader pc"><a href="<?php homeUrl(); ?>/news">在学生用ページ</a></p>
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
                <li><a href="<?php homeUrl(); ?>">TOP</a></li>
                <li>
                    <a href="<?php homeUrl(); ?>/licence">通学免許</a>
                    <p class="iconMenu sp"><img src="<?php themeUrl(); ?>/assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                    <ul class="listMenuChild">
                        <li><a href="<?php homeUrl(); ?>/licence?tab=progress">入学の流れ</a></li>
                        <li><a href="<?php homeUrl(); ?>/licence?tab=price">料金表</a></li>
                        <li><a href="<?php homeUrl(); ?>/licence?tab=plan">プラン</a></li>
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/licence?tab=overview">入学から<br class="pc">免許取得まで</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php homeUrl(); ?>/camp">合宿免許</a>
                    <p class="iconMenu sp"><img src="<?php themeUrl(); ?>/assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                    <ul class="listMenuChild">
                        <li><a href="<?php homeUrl(); ?>/camp?tab=overviewCamp">概要</a></li>
                        <li><a href="<?php homeUrl(); ?>/camp?tab=movingCost">料金表</a></li>
                        <li><a href="<?php homeUrl(); ?>/camp?tab=eventCalendar">カレンダー</a></li>
                        <li><a href="<?php homeUrl(); ?>/camp?tab=accommodation">宿泊施設</a></li>
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/camp?tab=campFlow">入学から<br class="pc">免許取得まで</a></li>
                        <li><a href="<?php homeUrl(); ?>/licence">入学の流れ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php homeUrl(); ?>/course">各種講習</a>
                    <p class="iconMenu sp"><img src="<?php themeUrl(); ?>/assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                    <ul class="listMenuChild">  
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/course?tab=variousCourse#_paperDriver">ペーパードライバー<br class="pc">講習</a></li>
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/course?tab=variousCourse#_trainingCor">法人・企業様向け<br class="pc">講習</a></li>
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/course?tab=seniorCourse#_70YearsOld">高齢者講習<br class="pc">（70〜74歳）</a></li>
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/course?tab=seniorCourse#_75YearsOld">高齢者講習<br class="pc">（75歳以上）</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php homeUrl(); ?>/about">学校案内</a>
                    <p class="iconMenu sp"><img src="<?php themeUrl(); ?>/assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                    <ul class="listMenuChild">
                        <li><a href="<?php homeUrl(); ?>/about?tab=basic">本校について</a></li>
                        <li><a href="<?php homeUrl(); ?>/about?tab=staff">スタッフ紹介</a></li>
                        <li><a href="<?php homeUrl(); ?>/about?tab=reason">指定校を選ぶ理由</a></li>
                        <li><a href="<?php homeUrl(); ?>/about?tab=faq">Q&A</a></li>
                        <li class="menuFsz18"><a href="<?php homeUrl(); ?>/about?tab=privacy">プライバシー<br class="pc">ポリシー</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php homeUrl(); ?>/news">お知らせ</a>
                    <p class="iconMenu sp"><img src="<?php themeUrl(); ?>/assets/images/common/icon-toggle-menu.svg" alt="" loading="lazy"></p>
                    <ul class="listMenuChild">
                        <li><a href="<?php homeUrl(); ?>/news?tab=noticeNews">お知らせ</a></li>
                        <li><a href="<?php homeUrl(); ?>/news?tab=campaignNews">キャンペーン</a></li>
                    </ul>
                </li>
                <li><a href="<?php homeUrl(); ?>/recruit">求人</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- #header -->
<div id="fixH"></div>