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

// KEIGHLEY AREAS
// BD21	Keighley
	if($the_page == 'keighley'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD22	Cowling, Haworth, Oakworth, Oxenhope
	elseif($the_page == ('cowling') || $the_page == ('haworth') || $the_page == ('oakworth') || $the_page == ('oxenhope')) {
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// END / KEIGHLEY AREAS
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
