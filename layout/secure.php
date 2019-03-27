<?php
   $regionmainbox = 'span9 desktop-first-column';
   $regionmain = 'span8 pull-right';
   $sidepre = 'span4 desktop-first-column';
   $sidepost = 'span3 pull-right';
   ?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
      <!-- Start Header Section -->
      <header id="page-header" class="clearfix">
         <div class="container-fluid">
            <?php echo $html->heading; ?>
         </div>
      </header>
      <!-- End Header Section -->
      <!-- Start Page Content Section -->  
      <div id="page-content" class="row-fluid">
         <div class="container-fluid">
            <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
               <div class="row-fluid">
                  <section id="region-main" class="<?php echo $regionmain; ?>">
                     <?php echo $OUTPUT->main_content(); ?>
                  </section>
                  <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
               </div>
            </div>
            <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
         </div>
      </div>
      <!-- End Page Content Section -->
      <?php echo $OUTPUT->standard_end_of_body_html() ?>
   </div>
</body>
</html>