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

// BRADFORD AREAS
	if($the_page == 'bradford'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD6		
	elseif($the_page == ('buttershaw') || $the_page == ('wibsey')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD13	
	elseif($the_page == ('cullingworth') || $the_page == ('denholme') || $the_page == ('queensbury') || $the_page == ('thornton')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD14	BRADFORD	Clayton
	elseif($the_page == 'clayton'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD15	BRADFORD	Allerton, Norr, Wilsden
	elseif($the_page == ('allerton') || $the_page == ('norr') || $the_page == ('wilsden')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD16	BINGLEY	Bingley, Cottingley, Eldwick, Harden
	elseif($the_page == ('bingley') || $the_page == ('cottingley') || $the_page == ('eldwick') || $the_page == ('harden')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// END / BRADFORD AREAS
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
			echo $contact;
			echo $contact_forms;
			echo $news;
		echo $other_end_comment	;
	}
} // if
?>
