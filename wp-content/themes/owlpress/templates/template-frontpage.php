<?php 
/**
Template Name: Frontpage
*/

get_header();

do_action( 'owlpress_sections', false );
get_template_part('template-parts/sections/section','blog'); 	
	
get_footer(); ?>