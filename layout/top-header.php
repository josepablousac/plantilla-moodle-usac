<!-- Start Top Header Section -->
<div class="top-header">
	<div class="container-fluid">
		<div class="loginsection pull-right">
			<?php if(isloggedin()){
            if(isguestuser()){
            ?>
			<div class="line">
				<a class="login" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
					<?php echo get_string('login') ?>
				</a>
			</div>
			<?php
            }else{
            ?>
			<div class="line usermenu-con">
				<?php 
					//cambiando imagen por defecto. nota: sin cambiar iconografía.
					$user_menu = $OUTPUT->user_menu(); 
					$user_menu = str_replace("theme/image.php?theme=usac&amp;component=core&amp;image=u%2Ff2", "theme/image.php?theme=usac&component=theme&image=user", $user_menu);
					$user_menu = str_replace('width="35" height="35"', 'width="45" height="45"', $user_menu);
					echo $user_menu;
				?>
			</div>
			<?php
            }
            }else{ ?>	
			<?php
            if(!empty($CFG->registerauth)){
            	 $authplugin = get_auth_plugin($CFG->registerauth);
            	 if($authplugin->can_signup()){
            ?>
			<div class="line">
				<a class="signup" href="<?php echo $CFG->wwwroot.'/login/signup.php' ?>">Register</a>
			</div>
			<?php
            }
            }
            ?>
			<div class="line">
				<a class="login" href="<?php echo new moodle_url('/login/index.php', array('sesskey'=>sesskey())), get_string('login') ?> " > 
					<?php echo get_string('login') ?>
				</a>
			</div>
			<?php
			}
			?>	
		</div>
      <!-- end div .loginsection -->
   </div>
</div>
<!-- End Top Header Section -->