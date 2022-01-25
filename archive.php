<!--Blog yazılarının kategoriye ait içeriklerin listeliği sayfa-->
<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-9"><!--Sayfanın içeriklerinin yanında bileşenleri eklemek için oluşturduk ve yana eklenecek olan bileşenler dışında hepsini oraya ekledik-->

        <h1 class="pb-5"><?php single_cat_title(); ?> </h1> <!--Kategori isimlerini başlık olarak belirledik-->

            <?php if    (have_posts()) : while  (have_posts()) : the_post() ?>
                <h3><?php the_title();?> </h3><!-- Başlık alanı oluşturuldu.-->

                <div class="row">
                    <div class="col-md-2"><!--görsel yazının yanına eklendi -->
                    <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url('small');?>"class="img-fluid pt-1 pb-1"><!--Görsele eklendi-->
                    <?php endif; ?>
                    </div>
                    
                    <div class="col-md-10"><!--yazıyı görselin yanına aldık -->
                        <?php the_excerpt(); ?><!-- kırpılmış özet içeriği sayfada görüntüler-->
                    </div>

                </div>

                <a class="mb-5 d-block" href="<?php the_permalink();?> ">Devamını Oku...</a><!--Permalink vererek devamını oku şeklinde yönlendireceğimiz blog kısmının linkini eklemiş oluyoruz-->         

            <?php endwhile; endif; ?>       
    
        </div>


        <div class="col-md-3"><!--Bileşenleri yana almak için bu alana ekledik-->
            <?php dynamic_sidebar('page-sidebar'); ?> <!--Bileşenler blog sayfasında yani archive.php de görünmesi sağlandı.--> 
        </div>
    </div>


</div>


<?php get_footer(); ?>
