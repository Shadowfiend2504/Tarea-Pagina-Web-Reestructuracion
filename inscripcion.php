<!DOCTYPE HTML>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115832863-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());
		gtag('config', 'UA-115832863-2');
	</script>

	<title>Inscríbete</title>
	<link rel="icon" type="images/vnd.microsoft.icon" href="images/artecuida2020.ico">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="C:/Users/Vargas Cardenas/Desktop/Lucano tarea/main.css" />

	<!-- Meta Tags -->
	<meta property="og:title" content="El arte te cuida, cuidemos el arte">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="es_CO">
	<meta name="keywords" content="teatro online, cuentero online, musica online, oncierto online, generar dinero con el arte, ayudar con el arte">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@artecuida2020">
	<meta name="twitter:title" content="#artecuida2020">
	<meta name="twitter:description" content="El arte te cuida, cuidemos el arte">
	<meta name="twitter:image:alt" content="#artecuida2020">
	<meta name="description" content="Teatro online, cuentero online, musica online, arte online. Creemos en el valor y el poder de transformación que tiene el arte y la cultura, encontrar soluciones sostenibles y creativas para mejorar la vida de los artistas y la sociedad.">
	<meta name="author" content="Oficina de sueños - LT">
	<meta name="copyright" content="Oficina de sueños - LT">
	<meta name="robots" content="ALL">

	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<header id="header" style="text-align:left;">
			<a href="index.php" class="logo" style="text-align:left;">Volver</a>
		</header>

		<!-- Navigation -->
		<nav id="nav">
			<ul class="links">
				<li><a href="index.php">Agenda</a></li>
			</ul>
			<ul class="icons">
				<li><a href="https://twitter.com/artecuida2020" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.facebook.com/artecuida2020" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
				<li><a href="https://www.instagram.com/artecuida2020" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
				<li><a href="https://chat.whatsapp.com/E6bMDKhT5oSLXOFZIY0lZh" class="icon brands alt fa-whatsapp" target="_blank"><span class="label">WhatsApp</span></a></li>
			</ul>
		</nav>

		<!-- Main Content -->
		<div id="main">
			<section class="main">
				<?php
				function filtrado($datos) {
					$datos = trim($datos);
					$datos = stripslashes($datos);
					$datos = htmlspecialchars($datos);
					$datos = str_replace("`", "´", $datos);
					$datos = str_replace("'", "-", $datos);
					return $datos;
				}

				if ($_POST) {
					// Initialize variables
					$practica = $tipo_actividad = $nombre_actividad = $nombre_artista = $enlace_actividad = $institucion_responsable = "";
					$trata_de = $tiempo_actividad = $desde = $tdesde = $hasta = $thasta = $dias = $fecha_actividad_inscripcion = "";
					$tfecha_actividad_inscripcion = $correo_inscripcion = $duracion = $nacionalidad = $pais_transmision = $sitio_web = "";
					$facebook = $twitter = $instagram = $youtube = $publico = $otro2 = $subir_archivo = "";
					$nombre_apellido = $mail = $institucion = "";

					// Set timezone
					date_default_timezone_set("America/Bogota");

					// Data processing
					$practica = filtrado(implode("; ", $_POST['practica']));
					$practica = str_replace('Otro', filtrado($_POST['practica12']), $practica);
					if ($practica == "") {
						$errores[] = "Debe seleccionar al menos una práctica";
					}

					$tipo_actividad = filtrado(implode("; ", $_POST['tipo_actividad']));
					if ($tipo_actividad == "") {
						$errores[] = "Debe seleccionar al menos un tipo de actividad";
					}

					$nombre_actividad = filtrado($_POST['nombre_actividad']);
					if ($nombre_actividad == "") {
						$errores[] = "Debe indicar un nombre para la actividad";
					}

					$nombre_artista = filtrado($_POST['nombre_artista']);
					if ($nombre_artista == "") {
						$errores[] = "Debe indicar un nombre de artista";
					}

					$enlace_actividad = filtrado($_POST['enlace_actividad']);
					if ($enlace_actividad == "") {
						$errores[] = "Dirección del enlace de la actividad obligatoria";
					}

					$institucion_responsable = filtrado($_POST['institucion_responsable']);
					if ($institucion_responsable == "") {
						$errores[] = "Debe indicar una institución responsable";
					}

					$trata_de = filtrado($_POST['trata_de']);
					if ($trata_de == "") {
						$errores[] = "Debe indicar una descripción de la actividad";
					}

					// Display errors if any
					if (isset($errores)) {
						echo '<h1 style="text-align:center; color:red;">Corrige los errores y envía nuevamente</h1>';
						echo '<p style="color:red; text-align:left;">' . implode('<br />', $errores) . '</p>';
					} else {
						// Successful processing
						$fecha_montada = date('Y/m/d h:i:s', time());
						include_once("assets/php/db_connect.php");
						$sql = "INSERT INTO db_9mvxtsygkk.agenda (...) VALUES (...)";
						if ($conn->query($sql) === TRUE) {
							echo '<h2 style="color:green; text-align:center;">Tu evento fue cargado exitosamente...</h2>';
						} else {
							echo '<h2 style="color:red;">Ocurrió un error. Inténtalo de nuevo...</h2>';
						}
						$conn->close();
					}
				}
				?>

				<header>
					<h3 style="text-align:center;">¿Quieres hacer parte de la agenda?</h3>
				</header>
				<h4 style="text-align:center;">
					Si quieres programar llena el formulario. En cuanto verifiquemos la información tu evento será publicado
				</h4>

				<!-- Form -->
				<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<center>
						<img alt="" style="border:0; width:100%; max-width:618px;" src="https://suenos.in/artecuida2020/formulario/imagen.jpg" />
					</center>
					<div>
						<p style="text-align:center;">
							<span style="font-family: comic sans ms, sans-serif; font-size: 24pt;">Formulario de inscripción de actividades/eventos</span>
						</p>
						<p style="text-align: left;">
							Únete a la primera plataforma virtual para visibilizar la labor de artistas e instituciones latinoamericanas en tiempos de pandemia. <br />
							Para responder a los retos actuales, somos puente y espacio de encuentro entre los artistas y la sociedad. Inscribe tu actividad o evento en el formulario y forma parte de nuestra agenda. Cualquier inquietud escríbenos 
							<a href="mailto:artecuida2020@suenos.in" rel="nofollow">artecuida2020@suenos.in</a><br />
							<span class="requerido">* Campos obligatorios</span>
						</p>
					</div>

					<?php 
						include 'formulario_inscripcion.php'; 
						include 'campos_principales.php'; 
						include 'disponibilidad_actividad.php'; 
						include 'duracion_detalles.php'; 
						include 'publico_objetivo.php'; 
						include 'imagen_promocional.php'; 
						include 'datos_registrante.php'; 
						include 'opciones_publicacion.php'; 
						include 'boton_envio.php'; 
						include 'redes_sociales.php'; 
						include 'footer.php'; 
					?>
				</form>
			</section>
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<ul>
				<li>&copy; @artecuida2020</li>
				<li>Design: <span>oficina de suenos/LT</span></li>
			</ul>
		</div>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="scripts.js"></script>
</body>
</html>
