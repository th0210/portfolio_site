<?php get_header('top'); ?>
    <?php get_template_part('assets/template/parallax'); ?>

    <?php get_template_part('assets/template/hamburger'); ?>

    <?php get_template_part('assets/template/drawer'); ?>

    <div class="p-mv">
        <h1 class="p-mv__title">Portfolio</h1>
        <div class="c-scroll"><span>SCROLL</span></div>
    </div>

    <section class="p-about">
        <div class="p-about__inner wow fadeInUp" data-wow-duration="1.7s">
            <h2 class="c-section-title p-about__title">ABOUT</h2>
            <div class="p-about__wrapper">
                <div class="p-about__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/profile.png" alt="プロフィールイメージ"></div>
                <div class="p-about__content">
                    <div class="p-about-profile">
                        <p class="p-about-profile__title">PROFILE</p>
                        <p class="p-about-profile__text">
                            男性、神奈川県在住。
                            <br>趣味は猫を愛でる事、散歩、ゲーム、料理、動画鑑賞、音楽鑑賞、カラオケ、ストレッチなど。
                            <br>作業やモノ作りが好きというところからWEB制作に興味を持ち、社会復帰を目指して勉強中です。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-works">
        <div class="p-works__inner wow fadeInUp" data-wow-duration="1.7s">
            <h2 class="c-section-title p-works__title">WORKS</h2>
            <div class="p-swiper">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides --> 
                        <?php
                            $args = [
                                'post_type' => 'works',
                            ];

                            $the_query = new WP_Query($args);
                        ?>
                        <?php if($the_query->have_posts()): ?>
                            <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="swiper-item">
                                        <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?> #<?php the_title(); ?>" class="swiper-item__link">
                                            <?php if(has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php else : ?>
                                                <img src="<?php esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </a>
                                        <h3 class="p-swiper__title"><?php the_title(); ?>
                                            <span>(
                                                <?php
                                                    $terms = get_the_terms($post->ID, 'genre');
                                                    if($terms) {
                                                        echo $terms[0]->name;
                                                    }
                                                ?>
                                            )</span>
                                        </h3>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- swiper-wrapper -->
                
                    <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                
                </div><!-- swiper -->
                <div class="swiper-pagination"></div>
            </div>

            <div class="p-works__button">
                <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class=" c-button learn-more">
                    <span class="c-button__circle" aria-hidden="true">
                    <span class="c-button__icon arrow"></span>
                    </span>
                    <span class="c-button__text">Learn More</span>
                </a>
            </div>
        </div>
    </section>

    <section class="p-skills">
        <div class="l-inner p-skills__inner wow fadeInUp" data-wow-duration="1.7s">
            <div class="p-skills__wrapper">
                <div class="p-skills__textarea">
                    <h2 class="c-section-title p-skills__title">SKILLS</h2>
                    <div class="p-skills__button">
                        <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?>" class=" c-button learn-more">
                            <span class="c-button__circle" aria-hidden="true">
                            <span class="c-button__icon arrow"></span>
                            </span>
                            <span class="c-button__text">Learn More</span>
                        </a>
                    </div>
                </div>
                <div class="p-skills__content">
                    <div class="p-skills-item">
                        <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?> #HTML" class="p-skills-item__link">
                            <div class="p-skills-item__img">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/html-css.png" alt="HTML&CSS">
                            </div>
                            <div class="p-skills-item__textarea">
                                <h3 class="p-skills-item__title">HTML / CSS</h3>
                                <p class="p-skills-item__text">
                                    簡潔で分かりやすいコーディングを心がけています。
                                </p>
                            </div>
                            <span class="p-skills-item__arrow"></span>
                        </a>
                    </div>
                    <div class="p-skills-item">
                        <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?> #JavaScript / jQuery" class="p-skills-item__link">
                            <div class="p-skills-item__img">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/js.png" alt="JavaScript&jQuery">
                            </div>
                            <div class="p-skills-item__textarea">
                                <h3 class="p-skills-item__title">JavaScript / jQuery</h3>
                                <p class="p-skills-item__text">
                                    ライブラリやアニメーションを使ってサイトの動きを豊かにします。
                                </p>
                            </div>
                            <span class="p-skills-item__arrow"></span>
                        </a>
                    </div>
                    <div class="p-skills-item">
                        <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?> #WordPress" class="p-skills-item__link">
                            <div class="p-skills-item__img">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/wordpress.png" alt="WordPress">
                            </div>
                            <div class="p-skills-item__textarea">
                                <h3 class="p-skills-item__title">WordPress</h3>
                                <p class="p-skills-item__text">静的サイトからオリジナルテーマ作成が可能です。</p>
                            </div>
                            <span class="p-skills-item__arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-skills__button__sp">
                <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?>" class=" c-button learn-more">
                    <span class="c-button__circle" aria-hidden="true">
                    <span class="c-button__icon arrow"></span>
                    </span>
                    <span class="c-button__text">Learn More</span>
                </a>
            </div>
        </div>
    </section>

    <section class="p-contact">
        <div class="p-contact__inner wow fadeInUp" data-wow-duration="1.7s">
            <h2 class="c-section-title p-contact__title">CONTACT</h2>
            <p class="p-contact__text">
                ポートフォリオサイトをご覧いただきありがとうございます。
                <br>ご連絡は下のボタンより、リンク先のお問い合わせフォームをご利用ください。
            </p>
            <div class="p-contact__button">
                <?php $page = get_page_by_path('contact'); ?>
                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class=" c-button learn-more">
                    <span class="c-button__circle" aria-hidden="true">
                    <span class="c-button__icon arrow"></span>
                    </span>
                    <span class="c-button__text">FORM</span>
                </a>
            </div>
        </div>
    </section>

    <div class="c-to-top">
        <a href="#" class="c-to-top__link"><i class="fa-solid fa-angle-up"></i></a>
    </div>
<?php get_footer(); ?>