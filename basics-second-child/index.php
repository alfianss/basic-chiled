<?php
get_header();
?>

<div class="container-fluid">
    <?php 
    if(of_get_option('blog_description') != '') {        
        echo "<h2 class='text-center'>".of_get_option('blog_description')."</h2>";
    }

    if(of_get_option('limit_post') != null) {
        $limit = of_get_option('limit_post');
        query_posts('posts_per_page='.$limit);
    }
    
    if (have_posts()): while (have_posts()) : the_post();
        echo "<h2 class='text-center'>".get_the_title()."</h2>";
        echo "<blockquote class='text-center'>".get_the_content()."<blockquote>";
        endwhile; 
    endif;
    ?>
</div>
<?php

if(of_get_option('sidebar_frontpage') == 'show') {
    get_sidebar();
}


wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
        'after'  => '</div>',
    )
);

get_footer();
?>

