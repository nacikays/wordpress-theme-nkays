<!--Blog yazılarının kategoriye ait içeriklerin içerisindeki detay yazılarının olduğu sayfa-->

<!--front-page.php sekmesindeki içeriği ekledik ve blog sayfası yazılarının page.php de olduğu gibi görünmesini sağladık.-->

<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php the_title();?> </h1><!-- Başlık alanı oluşturuldu.-->
    
    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('large');?>"class="img-fluid pt-5 pb-5">
    <?php endif; ?>



    <?php if (have_posts()) : while  (have_posts()) : the_post() ?>
        <?php the_content(); ?><!-- Tüm içeriği sayfada görüntüler-->
    <?php endwhile; endif; ?>


    <?php comments_template(); ?> <!--Blog sayfasında yorum yapılabilmesi için eklenen yapı-->
</div>


<?php get_footer(); ?>
