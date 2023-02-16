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
        
            <h1>I install ' . $kp . ' in all these Bradford areas listed below...</h1>
					
            <div class="areas_covered_left">
			
                <div class="areas_covered">
                    <h2>' . $at . 'Bradford City area</h2>
                    <ul>
                        <li><a href="' . $nav_bradford . '">' .$ast . 'Bradford</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
                    <h2>' . $at . 'Bradford BD6 area</h2>
                    <ul>
                        <li><a href="' . $nav_buttershaw . '">' .$ast . 'Buttershaw</a></li>
                        <li><a href="' . $nav_wibsey . '">' .$ast . 'Wibsey</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
                    <h2>' . $at . 'Bradford BD13 area</h2>
                    <ul>
                        <li><a href="' . $nav_cullingworth . '">' .$ast . 'Cullingworth</a></li>
                        <li><a href="' . $nav_denholme . '">' .$ast . 'Denholme</a></li>
                        <li><a href="' . $nav_queensbury . '">' .$ast . 'Queensbury</a></li>
                        <li><a href="' . $nav_thornton . '">' .$ast . 'Thornton</a></li>
                    </ul>
                </div><!--areas_covered-->
				
                <div class="areas_covered">
                    <h2>' . $at . 'Bradford BD14 area</h2>
                    <ul>
                        <li><a href="' . $nav_clayton . '">' .$ast . 'Clayton</a></li>
                    </ul>
                </div><!--areas_covered-->

            </div><!--areas_covered_left-->


            <div class="areas_covered_right">

                <div class="areas_covered">
                    <h2>' . $at . 'Bradford BD15 area</h2>
                    <ul>
                        <li><a href="' . $nav_allerton . '">' .$ast . 'Allerton</a></li>
                        <li><a href="' . $nav_norr . '">' .$ast . 'Norr</a></li>
                        <li><a href="' . $nav_wilsden . '">' .$ast . 'Wilsden</a></li>
                    </ul>
                </div><!--areas_covered-->

                <div class="areas_covered">
                    <h2>' . $at . 'Bradford BD16 area</h2>
                    <ul>
                        <li><a href="' . $nav_bingley . '">' .$ast . 'Bingley</a></li>
                        <li><a href="' . $nav_cottingley . '">' .$ast . 'Cottingley</a></li>
                        <li><a href="' . $nav_eldwick . '">' .$ast . 'Eldwick</a></li>
                        <li><a href="' . $nav_harden . '">' .$ast . 'Harden</a></li>
                    </ul>
                </div><!--areas_covered-->

                <div class="alertText">
                    <h6>If the area where you live is not displayed.
                    <br />Please call ' . $phone_number_website . '.</h6>
                </div>

            </div><!--areas_covered_right-->

        </div><!--body-->';

include('./includes/overall/footer.php'); ?>