/***************************************************************************
 *
 * SCRIPT JS
 *
 ***************************************************************************/
$(document).ready(function() {

    if ($(window).width() <= 768) {
        $('body').addClass(getMobileOperatingSystem());
    }
    //Click event to scroll to top
    $('.scrollToTop').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    //SCROLL TO TOP 
    $(window).scroll(function() {
        if ($(this).scrollTop() > 80) {
            $('.scrollToTop').fadeIn(400);
        } else {
            $('.scrollToTop').fadeOut(400);
        }
    });

    // fixedHeader
    function fixedHeader() {
        var hHead = $('#header').outerHeight();
        $('#fixH').css('height', hHead);
    }
    $(window).on('load', function() {
        fixedHeader();
    });
    let resizeTimer;
    $(window).resize(function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            fixedHeader();
        }, 100);
    });

    // MENU PC
    var isMenuSP = window.matchMedia('(max-width: 768px)');
    var isMenuPC = window.matchMedia('(min-width: 769px)');
    var currentMode = isMenuSP.matches ? 'sp' : 'pc';
    $(window).on('load resize', function() {
        var newMode = isMenuSP.matches ? 'sp' : 'pc';
        if (newMode !== currentMode) {
            if (newMode === 'sp') {} else {
                $('body').removeClass('fixed');
                $('header').removeClass('menuToggleSp');
                $('.listMenuChild').removeAttr('style');
            }
            currentMode = newMode;
        }
    });

    // PC hover
    $('#header .mainMenu .inner .listMenu>li').on('mouseenter', function() {
        if (isMenuPC.matches) {
            $(this).find('.listMenuChild').stop(true).slideDown().addClass('activeListMenuChild');;
        }
    });
    $('#header .mainMenu .inner .listMenu>li').on('mouseleave', function() {
        if (isMenuPC.matches) {
            $(this).find('.listMenuChild').stop(true).slideUp().removeClass('activeListMenuChild');
        }
    });

    // SP TOGGLE
    $('#header .mainMenu .inner .listMenu>li> .iconMenu').on('click', function(e) {
        if (isMenuSP.matches) {
            const $currentItem = $(this).closest('li');
            const $menuList = $(this).closest('.listMenu');
            $menuList.find('li').not($currentItem).removeClass('menuToggleSp').find('.listMenuChild').stop(true).slideUp();
            $currentItem.toggleClass('menuToggleSp').find('.listMenuChild').stop(true).slideToggle();
        }
    });
    $('#header .mainMenu .inner .listMenu a').on('click', function() {
        if (isMenuSP.matches) {
            $('.listMenuChild').slideUp();
            $('.listMenu > li').removeClass('menuToggleSp');
            $('body').removeClass('fixed');
            $('header').removeClass('menuToggleSp');
        }
    });

    // HAMBUGER
    $('.hamburger').click(function() {
        $(this).toggleClass('open');
        $('#header .mainMenu').stop().slideToggle();
        $('body').toggleClass('fixed');
    });

    // TAB
    function activeTab(obj) {
        $('.wrapTab .listTab li').removeClass('active');
        $('.itemTab').removeClass('active').hide();
        $(obj).addClass('active');
        const id = $(obj).find('a').attr('href');
        $(id).addClass('active').show();
    }
    $('.wrapTab .listTab li, .wrapTab .listTab li a').on('click', function (e) {
        e.preventDefault();
        activeTab($(this).closest('li'));
    });
    $(window).on('load', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get("tab");
        const hash = window.location.hash;
    
        const $li = tab
            ? $('.listTab li a[data-tab="' + tab + '"]').parent()
            : $('.wrapTab .listTab li:first');
    
        activeTab($li.length ? $li : $('.wrapTab .listTab li:first'));
    
        if (hash) {
            setTimeout(() => {
                const target = $(hash.replace('_', ''));
                if (target.length) {
                    const header_offset = $('#header').height() || 0;
                    const position = $(window).width() <= 768 ? 15 : 25;
                    let target_offset = 0;
                    if (target.attr('data-offset')) {
                        target_offset = parseInt(target.attr('data-offset'));
                    }
    
                    $('html, body').animate({
                        scrollTop: target.offset().top - header_offset - position + target_offset
                    }, 800);
                }
            }, 300);
        }
        if (tab || hash) {
            history.replaceState(null, '', window.location.pathname);
        }
    });
    

    // Scroll khi click anchor
    $('.anchor a[href*="#"]:not([href="#"]), a.anchor').on('click', function() {
        const position = $(window).width() <= 768 ? 15 : 25;
        if (
            location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
            location.hostname === this.hostname
        ) {
            let target_hash = this.hash.replace('#_', '#');
            target_hash = target_hash.charAt(target_hash.length - 1) === '_' ?
                target_hash.slice(0, -1) :
                target_hash;
            let target = $(target_hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                const header_offset = $('#header').height() || 0;
                let target_offset = 0;

                if (target.attr('data-offset')) {
                    target_offset = parseInt(target.attr('data-offset'));
                }

                $('html,body').animate({
                    scrollTop: target.offset().top - header_offset - position + target_offset
                }, 1000);

                return false;
            }
        }
    });
    // Popup Camp
    $(".scheduleLink a").click(function() {
        $(".popupFlowOriginal").addClass('showPopup');
        $('body').addClass('fixed');
    });
    $(".closePopup").click(function() {
        $(".popupFlowOriginal").removeClass('showPopup');
        $('body').removeClass('fixed');
    });
    //
    $(".popupHotelLink").click(function() {
        $(".popupHotel").addClass('showPopup');
        $('body').addClass('fixed');
    });
    $(".closePopup").click(function() {
        $(".popupHotel").removeClass('showPopup');
        $('body').removeClass('fixed');
    });
    //
    $(document).click(function(e) {
        if ($(e.target).is('.popupFlowOriginal')) {
            $(".popupFlowOriginal").removeClass('showPopup');
            $('body').removeClass('fixed');
        }
    });
});

// DETECH ANDROID OR IOS
getMobileOperatingSystem();

function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/android/i.test(userAgent)) {
        return "Android";
    }
    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return "iOS";
    }
    return "unknown";
}