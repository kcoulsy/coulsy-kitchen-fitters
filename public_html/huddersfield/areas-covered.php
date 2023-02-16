<?php
include ('./includes/config.php');
$current_page = 'areas_covered'; 
include('./includes/overall/header.php');

$area_title = ' Fitting &amp; Installing in the '; 
$at = $k.$area_title; // $k = keyword in config
$area_subtitle = ' Fitter in '; 
$ast = $k.$area_subtitle;

 echo '
        <div id="body">
        
            <h1>I install ' . $kp . ' in all these Huddersfield areas listed below...</h1>
					
            <div class="areas_covered_left">
			
                <div class="areas_covered">
                    <h2>' . $at . 'Huddersfield area</h2>
                    <ul>
                        <li><a href="' . $nav_huddersfield . '">' .$ast . 'Huddersfield</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
                    <h2>' . $at . 'Huddersfield area</h2>
                    <ul>
                    </ul>
                </div><!--areas_covered-->

            </div><!--areas_covered_left-->


            <div class="areas_covered_right">

                <div class="alertText">
                    <h6>If the area where you live is not displayed.
                    <br />Please call ' . $phone_number_website . '.</h6>
                </div>

            </div><!--areas_covered_right-->

        </div><!--body-->';

include('./includes/overall/footer.php'); ?>