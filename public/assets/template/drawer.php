<div class="p-drawer">
    <div class="p-drawer__inner">
        <div class="p-drawer__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/portfolio-logo.png" alt="Portfolio"></a>
        </div>
        <ul class="p-drawer__lists">
            <li class="p-drawer__list">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer__link">HOME</a>
            </li>
            <li class="p-drawer__list">
                <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>" class="p-drawer__link">WORKS</a>
            </li>
            <li class="p-drawer__list">
                <a href="<?php echo esc_url(get_post_type_archive_link('skills')); ?>" class="p-drawer__link">SKILLS</a>
            </li>
            <li class="p-drawer__list">
                <?php $page = get_page_by_path('contact'); ?>
                <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="p-drawer__link">CONTACT</a>
            </li>
        </ul>
    </div>
</div>
