<?php
    /*機能開放 */
    function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    }
    add_action("after_setup_theme", "my_setup");

    /*ファイル読み込み*/
    function my_script_init() {
        wp_enqueue_style("google-fonts-courgette", "https://fonts.googleapis.com/css2?family=Courgette&display=swap", array(), "all");
        wp_enqueue_style("google-fonts-noto", "https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap", array(), "all");
        wp_enqueue_style("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css");
        wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js");
        wp_enqueue_script("font-awesome", "https://kit.fontawesome.com/230697b7eb.js");
        wp_enqueue_style("ress", "https://unpkg.com/ress/dist/ress.min.css");
        wp_enqueue_style("animate", get_template_directory_uri() . "/assets/css/animate.css");
        wp_enqueue_script("wow", get_template_directory_uri() . "/assets/js/wow.min.js");
        wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), "all");
        wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('/assets/js/script.js')), true);
      }

      add_action("wp_enqueue_scripts", "my_script_init");

    /*wow読み込み*/
    function my_js_function() {
      echo <<< EOM
      
      <script>
          new WOW().init();
      </script>
      
      EOM;
      }
      add_action( 'wp_footer', 'my_js_function' );

    /*Contact Form 7で自動挿入されるPタグ、brタグを削除*/
    add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
    function wpcf7_autop_return_false() {
      return false;
    } 

    /*記事の表示を古い順に表示*/
    function change_old( $query ) {
      $query->set('order', 'ASC');
      $query->set('orderby', 'date' );
    }
    add_action( 'pre_get_posts', 'change_old' );