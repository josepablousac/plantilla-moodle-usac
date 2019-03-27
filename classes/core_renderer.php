<?php
require_once($CFG->dirroot . '/theme/bootstrapbase/renderers.php');
require_once('course_renderer.php');
class theme_usac_core_renderer extends theme_bootstrapbase_core_renderer {
public function context_header($headerinfo = null, $headinglevel = 1) {
if ($this->should_render_logo($headinglevel)) {
return html_writer::tag('div', '', array('class' => 'logo'));
}
return parent::context_header($headerinfo, $headinglevel);
}
protected function should_render_logo($headinglevel = 1) {
global $PAGE;
// Only render the logo if we're on the front page or login page
// and the theme has a logo.
$logo = $this->get_logo_url();
if ($headinglevel == 1 && !empty($logo)) {
if ($PAGE->pagelayout == 'frontpage' || $PAGE->pagelayout == 'login') {
return true;
}
}
return false;
}
public function navbar_home($returnlink = true) {
global $CFG;
$imageurl = $this->get_compact_logo_url(null, 35);
if ($this->should_render_logo() || empty($imageurl)) {
// If there is no small logo we always show the site name.
return $this->get_home_ref($returnlink);
}
$image = html_writer::img($imageurl, get_string('sitelogo', 'theme_' . $this->page->theme->name),
array('class' => 'small-logo'));
if ($returnlink) {
$logocontainer = html_writer::link(new moodle_url('/'), $image,
array('class' => 'small-logo-container', 'title' => get_string('home')));
} else {
$logocontainer = html_writer::tag('span', $image, array('class' => 'small-logo-container'));
}
// Sitename setting defaults to true.
if (!isset($this->page->theme->settings->sitename) || !empty($this->page->theme->settings->sitename)) {
return $logocontainer . $this->get_home_ref($returnlink);
}
return $logocontainer;
}
protected function get_home_ref($returnlink = true) {
global $CFG, $SITE;
$sitename = format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
if ($returnlink) {
return html_writer::link(new moodle_url('/'), $sitename, array('class' => 'brand', 'title' => get_string('home')));
}
return html_writer::tag('span', $sitename, array('class' => 'brand'));
}
public function get_logo_url($maxwidth = null, $maxheight = 100) {
global $CFG;
if (!empty($this->page->theme->settings->logo)) {
$url = $this->page->theme->setting_file_url('logo', 'logo');
// Get a URL suitable for moodle_url.
$relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
$url = str_replace($relativebaseurl, '', $url);
return new moodle_url($url);
}
return parent::get_logo_url($maxwidth, $maxheight);
}
public function get_compact_logo_url($maxwidth = 100, $maxheight = 100) {
global $CFG;
if (!empty($this->page->theme->settings->smalllogo)) {
$url = $this->page->theme->setting_file_url('smalllogo', 'smalllogo');
// Get a URL suitable for moodle_url.
$relativebaseurl = preg_replace('|^https?://|i', '//', $CFG->wwwroot);
$url = str_replace($relativebaseurl, '', $url);
return new moodle_url($url);
}
return parent::get_compact_logo_url($maxwidth, $maxheight);
}
}