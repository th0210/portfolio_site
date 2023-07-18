<?php get_header(); ?>

    <?php get_template_part('assets/template/parallax'); ?>

    <?php get_template_part('assets/template/hamburger'); ?>

    <?php get_template_part('assets/template/drawer'); ?>

    <?php 
        $args = 'CONTACT'; 
        get_template_part('assets/template/mv', null, $args);
    ?>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-contact-page">
        <p class="p-contact-page__message">
            お問い合わせは下記のフォームからご記入ください。
            <br><span>2日以内</span>にご連絡させていただきます。
        </p>
        <div class="p-contact-page__inner">
            <h2 class="c-section-title">FORM</h2>
            <?php echo do_shortcode('[contact-form-7 id="23" title="コンタクトフォーム 1"]'); ?>
        </div>
    </div>

    <?php get_template_part('assets/template/to-top'); ?>

<?php get_footer(); ?>