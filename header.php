<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitnsseat Web Sitesi</title>

    <?php wp_head(); ?> <!--Bir wordpress web sitesinde olması gereken head kodlarını ekledik footer.php içersinde de var-->

</head>
<body <?php body_class(); ?>>

<header class="top">

<div class="container">
    <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',/*Bu kısımda top menu ile eşleşen menü gelicek belirtiyoruz.*/ 
            'menu_class' => 'navigation'/*Menü ye css düzenlemesi yapmak için class verdik*/
        )

    )
    
    ?>

</div>
</header>