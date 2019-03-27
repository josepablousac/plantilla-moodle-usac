<?php
$settings = null;
defined('MOODLE_INTERNAL') || die;
$ADMIN->add('themes', new admin_category('theme_usac', 'USAC'));
// General setting page.
$temp = new admin_settingpage('theme_usac_general',  get_string('generalsettings', 'theme_usac'));
// favicon.
$name = 'theme_usac/favicon';
$title = get_string('favicon', 'theme_usac');
$description = get_string('favicondesc', 'theme_usac');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Logo file setting.
$name = 'theme_usac/logo';
$title = get_string('logo','theme_usac');
$description = get_string('logodesc', 'theme_usac');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
//  internalbannerimage setting.
$name = 'theme_usac/internalbannerimage';
$title = get_string('internalbannerimage','theme_usac');
$description = get_string('internalbannerimagedesc', 'theme_usac');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'internalbannerimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// internalbannertagline .
$name = 'theme_usac/internalbannertagline';
$title = get_string('internalbannertagline', 'theme_usac');
$description = get_string('internalbannertaglinedesc', 'theme_usac');
$default = 'Construye tu aprendizaje académico';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// siteskybluecolor.
$name = 'theme_usac/siteskybluecolor';
$title = get_string('siteskybluecolor', 'theme_usac');
$description = get_string('siteskybluecolordesc', 'theme_usac');
$default = '#2d7dbd';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$temp->add($setting);
// sitebluecolor.
$name = 'theme_usac/sitebluecolor';
$title = get_string('sitebluecolor', 'theme_usac');
$description = get_string('sitebluecolordesc', 'theme_usac');
$default = '#002c75';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$temp->add($setting);
//  loginbackground setting.
$name = 'theme_usac/loginbackground';
$title = get_string('loginbackground','theme_usac');
$description = get_string('loginbackgrounddesc', 'theme_usac');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackground');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Custom CSS file.
$name = 'theme_usac/customcss';
$title = get_string('customcss', 'theme_usac');
$description = get_string('customcssdesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

//  imageglass setting.
$name = 'theme_usac/imageglass';
$title = get_string('imageglass', 'theme_usac');
$description = get_string('imageglassdesc', 'theme_usac');
$default = $OUTPUT->image_url('/banner_glass', 'theme'); 
$setting = new admin_setting_configstoredfile($name, $title, $description, "imageglass");
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_usac', $temp);
// Slider settings page.
$temp = new admin_settingpage('theme_usac_slider',  get_string('slidersettings', 'theme_usac'));
// headerimage.
$name = 'theme_usac/headerimage';
$title = get_string('headerimage', 'theme_usac');
$description = get_string('headerimagedesc', 'theme_usac');
$default = $OUTPUT->image_url('/slides/rectoria-banner', 'theme'); 
$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// headertext.
$name = 'theme_usac/headertext';
$title = get_string('headertext', 'theme_usac');
$description = get_string('headertextdesc', 'theme_usac');
$default = 'Iniciar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// header subtitle text.
$name = 'theme_usac/headersubtitletext';
$title = get_string('headersubtitletext', 'theme_usac');
$description = get_string('headersubtitletextdesc', 'theme_usac');
$default = 'Plataforma de cursos en línea';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// headerurl.
$name = 'theme_usac/headerurl';
$title = get_string('headerurl', 'theme_usac');
$description = get_string('headerurldesc', 'theme_usac');
$default = $CFG->wwwroot.'/my/';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
$ADMIN->add('theme_usac', $temp);
// Frontpage setting.
$temp = new admin_settingpage('theme_usac_frontpage',  get_string('frontpagesettings', 'theme_usac'));

// displayaboutussection setting.
$name = 'theme_usac/displayaboutussection';
$title = get_string('displayaboutussection','theme_usac');
$description = get_string('displayaboutussectiondesc', 'theme_usac');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// aboutusheading .
$name = 'theme_usac/aboutusheading';
$title = get_string('aboutusheading', 'theme_usac');
$description = get_string('aboutusheadingdesc', 'theme_usac');
$default = 'Nosotros';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// aboutus1heading .
$name = 'theme_usac/aboutus1heading';
$title = get_string('aboutus1heading', 'theme_usac');
$description = get_string('aboutus1headingdesc', 'theme_usac');
$default = 'Misión';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// aboutus1description .
$name = 'theme_usac/aboutus1description';
$title = get_string('aboutus1description', 'theme_usac');
$description = get_string('aboutus1descriptiondesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


// aboutus2heading .
$name = 'theme_usac/aboutus2heading';
$title = get_string('aboutus2heading', 'theme_usac');
$description = get_string('aboutus2headingdesc', 'theme_usac');
$default = 'Visión';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// aboutus2description .
$name = 'theme_usac/aboutus2description';
$title = get_string('aboutus2description', 'theme_usac');
$description = get_string('aboutus2descriptiondesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// aboutus3heading .
$name = 'theme_usac/aboutus3heading';
$title = get_string('aboutus3heading', 'theme_usac');
$description = get_string('aboutus3headingdesc', 'theme_usac');
$default = 'Valores';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting); 

// aboutus3description .
$name = 'theme_usac/aboutus3description';
$title = get_string('aboutus3description', 'theme_usac');
$description = get_string('aboutus3descriptiondesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$ADMIN->add('theme_usac', $temp);
$temp = new admin_settingpage('theme_usac_frontpage_courses',  get_string('frontpagesettings_courses', 'theme_usac'));

// displaycoursesection setting.
$name = 'theme_usac/displaycoursesection';
$title = get_string('displaycoursesection','theme_usac');
$description = get_string('displaycoursesectiondesc', 'theme_usac');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

//  coursesbg setting.
$name = 'theme_usac/coursesbg';
$title = get_string('coursesbg', 'theme_usac');
$description = get_string('coursesbgdesc', 'theme_usac');
$default = $OUTPUT->image_url('/slides/rectoria-banner', 'theme'); 
$setting = new admin_setting_configstoredfile($name, $title, $description, 'coursesbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// coursesheading .
$name = 'theme_usac/coursesheading';
$title = get_string('coursesheading', 'theme_usac');
$description = get_string('coursesheadingdesc', 'theme_usac');
$default = 'Cursos';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
$ADMIN->add('theme_usac', $temp);

$temp = new admin_settingpage('theme_usac_frontpage_tutors',  get_string('frontpagesettings_tutors', 'theme_usac'));

// displaytutorsection setting.
$name = 'theme_usac/displaytutorsection';
$title = get_string('displaytutorsection','theme_usac');
$description = get_string('displaytutorsectiondesc', 'theme_usac');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);
// tutorssectionheading .
$name = 'theme_usac/tutorssectionheading';
$title = get_string('tutorssectionheading', 'theme_usac');
$description = get_string('tutorssectionheadingdesc', 'theme_usac');
$default = 'Equipo Docente';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// tutors quantity
// tutorssectionheading .
$name = 'theme_usac/tutorsquantity';
$title = get_string('tutorsquantity', 'theme_usac');
$description = get_string('tutorsquantitydesc', 'theme_usac');
$default = '3';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
//
$tutors_name = Array();
$tutors_name[] = 'Carlos Hernández';
$tutors_name[] = 'Juan López';
$tutors_name[] = 'María Pérez';
$tutors_name[] = 'Ana González';
$tutors_name[] = 'Ángel Rodríguez';
$tutors_name[] = 'Josué de León';
$tutors_name[] = 'Kevin Ramírez';
$tutors_name[] = 'Jorge Martínez';
$tutors_name[] = 'Diego Castillo';
global $PAGE;
$tutors_quantity = $PAGE->theme->settings->tutorsquantity==""?3:$PAGE->theme->settings->tutorsquantity;
for($i=1;$i<=$tutors_quantity;$i++){
	// tutor1image.
	$name = 'theme_usac/tutor'.$i.'image';
	$title = get_string('tutor'.$i.'image', 'theme_usac');
	$description = get_string('tutor'.$i.'imagedesc', 'theme_usac');
	$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor'.$i.'image');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	// tutor1name.
	$name = 'theme_usac/tutor'.$i.'name';
	$title = get_string('tutor'.$i.'name', 'theme_usac');
	$description = get_string('tutor'.$i.'namedesc', 'theme_usac');
	$default = $tutors_name[$i<=9?$i:($i-1-floor($i/9)*9)];
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	// tutor1url.
	$name = 'theme_usac/tutor'.$i.'url';
	$title = get_string('tutor'.$i.'url', 'theme_usac');
	$description = get_string('tutor'.$i.'urldesc', 'theme_usac');
	$default = '#';
	$setting = new admin_setting_configtext($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	// tutor1description.
	$name = 'theme_usac/tutor'.$i.'description';
	$title = get_string('tutor'.$i.'description', 'theme_usac');
	$description = get_string('tutor'.$i.'descriptiondesc', 'theme_usac');
	$default = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
}
$ADMIN->add('theme_usac', $temp);

$temp = new admin_settingpage('theme_usac_frontpage_contact',  get_string('frontpagesettings_contact', 'theme_usac'));

// displaymapsection setting.
$name = 'theme_usac/displaymapsection';
$title = get_string('displaymapsection','theme_usac');
$description = get_string('displaymapsectiondesc', 'theme_usac');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

//  mapsectionimage setting.
$name = 'theme_usac/mapsectionimage';
$title = get_string('mapsectionimage', 'theme_usac');
$description = get_string('mapsectionimagedesc', 'theme_usac');
$default = $OUTPUT->image_url('/map', 'theme'); 
$setting = new admin_setting_configstoredfile($name, $title, $description, 'mapsectionimage');
$temp->add($setting);

// mapsectionheading .
$name = 'theme_usac/mapsectionheading';
$title = get_string('mapsectionheading', 'theme_usac');
$description = get_string('mapsectionheadingdesc', 'theme_usac');
$default = 'Contáctenos';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// mapsectioniframe .
$name = 'theme_usac/mapsectioniframe';
$title = get_string('mapsectioniframe', 'theme_usac');
$description = get_string('mapsectioniframedesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// mapsectionaddress1 .
$name = 'theme_usac/mapsectionaddress1';
$title = get_string('mapsectionaddress1', 'theme_usac');
$description = get_string('mapsectionaddress1desc', 'theme_usac');
$default = 'Unidad de Educación Virtual';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// mapsectionaddress2 .
$name = 'theme_usac/mapsectionaddress2';
$title = get_string('mapsectionaddress2', 'theme_usac');
$description = get_string('mapsectionaddress2desc', 'theme_usac');
$default = 'Dirección General de Docencia. ';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// mapsectionaddress3 .
$name = 'theme_usac/mapsectionaddress3';
$title = get_string('mapsectionaddress3', 'theme_usac');
$description = get_string('mapsectionaddress3desc', 'theme_usac');
$default = 'Ciudad Universitaria zona 12, Edificio de Recursos Educativos, 1er nivel, esquina noreste';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// mapsectionphone .
$name = 'theme_usac/mapsectionphone';
$title = get_string('mapsectionphone', 'theme_usac');
$description = get_string('mapsectionphonedesc', 'theme_usac');
$default = '2418-7890';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// mapsectionemail .
$name = 'theme_usac/mapsectionemail';
$title = get_string('mapsectionemail', 'theme_usac');
$description = get_string('mapsectionemaildesc', 'theme_usac');
$default = 'universidadvirtual@profesor.usac.edu.gt';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
$ADMIN->add('theme_usac', $temp);
//  emailto setting
$name = 'theme_usac/emailto';
$title = get_string('emailto','theme_usac');
$description = get_string('emailtodesc', 'theme_usac');
$default = 0;

$administradores = $DB->get_record_sql("SELECT * FROM `".$CFG->prefix."config` WHERE `name` LIKE 'siteadmins';");
$administradores = json_decode(json_encode($administradores), True);
$choices = Array();
if(sizeof($administradores)>0){
	$administradores = explode(",", $administradores['value']);
	sort($administradores);
	foreach($administradores AS $admin){
		$user = $DB->get_record_sql("SELECT * FROM `".$CFG->prefix."user` WHERE id = ".$admin.";");
		$choices[$admin] = $user->firstname." ".$user->lastname." (".$user->username.")";
		if($default==0)
			$default=$admin;
	}
}

$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// mapsectiongooglepublickey .
$name = 'theme_usac/mapsectiongooglepublickey';
$title = get_string('mapsectiongooglepublickey', 'theme_usac');
$description = get_string('mapsectiongooglepublickeydesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mapsectiongoogleprivatekey .
$name = 'theme_usac/mapsectiongoogleprivatekey';
$title = get_string('mapsectiongoogleprivatekey', 'theme_usac');
$description = get_string('mapsectiongoogleprivatekeydesc', 'theme_usac');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// mapsectionserveraddress .
$name = 'theme_usac/mapsectionserveraddress';
$title = get_string('mapsectionserveraddress', 'theme_usac');
$description = get_string('mapsectionserveraddressdesc', 'theme_usac');
$default = explode("/", $CFG->wwwroot);
$default = $default[0]."//".$default[2];
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Footer settings page.
$temp = new admin_settingpage('theme_usac_footer',  get_string('footersettings', 'theme_usac'));
//  footerlogo setting.
$name = 'theme_usac/footerlogo';
$title = get_string('footerlogo','theme_usac');
$description = get_string('footerlogodesc', 'theme_usac');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'footerlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// facebook url setting.
$name = 'theme_usac/facebook';
$title = get_string('facebook', 'theme_usac');
$description = get_string('facebookdesc', 'theme_usac');
$default = 'http://www.facebook.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// twitter url setting.
$name = 'theme_usac/twitter';
$title = get_string('twitter', 'theme_usac');
$description = get_string('twitterdesc', 'theme_usac');
$default = 'http://www.twitter.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// googleplus url setting.
$name = 'theme_usac/googleplus';
$title = get_string('googleplus', 'theme_usac');
$description = get_string('googleplusdesc', 'theme_usac');
$default = 'http://www.googleplus.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// pinterest url setting.
$name = 'theme_usac/pinterest';
$title = get_string('pinterest', 'theme_usac');
$description = get_string('pinterestdesc', 'theme_usac');
$default = 'http://www.pinterest.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// instagram url setting.
$name = 'theme_usac/instagram';
$title = get_string('instagram', 'theme_usac');
$description = get_string('instagramdesc', 'theme_usac');
$default = 'http://www.instagram.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// youtube url setting.
$name = 'theme_usac/youtube';
$title = get_string('youtube', 'theme_usac');
$description = get_string('youtubedesc', 'theme_usac');
$default = 'http://www.youtube.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// flickr url setting.
$name = 'theme_usac/flickr';
$title = get_string('flickr', 'theme_usac');
$description = get_string('flickrdesc', 'theme_usac');
$default = 'http://www.flickr.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// whatsapp url setting.
$name = 'theme_usac/whatsapp';
$title = get_string('whatsapp', 'theme_usac');
$description = get_string('whatsappdesc', 'theme_usac');
$default = 'http://www.whatsapp.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// skype url setting.
$name = 'theme_usac/skype';
$title = get_string('skype', 'theme_usac');
$description = get_string('skypedesc', 'theme_usac');
$default = 'http://www.skype.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// github url setting.
$name = 'theme_usac/github';
$title = get_string('github', 'theme_usac');
$description = get_string('githubdesc', 'theme_usac');
$default = 'http://www.github.com/usac';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Copyright setting.
$name = 'theme_usac/copyright';
$title = get_string('copyright', 'theme_usac');
$description = get_string('copyrightdesc', 'theme_usac');
$default = 'USAC';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$temp->add($setting);   
// Privacy Policy.
$name = 'theme_usac/privacypolicy';
$title = get_string('privacypolicy', 'theme_usac');
$description = get_string('privacypolicydesc', 'theme_usac');
$default = 'Privacy Policy';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Privacy Policy URL.
$name = 'theme_usac/privacypolicyurl';
$title = get_string('privacypolicyurl', 'theme_usac');
$description = get_string('privacypolicyurldesc', 'theme_usac');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Footnote setting.
$name = 'theme_usac/footnote';
$title = get_string('footnote', 'theme_usac');
$description = get_string('footnotedesc', 'theme_usac');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);
// Back to top button.
$name = 'theme_usac/backtotop';
$title = get_string('backtotop', 'theme_usac');
$description = get_string('backtotopdesc', 'theme_usac');
$default = '1';
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$temp->add($setting);
$ADMIN->add('theme_usac', $temp);