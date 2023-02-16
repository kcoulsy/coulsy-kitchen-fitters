<?php 
// KEIGHLEY CONFIG FILE
// KEIGHLEY CONFIG FILE
// KEIGHLEY CONFIG FILE
$doctype				=	'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
$charset				=	'charset=UTF-8';
$language				=	"<html lang=\"en\">";
	
$website_name			=	'Coulsy Kitchen Fitters';
define ('BASE_URL', 'http://www.coulsy-kitchen-fitters.co.uk/');

$keyword				=	'Kitchen';
$keyword_plural			=	'Kitchens';
$k						=	$keyword;
$kp						=	$keyword_plural;

$website_title			=	'Coulsy Kitchen Fitters';

$email					=	'mailto:info@coulsy-kitchen-fitters.co.uk';
$email_robert			=	'mailto:robert@coulsy-kitchen-fitters.co.uk';

$destin					=	'info@coulsy-kitchen-fitters.co.uk';

$domain_name			=	'http://www.coulsy-kitchen-fitters.co.uk/';

$robots					=	'index, follow';
$robots2				=	'index, nofollow';
$robots3				=	'noindex, nofollow';

$author					=	'Robert';

$date_created			=	'Tue, 13 Aug 2013 09:00:00 GMT';
$date_last_modified		=	'Tue, 14th March 2017 12:00:00 GMT';

$phone_number_website	=	'07544 030486';
$phone_number_robert	=	'Robert 07544 030486';

$google_verification	=	'Af3TCU9vyHnH1sNzoNE1MmxQIBSUCLdCCJxjb-_YmDU';
$msvalidate				=	'1832128BFC14A069C4660074545622B7';
$alexaVerifyID			=	'';

// COPYRIGHT ---------------------------------------------------------------------
$copyright				=	'Copyright &copy; 2017 - Coulsy Kitchen Fitters - All rights reserved';
$developer				=	'Designed &amp; Maintained By <a href="http://coulsy.co.uk" target="_blank">Coulsy</a>';

// Favicon Section ---------------------------------------------------------------------
$favicon				=	"<!--Favicon Section-->\n<link rel=\"icon\" href=\"./images/favicon.ico\" type=\"image/x-icon\" />\n<link rel=\"shortcut icon\" href=\"./images/favicon.ico\" type=\"image/x-icon\" />\n<!--end/Favicon Section-->";
$logo					=	'<a href="http://hang-doors.co.uk"><img src="http://hang-doors.co.uk/images/logo-hang-doors.png" ></a>';

// Main navigation
$nav_home						=	BASE_URL ."index.php";
$nav_areas_covered				=	BASE_URL ."areas-covered.php";
$nav_about						=	BASE_URL ."about.php";
$nav_contact					=	BASE_URL ."contact.php";

$nav_modern_kitchens			=	BASE_URL ."modern-kitchens.php";
$nav_contemporary_kitchens		=	BASE_URL ."contemporary-kitchens.php";
$nav_classic_kitchens			=	BASE_URL ."classic-kitchens.php";
$nav_traditional_kitchens		=	BASE_URL ."traditional-kitchens.php";
$nav_kitchen_fitting_costs		=	BASE_URL ."kitchen-fitting-costs.php";

$nav_halifax					=	BASE_URL ."./halifax/";
$nav_bradford					=	BASE_URL ."./bradford/";
$nav_keighley					=	BASE_URL ."./keighley/";

// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
$nav_huddersfield			=	'index.php';

// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// PAGE TITLES function 70 Characters is optimum but if more use different sentances.---------------------------------------------------------------------
function title($the_page){
	
$title = "KITCHEN Fitters &amp; Kitchen Installers in ";

		if($the_page == 'areas_covered'){
			echo 'Areas Covered - ' . $title . 'Huddersfield';
			}		
				// BD21
				elseif($the_page == 'huddersfield'){
					echo 'Areas Covered - ' . $title . 'Huddersfield.';
				}
} // function  end /title

// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// META DESCRIPTION function 160 Characters is optimum but if more use different sentences.
function metaDescription($the_page){
	
$desc = "KITCHEN Fitters &amp; Kitchen Installers in ";

		if($the_page == 'areas_covered'){
			echo 'Areas Covered - ' . $desc . 'Huddersfield';
			}		
		// BD21
		elseif($the_page == 'huddersfield'){
			echo $desc . 'Huddersfield.';
		}
} // function end / metaDescription

// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// MEAT KEYWORDS function ---------------------------------------------------------------------
function metaKeywords($the_page){
	
$key = "KITCHEN, Kitchen fitter, Kitchen Installer, kitchens, new kitchens, kitchen designer, designer kitchens, fitted kitchens, kitchens installed ";

		if($the_page == 'areas_covered'){
			echo 'Areas Covered - ' . $key . 'Huddersfield';
			}		
		// BD21
		elseif($the_page == 'huddersfield'){
			echo $key . 'Huddersfield.';
		}
} // function end / metaKeywords

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// SCRIPTS FOOTER	

// Page scripts for specific pages
function pageScriptsFooter($the_page){
	
// Pretty photo script
$prettyPhoto = '
<!--Pretty photo script-->
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	$("a[rel^=\'prettyPhoto\']").prettyPhoto();
	});
	</script>
<!--END / Pretty photo script -->
';

// This scripts allows the gallery to be finely tweeked
$galleryFineTweek = '
<!--Pretty photo fine tweek script-->
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("area[rel^=\'prettyPhoto\']").prettyPhoto();
	
	$(".gallery:first a[rel^=\'prettyPhoto\']").prettyPhoto({animation_speed:\'normal\',theme:\'light_square\',slideshow:3000, autoplay_slideshow: true});
	$(".gallery:gt(0) a[rel^=\'prettyPhoto\']").prettyPhoto({animation_speed:\'fast\',slideshow:10000, hideflash: true});

	$("#custom_content a[rel^=\'prettyPhoto\']:first").prettyPhoto({
		custom_markup: \'<div id="map_canvas" style="width:260px; height:265px"></div>\',
		changepicturecallback: function(){ initialize(); }
	});

	$("#custom_content a[rel^=\'prettyPhoto\']:last").prettyPhoto({
		custom_markup: \'<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>\',
		changepicturecallback: function(){ _bsap.exec(); }
	});
});
</script>
<!--END / Pretty photo fine tweek script-->
';

	if($the_page == 'home'){
echo $prettyPhoto.$galleryFineTweek;
		}
		elseif($the_page == 'about'){
			echo '
<!--jquery &amp; plugins-->
<!--end/jquery &amp; plugins -->
';
		}
		elseif($the_page == 'contact'){
			echo '
<!--jquery &amp; plugins-->
<!--scripts-->
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.googlemaps1.01.js"></script>
<!--end/scripts-->

<!--Google Map Key-->
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=" type="text/javascript">
	</script>
	
	<script type="text/javascript">	
	// VALIDATION CONTACT FORM //
    $(document).ready(function() {
        $("#devilform").validate();
    });
	
	// GOOGLE MAP INTEGRATION
	$(document).ready(function() { 
	  $("#map_canvas").googleMaps({
				latitude: 53.7628295,
				longitude: -1.8817652,
			markers: {
				latitude: 53.7628295,
				longitude: -1.8817652
			}
		}); 
	});
    </script>
<!--end/jquery &amp; plugins -->
';
		}
// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
// HUDDERSFIELD AREAS ONLY		
		elseif($the_page == 'huddersfield'){
			echo $prettyPhoto.$galleryFineTweek;
			}
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// END / SCRIPTS FOOTER	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>