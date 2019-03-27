<!-- Start Top Footer Section -->
<div class="social">
   <div class="container-fluid">
	<div class="span6 social_logo">
		<img src="<?php echo $footerlogo; ?>" alt="Footer_Logo"/>
	</div>
	<div class="span6 social_text">
	  <ul class="social_fixed" id="social_fixed" >
         <?php if($hasfacebook) { ?>
         <li>
            <a href="<?php echo $hasfacebook; ?>" target="_blank">
            <i class="fa fa-facebook"></i>
            </a>
         </li>
         <?php } ?>
         <?php if($hastwitter) { ?>
         <li>
            <a href="<?php echo $hastwitter; ?>" target="_blank">
            <i class="fa fa-twitter"></i>
            </a>
         </li>
         <?php } ?>
         <?php if($hasgoogleplus) { ?>    
         <li>
            <a href="<?php echo $hasgoogleplus; ?>" target="_blank">
            <i class="fa fa-google-plus"></i>
            </a>
         </li>
         <?php } ?>
         <?php if($haspinterest) { ?>
         <li>
            <a href="<?php echo $haspinterest; ?>" target="_blank">
            <i class="fa fa-pinterest"></i>
            </a>
         </li>
         <?php } ?>   
         <?php if($hasinstagram) { ?>
         <li>
            <a href="<?php echo $hasinstagram; ?>" target="_blank">
            <i class="fa fa-instagram"></i>
            </a>
         </li>
         <?php } ?>   
         <?php if($hasyoutube) { ?>
         <li>
            <a href="<?php echo $hasyoutube; ?>" target="_blank">
            <i class="fa fa-youtube"></i>
            </a>
         </li>
         <?php } ?>   
         <?php if($hasflickr) { ?>
         <li>
            <a href="<?php echo $hasflickr; ?>" target="_blank">
            <i class="fa fa-flickr"></i>
            </a>
         </li>
         <?php } ?> 
         <?php if($haswhatsapp) { ?>
         <li>
            <a href="<?php echo $haswhatsapp; ?>" target="_blank">
            <i class="fa fa-whatsapp"></i>
            </a>
         </li>
         <?php } ?>  
         <?php if($hasskype) { ?>
         <li>
            <a href="<?php echo $hasskype; ?>" target="_blank">
            <i class="fa fa-skype"></i>
            </a>
         </li>
         <?php } ?>  
         <?php if($hasgithub) { ?>
         <li>
            <a href="<?php echo $hasgithub; ?>" target="_blank">
            <i class="fa fa-github"></i>
            </a>
         </li>
         <?php } ?>  
      </ul>
		<ul class="copyright">
         <?php if($hascopyright) {?>
         <li>
            <?php if ($hascopyright) { echo '<p class="copy"><small>Copyright &copy; '.date( "Y"). ' '.$hascopyright. '</small></p>'; } ?>
         </li>
         <?php }else{?>
         <?php } ?>
         <?php if($privacypolicy) {?>
         | 
         <li> 
            <a href="<?php echo $privacypolicyurl ?>">
            <small><?php echo $privacypolicy ?></small>
            </a>
         </li>
         <?php }else{?>
         <?php } ?>
      </ul>
      <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
      <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
      <?php
         echo $html->footnote;
         //echo $OUTPUT->login_info();
         //echo $OUTPUT->home_link();
         echo $OUTPUT->standard_footer_html();
         ?>
	</div>
   </div>
</div>
<!-- End Top Footer Section -->
<!-- Start footer end Section -->
<div class="end_footer">
	<div class="container-fluid">
		<img src="<?=$OUTPUT->image_url('/uev-logo', 'theme')?>"> Desarrollado por la Unidad de Educación Virtual | Dirección General de Docencia | USAC
	</div>
</div>
<!-- End footer end Section -->
<?php echo $OUTPUT->standard_end_of_body_html() ?>
<!-- Start Back To Top -->    
<?php
   // Code for back to top.
   if (!empty($PAGE->theme->settings->backtotop)) {
   ?>
<div id="backtotop" style="display: none;"> 
   <a class="scrollup" href="javascript:void(0);" title="<?php echo get_string('backtotop', 'theme_usac')?>">
   </a>
</div>
<?php 
   }
   ?>
<!-- End Back To Top -->  
</div>
</body>
</html>

<!--
	Unidad de Educación Virtual
	Dirección General de Docencia
	Universidad de San Carlos de Guatemala
	Octubre 2018
	
	Diseño por: 
	Luz María Ochoa
	
	Desarrollado por: 
	Jose Pablo Godoy Linares
-->