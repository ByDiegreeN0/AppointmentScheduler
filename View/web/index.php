<?php

require_once('../../Model/Models/Categorias.php');

$categorias = new categorias;
$categorias = $categorias->GetCategoria();

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CWEB||SPA</title>

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include_once('includes/header.php'); ?>
	<!-- END nav -->

	<section id="home-section" class="hero" style="background-image: url(images/bg.jpg);" data-stellar-background-ratio="0.5">
		<div class="home-slider owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<img class="one-third align-self-end order-md-last img-fluid" src="images/bg_1.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text mt-5">
								<span class="subheading">SPA ConfiguroWeb</span>
								<h1 class="mb-4">Ponte Bella</h1>
								<p class="mb-4">Nos enorgullecemos de nuestro trabajo de alta calidad y atención al detalle. Los productos que utilizamos son de marca de primera calidad.</p>


							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third align-self-end order-md-last img-fluid" src="images/bg_2.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text mt-5">
								<span class="subheading">Belleza Natural</span>
								<h1 class="mb-4">Salon de Belleza ConfiguroWeb</h1>
								<p class="mb-4">Este salón ofrece enormes instalaciones con equipos de tecnología avanzada y un servicio de la mejor calidad. Aquí le ofrecemos el mejor tratamiento que nunca haya experimentado antes.</p>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<br>
	<section class="ftco-section ftco-no-pt ftco-booking">
		<div class="container-fluid px-0">
			<div class="row no-gutters d-md-flex justify-content-end">
				<div class="one-forth d-flex align-items-end">
					<div class="text">
						<div class="overlay"></div>
						<div class="appointment-wrap">
							<span class="subheading">Reservaciones</span>
							<h3 class="mb-2">Haga una cita</h3>
							<form action="../../Controller/CRUD/user-create-cita.php" method="post" class="appointment-form">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
										</div>
									</div>

									<div class="col-sm-12">
										<div class="form-group">
											<input type="email" class="form-control" id="appointment_email" placeholder="Correo" name="email" required="true">
										</div>
									</div>

									<div class="col-sm-12">
										<div class="form-group">
											<div class="select-wrap">
												<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="categoria" id="services" required="true" class="form-control">
													<option value="">Selecciona Nuestros Servicios</option>

													<?php if ($categorias) {
														foreach ($categorias as $categoria) { ?>
															<option value="<?php echo $categoria['categoria_id']; ?>"><?php echo $categoria['categoria_name']; ?></option>
													<?php }
													} ?>

												</select>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control appointment_date" placeholder="Fecha" name="date" id='adate' required="true">
										</div>
									</div>

									<div class="col-sm-12">
										<div class="form-group">
											<input type="text" class="form-control" id="phone" name="tel" placeholder="Teléfono" required="true" maxlength="10" pattern="[0-9]+">
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="HAZ UNA CITA" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="one-third">
					<div class="img" style="background-image: url(images/bg-1.jpg);">
					</div>
				</div>
			</div>
		</div>
	</section>


	<br>


	<?php include_once('includes/footer.php');?>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

	<div class="col-sm-12">
    <div class="form-group">
        <input type="text" class="form-control appointment_date" placeholder="Fecha" name="date" id='adate' required="true">
    </div>
</div>

<script>
    // Selecciona el elemento input con la clase "appointment_date"
    var dateInput = document.querySelector('.appointment_date');

    // Agrega un event listener para el evento "blur" (cuando el input pierde el enfoque)
    dateInput.addEventListener('blur', function() {
        // Reemplaza todas las barras ("/") con guiones ("-")
        dateInput.value = dateInput.value.replace(/\//g, '-');
    });
</script>


</body>

</html>