<?php
get_header();
?>

<?php if (of_get_option('maintenance_mode') != 1){ ?>

<div class="container-fluid">
    <!-- <div class="row"> -->
        <?php 
        if (have_posts()): while (have_posts()) : the_post();
            echo "<h2 class='text-center'>".get_the_title()."</h2>";
            echo "<blockquote class='text-center'>".get_the_content()."<blockquote>";
            endwhile; 
        endif;
        ?>
    <!-- </div> -->
</div>

<?php } else { ?>

    <div class="container-fluid">
        <h1 class="text-center">I'm Sorry :(</h1>
        <h2 class="text-center">We're under maintenance.</h2>
    </div>

<?php } ?>

<?php

if (of_get_option('maintenance_mode') != 1){
    get_sidebar();
    wp_link_pages(
        array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
            'after'  => '</div>',
        )
    );
}

get_footer();
?>

