<?php get_header(); ?>

    <?php get_template_part('assets/template/parallax'); ?>   

    <?php get_template_part('assets/template/hamburger'); ?>

    <?php get_template_part('assets/template/drawer'); ?>

    <?php 
        $args = 'SKILLS'; 
        get_template_part('assets/template/mv', null, $args);
    ?>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-skills-page">
        <div class="l-inner">
            <div class="p-skills-page__wrapper">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="p-skills-page-card wow fadeInUp" id="<?php the_title(); ?>" data-wow-duration="1.7s">
                            <div class="p-skills-page-card__wrapper">
                                <?php 
                                    $title = get_the_title();
                                    if($title == 'WordPress'|| $title == 'Figma') {
                                        echo '<div class="p-skills-page-card__img small">';
                                    } else {
                                        echo '<div class="p-skills-page-card__img">';
                                    }
                                ?>
                                    <?php if(has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php esc_url(get_template_directory_uri()); ?>/assets/img/noimg.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="p-skills-page-card__content">
                                    <h2 class="p-skills-page-card__title"><?php the_title(); ?></h2>
                                    <div class="p-skills-page-card__text">
                                        <ul class="p-skills-page-card__lists">
                                            <?php if(get_field('skill1')) : ?>
                                                <li class="p-skills-page-card__list"><?php the_field('skill1'); ?></li>
                                            <?php endif; ?>

                                            <?php if(get_field('skill2')) : ?>
                                                <li class="p-skills-page-card__list"><?php the_field('skill2'); ?></li>
                                            <?php endif; ?>

                                            <?php if(get_field('skill3')) : ?>
                                                <li class="p-skills-page-card__list"><?php the_field('skill3'); ?></li>
                                            <?php endif; ?>

                                            <?php if(get_field('skill4')) : ?>
                                                <li class="p-skills-page-card__list"><?php the_field('skill4'); ?></li>
                                            <?php endif; ?>

                                            <?php if(get_field('skill5')) : ?>
                                                <li class="p-skills-page-card__list"><?php the_field('skill5'); ?></li>
                                            <?php endif; ?>

                                            <?php if(get_field('skill6')) : ?>
                                                <li class="p-skills-page-card__list"><?php the_field('skill6'); ?></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php get_template_part('assets/template/to-top'); ?>

<?php get_footer(); ?>