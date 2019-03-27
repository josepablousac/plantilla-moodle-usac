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
$string['generalsettings'] = 'Configuración general';
$string['favicon']='Icono';
$string['favicondesc']='Carga tu icono aquí.<br/> El tamaño recomendado es de 16 x 16 pixeles.';
$string['logo'] = 'Logotipo';
$string['logodesc'] = 'El logotipo se mostrará en la parte superior de la ventana del navegador web.';
$string['pluginname'] = 'USAC';
$string['region-side-post'] = 'Derecha';
$string['region-side-pre'] = 'Izquierda';
$string['sitelogo'] = 'Site logo';
$string['internalbannerimage'] = 'Imagen del banner interno';
$string['internalbannerimagedesc'] = 'Carga la imagen del banner interno.<br/>El tamaño recomendado es de 1500 x 450 pixeles.';
$string['internalbannertagline']='Texto del banner interno';
$string['internalbannertaglinedesc']='Ingresa el texto secundario mostrado en el banner interno';
$string['siteskybluecolor']='Color celeste del sitio';
$string['siteskybluecolordesc']='Cambia el color celeste original de la plantilla';
$string['sitebluecolor']='Color azul oscuro del sitio';
$string['sitebluecolordesc']='Cambia el color azul oscuro original de la plantilla';
$string['loginbackground'] = 'Imagen de fondo de página de inicio de sesión';
$string['loginbackgrounddesc'] = 'Carga la imagen de fondo.<br/>El tamaño recomendado es de 2500 x 1500 pixeles.';
$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = 'Modifica el estilo CSS de la plantilla.';
// Slider Settings
$string['slidersettings'] = 'Inicio - Cabecera de página';
$string['headerimage']='Imagen de cabecera de página';
$string['headerimagedesc']='Sube una imagen de cabecera de página<br/>El tamaño recomendado es de 1366 x 426 pixeles.';
$string['headertext']='Unidad académica';
$string['headertextdesc']='Ingresa el nombre de tu unidad académica';
$string['headersubtitletext']='Texto secundario';
$string['headersubtitletextdesc']='Ingresa el texto secundario a mostrar en la cabecera de página';
$string['headerurl']='Enlace URL';
$string['headerurldesc']='Ingresa la URL a donde los usuarios<br/>serán redireccionados al hacer clic';
// Frontpage Settings 
$string['frontpagesettings'] = 'Inicio - Acerca';
$string['frontpagesettings_courses'] = 'Inicio - Cursos';
$string['frontpagesettings_tutors'] = 'Inicio - Docentes';
$string['frontpagesettings_contact'] = 'Inicio - Contacto';
$string['displayaboutussection']='Mostrar sección Acerca de nosotros';
$string['displayaboutussectiondesc']='Mostrar o esconder la sección acerca de nosotros';
$string['aboutusheading']='Texto de cabecera de la sección';
$string['aboutusheadingdesc']='Ingresa el texto de cabecera de la sección Acerca de nosotros';
$string['aboutus1heading']='Título del área uno';
$string['aboutus1headingdesc']='Ingresa el título del área uno';
$string['aboutus1description']='Contenido del área uno';
$string['aboutus1descriptiondesc']='Ingresa el contenido del área uno';
$string['aboutus2heading']='Título del área dos';
$string['aboutus2headingdesc']='Título del área dos';
$string['aboutus2description']='Contenido del área dos';
$string['aboutus2descriptiondesc']='Ingresa el contenido del área dos';
$string['aboutus3heading']='Título del área tres';
$string['aboutus3headingdesc']='Título del área tres';
$string['aboutus3description']='Contenido del área tres';
$string['aboutus3descriptiondesc']='Ingresa el contenido del área tres';
/**/
$string['displaycoursesection']='Mostrar cursos';
$string['displaycoursesectiondesc']='Mostrar o esconder la sección de cursos';
$string['coursesbg'] = 'Imagen de fondo de la sección de cursos';
$string['coursesbgdesc'] = 'Carga la imagen de fondo de la sección de cursos.<br/>El tamaño recomendado es de 1366 x 702 pixeles';
$string['coursesheading']='Texto de cabecera de la sección';
$string['coursesheadingdesc']='Ingresa el texto de cabecera de la sección de cursos';

$string['displaytutorsection']='Mostrar docentes';
$string['displaytutorsectiondesc']='Mostrar o esconder la sección de docentes';
$string['tutorssectionheading']='Texto de cabecera de la sección';
$string['tutorssectionheadingdesc']='Ingresa el texto de cabecera de la sección de docentes';
$string['tutorsquantity']='Número de docentes';
$string['tutorsquantitydesc']='Ingresa la cantidad de docentes a mostrar';

$f = new NumberFormatter("es", NumberFormatter::SPELLOUT);
for($i=1;$i<100;$i++){
	$number = $f->format($i);
	$string['tutor'.$i.'image'] = 'Imagen de docente '.$number;
	$string['tutor'.$i.'imagedesc'] = 'El tamaño recomendado es de 163 x 185 pixeles';
	$string['tutor'.$i.'name']='Nombre de docente '.$number;
	$string['tutor'.$i.'namedesc']='Ingresa el nombre del docente '.$number;
	$string['tutor'.$i.'url']='Enlace URL del docente '.$number;
	$string['tutor'.$i.'urldesc']='Ingresa la dirección URL con la información completa del docente '.$number;
	$string['tutor'.$i.'description']='Resumen de docente '.$number;
	$string['tutor'.$i.'descriptiondesc']='Ingresa un pequeño resumen del docente '.$number;
}

$string['displaymapsection']='Mostrar sección de contacto';
$string['displaymapsectiondesc']='Mostrar o esconder la sección de contacto';
$string['mapsectionimage'] = 'Imagen de fondo de sección de contacto';
$string['mapsectionimagedesc'] = 'El tamaño recomendado es de 1366 x 620 pixeles';
$string['mapsectionheading']='Texto de cabecera de la sección';
$string['mapsectionheadingdesc']='Ingresa el texto de cabecera de la sección de contacto';
$string['mapsectioniframe']='URL del iFrame';
$string['mapsectioniframedesc']='Ingresa solo la dirección URL del iFrame de Google maps';
$string['mapsectionaddress1']='Nombre de la facultad';
$string['mapsectionaddress1desc']='Ingresa la dirección, línea uno';
$string['mapsectionaddress2']='Nombre de la escuela';
$string['mapsectionaddress2desc']='Ingresa la dirección, línea uno';
$string['mapsectionaddress3']='Dirección';
$string['mapsectionaddress3desc']='Ingresa la dirección, línea dos';
$string['mapsectionphone']='Números de teléfono';
$string['mapsectionphonedesc']='Para ingresar varios números de teléfono, puedes separarlos utilizando /';
$string['mapsectionemail']='Dirección de correo';
$string['mapsectionemaildesc']='Ingresa una dirección de correo';
$string['imageglass']='Imagen con transparencia';
$string['imageglassdesc']='Carga una imagen de color con transparencia.<br/>Esta imagen es utilizada sobre las imágenes<br/>de fondo de cada sección.<br/>El tamaño recomendado es 10 x 10 pixeles.';
$string['emailto']='Enviar email a';
$string['emailtodesc']='Los mensajes del formulario de contacto se enviarán al administrador seleccionado.';
$string['mapsectiongooglepublickey']='Clave pública de reCaptcha';
$string['mapsectiongooglepublickeydesc']='Ingresa la clave pública de Google ReCaptcha';
$string['mapsectiongoogleprivatekey']='Clave privada de reCaptcha';
$string['mapsectiongoogleprivatekeydesc']='Ingresa la clave privada de Google Recaptcha';
$string['mapsectionserveraddress']='Dirección URL de dominio de Moodle';
$string['mapsectionserveraddressdesc']='Opción de seguridad, el formulario de envío de correo<br/>aceptará solicitudes POST únicamente<br/>de esta dirección URL.';


/* ***************************************************** */
// Footer Settings
$string['footersettings'] = 'Pie de página';
$string['footerlogo'] = 'Logotipo de pie de página';
$string['footerlogodesc'] = 'El tamaño recomendado es de 185 x 63 pixeles';
$string['facebook']='Facebook URL';
$string['facebookdesc']='Ingresa la URL de Facebook.';
$string['twitter']='Twitter URL';
$string['twitterdesc']='Ingresa la URL de Twitter.';
$string['googleplus']='Googleplus URL';
$string['googleplusdesc']='Ingresa la URL de Googleplus.';
$string['pinterest']='Pinterest URL';
$string['pinterestdesc']='Ingresa la URL de Pinterest.';
$string['instagram']='Instagram URL';
$string['instagramdesc']='Ingresa la URL de Instagram.';
$string['youtube']='Youtube URL';
$string['youtubedesc']='Ingresa la URL de Youtube.';
$string['flickr']='Flickr URL';
$string['flickrdesc']='Ingresa la URL de Flickr.';
$string['whatsapp']='Whatsapp URL';
$string['whatsappdesc']='Ingresa la URL de Whatsapp.';
$string['skype']='Skype URL';
$string['skypedesc']='Ingresa la URL de Skype.';
$string['github']='Github URL';
$string['githubdesc']='Ingresa la URL de Github.';
$string['copyright'] = 'Derechos de autor';
$string['copyrightdesc'] = 'Ingresa el nombre a mostrar en el texto de derechos de autor';
$string['privacypolicy'] = 'Texto de política de privacidad';
$string['privacypolicydesc'] = 'Ingresa el texto del enlace de la política de privacidad';
$string['privacypolicyurl'] = 'URL de la política de privacidad';
$string['privacypolicyurldesc'] = 'Enlace URL de la política de privacidad';
$string['backtotop'] = 'Subir';
$string['backtotopdesc'] = 'Muestra un botón en la parte inferior derecha,<br/>al habilitarlo, permite al usuario ir a la parte<br/>superior de la página.';
$string['googleplayurl']='GooglePlay URL';
$string['googleplayurldesc']='Ingresa la URL de GooglePlay';
$string['footnote'] = 'Nota de pie de página';
$string['footnotedesc'] = 'Ingresa la nota mostrada en el pie de página';