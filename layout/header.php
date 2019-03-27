<?php
   // Get the HTML for the settings bits.
   $html = theme_usac_get_html_for_settings($OUTPUT, $PAGE);
   // General Settings
   
   if (!empty($PAGE->theme->settings->favicon)) {
     $favicon = $PAGE->theme->setting_file_url('favicon', 'favicon');
   } else {
     $favicon = $OUTPUT->image_url('favicon', 'theme');
   }
   if (!empty($PAGE->theme->settings->logo)) {
    $logourl = $PAGE->theme->setting_file_url('logo', 'logo');
   }else{
   $logourl =$OUTPUT->image_url('/logo', 'theme');
   }
   if (!empty($PAGE->theme->settings->internalbannertagline)) {
     $internalbannertagline = theme_usac_get_setting('internalbannertagline',true);
   }else {
     $internalbannertagline = '';
   }
   // Slider Settings
   // Slider1
   if (!empty($PAGE->theme->settings->headerimage  )) {
     $headerimage = $PAGE->theme->setting_file_url('headerimage', 'headerimage');
   }else {
     $headerimage = $OUTPUT->image_url('/slides/rectoria-banner', 'theme');  
   }
   if (!empty($PAGE->theme->settings->headertext)) {
     $headertext = theme_usac_get_setting('headertext',true);
   }else {
     $headertext = 'Iniciar';
   }
   if (!empty($PAGE->theme->settings->headersubtitletext)) {
     $headersubtitletext = theme_usac_get_setting('headersubtitletext',true);
   }else {
     $headersubtitletext = 'Plataforma de cursos en línea';
   }
   
   
   
   if (!empty($PAGE->theme->settings->headerurl)) {
     $headerurl = theme_usac_get_setting('headerurl',true);
   }else {
     $headerurl = $CFG->wwwroot.'/my/';
   }
   // internal banner
   if (!empty($PAGE->theme->settings->internalbannerimage)) {
     $internalbannerimage = $PAGE->theme->setting_file_url('internalbannerimage', 'internalbannerimage');
   } else {
     $internalbannerimage = $OUTPUT->image_url('internalbanner', 'theme');
   }
   
   $displaytutorsection = (empty($PAGE->theme->settings->displaytutorsection) ||$PAGE->theme->settings->displaytutorsection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->tutorssectionheading )) {
     $tutorssectionheading  = theme_usac_get_setting('tutorssectionheading',true);
   }else {
     $tutorssectionheading  = '';
   }
   
   $tutors_quantity = $PAGE->theme->settings->tutorsquantity==""?3:$PAGE->theme->settings->tutorsquantity;
   
   // Map section 
   
   $displaymapsection = (empty($PAGE->theme->settings->displaymapsection) ||$PAGE->theme->settings->displaymapsection < 1) ? 0 : 1;
   if (!empty($PAGE->theme->settings->mapsectionheading )) {
     $mapsectionheading  = theme_usac_get_setting('mapsectionheading',true);
   }else {
     $mapsectionheading  = '';
   }
   if (!empty($PAGE->theme->settings->mapsectioniframe )) {
     $mapsectioniframe  = theme_usac_get_setting('mapsectioniframe',true);
   }else {
     $mapsectioniframe  = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2103460010903!2d-90.55402998521092!3d14.587086689811064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a13d75e18f63%3A0x58f0afce580a397b!2sUnidad+de+Educaci%C3%B3n+Virtual!5e0!3m2!1ses-419!2sgt!4v1539114496797';
   }
   if (!empty($PAGE->theme->settings->mapsectionaddress1 )) {
     $mapsectionaddress1  = theme_usac_get_setting('mapsectionaddress1',true);
   }else {
     $mapsectionaddress1  = '';
   }
   if (!empty($PAGE->theme->settings->mapsectionaddress2 )) {
     $mapsectionaddress2  = theme_usac_get_setting('mapsectionaddress2',true);
   }else {
     $mapsectionaddress2  = '';
   }
   if (!empty($PAGE->theme->settings->mapsectionaddress3 )) {
     $mapsectionaddress3  = theme_usac_get_setting('mapsectionaddress3',true);
   }else {
     $mapsectionaddress3  = '';
   }
   if (!empty($PAGE->theme->settings->mapsectionphone )) {
     $mapsectionphone  = theme_usac_get_setting('mapsectionphone',true);
   }else {
     $mapsectionphone  = '';
   }
   if (!empty($PAGE->theme->settings->mapsectionemail )) {
     $mapsectionemail  = theme_usac_get_setting('mapsectionemail',true);
   }else {
     $mapsectionemail  = '';
   }
   if (!empty($PAGE->theme->settings->mapsectiongooglepublickey )) {
     $mapsectiongooglepublickey  = theme_usac_get_setting('mapsectiongooglepublickey',true);
   }else {
     $mapsectiongooglepublickey  = '';
   }
   // Footer Settings
   
   if (!empty($PAGE->theme->settings->footerlogo)) {
     $footerlogo = $PAGE->theme->setting_file_url('footerlogo', 'footerlogo');
   } else {
     $footerlogo = $OUTPUT->image_url('footer-logo', 'theme');
   }
   
   $hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasfacebook) ? true : false;
   
   $hastwitter    = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hastwitter) ? true : false;
   
   $hasgoogleplus    = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasgoogleplus) ? true : false;
   
   $haspinterest    = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($haspinterest) ? true : false;
   
   $hasinstagram    = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasinstagram) ? true : false;
   
   $hasyoutube    = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasyoutube) ? true : false;
   
   $hasflickr    = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasflickr) ? true : false;
   
   $haswhatsapp    = (empty($PAGE->theme->settings->whatsapp)) ? false : $PAGE->theme->settings->whatsapp;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($haswhatsapp) ? true : false;
   
   $hasskype    = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasskype) ? true : false;
   
   $hasgithub    = (empty($PAGE->theme->settings->github)) ? false : $PAGE->theme->settings->github;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasgithub) ? true : false;
   
   if (!empty($PAGE->theme->settings->copyright)) {
   	       $hascopyright = theme_usac_get_setting('copyright',true);
   	} 
   	else {
   	       $hascopyright = '';
   	}
   	if (!empty($PAGE->theme->settings->privacypolicy)) {
   	       $privacypolicy = theme_usac_get_setting('privacypolicy',true);
   	} 
   	else {
   	       $privacypolicy = '';
   	}
   	if (!empty($PAGE->theme->settings->privacypolicyurl)) {
   	       $privacypolicyurl = $PAGE->theme->settings->privacypolicyurl;
   	} 
   	else {
   	       $privacypolicyurl = '#';
   	}
   	if (!empty($PAGE->theme->settings->backtotop)) {
   	          $PAGE->requires->js('/theme/usac/yui/bttotop.js');
   	}
   
   if (!empty($PAGE->theme->settings->googleplayurl)) {
     $googleplayurl = theme_usac_get_setting('googleplayurl',true);
   }else {
     $googleplayurl = '';
   }
   
 // About Us

$displayaboutussection = (empty($PAGE->theme->settings->displayaboutussection) ||$PAGE->theme->settings->displayaboutussection < 1) ? 0 : 1;
if (!empty($PAGE->theme->settings->aboutusheading)) {
     $aboutusheading = theme_usac_get_setting('aboutusheading',true);
   }else {
     $aboutusheading = 'Nosotros';
   }  
if (!empty($PAGE->theme->settings->aboutus1heading)) {
     $aboutus1heading = theme_usac_get_setting('aboutus1heading',true);
   }else {
     $aboutus1heading = 'Misión';
   }
if (!empty($PAGE->theme->settings->aboutus1description)) {
     $aboutus1description = theme_usac_get_setting('aboutus1description','format_html');
   }else {
     $aboutus1description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et';
   }
if (!empty($PAGE->theme->settings->aboutus2heading)) {
     $aboutus2heading = theme_usac_get_setting('aboutus2heading',true);
   }else {
     $aboutus2heading = '';
   }
if (!empty($PAGE->theme->settings->aboutus2description)) {
     $aboutus2description = theme_usac_get_setting('aboutus2description','format_html');
   }else {
     $aboutus2description = '';
   } 

if (!empty($PAGE->theme->settings->aboutus3heading)) {
     $aboutus3heading = theme_usac_get_setting('aboutus3heading',true);
   }else {
     $aboutus3heading = '';
   }
if (!empty($PAGE->theme->settings->aboutus3description)) {
     $aboutus3description = theme_usac_get_setting('aboutus3description','format_html');
   }else {
     $aboutus3description = '';
   }

$displaycoursesection = (empty($PAGE->theme->settings->displaycoursesection) ||$PAGE->theme->settings->displaycoursesection < 1) ? 0 : 1; 
if (!empty($PAGE->theme->settings->coursesheading)) {
     $coursesheading = theme_usac_get_setting('coursesheading',true);
   }else {
     $coursesheading = 'Cursos';
   } 
   
   echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
   <head>
      <title><?php echo $OUTPUT->page_title(); ?></title>
      <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
      <?php echo $OUTPUT->standard_head_html() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
		 @font-face {
		 font-family: 'crimson_roman';
		 src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.eot');
		 src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.eot?#iefix') format('embedded-opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.woff2') format('woff2'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.woff') format('woff'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.ttf') format('truetype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.otf') format('opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman.svg#crimson_roman') format('svg');
		 font-weight: 700;
		 font-style: normal;
		 font-stretch: normal;
		 unicode-range: U+0020-2248;
		 }   
         @font-face {
         font-family: 'FontAwesome';
         src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/fontawesome-webfont.eot?v=4.7.0');
         src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
         font-weight: normal;
         font-style: normal;
         } 
         @font-face {
		 font-family: 'coolvetica_regular';
		 src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.eot');
		 src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.eot?#iefix') format('embedded-opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.woff2') format('woff2'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.woff') format('woff'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.ttf') format('truetype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.otf') format('opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/coolvetica_regular.svg#coolvetica_regular') format('svg');
		 font-weight: 700;
		 font-style: normal;
		 font-stretch: normal;
		 unicode-range: U+0020-2248;
		 }
         @font-face {
		 font-family: 'crimson_roman_bold';
		 src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.eot');
		 src: url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.eot?#iefix') format('embedded-opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.woff2') format('woff2'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.woff') format('woff'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.ttf') format('truetype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.otf') format('opentype'), url('<?php echo $CFG->wwwroot ?>/theme/usac/fonts/crimson_roman_bold.svg#crimson_roman_bold') format('svg');
		 font-weight: 700;
		 font-style: normal;
		 font-stretch: normal;
		 unicode-range: U+0020-2248;
		 }
      </style>
   </head>