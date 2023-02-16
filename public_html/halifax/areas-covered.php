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
        
            <h1>I install ' . $kp . ' in all these Halifax areas listed below...</h1>
					
            <div class="areas_covered_left">
            
                <div class="areas_covered">
                    <h2>' . $at . 'Halifax HX1 area</h2>
                    <ul>
                        <li><a href="'.$nav_halifax . '">' . $ast . 'Halifax</a></li>
                        <li><a href="'.$nav_savile_park . '">' . $ast . 'Savile Park</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
                    <h2>' . $at . 'Halifax HX2 area</h2>
                    <ul>
                        <li><a href="'.$nav_bradshaw . '">' . $ast . 'Bradshaw</a></li>
                        <li><a href="'.$nav_highroad_well . '">' . $ast . 'Highroad Well</a></li>
                        <li><a href="'.$nav_illingworth . '">' . $ast . 'Illingworth</a></li>
                        <li><a href="'.$nav_luddenden . '">' . $ast . 'Luddenden</a></li>
                        <li><a href="'.$nav_luddenden_foot . '">' . $ast . 'Luddenden foot</a></li>
                        <li><a href="'.$nav_midgley . '">' . $ast . 'Midgley</a></li>
                        <li><a href="'.$nav_mount_tabor . '">' . $ast . 'Mount Tabor</a></li>
                        <li><a href="'.$nav_norton_tower . '">' . $ast . 'Norton Tower</a></li>
                        <li><a href="'.$nav_ogden . '">' . $ast . 'Ogden</a></li>
                        <li><a href="'.$nav_wainstalls . '">' . $ast . 'Wainstalls</a></li>
                        <li><a href="'.$nav_warley_town . '">' . $ast . 'Warley Town</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
                    <h2>' . $at . 'Halifax HX3 area</h2>
                    <ul>
                        <li><a href="'.$nav_boothtown . '">' . $ast . 'Boothtown</a></li>
                        <li><a href="'.$nav_hipperholme . '">' .$ast . 'Hipperholme</a></li>
                        <li><a href="'.$nav_lightcliffe . '">' .$ast . 'Lightcliffe</a></li>
                        <li><a href="'.$nav_norwood_green . '">' .$ast . 'Norwood Green</a></li>
                        <li><a href="'.$nav_northowram . '">' .$ast . 'Northowram</a></li>
                        <li><a href="'.$nav_ovenden . '">' .$ast . 'Ovenden</a></li>
                        <li><a href="'.$nav_shelf . '">' .$ast . 'Shelf</a></li>
                        <li><a href="'.$nav_skircoat_green . '">' .$ast . 'Skircoat Green</a></li>
                        <li><a href="'.$nav_southowram . '">' .$ast . 'Southowram</a></li>
                        <li><a href="' . $nav_wheatley . '">' .$ast . 'Wheatley</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <div class="areas_covered">
                    <h2>' . $at . 'Halifax HX4 area</h2>
                    <ul>
                        <li><a href="' . $nav_barkisland . '">' .$ast . 'Barkisland</a></li>
                        <li><a href="' . $nav_greetland . '">' .$ast . 'Greetland</a></li>
                        <li><a href="' . $nav_holywell_green . '">' .$ast . 'Holywell Green</a></li>
                        <li><a href="' . $nav_sowood . '">' .$ast . 'Sowood</a></li>
                        <li><a href="' . $nav_stainland . '">' .$ast . 'Stainland</a></li>
                        <li><a href="' . $nav_west_vale . '">' .$ast . 'West Vale</a></li>
                    </ul>
                </div><!--areas_covered-->
				
                
            </div><!--areas_covered_left-->
                
            <div class="areas_covered_right">
			
                <div class="areas_covered">
                    <h2>' . $at . 'Elland Halifax HX5 area</h2>
                    <ul>
                        <li><a href="' . $nav_elland . '">' .$ast . 'Elland</a></li>
                        <li><a href="' . $nav_blackley . '">' .$ast . 'Blackley</a></li>
                    </ul>
                </div><!--areas_covered-->

                <div class="areas_covered">
                    <h2>' . $at . 'Halifax HX6 area</h2>
                    <ul>
                        <li><a href="' . $nav_norland . '">' .$ast . 'Norland</a></li>
                        <li><a href="' . $nav_ripponden . '">' .$ast . 'Ripponden</a></li>
                        <li><a href="' . $nav_rishworth . '">' .$ast . 'Rishworth</a></li>
                        <li><a href="' . $nav_sowerby . '">' .$ast . 'Sowerby</a></li>
                        <li><a href="' . $nav_sowerby_bridge . '">' .$ast . 'Sowerby Bridge</a></li>
                    </ul>
                </div><!--areas_covered-->
                
                <!--HX7	HEBDEN BRIDGE	Cragg Vale, Hebden Bridge, Heptonstall, Mytholmroyd, Old Town-->
				<div class="areas_covered">
                    <h2>' . $at . 'Hebden Bridge HX7 area</h2>
                    <ul>
                        <li><a href="' . $nav_cragg_vale . '">' .$ast . 'Cragg Vale</a></li>
                        <li><a href="' . $nav_hebden_bridge . '">' .$ast . 'Hebden Bridge</a></li>
                        <li><a href="' . $nav_heptonstall . '">' .$ast . 'Heptonstall</a></li>
                        <li><a href="' . $nav_mytholmroyd . '">' .$ast . 'Mytholmroyd</a></li>
                        <li><a href="' . $nav_old_town . '">' .$ast . 'Old Town</a></li>
                    </ul>
                </div><!--areas_covered-->

                <div class="alertText">
                    <h6>If the area where you live is not displayed.
                    <br />Please call ' . $phone_number_website . '</h6>
                </div>

            </div><!--areas_covered_right-->

        </div><!--body-->';

include('./includes/overall/footer.php'); ?>