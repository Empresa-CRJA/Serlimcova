<?php include('php/config.php');include('Vistas/head.php'); ?>
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
						<!--<div class="contact-map">
							<iframe width="100%" height="185" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#8C8061;text-align:left;font-size:1em">View Larger Map</a></small>
						</div>-->
						<!-- contact-form -->
						<div class="contact-form">
							<form>
								<div class="contact-form-row">
									<div>
										<span>Nombre :</span>
										<input type="text" class="text" value="Tu nombre aquí" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}">
									</div>
									<div>
										<span>Email :</span>
										<input type="text" class="text" value="Tu Email aquí" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}">
									</div>
									<div>
										<span>Asunto :</span>
										<input type="text" class="text" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
								<div class="contact-form-row2">
									<span>Mensaje :</span>
									<textarea> </textarea>
								</div>
								<input type="submit" value="Enviar">
							</form>
						</div>
						<!----- contact-form ------>
					</div>
					<!----- contact-grids ----->
			</div>
		<!-- /Contact -->
		</div>
	</div>
    </div>
	<?php include('Vistas/foot.php'); ?>