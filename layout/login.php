<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/top-header.php'); ?>
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <!-- Start Page Content Section -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <section id="region-main" class="span12">
            <?php
               echo $OUTPUT->course_content_header();
               echo $OUTPUT->main_content();
               echo $OUTPUT->course_content_footer();
               ?>
         </section>
      </div>
   </div>
   <!-- End Page Content Section -->
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>
<script type="text/javascript">
    jQuery(function(){
        /* Login Page input */
		jQuery('input[type=text]#username') ? jQuery('input[type=text]#username').attr('placeholder', 'Usuario') : '';
		jQuery('input[type=password]#password') ? jQuery('input[type=password]#password').attr('placeholder', 'Contraseña') : '';
		jQuery('.loginsub').append("<br/><br/>"+jQuery('.potentialidps').html()+"<br/>");
		jQuery('.potentialidps').remove();
    });

  </script>
  <style>
	.loginsub{
		background-color: #ffffff;
		padding-bottom: 10px;
	}
	.loginbox{
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.signuppanel{
		margin-top: 0px !important;
	}
	.signuppanel ol li{
		text-align: left;
		width: 50%;
		margin-left: 25%;
	}
  </style>