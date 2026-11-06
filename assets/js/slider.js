/***************************************************************************
 *
 * SLIDER JS
 *
 ***************************************************************************/
$(function () {
    // メイン画像の共通設定（3施設とも同じだったので1か所にまとめる）
    // ※responsive内の設定は元の設定に「上書き」される仕組みなので、
    //   centerMode や slidesToShow など変わらない項目は書かなくてOK
    var mainOptions = {
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        centerMode: true,
        centerPadding: '60px',
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        responsive: [
            { breakpoint: 768, settings: { arrows: true, centerPadding: '20px' } },
            { breakpoint: 480, settings: { arrows: true, centerPadding: '10px' } }
        ]
    };

    // サムネイルの共通設定
    var thumbOptions = {
        centerMode: true,
        centerPadding: '0px',
        arrows: false,
        focusOnSelect: true,
        slidesToShow: 3,
        infinite: false,
        responsive: [
            { breakpoint: 768, settings: { slidesToShow: 5, centerPadding: '10px' } },
            { breakpoint: 480, settings: { slidesToShow: 3, centerPadding: '5px' } }
        ]
    };

    // 施設ごとの枠（.slideArea）を1つずつ処理する
    $('.slideArea').each(function () {
        // この枠の「中にある」メインとサムネだけを取得する
        var $main  = $(this).find('.hotelSlider');
        var $thumb = $(this).find('.hotelThumb');

        // asNavFor にクラス名ではなく要素そのものを渡す
        // → 同じ枠の中の相手としか連動しないので、取り違えが起きない
        // $.extend({}, 共通設定, 追加設定) は「共通設定をコピーして追加分を足す」書き方
        // （共通設定そのものを書き換えないように、空の {} にコピーしている）
        $main.slick($.extend({}, mainOptions, { asNavFor: $thumb }));
        $thumb.slick($.extend({}, thumbOptions, { asNavFor: $main }));
    });
});