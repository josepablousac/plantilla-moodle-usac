<?php
   $regionmainbox = 'span12 desktop-first-column';
   $regionmain = 'span12 pull-right';
   $sidepre = 'span4 desktop-first-column';
   $sidepost = 'span3 pull-right';
   ?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/top-header.php'); ?>
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/slider.php'); ?>
    <!-- Start About Us section -->     
    <?php require_once(dirname(__FILE__).'/about.php'); ?>   
    <!-- End About Us section -->   
    <!-- Start Courses section -->     
    <?php require_once(dirname(__FILE__).'/course.php'); ?>   
    <!-- End Courses section -->    
   <?php require_once(dirname(__FILE__).'/tutors.php'); ?>
   <!-- Start Page Content Section -->  
   <!-- <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
               <section id="region-main" class="<?php echo $regionmain; ?>">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
            </div>
         </div>
      </div>
   </div> -->
   <!-- Start MAP Section -->
   <?php require_once(dirname(__FILE__).'/map.php'); ?>
   <!-- End MAP Section -->
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>
   <script type="text/javascript">
      /* Search Courses */
      jQuery(document).ready(function($) {
      
         if ($('#frontpage-category-combo').length === 0) {
             $('#page #page-content').css({
                 'display': 'none'
             });
         }
          
          
           if ($('#frontpage-category-names').length === 0) {
             $('#page .defaultcategories').css({
                 'display': 'none'
             });
         }
          
          if ($('#frontpage-category-names').length === 0) {
             $('#page .customcategories').css({
                 'display': 'none'
             });
         }  
      
      });
   </script>