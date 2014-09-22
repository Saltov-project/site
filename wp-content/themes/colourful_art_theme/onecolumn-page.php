<?php 
/*
Template Name: One Column
*/
art_page_template('onecolumn-page');
wp_get_header();

 if (have_posts()) 
 {
    while (have_posts())  
    {
        art_post();
        comments_template();
    }
 } else {    
    art_not_found_msg();
 }

wp_get_footer(); 