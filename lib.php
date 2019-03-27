<?php
function theme_usac_process_css($css, $theme) {
global $OUTPUT;
// Set the background image for the logo.
$logo = $OUTPUT->get_logo_url(null, 75);
$css = theme_usac_set_logo($css, $logo);
// Set custom CSS.
if (!empty($theme->settings->customcss)) {
$customcss = $theme->settings->customcss;
} else {
$customcss = null;
}
$css = theme_usac_set_customcss($css, $customcss);
// Set the background image for the coursesbg.
$coursesbg = $theme->setting_file_url('coursesbg', 'coursesbg');
if(!isset($coursesbg)){
$coursesbg = $OUTPUT->image_url('cursos', 'theme');
}
$css = theme_usac_set_coursesbg($css, $coursesbg); 
// Set the background image for the loginbackground.
$loginbackground = $theme->setting_file_url('loginbackground', 'loginbackground');
if(!isset($loginbackground)){
$loginbackground = $OUTPUT->image_url('loginbackground', 'theme');
}
$css = theme_usac_set_loginbackground($css, $loginbackground); 
// Set the internalbannerimage.
$internalbannerimage = $theme->setting_file_url('internalbannerimage', 'internalbannerimage');
if(!isset($internalbannerimage)){
$internalbannerimage = $OUTPUT->image_url('internalbanner', 'theme');
}
// Set the first slide.
$headerimage = $theme->setting_file_url('headerimage', 'headerimage');
if(!isset($headerimage)){
$headerimage = $OUTPUT->image_url('/slides/rectoria-banner', 'theme');  
}
//
$css = theme_usac_set_internalbannerimage($css, $internalbannerimage);

$mapsectionimage = $theme->setting_file_url('mapsectionimage', 'mapsectionimage');
if(!isset($mapsectionimage)){
$mapsectionimage = $OUTPUT->image_url('map', 'theme');
}
$css = theme_usac_set_mapsectionimage($css, $mapsectionimage); 

$imageglass = $theme->setting_file_url('imageglass', 'imageglass');
if(!isset($imageglass)){
$imageglass = $OUTPUT->image_url('banner_glass', 'theme');
}
$css = theme_usac_set_imageglass($css, $imageglass); 

// Set the siteskybluecolor.
if (empty($theme->settings->siteskybluecolor)) {
$siteskybluecolor = '#2d7dbd'; // Default.
} else {
$siteskybluecolor = $theme->settings->siteskybluecolor;
}
$css = usac_set_siteskybluecolor($css, $siteskybluecolor);
// Set the sitebluecolor.
if (empty($theme->settings->sitebluecolor)) {
$sitebluecolor = '#002c75'; // Default.
} else {
$sitebluecolor = $theme->settings->sitebluecolor;
}
$css = usac_set_sitebluecolor($css, $sitebluecolor);
return $css;
}
/**
* Adds the logo to CSS.
*
* @param string $css The CSS.
* @param string $logo The URL of the logo.
* @return string The parsed CSS
*/
function theme_usac_set_logo($css, $logo) {
$tag = '[[setting:logo]]';
$replacement = $logo;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_usac_set_coursesbg($css, $coursesbg) {
$tag = '[[setting:coursesbg]]';
$replacement = $coursesbg;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_usac_set_mapsectionimage($css, $mapsectionimage) {
$tag = '[[setting:mapsectionimage]]';
$replacement = $mapsectionimage;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_usac_set_imageglass($css, $imageglass) {
$tag = '[[setting:imageglass]]';
$replacement = $imageglass;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_usac_set_loginbackground($css, $loginbackground) {
$tag = '[[setting:loginbackground]]';
$replacement = $loginbackground;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function theme_usac_set_internalbannerimage($css, $internalbannerimage) {
$tag = '[[setting:internalbannerimage]]';
$replacement = $internalbannerimage;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
function usac_set_siteskybluecolor($css, $siteskybluecolor) {
$tag = '[[setting:siteskybluecolor]]';
$css = str_replace($tag, $siteskybluecolor, $css);
return $css;
}
function usac_set_sitebluecolor($css, $sitebluecolor) {
$tag = '[[setting:sitebluecolor]]';
$css = str_replace($tag, $sitebluecolor, $css);
return $css;
}
/**
* Serves any files associated with the theme settings.
*
* @param stdClass $course
* @param stdClass $cm
* @param context $context
* @param string $filearea
* @param array $args
* @param bool $forcedownload
* @param array $options
* @return bool
*/
require_once($CFG->libdir.'/coursecatlib.php');
function theme_usac_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
$coursecats = coursecat::make_categories_list();
foreach ($coursecats as $key => $value) {
if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'categoryimage'.$key) {
$theme = theme_config::load('usac');
return $theme->setting_file_serve('categoryimage'.$key, $args, $forcedownload, $options);
}
}

global $PAGE;
$tutors_bool = false;
$tutors_quantity = $PAGE->theme->settings->tutorsquantity==""?3:$PAGE->theme->settings->tutorsquantity;
for($i=1;$i<=$tutors_quantity;$i++){
	if($filearea === 'tutor'.$i.'image' )
		$tutors_bool = true;
}
if ($context->contextlevel == CONTEXT_SYSTEM and ($filearea === 'logo' || $filearea === 'defaultcategoryimage' || $filearea === 'coursesbg' || $filearea === 'loginbackground' || $tutors_bool || $filearea === 'footerlogo' || $filearea === 'internalbannerimage' || $filearea === 'headerimage'  || $filearea === 'favicon' || $filearea === 'mapsectionimage' || $filearea === 'imageglass')){
$theme = theme_config::load('usac');
// By default, theme files must be cache-able by both browsers and proxies.
if (!array_key_exists('cacheability', $options)) {
$options['cacheability'] = 'public';
}
return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
} else {
send_file_not_found();
}
}
/**
* Adds any custom CSS to the CSS before it is cached.
*
* @param string $css The original CSS.
* @param string $customcss The custom CSS to add.
* @return string The CSS which now contains our custom CSS.
*/
function theme_usac_set_customcss($css, $customcss) {
$tag = '[[setting:customcss]]';
$replacement = $customcss;
if (is_null($replacement)) {
$replacement = '';
}
$css = str_replace($tag, $replacement, $css);
return $css;
}
/**
* Returns an object containing HTML for the areas affected by settings.
*
* Do not add usac specific logic in here, child themes should be able to
* rely on that function just by declaring settings with similar names.
*
* @param renderer_base $output Pass in $OUTPUT.
* @param moodle_page $page Pass in $PAGE.
* @return stdClass An object with the following properties:
*      - navbarclass A CSS class to use on the navbar. By default ''.
*      - heading HTML to use for the heading. A logo if one is selected or the default heading.
*      - footnote HTML to use as a footnote. By default ''.
*/
function theme_usac_get_html_for_settings(renderer_base $output, moodle_page $page) {
global $CFG;
$return = new stdClass;
$return->navbarclass = '';
if (!empty($page->theme->settings->invert)) {
$return->navbarclass .= ' navbar-inverse';
}
// Only display the logo on the front page and login page, if one is defined.
if (!empty($page->theme->settings->logo) &&
($page->pagelayout == 'frontpage' || $page->pagelayout == 'login')) {
$return->heading = html_writer::tag('div', '', array('class' => 'logo'));
} else {
$return->heading = $output->page_heading();
}
$return->footnote = '';
if (!empty($page->theme->settings->footnote)) {
$return->footnote = '
<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>
';
}
return $return;
}
/**
* All theme functions should start with theme_usac_
* @deprecated since 2.5.1
*/
function usac_process_css() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_usac_
* @deprecated since 2.5.1
*/
function usac_set_logo() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/**
* All theme functions should start with theme_usac_
* @deprecated since 2.5.1
*/
function usac_set_customcss() {
throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
/* Multilanguage
--------------------- */
function theme_usac_get_setting($setting, $format = false) {
global $CFG;
require_once($CFG->dirroot . '/lib/weblib.php');
static $theme;
if (empty($theme)) {
$theme = theme_config::load('usac');
}
if (empty($theme->settings->$setting)) {
return false;
} else if (!$format) {
return $theme->settings->$setting;
} else if ($format === 'format_text') {
return format_text($theme->settings->$setting, FORMAT_PLAIN);
} else if ($format === 'format_html') {
return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
} else {
return format_string($theme->settings->$setting);
}
}