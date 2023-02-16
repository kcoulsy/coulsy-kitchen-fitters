<?php
include ('./includes/config.php');
$current_page = 'areas_covered'; 
include('./includes/overall/header.php');

$area_title = ' Fitting &amp; Installing in the '; 
$at = $k.$area_title; // $k = keyword in config
$area_subtitle = ' Fitter in '; 
$ast = $k.$area_subtitle;

$current_page_area = 'Leeds';


 echo '
        <div id="body">
        
            <h1>I install ' . $kp . ' in all these ' . $current_page_area . ' areas listed below...</h1>
					
            <div class="areas_covered_left">
			
                <div class="areas_covered">
                    <h2>' . $at . 'Leeds LS area</h2>
                    <ul>
<!--                        <li><a href="' . $nav_keighley . '">' .$ast . ' ' . $current_page_area . '</a></li>
-->                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
<!--                    <h2>' . $at . 'Keighley BD22 area</h2>
                    <ul>
                        <li><a href="' . $nav_cowling . '">' .$ast . 'Cowling</a></li>
                        <li><a href="' . $nav_haworth . '">' .$ast . 'Haworth</a></li>
                        <li><a href="' . $nav_oakworth . '">' .$ast . 'Oakworth</a></li>
                        <li><a href="' . $nav_oxenhope . '">' .$ast . 'Oxenhope</a></li>
                    </ul>
-->                </div><!--areas_covered-->

            </div><!--areas_covered_left-->


            <div class="areas_covered_right">

                <div class="alertText">
                    <h6>If the area where you live is not displayed.
                    <br />Please call ' . $phone_number_website . '.</h6>
                </div>

            </div><!--areas_covered_right-->

        </div><!--body-->';

include('./includes/overall/footer.php'); ?>