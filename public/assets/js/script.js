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

    /*ドロワーメニューの表示*/
    jQuery('.p-hamburger').on('click', function() {
        jQuery('.p-drawer, .p-hamburger').toggleClass('is-open');
    });


    /*スクロールしてそこまで移動*/
    jQuery('a[href^="#"]').on('click', function() {
    //クリックしたもののid="#〇〇"を取得　
      var id = jQuery(this).attr('href');
    //ページの一番上からの距離をpositionとして0としておく
      var position = 0;
    //id="#〇〇"が#だけじゃない時はその距離を取得、#だけの時は元々0なので0扱いになる
      if (id != '#') {
          position = jQuery(id).offset().top;
      };
  
      jQuery('html, body').animate ({
          scrollTop: position
      }, 300);
  });
});


// worksページのアイテムに参照が無い場合だけ余白を短く
const aElements = document.querySelectorAll('.p-works-page-item__wrapper'); 

for (let i = 0; i < aElements.length; i++) {
  const aElement = aElements[i];
  if (!aElement.querySelector('.p-works-page-item__reference')) {
    const cElements = aElement.querySelectorAll('.p-works-page-item__hard'); 
    for (let j = 0; j < cElements.length; j++) {
      const cElement = cElements[j];
      cElement.style.paddingBottom = '0'; // padding-bottomを0に設定
    }
  }
}