<?php $string['choosereadme']='
<div class="clearfix">
   <div class="well">
      <h2>USAC</h2>
      <p><img class=img-polaroid src="usac/pix/screenshot.jpg" /></p>
   </div>
   <div class="well">
		<h3>Acerca</h3> 
		<p>
			Unidad de Educación Virtual
			Dirección General de Docencia
			Universidad de San Carlos de Guatemala
			
			Plantilla de la USAC
			Version 1.4
			25/10/2018
			
			Para más información, por favor envía un correo a <a href="mailto:josepablo@profesor.usac.edu.gt">josepablo@profesor.usac.edu.gt</a> o <a href="mailto:universidadvirtual@profesor.usac.edu.gt">universidadvirtual@profesor.usac.edu.gt</a>
		</p>
   </div>
</div>
';
$string['configtitle'] = 'usac';
// General Settings
$string['generalsettings'] = 'General Settings';
$string['favicon']='Favicon';
$string['favicondesc']='Upload your Favicon here.<br /> Image works best with 16 x 16px size';
$string['logo'] = 'Logo';
$string['logodesc'] = 'The logo is only displayed in the header of the front page and login page.<br /> If the height of your logo is more than 75px add div.logo {height: 100px;} to the Custom CSS box below, amending accordingly if the height is other than 100px. If a logo is not added here, the logo in Appearance > Logos will be used.';
$string['pluginname'] = 'USAC';
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';
$string['sitelogo'] = 'Site logo';
$string['internalbannerimage'] = 'Internal Banner Image';
$string['internalbannerimagedesc'] = 'Upload Internal Banner Image.<br />Image works best with 1500 x 450px size';
$string['internalbannertagline']='Internal Banner Tagline';
$string['internalbannertaglinedesc']='Enter Internal Banner Tagline Text';
$string['siteskybluecolor']='Site Sky Blue Color';
$string['siteskybluecolordesc']='This allow you to set the Site Sky Blue Color';
$string['sitebluecolor']='Site Blue Color';
$string['sitebluecolordesc']='This allow you to set the Site Blue Color';
$string['loginbackground'] = 'Login Background Image';
$string['loginbackgrounddesc'] = 'Upload Login Background.<br />Image works best with 2500 x 1500px size';
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';
// Slider Settings
$string['slidersettings'] = 'Header banner section';
$string['headerimage']='Header image banner';
$string['headerimagedesc']='Please upload your image banner<br />Image works best with 1366 x 426px size';
$string['headertext']='Header text';
$string['headertextdesc']='Enter the header banner text';
$string['headersubtitletext']='Header subtitle text';
$string['headersubtitletextdesc']='Enter the header subtitle text';
$string['headerurl']='Header URL';
$string['headerurldesc']='Place the URL address for the header text';
// Frontpage Settings 
$string['frontpagesettings'] = 'Frontpage About';
$string['frontpagesettings_courses'] = 'Frontpage Courses';
$string['frontpagesettings_tutors'] = 'Frontpage Tutors';
$string['frontpagesettings_contact'] = 'Frontpage Contact';
$string['displayaboutussection']='Display About Us Section';
$string['displayaboutussectiondesc']='Show or Hide About Us Section';
$string['aboutusheading']='About Us Heading';
$string['aboutusheadingdesc']='Enter About Us Heading Text';
$string['aboutus1heading']='About us section one heading';
$string['aboutus1headingdesc']='Enter title for the section one';
$string['aboutus1description']='About us section one description';
$string['aboutus1descriptiondesc']='Type text content for the section one';
$string['aboutus2heading']='About us section two heading';
$string['aboutus2headingdesc']='Enter title for the section two';
$string['aboutus2description']='About us section two description';
$string['aboutus2descriptiondesc']='Type text content for the section two';
$string['aboutus3heading']='About us section three heading';
$string['aboutus3headingdesc']='Enter title for the section three';
$string['aboutus3description']='About us section three description';
$string['aboutus3descriptiondesc']='Type text content for the section three';
/**/
$string['displaycoursesection']='Display Course Section';
$string['displaycoursesectiondesc']='Show or Hide Course Section';
$string['coursesbg'] = 'Courses section background image';
$string['coursesbgdesc'] = 'Upload courses section Background.<br />Image works best with 1366 x 702px size';
$string['coursesheading']='Courses section text';
$string['coursesheadingdesc']='Enter courses section text';

$string['displaytutorsection']='Display Tutor Section';
$string['displaytutorsectiondesc']='Show or Hide Tutor Section';
$string['tutorssectionheading']='Tutor Section Heading';
$string['tutorssectionheadingdesc']='Enter Tutor Section Heading Text';
$string['tutorsquantity']='Number of tutors';
$string['tutorsquantitydesc']='Enter the number of tutors to display';
$string['displaytutor1']='Display Tutor One Section';
$string['displaytutor1desc']='Show or Hide Tutor One Section';

$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
for($i=1;$i<100;$i++){
	$number = $f->format($i);
	$string['tutor'.$i.'image'] = 'Tutor '.$number.' image';
	$string['tutor'.$i.'imagedesc'] = 'Image works best if (Image size should be 200 x  200px )';
	$string['tutor'.$i.'name']='Tutor '.$number.' name';
	$string['tutor'.$i.'namedesc']='Enter tutor '.$number.' name';
	$string['tutor'.$i.'url']='Tutor '.$number.' URL';
	$string['tutor'.$i.'urldesc']='Enter Tutor '.$number.' URL';
	$string['tutor'.$i.'description']='Tutor '.$number.' description';
	$string['tutor'.$i.'descriptiondesc']='Enter tutor '.$number.' Description';
}

$string['displaymapsection']='Display contact section';
$string['displaymapsectiondesc']='Show or Hide contact section';
$string['mapsectionimage'] = 'Contact section background image';
$string['mapsectionimagedesc'] = 'Upload courses section Background.<br />Image works best with 1366 x 620px size';
$string['mapsectionheading']='Contact Heading';
$string['mapsectionheadingdesc']='Enter contact heading Text';
$string['mapsectioniframe']='Map iframe URL';
$string['mapsectioniframedesc']='Enter the Iframe URL, for example to Google map location';
$string['mapsectionaddress1']='Faculty name';
$string['mapsectionaddress1desc']='Enter address, first line';
$string['mapsectionaddress2']='Academic unit';
$string['mapsectionaddress2desc']='Enter address, first line';
$string['mapsectionaddress3']='Address';
$string['mapsectionaddress3desc']='Enter address, second line';
$string['mapsectionphone']='Phone numbers';
$string['mapsectionphonedesc']='Enter phone numbers, you can use / to split each one';
$string['mapsectionemail']='Email address';
$string['mapsectionemaildesc']='Enter contact email address';
$string['imageglass']='Background image glass';
$string['imageglassdesc']='Please use 10x10 pixels image with a transparent color';
$string['emailto']='Send email to';
$string['emailtodesc']='The messages from the contact form will be send to the selected administrator.';
$string['mapsectiongooglepublickey']='reCaptcha public key';
$string['mapsectiongooglepublickeydesc']='Enter your Google reCaptcha public key';
$string['mapsectiongoogleprivatekey']='reCaptcha private key';
$string['mapsectiongoogleprivatekeydesc']='Enter your Google reCaptcha private key';
$string['mapsectionserveraddress']='Moodle URL domain address';
$string['mapsectionserveraddressdesc']='This is a security option, the submit form<br/> will accept POST request only<br/> from this URL address';

/* ***************************************************** */
// Footer Settings
$string['footersettings'] = 'Footer Settings';
$string['footerlogo'] = 'Footer Logo Image';
$string['footerlogodesc'] = 'Upload Footer Logo Image.<br />Image works best with 174 x 46px size';
$string['facebook']='Facebook URL';
$string['facebookdesc']='Enter the URL of your Facebook.';
$string['twitter']='Twitter URL';
$string['twitterdesc']='Enter the URL of your Twitter.';
$string['googleplus']='Googleplus URL';
$string['googleplusdesc']='Enter the URL of your Googleplus.';
$string['pinterest']='Pinterest URL';
$string['pinterestdesc']='Enter the URL of your Pinterest.';
$string['instagram']='Instagram URL';
$string['instagramdesc']='Enter the URL of your Instagram.';
$string['youtube']='Youtube URL';
$string['youtubedesc']='Enter the URL of your Youtube.';
$string['flickr']='Flickr URL';
$string['flickrdesc']='Enter the URL of your Flickr.';
$string['whatsapp']='Whatsapp URL';
$string['whatsappdesc']='Enter the URL of your Whatsapp.';
$string['skype']='Skype URL';
$string['skypedesc']='Enter the URL of your Skype.';
$string['github']='Github URL';
$string['githubdesc']='Enter the URL of your Github.';
$string['copyright'] = 'Copy Right';
$string['copyrightdesc'] = 'Enter Copyright Name';
$string['privacypolicy'] = 'Privacy Policy';
$string['privacypolicydesc'] = 'Enter Privacy Policy';
$string['privacypolicyurl'] = 'Privacy Policy URL';
$string['privacypolicyurldesc'] = 'Enter Privacy Policy URL';
$string['backtotop'] = 'Go to top';
$string['backtotopdesc'] = 'This allows you to set "Back to top" button in footer when scroll is there.';
$string['googleplayurl']='GooglePlay URL';
$string['googleplayurldesc']='Enter GooglePlay URL';
$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer throughout your Moodle site.';