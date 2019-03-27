<!-- Start Logo and Custom Menu Section -->  
<div class="fixed-nav-element"></div>
<div id="nav-main">	
	<header role="banner" class="navbar <?php echo $html->navbarclass ?> moodle-has-zindex">
		<nav role="navigation" class="navbar-inner">
			<div class="container-fluid">
				<div class="pull-left logo-con">
					<a class="logo" href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $logourl?>" alt="" /> </a>
					<div class="customsearchx" style="float:right;">
						<div class="item">
							<a class="link icon_find"></a>
							<div class="item_content">
								<span class="newsearch">
									<a href="<?php echo $CFG->wwwroot;?>/course/" class="catalog">Catálogo</a>
									<form role="form" class="form-inline searchbox" id="searchbox_demo" method="get" action="<?php echo $CFG->wwwroot;?>/course/search.php" >
										<div class="input-group search">
											<input type="text" placeholder="Search Courses" value="" name="search" />
											<input type="submit" name="sa" value="" class="submit" />
										</div>
										<div class="clearfix"></div>
									</form>
								</span>
							</div>
						</div>
					</div>
				</div>
				   
				<div class="pull-right custom-menu">
					<div class="customsearch customsearchx" style="float:right;">
						<div class="item">
							<a class="link icon_find"></a>
							<div class="item_content">
								<span class="newsearch">
									<a href="<?php echo $CFG->wwwroot;?>/course/" class="catalog">Catálogo</a>
									<form role="form" class="form-inline searchbox" id="searchbox_demo" method="get" action="<?php echo $CFG->wwwroot;?>/course/search.php" >
										<div class="input-group search">
											<input type="text" placeholder="Search Courses" value="" name="search" />
											<input type="submit" name="sa" value="" class="submit" />
										</div>
										<div class="clearfix"></div>
									</form>
								</span>
							</div>
						</div>
					</div>
					<?php /* echo $OUTPUT->navbar_home(); */ ?>
					<?php 
						//cambiando imagenes de mensajes y notificaciones. nota: sin cambiar iconografía.
						$navbar_plugin_output = $OUTPUT->navbar_plugin_output(); 
						$navbar_plugin_output = str_replace("theme/image.php?theme=usac&amp;component=core&amp;image=t%2Fmessage", "theme/image.php?theme=usac&component=theme&image=message", $navbar_plugin_output);
						$navbar_plugin_output = str_replace("theme/image.php?theme=usac&amp;component=core&amp;image=i%2Fnotifications", "theme/image.php?theme=usac&component=theme&image=notifications", $navbar_plugin_output);
						
						$cadena = $navbar_plugin_output;
						$patrón = '/theme\/image.php\/usac\/core\/[0-9a-zA-Z]+\/t\/message/i';
						$sustitución = 'theme/image.php?theme=usac&component=theme&image=message';
						$navbar_plugin_output = preg_replace($patrón, $sustitución, $cadena);
						
						$cadena = $navbar_plugin_output;
						$patrón = '/theme\/image.php\/usac\/core\/[0-9a-zA-Z]+\/i\/notifications/i';
						$sustitución = 'theme/image.php?theme=usac&component=theme&image=notifications';
						$navbar_plugin_output = preg_replace($patrón, $sustitución, $cadena);

						echo $navbar_plugin_output;
					?>
					<?php echo $OUTPUT->search_box(); ?>
					<div id="navigation-wrapper">
						<div class="main-navigation-inner">
							<div class="container-fluid">
								<div class="row">
									<div class="menu-bar">
										<a class="mobile-home" href="" title="USAC">
											<i class="fa fa-home"></i>
										</a>
										<a class="show-menu" href="#"><i class="fa fa-bars"></i></a>
									</div>
									<?php 
										$custom_menu = $OUTPUT->custom_menu(); 
										//cambiando html del menu de lenguaje.
										$language = '<a href="" class="dropdown-toggle" data-toggle="dropdown" title="Idioma">
											<img src="'.$CFG->wwwroot.'/theme/image.php?theme=usac&component=theme&image=language" />
											<b class="mobile-arrow"></b>
										</a>';
										
										$custom_menu = preg_replace('/<a href="" class="dropdown-toggle" data-toggle="dropdown" title="(.*)">(.*)<b class="caret"><\/b><\/a>/', $language, $custom_menu);
										echo $custom_menu;
									?>
									<ul class="nav pull-right">
										<li><?php echo $OUTPUT->page_heading_menu(); ?></li>
									</ul> 
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
</div>
<!-- End Logo and Custom Menu Section -->