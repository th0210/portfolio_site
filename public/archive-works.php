<?php get_header(); ?>
    <?php get_template_part('assets/template/parallax');?>

    <?php get_template_part('assets/template/hamburger');?>

    <?php get_template_part('assets/template/drawer');?>

    <?php 
        $args = 'WORKS'; 
        get_template_part('assets/template/mv', null, $args);
    ?>

    <?php get_template_part('assets/template/breadcrumb');?>

    <div class="p-works-page">
        <div class="l-inner">
            <p class="p-works-page__message">
                過去に取り組んだポートフォリオの一覧になります。
                <br>これらは全て架空サイトであり、ポートフォリオとして掲載が許可されているデザインカンプをお借りしてコーディングをしています。
                <br><span>※デザインは行っていません。</span>
                <br>ユーザー名とパスワードを求められた場合は記載されているものを入力してください。
            </p>
            <div class="p-works-page__wrapper">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="p-works-page-item wow fadeInUp" id="<?php the_title(); ?>"data-wow-duration="1.7s">
                            <div class="p-works-page-item__wrapper">
                                <?php if ( get_field( 'link' ) ) : ?>
                                    <a href="<?php the_field( 'link' ); ?>" class="p-works-page-item__link">
                                <?php endif; ?>
                                    <div class="p-works-page-item__img">
                                        <?php if(has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                    </div>
                                </a>
                                <h2 class="p-works-page-item__title">
                                    <?php the_title(); ?>
                                    <span>(
                                        <?php
                                            $terms = get_the_terms($post->ID, 'genre');
                                            if($terms) {
                                                echo $terms[0]->name;
                                            }
                                        ?>
                                    )</span>
                                </h2>
                                <div class="p-works-page-item__source">
                                        <a href="
                                        <?php if(get_field('source')) : ?>
                                            <?php the_field('source'); ?>
                                        <?php endif; ?>
                                        " class="c-source-button">ソースコード<i class="fa-sharp fa-solid fa-angle-right"></i></a>
                                </div>
                                <?php if(get_field('id') || get_field('password')) : ?>
                                    <div class="p-works-page-item__security">
                                        <p class="p-works-page-item__id">ユーザー名:<?php the_field('id'); ?></p>
                                        <p class="p-works-page-item__pass">パスワード:<?php the_field('password'); ?></p>
                                    </div>
                                <?php endif; ?>
                                <dl>
                                    <div class="p-works-page-item__language">
                                        <?php if ( get_field('language1') ) : ?>
                                            <dt class="p-works-page-item__language__title">使用言語</dt>
                                            <dd class="p-works-page-item__language__text">
                                                <ul class="p-works-page-item__language__lists">
                                                    <?php if(get_field('language1')) : ?>
                                                        <li class="p-works-page-item__language__list"><?php the_field('language1'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if(get_field('language2')) : ?>
                                                        <li class="p-works-page-item__language__list"><?php the_field('language2'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if(get_field('language3')) : ?>
                                                        <li class="p-works-page-item__language__list"><?php the_field('language3'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if(get_field('language4')) : ?>
                                                        <li class="p-works-page-item__language__list"><?php the_field('language4'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if(get_field('language5')) : ?>
                                                        <li class="p-works-page-item__language__list"><?php the_field('language5'); ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </dd>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-works-page-item__library">
                                        <?php if ( get_field('library1') ) : ?>
                                            <dt class="p-works-page-item__library__title">使用ライブラリ</dt>
                                            <dd class="p-works-page-item__library__text">
                                                <ul class="p-works-page-item__library__lists">
                                                    <?php if('get_library1') : ?>
                                                        <li class="p-works-page-item__library__list"><?php the_field('library1'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if('get_library2') : ?>
                                                        <li class="p-works-page-item__library__list"><?php the_field('library2'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if('get_library3') : ?>
                                                        <li class="p-works-page-item__library__list"><?php the_field('library3'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if('get_library4') : ?>
                                                        <li class="p-works-page-item__library__list"><?php the_field('library4'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if('get_library5') : ?>
                                                        <li class="p-works-page-item__library__list"><?php the_field('library5'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if('get_library6') : ?>
                                                        <li class="p-works-page-item__library__list"><?php the_field('library6'); ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </dd>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-works-page-item__period">
                                        <?php if ( get_field('period') ) : ?>
                                            <dt class="p-works-page-item__period__title">制作期間</dt>
                                            <dd class="p-works-page-item__period__text"><?php the_field('period'); ?></dd>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-works-page-item__learn">
                                        <?php if ( get_field('description') ) : ?>
                                            <dt class="p-works-page-item__learn__title">説明</dt>
                                            <dd class="p-works-page-item__learn__text"><?php echo nl2br(get_post_meta($post->ID,'description',true)); ?></dd>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-works-page-item__hard">
                                        <?php if ( get_field('hard1') ) : ?>
                                            <dt class="p-works-page-item__hard__title">苦戦したところ</dt>
                                            <dd class="p-works-page-item__hard__text">
                                                <ul class="p-works-page-item__hard__lists">
                                                    <?php if (get_field('hard1')) : ?>
                                                        <li class="p-works-page-item__hard__list"><?php the_field('hard1'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if (get_field('hard2')) : ?>
                                                        <li class="p-works-page-item__hard__list"><?php the_field('hard2'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if (get_field('hard3')) : ?>
                                                        <li class="p-works-page-item__hard__list"><?php the_field('hard3'); ?></li>
                                                    <?php endif; ?>

                                                    <?php if (get_field('hard4')) : ?>
                                                        <li class="p-works-page-item__hard__list" class="p-works-page-item__hard__list"><?php the_field('hard4'); ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </dd>
                                        <?php endif; ?>
                                    </div>
                                </dl>
                                <?php if(get_field('reference')) : ?>
                                    <div class="p-works-page-item__reference">
                                        参照：<a href="<?php the_field('reference'); ?>">無料コーディング練習所様</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_template_part('assets/template/to-top');?>
<?php get_footer(); ?>