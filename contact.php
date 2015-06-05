<?php 
	session_start();
	include('php/config.php');
	include('Vistas/head.php'); ?>
						<li><a href="index">Inicio</a></li>
						<li><a href="about">Acerca</a></li>
						<li><a href="servicios.php">Servicio</a></li>
						<li><a class="active" href="contact">Contacta</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
					<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="about-content">
		<div class="container">
			<!-- Contact -->
		<div class="contact">
					<div class="contact-head text-center">
						<h2>Contactanos</h2>
						<span>Nos gustaría conocer tus opiniones</span>
					</div>			
					<!-- contact-grids -->		
					<div class="contact-grids">
		<div class="contact-map">
			<iframe width="100%" height="185" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d941.6814246980887!2d-103.74958225393372!3d19.250782747950037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1425766167147"></iframe><br><small><a href="https://goo.gl/maps/oGp5B">View Larger Map</a></small>
		</div>
		<!----- contact-form ------>
						<div class="contact-form">
							<form>
								<div class="contact-form-row">
									<div>
										<span>Nombre :</span>
										<input type="text" class="text" value="Tu nombre aquí" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu nombre aquí';}">
									</div>
									<div>
										<span>Email :</span>
										<input type="text" class="text" value="Tu email aquí" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tu email aquí';}">
									</div>
									<div>
										<span>Asunto :</span>
										<input type="text" class="text" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Asunto';}">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
								<div class="contact-form-row2">
									<span>Mensaje :</span>
									<textarea> </textarea>
								</div>
								<input type="submit" value="send">
							</form>
						</div>
						<!----- contact-form ------>
					</div>
					<!----- contact-grids ----->
					</div>
					<!----- contact-grids ----->
			</div>
		<!-- /Contact -->
		</div>
	</div>
    </div>
	<?php include('Vistas/foot.php'); ?>