<?php
   $regionmain = 'span9 pull-right';
   $sidepre = 'span3 desktop-first-column';
   ?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/top-header.php'); ?>
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/internalbanner.php'); ?>
   <!-- Start Page Content Section -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <section id="region-main" class="<?php echo $regionmain; ?>">
            <?php
               echo $OUTPUT->course_content_header();
               echo $OUTPUT->main_content();
               echo $OUTPUT->course_content_footer();
               ?>
         </section>
         <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
      </div>
   </div>
   <!-- End Page Content Section -->
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>