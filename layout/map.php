<?php  if ($displaymapsection) { ?>
	<div class="usac_send_email">
		<div class="usac_send_text">
			<div class="container-fluid">
				<div class="row-fluid justify-content-center">
					<div class="span12">
						<span id="usac_send_text_message">Enviando mensaje...</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="map" >
		<div class="usac_glass">&nbsp;</div>
		<div class="container-fluid">
			<div class="center">
				<div class="heading">
					<div class="map_title">
						<h2><?=$mapsectionheading?></h2>
						<div class="map_line_title">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
		<div class="map_scroll">
			<div class="container-fluid">
				<div class="row-fluid justify-content-center">
					<div class="span1" style="height:0px;overflow:hidden;">&nbsp;</div>
					<div class="span5">
						<div class="map_content">
							<div class="map_image">
								<iframe src="<?=$mapsectioniframe?>" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="map_content">
							<script src='https://www.google.com/recaptcha/api.js'></script>
							<form id="submit_map" action="<?=$CFG->wwwroot?>/theme/usac/corefiles/email_submit.php" method="post">
								<input type="text" name="nombre" placeholder="Nombre completo*" value="" />
								<span class="map_error nombre_error">Nombre incorrecto, por favor utiliza solo letras y espacios.</span>
								<input type="text" name="correo" placeholder="Correo electrónico*" value="" />
								<span class="map_error correo_error">Formato de correo incorrecto.</span>
								<textarea name="mensaje" placeholder="Mensaje*"></textarea>
								<span class="map_error mensaje_error">Mensaje con errores, por favor utiliza solo letras, números, espacios, guiones, puntos, comas, arrobas, dos puntos, diagonales y paréntesis.<br/></span>
								<div class="g-recaptcha" data-sitekey="<?=$mapsectiongooglepublickey?>" data-callback="google_captcha"></div>
								<span class="map_error captcha_error">Comprueba que no eres un robot.<br/></span>
								* Campo obligatorio<br/>
								<div class="form_submit">
									<input type="button" name="enviar" value="Enviar" />
								</div>
							</form>
						</div>
					</div>
					<div class="span1" style="height:0px;overflow:hidden;">&nbsp;</div>
				</div>
				<div class="row-fluid justify-content-center">
					<div class="span1" style="height:0px;overflow:hidden;">&nbsp;</div>
					<div class="span10">
						<div class="map_content map_address">
							<img src="<?=$OUTPUT->image_url('/location', 'theme');?>" alt="" /> <?=$mapsectionaddress1?>
							<?=$mapsectionaddress2!=""?" | ".$mapsectionaddress2:""?>
							<?=$mapsectionaddress3!=""?"<br/>".$mapsectionaddress3:""?>
						</div>
					</div>
					<div class="span1" style="height:0px;overflow:hidden;">&nbsp;</div>
				</div>
				<div class="row-fluid justify-content-center">
					<div class="span1" style="height:0px;overflow:hidden;">&nbsp;</div>
					<div class="span5">
						<div class="map_content map_phone">
							<img src="<?=$OUTPUT->image_url('/phone', 'theme');?>" alt="" /> <?=$mapsectionphone?>
						</div>
					</div>
					<div class="span5">
						<div class="map_content map_email">
							<img src="<?=$OUTPUT->image_url('/email', 'theme');?>" alt="" /> <?=$mapsectionemail?>
						</div>
					</div>
					<div class="span1" style="height:0px;overflow:hidden;">&nbsp;</div>
				</div>
			</div>
		</div>
    </section>
<?php } ?>