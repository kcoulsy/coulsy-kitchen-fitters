<?php
include ('./includes/config.php');
$current_page = 'areas_covered'; 
include('./includes/overall/header.php');

$area_title = ' Fitting &amp; Installing in the '; 
$at = $k.$area_title; // $k = keyword in config
$area_subtitle = ' Fitting in '; 
$ast = $k.$area_subtitle;

 echo '
        <div class="body">
        
            <h1>I fit ' . $k . ' in all the areas listed...may travel further</h1>
					
            <div class="areas_covered_left">
            
                <div class="areas_covered">
                    <h2>' . $at . 'Halifax area</h2>
                    <ul>
                        <li><a href="'.$nav_halifax . '">' . $ast . 'Halifax</a></li>
                    </ul>
                </div><!--areas_covered-->
                				
                <div class="areas_covered">
                    <h2>' . $at . 'Bradford area</h2>
                    <ul>
                        <li><a href="' . $nav_bradford . '">' .$ast . 'Bradford</a></li>
                    </ul>
                </div><!--areas_covered-->

                <div class="areas_covered">
                    <h2>' . $at . 'Keighley area</h2>
                    <ul>
                        <li><a href="' . $nav_keighley . '">' .$ast . 'Keighley</a></li>
                    </ul>
                </div><!--areas_covered-->
				
                <div class="areas_covered">
                    <h2>' . $at . 'Huddersfield area</h2>
                    <ul>
                        <li><a href="' . $nav_huddersfield . '">' .$ast . 'Huddersfield</a></li>
                    </ul>
                </div><!--areas_covered-->
				
                <div class="areas_covered">
                    <h2>' . $at . 'Leeds area</h2>
                    <ul>
                        <li><a href="' . $nav_leeds . '">' .$ast . 'Leeds</a></li>
                    </ul>
                </div><!--areas_covered-->
				
                <div class="areas_covered">
                    <h2>' . $at . 'Ilkey area</h2>
                    <ul>
                        <li><a href="' . $nav_ilkley . '">' .$ast . 'Ilkley</a></li>
                    </ul>
                </div><!--areas_covered-->
				
                <div class="areas_covered">
                    <h2>' . $at . 'Harrogate area</h2>
                    <ul>
                        <li><a href="' . $nav_harrogate . '">' .$ast . 'Harrogate</a></li>
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