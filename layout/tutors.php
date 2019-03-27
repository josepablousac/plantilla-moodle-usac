<!-- Start Tutors Section -->
<?php  if ($displaytutorsection) { ?>
	<section id="tutor" >
		<div class="container-fluid">
			<div class="center">
				<div class="heading">
					<div class="tutor_title">
						<h2><?=$tutorssectionheading?></h2>
						<div class="tutor_line_title">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row-fluid justify-content-center">
				<div class="span1" style="height:0px;">&nbsp;</div>
				<div class="span10">
					<div class="tutor_content" >
						<!-- ---------------------------------------------- -->
						<div class="resCarousel" data-items="1-3-3-3" data-slide="3" data-speed="900" data-animator="lazy" data-value="<?=$tutors_quantity?>">
							<div class="resCarousel-inner">
								<?php 
								$tutors_name = Array();
								$tutors_name[] = 'Carlos Hernández';
								$tutors_name[] = 'Juan López';
								$tutors_name[] = 'María Pérez';
								$tutors_name[] = 'Ana González';
								$tutors_name[] = 'Ángel Rodríguez';
								$tutors_name[] = 'Josué de León';
								$tutors_name[] = 'Kevin Ramírez';
								$tutors_name[] = 'Jorge Martínez';
								$tutors_name[] = 'Diego Castillo';
								for($i=1; $i<=$tutors_quantity; $i++){ 
									$tutorimage = $PAGE->theme->setting_file_url('tutor'.$i.'image', 'tutor'.$i.'image');
									$tutorimage = $tutorimage==""?$OUTPUT->image_url('/tutors/default', 'theme'):$tutorimage;
									$tutorname = theme_usac_get_setting('tutor'.$i.'name',true);
									$tutordescription = theme_usac_get_setting('tutor'.$i.'description',true);
									$tutorurl = theme_usac_get_setting('tutor'.$i.'url',true);
									/**/
									if($tutorname=="")
										$tutorname = $tutors_name[$i<=9?$i:($i-1-floor($i/9)*9)];;
									if($tutordescription=="")
										$tutordescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt";
									$nombres = explode(" ",$tutorname);
									if(sizeof($nombres)>2){
										$tutorname=$nombres[0]." ".$nombres[1];
									}
									if(strlen($tutorname)>15)
										$tutorname = mb_substr($tutorname, 0, 12)."...";
									if(strlen($tutordescription)>105)
										$tutordescription = mb_substr($tutordescription, 0, 105)."...";
									if($tutorurl=="")
										$tutorurl="#";
								?>
								<div class="item">
									<div class="tile">
										<div class="tutor_image">
											<img src="<?=$tutorimage?>" alt="" />
										</div>
										<div class="tutor_name">
											<h2><?=$tutorname?></h2>
										</div>
										<div class="tutor_text_desc">
											<?=$tutordescription?>
										</div>
										<div class="tutor_more">
											<?php if($tutorurl!=""){ ?>
											<a href="<?=$tutorurl?>"><img src="<?=($OUTPUT->image_url('/plus', 'theme'))?>" alt="" /></a>
											<?php } ?>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class='leftRs'>&nbsp;</div>
							<div class='rightRs'>&nbsp;</div>
						</div>
						<!-- ---------------------------------------------- -->
					</div>
				</div>
				<div class="span1" style="height:0px;">&nbsp;</div>
			</div>
		</div>
		<div class="container-fluid">
            <div class="row-fluid">
				<div class="span12">
					<div class="tutor_arrow">
						<div class="skyblue_arrow">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
    </section><!--/#tutor-->
	
<?php } ?>
<!-- End Tutors Section -->