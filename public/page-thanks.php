<?php get_header(); ?>
    <?php get_template_part('assets/template/parallax'); ?>

    <?php get_template_part('assets/template/hamburger'); ?>

    <?php get_template_part('assets/template/drawer'); ?>
    
    <?php 
        $args = 'CONTACT'; 
        get_template_part('assets/template/mv', null, $args);
    ?>

    <?php get_template_part('assets/template/breadcrumb'); ?>

    <div class="p-thanks">
        <p class="p-thanks__message">
            メールの送信が完了いたしました。
            <br>内容を確認し<span>2日以内</span>にご連絡させていただきますのでしばらくお待ちください。
            <br>お問い合わせありがとうございました。
        </p>
    </div>
    <?php get_template_part('assets/template/to-top'); ?>
<?php get_footer(); ?>