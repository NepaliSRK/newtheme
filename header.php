<!DOCTYPE html>
<html>
    <head>
     
        <?php wp_head();?>
</head>
    <body <?php body_class();?>>

<header class="sticky-top">

     <div class="manage">

     <?php wp_nav_menu(

                        array(
                               'theme_location' => 'top-menu',
                                'menu_class' => 'navigation'
                                )
                        );?>

                        </div>

</header>
