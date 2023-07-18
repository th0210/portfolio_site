<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <?php wp_head(); ?>
    </head>
    <body>
        <header class="l-header">
            <div class="l-header__inner">
                <div class="l-header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo__link"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/portfolio-logo.png" alt="Portfolio"></a>
                </div>
                <div class="p-header-nav">
                    <ul class="p-header-nav__lists">
                        <li class="p-header-nav__list">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header-nav__link">HOME</a>
                        </li>
                        <li class="p-header-nav__list">
                            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="p-header-nav__link">WORKS</a>
                        </li>
                        <li class="p-header-nav__list">
                            <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?>" class="p-header-nav__link">SKILLS</a>
                        </li>
                        <li class="p-header-nav__list">
                            <?php $page = get_page_by_path('contact'); ?>
                            <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="p-header-nav__link">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>