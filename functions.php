<?php
/* function.php sitemizde bulunan tüm  fonksiyon dosyalarının tutulduğu kısımdır. fonksiyon yapıları buraya eklenir diğer alanlarda çağırılır. Not: <?php etiketi açılır ama kapatılmaz*/


function load_stylesheets(){
    wp_register_style('bootstrap','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    /* Bootstrap min.cs kodlarını sayfa yapısı için ekledik */

    
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
    /* get_template_directory_uri()  wordpress tema değişikliğinde geçişleri sağlar. */
}

add_action('wp_enqueue_scripts', 'load_stylesheets');/*style dosyalarını yükledik*/

add_filter('use_block_editor_for_post_type' . '__return_false', 100);/*wp admin arayüzünde klasik edötörü yükledik */

add_theme_support('menus'); /*wp admin paneli görünüm sekmesine menü alanı ekledik*/

add_theme_support('post-thumbnails'); /*Wp admin panelinde içeriklere öne çıkarılan görsel seçeneğini ekledik*/
add_image_size('small',100,100,true);/* Yüklediğimiz görsellerin boyut sınırlandırmasını sağladık small*/
add_image_size('large',600,600,true);/* Yüklediğimiz görsellerin boyut sınırlandırmasını sağladık large*/


register_nav_menus(/*Sayfamızda olabilecek menüleri tanımladık*/
    array(
        'top-menu' => __('Top Menu', 'theme'),/*menünün header kısmında olacağını belirtecek alanı oluşturduk*/ 
        'footer-menu'=>__('Footer Menu', 'theme'),/*menünün footer kısmında olacağını belirtecek alanı oluşturduk*/

    )
);

register_sidebar(  /*wp admin panelinde görünüm altında bileşen ekleme eklentisi eklendi*/ 
    array(
        'name'=> 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);


