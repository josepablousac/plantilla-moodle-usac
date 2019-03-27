<?php if($displayaboutussection) { ?>
	<section id="about" >
		<div class="container-fluid">
			<div class="center">
				<div class="heading">
                    <?php if($aboutusheading) { ?>
					<div class="about_title">
						<h2><?php echo $aboutusheading ?></h2>
						<div class="about_line_title">&nbsp;</div>
					</div>
                    <?php } ?>
				</div>
			</div>
		</div> 
		<div class="container-fluid">
            <div class="row-fluid justify-content-center">
				<div class="span1" style="height:0px;">&nbsp;</div>
				<div class="span10">
					<div class="about_content"><?php
						$tab=1;
						if($aboutus2heading!=""){
							$tab++;
							if($aboutus3heading!=""){
								$tab++;
							}
						}
						$tab_size="about_title_size_".$tab;
						?><div class="about_title selected_about_title <?=$tab_size?>" id="about_title_1">
							<?=$aboutus1heading?>
						</div>
						<?php if($aboutus2heading!=""){ ?>
						<div class="about_title <?=$tab_size?>" id="about_title_2">
							<?=$aboutus2heading?>
						</div>
						<?php if($aboutus3heading!=""){ ?>
						<div class="about_title <?=$tab_size?>" id="about_title_3">
							<?=$aboutus3heading?>
						</div>
						<?php } } ?>
						<div class="clear">&nbsp;</div>
						<div class="about_text about_title_1">
							<?=$aboutus1description?>
						</div>
						<?php if($aboutus2heading!=""){ ?>
						<div class="about_text about_title_2">
							<?=$aboutus2description?>
						</div>
						<?php if($aboutus3heading!=""){ ?>
						<div class="about_text about_title_3">
							<?=$aboutus3description?>
						</div>
						<?php } } ?>
					</div>
				</div>
				<div class="span1" style="height:0px;">&nbsp;</div>
			</div>
		</div>
		<div class="container-fluid">
            <div class="row-fluid">
				<div class="span12">
					<div class="about_arrow">
						<div class="blue_arrow">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
    </section><!--/#about-->
<?php } ?>