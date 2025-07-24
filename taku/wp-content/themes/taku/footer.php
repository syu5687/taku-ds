<?php
/**
 * The template for displaying the footer
 */
?>

	<!-- FOOTER CODE -->
	<div class="areaContact">
        <div class="inner">
            <div class="wrapContact">
                <div class="wrapTitle">
                    <h2 class="titleTop">CONTACT</h2>
                    <p class="subTitleTop">入校申し込み・資料請求・お問い合わせ</p>
                </div>
                <ul class="listButtonContact">
                    <li><a href="<?php homeUrl(); ?>/contact"><span class="txtButtonContact">お問い合わせフォーム</span></a></li>
                    <li><a href="<?php homeUrl(); ?>"><span class="txtButtonContact">お電話での問い合わせ</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- areaContact -->
    <div class="scrollToTop">
        <a href="#">
            <p class="icon"><img src="<?php themeUrl(); ?>/assets/images/common/icon-scroll-top.svg" alt="PAGETOTOP" loading="lazy"></p>
            <p class="txtPageTop">PAGE TOP</p>
        </a>
    </div>
    <!-- scrollToTop -->
    <div id="footer">
        <div class="inner">
            <div class="wrapFooter">
                <p class="logoFt"><a class="hover" href="<?php homeUrl(); ?>"><img src="<?php themeUrl(); ?>/assets/images/common/logo.svg" alt="" loading="lazy"></a></p>
                <div class="wrapInfoFt">
                    <p class="txtAddress">〒846-0012<br>佐賀県多久市東多久町大字別府1980</p>
                    <div class="wrapContactInfoFt">
                        <p class="txtContactInfoFt infoTelFt">TEL：<a href="tel:0952762050">0952-76-2050</a></p>
                        <p class="txtContactInfoFt txtFaxFt">FAX：0952-76-2065</p>
                        <p class="txtContactInfoFt txtEmailFt">e-mail：<a href="mailto:info@taku-ds.jp">info@taku-ds.jp</a></p>
                    </div>
                </div>
                <p class="insFt">
                    <a href="#">
                        <img class="insOriginal" src="<?php themeUrl(); ?>/assets/images/common/icon-ins.svg" alt="" loading="lazy">
                        <img class="insHover" src="<?php themeUrl(); ?>/assets/images/common/icon-ins-hover.svg" alt="" loading="lazy">
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- #footer -->
    <p id="copyright">Copyright (C)Taku Driving School. <br class="sp">All Right reserved.</p>

	<?php wp_footer(); ?>
</body>
</html>