<!--Front-page alanında belirttiğimiz sadece ana sayfayı kapsadığından dolayı eklenilen yeni sayfaların çalışmas için page.php kullanıyoruz-->

<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php the_title();?> </h1><!-- Başlık alanı oluşturuldu.-->
    <?php if    (have_posts()) : while  (have_posts()) : the_post() ?>
        <?php the_content(); ?><!-- içeriği sayfada görüntüler-->
    <?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>
