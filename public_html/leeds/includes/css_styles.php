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

//	echo $other_start_comment.$other_end_comment;

		if($the_page == 'home'){
			echo $main;
			echo $other_start_comment;
			echo $body.$prettyPhoto;
			echo $other_end_comment	;
		}
		//A
		elseif($the_page == 'about'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'areas_covered'){
			echo $main;
			echo $other_start_comment.$body.$areas_covered.$other_end_comment;
		}
		//B
		elseif($the_page == 'blog'){
			echo $main;
			echo $other_start_comment.$blog.$other_end_comment;
		}
		//C
		elseif($the_page == 'contact'){
			echo $main;
			echo $other_start_comment.$body.$contact.$contact_forms.$other_end_comment;			
		}
		//D
		elseif($the_page == 'door_types'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'interior_doors'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'internal_doors'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'external_doors'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'exterior_doors'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'ironmongery'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'door_hinges'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'door_finger_protection'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'door_locks'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'door_handles'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		elseif($the_page == 'front_doors'){
			echo $main;
			echo $other_start_comment.$body.$other_end_comment;
		}
		//F
		//G
		//H
		// HALIFAX AREAS
		// hx1
		elseif($the_page == 'leeds'){
			echo $main;
			echo $other_start_comment;
			echo $body.$prettyPhoto;
			echo $other_end_comment	;
			}
			elseif($the_page == 'savile_park'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
// HX2	HALIFAX	Highroad Well, Illingworth, Luddenden, Luddenden Foot, Midgley, Mixenden, Mount Tabor, Norton Tower, Ogden, Wainstalls, Warley Town.	Calderdale
			elseif($the_page == 'bradshaw'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'highroad_well'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'illingworth'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'luddenden'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'luddenden_foot'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'midgley'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'mount_tabor'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'norton_tower'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'ogden'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'ovenden'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'wainstalls'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'warley_town'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
// HX3	HALIFAX	Boothtown, Hipperholme, Lightcliffe, Norwood Green, Northowram, Ovenden, Shelf, Skircoat Green, Southowram.	Calderdale
			elseif($the_page == 'boothtown'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'hipperholme'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'lightcliffe'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'norwood_green'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'northowram'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'ovenden'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'shelf'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'skircoat_green'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
			}
			elseif($the_page == 'southowram'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
				}
			elseif($the_page == 'wheatley'){
				echo $main;
				echo $other_start_comment;
				echo $body.$prettyPhoto;
				echo $other_end_comment	;
				}
// HX4	HALIFAX	Barkisland, Greetland, Holywell Green, Sowood, Stainland, West Vale.	Calderdale
	elseif($the_page == 'barkisland'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'greetland'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'holywell_green'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'sowood'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'stainland'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'west_vale'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// HX5	ELLAND	Elland, Blackley.	Calderdale
	elseif($the_page == 'elland'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'blackley'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}	
// HX6	SOWERBY BRIDGE	Norland, Ripponden, Rishworth, Sowerby, Sowerby Bridge.	Calderdale
	elseif($the_page == 'norland'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'ripponden'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'rishworth'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'sowerby'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'sowerby_bridge'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}	
// HX7	HEBDEN BRIDGE	Cragg Vale, Hebden Bridge, Heptonstall, Mytholmroyd, Old Town.
	elseif($the_page == 'cragg_vale'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'hebden_bridge'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'heptonstall'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'mytholmroyd'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	elseif($the_page == 'old_town'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
	}
	
		
// END / HALIFAX AREAS

// BRADFORD AREAS
	elseif($the_page == 'bradford'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD6		
	elseif($the_page == 'buttershaw'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'wibsey'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD13	
	elseif($the_page == 'cullingworth'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'denholme'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'queensbury'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'thornton'){
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
	elseif($the_page == 'allerton'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'norr'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'wilsden'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD16	BINGLEY	Bingley, Cottingley, Eldwick, Harden
	elseif($the_page == 'bingley'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'cottingley'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'eldwick'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'harden'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// END / BRADFORD AREAS

// KEIGHLEY AREAS
// BD21	Keighley
	elseif($the_page == 'keighley'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// BD22	Cowling, Haworth, Oakworth, Oxenhope
	elseif($the_page == 'cowling'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'haworth'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'oakworth'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
	elseif($the_page == 'oxenhope'){
		echo $main;
		echo $other_start_comment;
		echo $body.$prettyPhoto;
		echo $other_end_comment	;
		}
// END / KEIGHLEY AREAS

		//J
		//K
		//L
		//M
		//N
		//O
		//P
		//Q
		//R
		//S
		//T		
		//W
		//X
		//Y
		//Z
else { // to cover any pages that are not listed as a fall back
			echo $main;
			echo $other_start_comment;
				echo $slider;
				echo $blog;
				echo $contact;
				echo $contact_forms;
				echo $faq;
				echo $news;
				echo $online_marketing;
				echo $portfolio;
				echo $main_layout_rugby_gallery;
				echo $website_services;
			echo $other_end_comment	;
	
	}
	
}
// END  ------------------------------------------------------------
// --------------------------------------------------------------------------------------------

?>
