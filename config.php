<?php

	/*
	Unidad de Educación Virtual
	Dirección General de Docencia
	Universidad de San Carlos de Guatemala
	Fecha de publicación: Octubre 2018
	
	Diseño por: 
	Luz María Ochoa
	
	Desarrollado por: 
	Jose Pablo Godoy Linares
	*/

	$THEME->name = 'usac';
	$THEME->doctype = 'html5';
	$THEME->parents = array('bootstrapbase','clean');
	$THEME->sheets = array('custom','font-awesome','owl','block_icon','colorfulTab');
	$THEME->yuicssmodules = array();
	$THEME->enable_dock = false;
	$THEME->editor_sheets = array();
	$THEME->layouts = array(
		// The site home page.
		'frontpage' => array(
		'file' => 'frontpage.php',
		'regions' => array('side-pre','side-post'),
		'defaultregion' => 'side-pre',
		'options' => array('nonavbar'=>true, 'frontpage'=>true),
		),
		// Login page.
		'login' => array(
		'file' => 'login.php',
		'regions' => array(),
		'options' => array('langmenu'=>true),
		),    
	);
	$THEME->rendererfactory = 'theme_overridden_renderer_factory';
	$THEME->csspostprocess = 'theme_usac_process_css';
	$THEME->javascripts = array('jquery-3.1.0.min','jquery.easing.min','colorfulTab.min','superfish.custom.min');
	$THEME->javascripts_footer = array('resCarousel','custom','menuNav');