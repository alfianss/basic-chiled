<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>

<?php if (of_get_option('maintenance_mode') != 1){ ?>

    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
    
    <?php if ( of_get_option( 'upload_logo' ) ) { ?>
    <img src="<?php echo of_get_option( 'upload_logo' ); ?>" width="50px" height="25px"/>
    <?php } ?>
    <span class="navbar-brand mb-0 h1"><?php bloginfo( 'name' ); ?></span>
    </nav>

<?php              
        wp_nav_menu( 
            array( 
                'theme_location' => 'header-menu',
                'container'      => 'div',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
            )
        ); 
    }
?>