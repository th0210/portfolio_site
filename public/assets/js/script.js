const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    autoplay: true,

    speed: 600,
  
    // If we need pagination
    /*pagination: {
      el: '.swiper-pagination',
    },*/
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 20,
    breakpoints: {
        600: {
            slidesPerView: 1.8,
            spaceBetween: 0,
        }
    },
  });

jQuery(function() {
    var windowHeight = jQuery(window).height();
    var headerHeight = jQuery('.l-header').height();


    /*スクロールでヘッダー表示*/ 
    jQuery(window).on("scroll", function() {
        if (400 < jQuery(this).scrollTop()) {     
            jQuery('.c-scroll').addClass( 'is-hidden' );
        } else {  
            jQuery('.c-scroll').removeClass( 'is-hidden' );
        }
    });


    /*スクロールでトップページのトップへ戻るボタン表示・非表示*/ 
    jQuery(window).on("scroll", function() {
        if (600 < jQuery(this).scrollTop()) {
            jQuery('.c-to-top').addClass( 'is-show' );
        } else {
            jQuery('.c-to-top').removeClass( 'is-show' );
        }
      });


    /*スクロールでトップページ以外のトップへ戻るボタン表示・非表示*/ 
    jQuery(window).on("scroll", function() {
        if (400 < jQuery(this).scrollTop()) {
            jQuery('.c-to-top.page').addClass( 'is-show' );
        } else {
            jQuery('.c-to-top.page').removeClass( 'is-show' );
        }
      });

    
    /*スクロールでトップページのヘッダーの色変更*/ 
    if(window.document.body.id === 'top') {
    jQuery(window).on("scroll", function() {
        if (windowHeight - headerHeight < jQuery(this).scrollTop()) {     
            jQuery('.l-header').addClass( 'js-header' );
            jQuery('.l-header__logo').addClass( 'is-show');
        } else {  
            jQuery('.l-header').removeClass( 'js-header' );
            jQuery('.l-header__logo').removeClass( 'is-show' );
        }
    });
    } else {
        var mvHeight = jQuery('.p-mv.sub-page').height();
    jQuery(window).on("scroll", function() {
        if (mvHeight - headerHeight < jQuery(this).scrollTop()) {     
            jQuery('.l-header').addClass( 'js-header' );
            jQuery('.l-header__logo').addClass( 'is-show');
        } else {  
            jQuery('.l-header').removeClass( 'js-header' );
            jQuery('.l-header__logo').removeClass( 'is-show' );
        }
    });
    }

    /*スクロールでトップページ以外のヘッダーの色変更*/ 
    /*var mvHeight = jQuery('.p-mv.sub-page').height();
    jQuery(window).on("scroll", function() {
        if (mvHeight - headerHeight < jQuery(this).scrollTop()) {     
            jQuery('.l-header').addClass( 'js-header' );
            jQuery('.l-header__logo').addClass( 'is-show');
        } else {  
            jQuery('.l-header').removeClass( 'js-header' );
            jQuery('.l-header__logo').removeClass( 'is-show' );
        }
    });*/


    /*ローディング画面の表示*/
    /*jQuery(window).on('load', function() {
        jQuery('.c-hollow-dots-spinner').delay(1000).fadeOut(500);
        jQuery('.p-loading').delay(1000).fadeOut(500);
        setTimeout(function(){
            $('.p-loading').fadeOut(1000);
        },5000);
    });*/


    /*ドロワーメニューの表示*/
    jQuery('.p-hamburger').on('click', function() {
        jQuery('.p-drawer, .p-hamburger').toggleClass('is-open');
    });
});