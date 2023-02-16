<?php
include ('./includes/config.php');

// calls config
$current_page = 'clayton';

// replaces the name on this page
$current_page_area = 'Clayton';
$current_page_code = 'BD14';
$current_page_city = 'Bradford';
$current_page_region = 'Bradford';
$current_page_county = 'Yorkshire';


$current_page_area_short		=	$current_page_area;
$current_page_area_long			=	$current_page_area.' | '.$current_page_code.' | '.$current_page_city;

$current_page_gallery_title		=	$k . ' fitting in ' . $current_page_area.', '.$current_page_code.', '.$current_page_city.', '.$current_page_region.', '.$current_page_county.'.';
$current_page_gallery_alt		=	$k . ' fitting in ' . $current_page_area.', '.$current_page_code.', '.$current_page_city.', '.$current_page_region.', '.$current_page_county.'.';

include('./includes/overall/header.php');
    
include'./includes/body_content.php';

include('./includes/overall/footer.php'); ?>