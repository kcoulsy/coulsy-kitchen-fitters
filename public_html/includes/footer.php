<div class="footer">
    <div class="footerContainer">
    
        <div class="footerBox">
            <h3>Nav</h3>
            <ul>
				<?php
				$pages = array (
				'Home'				=>	$nav_home,
				'Areas Covered'		=>	$nav_areas_covered,
				'About'				=>	$nav_about,
				'Contact'			=>	$nav_contact
				);
                    
			// The page being viewed:
			$this_page = basename($_SERVER['PHP_SELF']);
			
			// Create each menu item:
			foreach ($pages as $k => $v) {
				// Start the item:
		echo '<li';
		// Add the class if it's the current page:
		if ($this_page == $v) echo ' class="selected"';
		
		// Complete the item:
		echo '><a href="' . $v . '"><span>' . $k . '</span></a></li>
		'; } // End of FOREACH loop.
?>
            </ul>
        </div><!--footerBox-->
    
	<div class="footerBoxSpacer"></div>
    
        <div class="footerBox">
            <h3>Kitchen designs, styles &amp; trends</h3>
                <ul>
                    <li><a href="<?php echo $nav_modern_kitchens; ?>" >Modern Kitchens Styles &amp; Trends <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_contemporary_kitchens; ?>" >Contemporary Kitchens Styles &amp; Trends <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_classic_kitchens; ?>" >Classic Kitchens Styles &amp; Trends <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_traditional_kitchens; ?>" >Traditional Kitchens Styles &amp; Trends <?php echo $current_page_area; ?></a></li>
                </ul>
        </div><!--footerBox-->

	<div class="footerBoxSpacer"></div>
    
        <div class="footerBox">
            <h3>Kitchen Fitting Costs</h3>
                <ul>
                    <li><a href="<?php echo $nav_kitchen_fitting_costs; ?>#base-units-FitCost" >Base Units Fitting Costs <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_kitchen_fitting_costs; ?>#wall-units-FitCost" >Wall Units Fitting Costs <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_kitchen_fitting_costs; ?>#larder-units-FitCost" >Larder Units Fitting Costs <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_kitchen_fitting_costs; ?>#worktops-FitCost" >Worktops Fitting Costs <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_kitchen_fitting_costs; ?>#accessories-FitCost" >Accessories Fitting Costs <?php echo $current_page_area; ?></a></li>
                    <li><a href="<?php echo $nav_kitchen_fitting_costs; ?>#handles-FitCost" >Handles Fitting Costs <?php echo $current_page_area; ?></a></li>
                </ul>
        </div><!--footerBox-->
        
    <div class="footerBoxSpacer"></div>
    
        <div class="footerBox">
            <h3>Friends</h3>
            <ul>
                <li><a href="http://coulsy-kitchens.co.uk" target="_blank">Coulsy Kitchens</a></li>
                <li><a href="http://coulsy-interiors.co.uk" target="_blank">Coulsy Interiors</a></li>
                <li><a href="http://exchangemachines.com" target="_blank">Exchange Machines</a></li>
                <li><a href="http://hang-doors.co.uk" target="_blank">Hang Doors</a></li>
            </ul>
        </div><!--footerBox-->
        
    </div><!--footerContainer-->
    
    <div class="clear"></div>

    <div class="copyright">
        <div class="left"><?php echo $copyright; ?></div>
        <div class="right"><?php echo $developer; ?></div>
    </div><!--/copyright-->
    
    <div class="clear"></div>

</div><!--end/footer-->

