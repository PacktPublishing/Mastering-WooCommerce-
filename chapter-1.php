<?php
add_filter( 'jetpack_just_in_time_msgs', '__return_false', 20 ); 
add_filter( 'jetpack_show_promotions', '__return_false', 20 );
add_filter( 'jetpack_blaze_enabled', '__return_false' );
add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false');
