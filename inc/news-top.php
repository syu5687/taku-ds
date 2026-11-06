<?php
/**
 * TOPページ用：news.php の「お知らせ」タブから
 * タイトル・日付・リンク先IDを自動で取り出す関数
 *
 * news.php を更新するだけで TOP のお知らせ欄も連動して変わる仕組み。
 */
function getTopNews($limit = 3)
{
    // news-top.php は inc/ の中にあるので、1つ上の階層の news.php を読む
    $file = dirname(__DIR__) . '/news.php';

    // ファイルが読めない場合は空の配列を返す（TOPページが真っ白にならないように）
    if (!is_readable($file)) {
        return [];
    }

    $source = file_get_contents($file);

    // news.php 先頭・末尾の include などのPHPタグを取り除く
    // （HTMLとして解析する時に邪魔になるため）
    $source = preg_replace('/<\?php.*?\?>/s', '', $source);

    // HTMLの細かい文法エラーで警告が出ないようにする
    libxml_use_internal_errors(true);

    $dom = new DOMDocument();
    // 先頭に文字コード指定を付けて、日本語が文字化けしないようにする
    $dom->loadHTML('<?xml encoding="UTF-8">' . $source);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // 「お知らせ」タブ(#noticeNews)の直下にある記事ブロック(.wrapBasicPlan)だけを取得
    // ※ <!-- --> でコメントアウトした記事は自動的に対象外になる
    $items = $xpath->query(
        '//div[@id="noticeNews"]/div[contains(concat(" ", normalize-space(@class), " "), " wrapBasicPlan ")]'
    );

    $news = [];

    foreach ($items as $item) {
        // 記事ブロック内のタイトル(h3.titleItemContent)と日付(p.timeNews)を探す
        $titleNode = $xpath->query('.//h3[contains(@class, "titleItemContent")]', $item)->item(0);
        $dateNode  = $xpath->query('.//p[contains(@class, "timeNews")]', $item)->item(0);

        // タイトルが無いブロックは飛ばす
        if (!$titleNode) {
            continue;
        }

        $news[] = [
            'id'    => $item->getAttribute('id'),              // リンク先 (#noticeNews000 など)
            'title' => trim($titleNode->textContent),
            'date'  => $dateNode ? trim($dateNode->textContent) : '',
        ];

        // 表示件数に達したら終了
        if (count($news) >= $limit) {
            break;
        }
    }

    return $news;
}
