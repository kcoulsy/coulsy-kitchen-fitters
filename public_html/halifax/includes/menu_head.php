                <div id="menuLeft"></div><!--menuleft-->
            
                <div id="menuRight">
                
                    <ul>
                    	<li><a href="<?php echo $nav_home; ?>" <?php if ($current_page == 'home') {echo 'class="current"';} ?> title="Home">Home</a></li>
                        <li><a href="<?php echo $nav_areas_covered; ?>" <?php if ($current_page == 'areas_covered') {echo 'class="current"';} ?> title="Areas Covered">Areas Covered</a></li>
                    	<li><a href="" onClick="return false;" <?php if ($current_page == 'about') {echo 'class="current"';} ?> title="About">About</a>
                            <ul>
                                <li><a href="<?php echo $nav_about; ?>" <?php if ($current_page == 'about') {echo 'class="current"';} ?> title="About">About Us</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $nav_contact; ?>" <?php if ($current_page == 'contact') {echo 'class="current"';} ?> title="Contact">Contact</a></li>
                    </ul>
                    
                </div><!-- menuRight -->
                    