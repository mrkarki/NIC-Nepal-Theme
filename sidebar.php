<!-- Sidebar
============================================= -->
<div class="sidebar nobottommargin col_last" role="complementary">
    <div class="sidebar-widgets-wrap">
        <?php

        if( is_active_sidebar( 'nk_sidebar' ) ){
            dynamic_sidebar( 'nk_sidebar' );
        }

        ?>
    </div>
</div><!-- .sidebar end -->