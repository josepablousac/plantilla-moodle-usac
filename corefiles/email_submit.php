<?php

include_once("../../../config.php");
include_once("../../../lib/moodlelib.php");
global $DB;
global $CFG;
global $PAGE;
//
$server=Array();
if(empty($PAGE->theme->settings->mapsectionserveraddress)&&$PAGE->theme->settings->mapsectionserveraddress!=""){
	$server = explode("/",$PAGE->theme->settings->mapsectionserveraddress);
}else{
	$server = explode("/", $CFG->wwwroot);
}
if("https://".$server[2]==$_SERVER['HTTP_ORIGIN']||"http://".$server[2]==$_SERVER['HTTP_ORIGIN']){
	$response=Array();
	$er_nombre = "/^([àèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑa-zA-Z ]+)$/";
	$er_mensaje = "/^([àèìòùÀÈÌÒÙáéíóúÁÉÍÓÚñÑa-zA-Z0-9\-\.\,\(\)\@\:\/ ]+)$/";
	//
	$b_nombre=true;
	if (preg_match($er_nombre,$_POST['nombre'])) {
		$b_nombre=false;
	}
	$b_correo=true;
	if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
		$b_correo=false;
	}
	$b_mensaje=true;
	if (preg_match($er_mensaje,$_POST['mensaje'])) {
		$b_mensaje=false;
	}
	if($b_nombre||$b_correo||$b_mensaje){
		$response['result']="NOT OK";
		$response['code']=1;
		echo json_encode($response);
		die();
	}else{
		//
		$captcha = $_POST['captcha'];
		$remote_add = $_SERVER['REMOTE_ADDR'];
		$secret = $PAGE->theme->settings->mapsectiongoogleprivatekey;
		//
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$remote_add";
        $result_json = file_get_contents($url);
        $resulting = json_decode($result_json, true);
		
		if(sizeof($resulting)>0 && $resulting['success']){
			//
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$mensaje = $_POST['mensaje'];
			$administradores = $DB->get_record_sql("SELECT * FROM `".$CFG->prefix."config` WHERE `name` LIKE 'siteadmins';");
			$administradores = json_decode(json_encode($administradores), True);
			if(sizeof($administradores)>0){
				$administradores = explode(",", $administradores['value']);
				sort($administradores);
				/* */
				$administrador_id = empty($PAGE->theme->settings->emailto)?$administradores[0]:$PAGE->theme->settings->emailto;
				/* */
				$user = $DB->get_record_sql("SELECT * FROM `".$CFG->prefix."user` WHERE id = ".$administrador_id.";");
				$asunto = "Nuevo mensaje en su sitio Moodle (".$CFG->wwwroot.")";
				$mensaje = "El usuario: $nombre ($correo) te ha enviado el siguiente mensaje: '$mensaje'";
				$r = email_to_user($user, $correo, $asunto, $mensaje, '', '', '',true,$correo, $nombre, 79)."<br/>";
				if($r){
					$response['result']="OK";
					$response['code']=3;
					echo json_encode($response);
					die();
				}else{
					$response['result']="NOT OK";
					$response['code']=4;
					echo json_encode($response);
					die();
				}
			}else{
				$response['result']="NOT OK";
				$response['code']=5;
				echo json_encode($response);
				die();
			}
		}else{
			$response['result']="NOT OK";
			$response['code']=2;
			echo json_encode($response);
			die();
		}
	}
}else{
	header('Location: error.php');
	die();
}
?>