</div><!-- .footer-widgets-wrapper -->

<?php 
    if (of_get_option('maintenance_mode') != 1){
        wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );
        wp_footer();
    }
?>
</body>
</html>