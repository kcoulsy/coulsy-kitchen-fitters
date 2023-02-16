<?php
echo css($current_page); 

// -----------------------------------------------------------------------------------------------
// META ROBOTS FOLLOW NO FOLLOW function ---------------------------------------------------------------------
function css($the_page){
	
// all comments
$main_start_comment			=		"\n\n<!--main styles-->";
$main_end_comment			=		"<!--end/main styles-->\n\n";
$other_start_comment		=		"<!--other required styles-->\n";
$other_end_comment			=		"<!--end/other required styles-->\n";
	
// main style
$main_layout			=		'
	<link href="../css/main_layout.css" rel="stylesheet" type="text/css" />
	<link href="../css/header.css" rel="stylesheet" type="text/css" />
	<link href="../css/footer.css" rel="stylesheet" type="text/css" />
';

$main = $main_start_comment.$main_layout.$main_end_comment;

// other 		
$body						=	"	<link rel=\"stylesheet\" href=\"../css/body.css\" type=\"text/css\" media=\"screen\" />\n";
$areas_covered				=	"	<link rel=\"stylesheet\" href=\"../css/areas_covered.css\" type=\"text/css\" media=\"screen\" />\n";
$slider						=	"	<link rel=\"stylesheet\" href=\"../css/nivo-slider.css\"  type=\"text/css\" media=\"screen\" />\n";
$contact_forms				=	"	<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/contact_forms.css\"/>\n";

$prettyPhoto		=	'	<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<script src="js/jquery-1.7.1.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
';

		
// HALIFAX AREAS
// hx1
if($the_page == ('halifax') || $the_page == ('savile_park')) {
	echo $main;
	echo $other_start_comment;
	echo $body.$prettyPhoto;
	echo $other_end_comment	;
	}
// HX2	HALIFAX	Highroad Well, Illingworth, Luddenden, Luddenden Foot, Midgley, Mixenden, Mount Tabor, Norton Tower, Ogden, Wainstalls, Warley Town.	Calderdale
	elseif($the_page == ('bradshaw') || $the_page == ('highroad_well') || $the_page == ('illingworth') || $the_page == ('luddenden') || $the_page == ('luddenden_foot') 
	|| $the_page == ('midgley') || $the_page == ('mount_tabor') || $the_page == ('norton_tower') || $the_page == ('ogden') || $the_page == ('midgley') 
	|| $the_page == ('ovenden') || $the_page == ('wainstalls') || $the_page == ('warley_town')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
// HX3	HALIFAX	Boothtown, Hipperholme, Lightcliffe, Norwood Green, Northowram, Ovenden, Shelf, Skircoat Green, Southowram.	Calderdale
	elseif($the_page == ('boothtown') || $the_page == ('hipperholme') || $the_page == ('lightcliffe') || $the_page == ('norwood_green') || $the_page == ('northowram') 
	|| $the_page == ('ovenden') || $the_page == ('shelf') || $the_page == ('skircoat_green') || $the_page == ('southowram') || $the_page == ('wheatley')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
// HX4	HALIFAX	Barkisland, Greetland, Holywell Green, Sowood, Stainland, West Vale.	Calderdale
	elseif($the_page == ('barkisland') || $the_page == ('greetland') || $the_page == ('holywell_green') || $the_page == ('sowood') || $the_page == ('stainland') 
	|| $the_page == ('west_vale')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
// HX5	ELLAND	Elland, Blackley.	Calderdale
	elseif($the_page == ('elland') || $the_page == ('blackley')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
// HX6	SOWERBY BRIDGE	Norland, Ripponden, Rishworth, Sowerby, Sowerby Bridge.	Calderdale
	elseif($the_page == ('norland') || $the_page == ('ripponden') || $the_page == ('rishworth') || $the_page == ('sowerby') || $the_page == ('sowerby_bridge')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
// HX7	HEBDEN BRIDGE	Cragg Vale, Hebden Bridge, Heptonstall, Mytholmroyd, Old Town.
	elseif($the_page == ('cragg_vale') || $the_page == ('hebden_bridge') || $the_page == ('heptonstall') || $the_page == ('mytholmroyd') || $the_page == ('old_town')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
// END / HALIFAX AREAS
	elseif($the_page == 'areas_covered'){
		echo $main;
		echo $other_start_comment;
		echo $body.$areas_covered;
		echo $other_end_comment	;
	}
	else { // to cover any pages that are not listed as a fall back
		echo $main;
		echo $other_start_comment;
			echo $slider;
			echo $contact_forms;
			echo $news;
		echo $other_end_comment	;
	}
} // if
?>
