</div><!-- .footer-widgets-wrapper -->

<?php 
    wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );
    wp_footer();

    if(of_get_option('footer_copyright') != ''){
        echo "<footer class='text-center' style='padding:5px;'>".of_get_option('footer_copyright')."</footer>";
    }
?>


</body>
</html>