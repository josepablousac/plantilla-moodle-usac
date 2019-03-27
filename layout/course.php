<?php if($displaycoursesection) { ?>
	<section id="courses" > 
		<div class="usac_glass">&nbsp;</div>
		<div class="container-fluid">
			<div class="center">
				<div class="heading">
					<div class="courses_title">
						<h2><?=$coursesheading?></h2>
						<div class="courses_line_title">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
		<div class="courses_scroll">
			<div class="container-fluid">
				<div class="row-fluid justify-content-center">
					<div class="span1" style="height:0px;">&nbsp;</div>
					<div class="span10">
						<div class="courses_content">
							<?php
								global $DB;
								$course_temp = $DB->get_records_sql('SELECT c.* FROM {course} c where visible = 1 AND id != 1;');
								foreach($course_temp AS $t){
							?>
							<div class="courses_box">
								<a href="<?=$CFG->wwwroot."/course/view.php?id=".$t->id?>"><?=sizeof($t->fullname)<=76?$t->fullname:$t->shortname?></a>
							</div>
							<?php
								}
							?>
						</div>
					</div>
					<div class="span1" style="height:0px;">&nbsp;</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
            <div class="row-fluid">
				<div class="span12">
					<div class="courses_arrow">
						<div class="white_arrow">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
    </section>
<?php } ?>