<!-- Start Custom Tab Section -->
<?php  if ($displaystudentsection) { ?>
<div class="custom-tab">
   <?php if($studentsectionheading) { ?>
   <div class="title-container">
      <div class="container-fluid">
         <h1><?php echo $studentsectionheading ?></h1>
         <p class="tagline"><?php echo $studentsectiontagline ?></p>
      </div>
   </div>
   <?php } ?>
   <div class="testimonial-wrapper">
      <!-- Background Image -->
      <div class="colorful-tab-wrapper active" id="colorful-background-image">
         <div class="colorful-tab-list-section clearfix">
            <ul class="colorful-tab-menu">
                <?php if($student1name){ ?><li class="colorful-tab-menu-item active" tab-background="<?php echo $student1backgroundurl ?>"><a class="student-a" href="#bg-0"><?php echo $student1name ?></a></li><?php } ?>
                <?php if($student2name){ ?><li class="colorful-tab-menu-item tab-menu-one" tab-background="<?php echo $student2backgroundurl ?>"><a class="student-b" href="#bg-1"><?php echo $student2name ?></a></li><?php } ?>
                <?php if($student3name){ ?><li class="colorful-tab-menu-item tab-menu-two" tab-background="<?php echo $student3backgroundurl ?>"><a class="student-c" href="#bg-2"><?php echo $student3name ?></a></li><?php } ?>
                <?php if($student4name){ ?><li class="colorful-tab-menu-item" tab-background="<?php echo $student4backgroundurl ?>"><a class="student-d" href="#bg-3"><?php echo $student4name ?></a></li><?php } ?>
               <?php if($student5name){ ?><li class="colorful-tab-menu-item" tab-background="<?php echo $student5backgroundurl ?>"><a class="student-e" href="#bg-4"><?php echo $student5name ?></a></li><?php } ?>
            </ul>
         </div>
         <div class="colorful-tab-container clearfix">
            <div class="colorful-tab-content active" id="bg-0">
               <?php if($student1name) { ?>
               <h2 class="student-title"></h2>
               <?php } ?>
               <?php if($student1description) { ?>
               <p><?php echo $student1description ?></p>
               <?php }?>
            </div>
            <div class="colorful-tab-content" id="bg-1">
               <?php if($student2name) { ?>
               <h2 class="student-title"></h2>
               <?php } ?>
               <?php if($student2description) { ?>
               <p><?php echo $student2description ?></p>
               <?php }?>
            </div>
            <div class="colorful-tab-content" id="bg-2">
               <?php if($student3name) { ?>
               <h2 class="student-title"></h2>
               <?php } ?>
               <?php if($student3description) { ?>
               <p><?php echo $student3description ?></p>
               <?php }?>
            </div>
            <div class="colorful-tab-content" id="bg-3">
               <?php if($student4name) { ?>
               <h2 class="student-title"></h2>
               <?php } ?>
               <?php if($student4description) { ?>
               <p><?php echo $student4description ?></p>
               <?php }?>
            </div>
            <div class="colorful-tab-content" id="bg-4">
               <?php if($student5name) { ?>
               <h2 class="student-title"></h2>
               <?php } ?>
               <?php if($student5description) { ?>
               <p><?php echo $student5description ?></p>
               <?php }?>
            </div>
         </div>
      </div>
      <!-- Background Image -->
   </div>
</div>
<?php } ?>
<!-- End Custom Tab Section -->