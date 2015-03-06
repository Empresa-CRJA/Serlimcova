<?php include('../php/config.php');include('../Vistas/head.php'); ?>
						<li><a href="../index">Inicio</a></li>
						<li><a href="../about">Acerca</a></li>
						<li><a href="../servicios.php">Servicios</a></li>
						<li><a href="../contact">Contacta</a></li>
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
			<div class="error-404 text-center">
			<h2>401</h2>
				<p>Ups, se requiere autorización</p>
				<a class="b-home" href="../index">Regresa al inicio</a>
		</div>
		</div>
	</div>
<?php include('../Vistas/foot.php'); ?>