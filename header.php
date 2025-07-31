<!DOCTYPE html>
<html lang="ja">
<?php
$host = $_SERVER['HTTP_HOST'];
$requestUri = $_SERVER['REQUEST_URI'];

if (strpos($host, 'run.app') !== false) {
    $redirectTo = 'https://taku-ds.jp' . $requestUri;
    header("Location: $redirectTo", true, 301);
    exit;
}
?>
<head>
    <?php
      $filename = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);      
    ?>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php if ($filename == 'index') : ?>
       <title>【公式】多久自動車学校｜合宿・通学対応 佐賀県多久市で運転免許を短期取得！</title>
    <?php elseif ($filename == 'camp') : ?>
       <title>【公式】多久自動車学校｜合宿免許なら佐賀県多久市で短期＆お得に取得！</title>
    <?php elseif ($filename == 'licence') : ?>
       <title>【公式】多久自動車学校｜佐賀県多久市の通学免許｜高校生も安心サポート</title>
    <?php elseif ($filename == 'about') : ?>
        <title>【公式】多久自動車学校について｜佐賀県多久市の通学・合宿対応教習所</title>
    <?php elseif ($filename == 'news') : ?>
        <title>【お知らせ】多久自動車学校｜教習情報・最新ニュース・キャンペーン一覧</title>
    <?php elseif ($filename == 'recruit') : ?>
        <title>【採用情報】多久自動車学校｜佐賀県多久市の教習所でインストラクター・受付スタッフ募集</title>
    <?php elseif ($filename == 'course') : ?>
        <title>【公式】多久自動車学校｜教習コース案内・料金表｜佐賀県多久市の通学・合宿免許</title>
    <?php elseif ($filename == 'contact') : ?>
        <title>【お問い合わせ】多久自動車学校｜資料請求・見学予約・ご相談はこちら</title>
    <?php elseif ($filename == 'student') : ?>
        <title>【在校生向け】多久自動車学校｜在校生の方へ｜教習スケジュール・学科予定・連絡事項</title>
    <?php elseif ($filename == 'voice') : ?>
        <title>　卒業生の声 | 【公式】多久自動車学校</title>
    <?php else: ?>
        <title><?php echo strtoupper($filename); ?> | 【公式】多久自動車学校｜合宿・通学対応 佐賀県多久市で運転免許を短期取得！</title>
    <?php endif; ?>
    <link rel="icon" type="image/png" href="favicon.png" />
    <meta name="description" content="佐賀県多久市の多久自動車学校で運転免許を取得！地元高校生向けの通学プランと、大学生にも人気の合宿免許を用意。短期取得＆充実サポートで安心。宿泊施設も完備。" />
    <meta name="keywords" content="多久自動車学校,佐賀県自動車学校,佐賀県指定自動車教習所,合宿免許,多久市,多久,自動車学校,自動車" />
    <meta name="author" content="公安委員会の指定 多久自動車学校" />
    <meta name="robots" content=" all " />
    <meta name="googlebot" content=" all ">
    <meta property="og:image" content="https://taku-ds.jp/assets/images/common/OGP.jpg"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/common.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/<?php echo $filename; ?>.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NM5WKK59');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NM5WKK59"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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
    
