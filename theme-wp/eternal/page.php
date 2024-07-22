<?php 

get_header();

    if(is_woocommerce()){

        the_content();

    }else {

        get_template_part('templates/flexible');

    }

get_footer();