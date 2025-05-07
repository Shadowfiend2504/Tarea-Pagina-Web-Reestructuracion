<!DOCTYPE HTML>
<!--
	página html con css para artecuida2020
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115832863-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-115832863-2');
		</script>
	
		<title>Inscríbete</title>
		<link rel="icon" type="images/vnd.microsoft.icon" href="images/artecuida2020.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

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
		<META NAME="robots" content="ALL">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" style="text-align:left;">
						<a href="index.php" class="logo" style="text-align:left;">Volver</a>
					</header>

				<!-- Nav -->
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

				<!-- Main -->
					<div id="main">
				<!-- Post -->
						<section class="main">
							<?php
								function filtrado($datos)
								{
									$datos = trim($datos); // Elimina espacios antes y después de los datos
									$datos = stripslashes($datos); // Elimina backslashes \
									$datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
									$datos = str_replace("`","´", $datos);
									$datos = str_replace("'","-", $datos);
									return $datos;
								}
								if($_POST)
								{
									//Reiniciamos todas las variables
									$practica = $tipo_actividad = $nombre_actividad = $nombre_artista = $enlace_actividad = $institucion_responsable = "";
									$trata_de = $tiempo_actividad = $desde = $tdesde = $hasta = $thasta = $dias = $fecha_actividad_inscripcion = "";
									$tfecha_actividad_inscripcion = $correo_inscripcion = $duracion = $nacionalidad = $pais_transmision = $sitio_web = "";
									$facebook = $twitter = $instagram = $youtube = $publico = $otro2 = $subir_archivo = "";
									$nombre_apellido = $mail = $institucion = $institucion= "";
									
									//Fijamos la hora Colombia
									date_default_timezone_set("America/Bogota");
									
									$practica = filtrado(implode("; ", $_POST[practica]));
									$practica = str_replace('Otro', filtrado($_POST[practica12]), $practica);
									if($practica=="")
									{
										$errores[] = ("Debe seleccionar al menos una práctica");
									}
									
									$tipo_actividad = filtrado(implode("; ", $_POST[tipo_actividad]));
									if($tipo_actividad=="")
									{
										$errores[] = ("Debe seleccionar al menos un tipo de actividad");
									}
									
									$nombre_actividad = filtrado($_POST[nombre_actividad]);
									if($nombre_actividad=="")
									{
										$errores[] = ("Debe indicar un nombre para la actividad");
									}
									
									$nombre_artista = filtrado($_POST[nombre_artista]);
									if($nombre_artista=="")
									{
										$errores[] = ("Debe indicar un nombre de artista");
									}
									
									$enlace_actividad = filtrado($_POST[enlace_actividad]);
									if ($enlace_actividad=="")
									{
										
										$errores[] = ("Dirección del enlace de la actividad obligatoria");
									}
									
					//				if (!filter_var($enlace_actividad, FILTER_VALIDATE_URL))
					//				{
					//					$errores[] = ("Dirección del enlace de la actividad no válida");
					//				}
									
									$institucion_responsable = filtrado($_POST[institucion_responsable]);
									if($institucion_responsable=="")
									{
										$errores[] = ("Debe indicar una institución responsable");
									}
									
									$trata_de = filtrado($_POST[trata_de]);
									if($trata_de=="")
									{
										$errores[] = ("Debe indicar una descripción de la actividad");
									}
									
									$desde = filtrado($_POST[desde]);
									$tdesde = filtrado($_POST[tdesde]);
									$hasta = filtrado($_POST[hasta]);
									$thasta = filtrado($_POST[thasta]);
									$dias = filtrado(implode("; ", $_POST[dias]));
									$fecha_actividad_inscripcion = filtrado($_POST[fecha_actividad_inscripcion]);
									$tfecha_actividad_inscripcion = filtrado($_POST[tfecha_actividad_inscripcion]);
									$correo_inscripcion = filtrado($_POST[correo_inscripcion]);
									$tiempo_actividad = $_POST[tiempo_actividad];
									
									if($tiempo_actividad=="Disponible permanente")
									{
										$desde = $tdesde = $hasta = $thasta = $dias = "";
										$fecha_actividad_inscripcion = $tfecha_actividad_inscripcion= $correo_inscripcion = "";
										$fecha_actual = date("Y-m-d H:i:s");
										$hasta = date("Y-m-d H:i:s",strtotime($fecha_actual."+ 6 month"));
									}
									if($tiempo_actividad=="En un rango de tiempo específico")
									{
										if($desde=="")
										{
											$errores[] = ("Usted seleccionó: En un rango de tiempo específico, debe colocar una fecha inicial");
										}
										if($tdesde=="")
										{
											$errores[] = ("Usted seleccionó: En un rango de tiempo específico, debe colocar una hora inicial");
										}
										if($hasta=="")
										{
											$errores[] = ("Usted seleccionó: En un rango de tiempo específico, debe colocar una fecha final");
										}
										if($thasta=="")
										{
											$errores[] = ("Usted seleccionó: En un rango de tiempo específico, debe colocar una hora final");
										}
										$fecha_actividad_inscripcion = $tfecha_actividad_inscripcion = $correo_inscripcion = "";
										$desde = $desde ." ". date('H:i:s', strtotime($tdesde));
					//					echo '<script>alert("desde '.$desde.'")</script>';
										$hasta = $hasta ." ". date('H:i:s', strtotime($thasta));
					//					echo '<script>alert("hasta formateado '.$hasta.'")</script>';
										if($dias=="")
										{
											$errores[] = ("Usted seleccionó: En un rango de tiempo específico, debe seleccionar los días en que estará disponible la actividad");
										}
									}
									if($tiempo_actividad=="Con previa inscripción")
									{
										if($fecha_actividad_inscripcion=="")
										{
											$errores[] = ("Usted seleccionó: Con previa inscripción, debe colocar la fecha de la actividad");
										}
										if($tfecha_actividad_inscripcion=="")
										{
											$errores[] = ("Usted seleccionó: Con previa inscripción, debe colocar la hora de la actividad");
										}
										if($correo_inscripcion=="")
										{
											$errores[] = ("Usted seleccionó: Con previa inscripción, debe colocar cómo se inscriben");
										}
										$desde = $tdesde = $hasta = $thasta = $dias = "";
										$fecha_actividad_inscripcion = $fecha_actividad_inscripcion ." ". date('H:i:s.u', strtotime($tfecha_actividad_inscripcion));
										$hasta = $fecha_actividad_inscripcion;
					//					echo '<script>alert("el día '.$fecha_actividad_inscripcion.'")</script>';
									}
									$duracion = filtrado($_POST[duracion]);
									$nacionalidad = filtrado($_POST[nacionalidad]);
									$pais_transmision = filtrado($_POST[pais_transmision]);
									$sitio_web = filtrado($_POST[sitio_web]);
									$facebook = filtrado($_POST[facebook]);
									$twitter = filtrado($_POST[twitter]);
									$instagram = filtrado($_POST[instagram]);
									$youtube = filtrado($_POST[youtube]);
									$publico = filtrado($_POST[publico]);
									$nombre_apellido = filtrado($_POST[nombre_apellido]);
									$mail = filtrado($_POST[mail]);
									$institucion = filtrado($_POST[institucion]);
									$publicar = filtrado($_POST[publicar]);
									if ($nacionalidad=="")
									{
										$errores[] = ("La nacionalidad es obligatoria");
									}
									if ($sitio_web=="")
									{
										$errores[] = ("Dirección del sitio web obligatoria");
									}
					//				if(!filter_var($_POST[sitio_web], FILTER_VALIDATE_URL))
					//				{
					//					$errores[] = ("Dirección del sitio web incorrecta");
					//				}
									
									$publico = str_replace('Otro', filtrado($_POST[publico2]), $publico);
									
									if ($publico=="")
									{
										$errores[] = ("Debe seleccionar el público objetivo");
									}
									
									if ($nombre_apellido=="")
									{
										$errores[] = ("Debe escribir el nombre y apellido de quien sube la información");
									}
									
									if ($mail=="")
									{
										$errores[] = ("Debe escribir una dirección electrónica de quien sube la información");
									}
									if(!filter_var($_POST[mail], FILTER_VALIDATE_EMAIL))
									{
										$errores[] = ("Formato de mail no válido");
									}
									
									//subir archivo
									
									//si hubo errores detenga y muestrelos
									if(isset($errores))
									{
										echo '<h1 style="text-align:center; color:red;">Corrige los errores y envía nuevamente</h1>';
										//$errore = implode(",\n", $errores);
										//echo '<script language="javascript">alert("'.implode(",\n", $errores).'");</script>';
										echo '<p style="color:red; text-align:left;">'.implode('<br />', $errores).'</p>';
									}
									//si no hubo errores actualice la base de datos
									else
									{
										$fecha_montada = date('Y/m/d h:i:s', time());
										//Subimos el archivo
										//Directorio donde se guarda
										$directorio = 'imagesagenda/';
										$extension=$_FILES['subir_archivo'][type];
										$pasa=true;
										
										//Verifica si el formato es una imagen
										if (substr($extension,0,6)=="image/")
										{
											$extension=str_replace("image/", "", $extension);
										}
										else
										{
											$extension=str_replace("image/", "", $extension);
											$pasa=false;
										}
										//dirección completa de alojamiento con nombre de archivo asignado para cada usuario
										//crea el nombre de archivo y le asigna la extension
										$nombre_archivo= time().substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 4).".";
										$completo = $nombre_archivo.$extension;
										$dsubir_archivo = $directorio.basename($completo);
										//si no tiene errores de formato o tamaño inicia la subida
										if ($pasa==true)
										{
											//con move_uploaded_file se sube el archivo al lugar y nombre señalados
											if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $dsubir_archivo))
												{
												} 
											//error en la subida
												else {
												  $errores[] = ("La subida ha fallado, intentelo de nuevo");
												}
										}
										else
										{
											if ($extension=="")
											{
												$errores[] = ("El archivo excede el límite de 200k");
											}
											else
											{
												$errores[] = ("Tipo de archivo no valido, intente nuevamente");
											}
										}
										include_once("assets/php/db_connect.php");
										$sql="INSERT INTO db_9mvxtsygkk.agenda (id, fecha_montada, practica, tipo_actividad, nombre_actividad, nombre_artista, enlace_actividad, institucion_responsable, trata_de, tiempo_actividad, desde, hasta, dias, fecha_actividad_inscripcion, correo_inscripcion, duracion, nacionalidad, pais_transmision, sitio_web, facebook, instagram, youtube, twitter, publico, imagen_promo, nombre_apellido, mail, institucion, publicar) VALUES ('0', '$fecha_montada','$practica', '$tipo_actividad', '$nombre_actividad', '$nombre_artista', '$enlace_actividad', '$institucion_responsable', '$trata_de', '$tiempo_actividad','$desde', '$hasta', '$dias', '$fecha_actividad_inscripcion', '$correo_inscripcion', '$duracion', '$nacionalidad', '$pais_transmision', '$sitio_web', '$facebook', '$instagram', '$youtube', '$twitter', '$publico', '$dsubir_archivo', '$nombre_apellido', '$mail', '$institucion', '$publicar')";
										$sql = str_replace("''","NULL", $sql);
					//					echo $sql.$dsubir_archivo;
										if ($conn->query($sql) === TRUE)
										{
											echo '<h2 style="color:green; text-align:center;">Tu evento fue cargado exitosamente. En cuanto verifiquemos la información será publicado<br />
											Si deseas hacer algún cambio al registro escríbanos a artecuida2020@suenos.org<br />
											con asunto: Error en inscripción, y en el cuerpo explícanos el error para solucionarlo</h2>
											<h3 style="color:green; text-align:center;">Si deseas subir otro evento diligencia nuevamente el formulario</h3>';
										} 
										else
										{
											echo '<h2 style="color:red;">Ocurrió un error. Inténtalo de nuevo o envíanos el evento al correo artecuida2020@suenos.in con asunto PARA AGENDA. Lamentamos los inconvenientes</h2>';
										}
										$conn->close();
									}
								}
							?>
							<header><h3 style="text-align:center;">¿Quieres hacer parte de la agenda?</h3></header>
							<h4 style="text-align:center;">
							Si quieres programar llena el formulario. En cuanto verifiquemos la información tu evento será publicado
							</h4>
							<style>
								.requerido {
									font-size: 10pt; 
									color: red;
								}
								.divform {
									border-left:solid 2px;
								}
								.titulo {
									padding-top:20px;
									font-size:15px;
									font-weight:bold;
									font-family: "Source Sans Pro", Helvetica, sans-serif;
									text-transform:none;
								}
							</style
						<!--ojo revisar antihack-->
							<!--<form action="assets/php/subiragenda.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" name="formulario1">
							-->
							<form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
								<center><img alt="" style="border:0; width:100%; max-width:618px;" src="https://suenos.in/artecuida2020/formulario/imagen.jpg" /></center>
							  <div>
								<p style="text-align:center;"><span style="font-family: comic sans ms, sans-serif; font-size: 24pt;">Formulario de inscripción de actividades/eventos</span></p>
								<p style="text-align: left;">Únete a la primera plataforma virtual para visibilizar la labor de artistas e instituciones latinoamericanas en tiempos de pandemia. <br />Para responder a los retos actuales, somos puente y espacio de encuentro entre los artistas y la sociedad. Inscribe tu actividad o evento en el formulario y forma parte de nuestra agenda. Cualquier inquietud escríbenos <a href="mailto:artecuida2020@suenos.in" rel="nofollow"> artecuida2020@suenos.in</a><br /><span class="requerido">* Campos obligatorios</span></p>
							  </div>
							  
								<div class="row">
									<div class="col-6 col-12-small titulo">
										<p class="titulo" style="padding:0;">
											Práctica cultural, artística o recreativa<span class="requerido">*</span>
										</p>
										<span id="practica_error" class="requerido" style="display:none;">Seleccione al menos una práctica</span>
										<ul style="list-style:none">
											<li><input type="checkbox" id="practica1" name="practica[]" value="Artes plásticas y visuales">
												<label for="practica1">Artes plásticas y visuales</label></li>
											<li><input type="checkbox" id="practica2" name="practica[]" value="Danza">
												<label for="practica2">Danza</label></li>
											<li><input type="checkbox" id="practica3" name="practica[]" value="Literatura">
												<label for="practica3">Literatura</label></li>
											<li><input type="checkbox" id="practica4" name="practica[]" value="Música">
												<label for="practica4">Música</label></li>
											<li><input type="checkbox" id="practica5" name="practica[]" value="Arte dramático">
												<label for="practica5">Arte dramático</label></li>
											<li><input type="checkbox" id="practica6" name="practica[]" value="Audiovisuales">
												<label for="practica6">Audiovisuales</label></li>
											<li><input type="checkbox" id="practica7" name="practica[]" value="Gastronomía">
												<label for="practica7">Gastronomía</label></li>
											<li><input type="checkbox" id="practica8" name="practica[]" value="Diseño">
												<label for="practica8">Diseño</label></li>
											<li><input type="checkbox" id="practica9" name="practica[]" value="Manualidades&#47artesanías">
												<label for="practica9">Manualidades/artesanías</label></li>
											<li><input type="checkbox" id="practica10" name="practica[]" value="Recreación">
												<label for="practica10">Recreación</label></li>
											<li><input type="checkbox" id="practica11" name="practica[]"  value="Otro" onclick="$('#cual').prop('value', ''); $('#cual').fadeToggle();">
											<label for="practica11">Otro</label>
											<input maxlength="30" size="30" type="text" id="cual" name="practica12"  style="display:none;" placeholder="Separe con punto y coma(;)"></li>
										</ul>
										<p class="titulo" style="padding:0;">
											Tipo de actividad<span class="requerido">*</span>
										</p>
										<span id="tip_error" class="requerido" style="display:none;">Seleccione al menos un tipo de actividad</span>
										<ul style="list-style:none">
											<li><input type="checkbox" id="tipo_actividad1" name="tipo_actividad[]" value="Formación">
												<label for="tipo_actividad1">Formación</label></li>
											<li><input type="checkbox" id="tipo_actividad2" name="tipo_actividad[]" value="Circulación">
												<label for="tipo_actividad2">Circulación</label></li>
											<li><input type="checkbox" id="tipo_actividad3" name="tipo_actividad[]" value="Convocatoria">
												<label for="tipo_actividad3">Convocatoria</label></li>
											<li><input type="checkbox" id="tipo_actividad4" name="tipo_actividad[]" value="Investigación">
												<label for="tipo_actividad4">Investigación</label></li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<ul style="list-style:none">
											<li><label for="nombre_actividad" class="titulo">Nombre de la actividad<span class="requerido">*</span></label>
												<input size="30" type="text" id="nombre_actividad" name="nombre_actividad" maxlength="200" 
												style="margin-top:0;" placeholder="Nombre de la presentación tal y como se publicará" required>
											</li>
											<li><label for="nombre_artista" class="titulo">Nombre artista/agrupación<span class="requerido">*</span></label>
												<input size="30" type="text" id="nombre_artista" name="nombre_artista" maxlength="200" 
												style="margin-top:0;" placeholder="Por favor ponga el nombre para publicar" required>
											</li>
											<li><label for="enlace_actividad" class="col-6 col-12-small titulo">Enlace a la actividad / evento<span class="requerido">*</span></label>
												<input type="text" size="30" id="enlace_actividad" name="enlace_actividad" maxlength="500" placeholder="ej: http://www.youtube.com/watch?v=rxpTjcouaeQ" required>
												<p style="font-size:12px; font-weight:normal; line-height:20px;">Al publicar el enlace acepta la responsabilidad sobre la propiedad de los derechos de reproducción del contenido. Es decir son suyos o tiene autorización o conocimiento de que pueden publicarse libremente</p>
											</li>
											<li><label for="institucion_responsable">Institución responsable de la transmisión digital de la actividad / evento<span class="requerido">*</span></label>
												<input type="text" size="30" id="institucion_responsable" name="institucion_responsable" maxlength="200" required>
											</li>
											<li><label style="margin-top:30px;" for="trata_de">Explique brevemente de que trata la actividad en máximo 600 caracteres.<span class="requerido">*</span></label>
												<textarea id="trata_de" name="trata_de" maxlength="600" placeholder="Máximo 600 caracteres" rows="8" style="width:100%; line-height:21px;" onkeyup="countChars(this);" required></textarea><span id="cuantos_va">Van 0 de 600 máximo</span>
											</li>
										</ul>
									</div>
									<div class="col-12" style="border-top:1px solid">
										<p class="titulo" style="padding:0;">
											¿Cuándo estará disponible la actividad?
										</p>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="Disponible_permanente" name="tiempo_actividad" value="Disponible permanente" onclick="
										$('#fecha_c1').fadeOut(1000);
										$('#fecha_c2').fadeOut(1100);
										$('#fecha_c3').fadeOut(1200);
										$('#cita_c1').fadeOut(1000);
										$('#cita_c2').fadeOut(1100);
										$('#desde').prop('value', '');
										$('#hasta').prop('value', '');
										$('#dias').prop('value', '');
										$('#fecha_actividad_inscripcion').prop('value', '');
										$('#correo_inscripcion').prop('value', '');
										"
										checked>
										<label for="Disponible_permanente">Disponible permanente</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="En_rango_tiempo" name="tiempo_actividad" value="En un rango de tiempo específico" onclick="
										$('#fecha_c1').fadeIn(600);
										$('#fecha_c2').fadeIn(1000);
										$('#fecha_c3').fadeIn(1400);
										$('#cita_c1').hide();
										$('#cita_c2').hide();
										$('#desde').prop('value', '');
										$('#hasta').prop('value', '');
										$('#dias').prop('value', '');
										$('#fecha_actividad_inscripcion').prop('value', '');
										$('#correo_inscripcion').prop('value', '');
										">
										<label for="En_rango_tiempo">En un rango de tiempo específico</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="Con_previa_inscripción" name="tiempo_actividad" value="Con previa inscripción" onclick="
										$('#fecha_c1').hide();
										$('#fecha_c2').hide();
										$('#fecha_c2').required='false';
										$('#fecha_c3').hide();
										$('#fecha_c3').required='false';
										$('#cita_c1').fadeIn(800);
										$('#cita_c2').fadeIn(1200);
										$('#desde').prop('value', '');
										$('#hasta').prop('value', '');
										$('#dias').prop('value', '');
										$('#fecha_actividad_inscripcion').prop('value', '');
										$('#correo_inscripcion').prop('value', '');
										">
										<label for="Con_previa_inscripción">Con previa inscripción</label>
									</div>
									
									<div id="fecha_c1" class="col-4 col-12-small" style="display:none; margin-top:40px;">
										<label for="desde">Fecha inicial<span class="requerido">*</span></label>
										<input type="date" id="desde" name="desde" 
										onchange="$('#hasta').prop('value', $('#desde').prop('value'));
										$('#hasta').prop('min', $('#desde').prop('value'));" >
										
										<label for="tdesde">Hora inicial<span class="requerido">*</span></label>
										<input type="time" id="tdesde" name="tdesde">
										
										
									</div>
									
									<div id="fecha_c2" class="col-4 col-12-small" style="display:none; margin-top:40px;">
										<label for="hasta">Fecha final<span class="requerido">*</span></label>
										<input type="date" id="hasta" name="hasta" >
										
										<label for="thasta">Hora final<span class="requerido">*</span></label>
										<input type="time" id="thasta" name="thasta" >
									</div>
									
									<div id="fecha_c3" class="col-4 col-12-small" style="display:none;">
										<label for="dias">En estos días<span class="requerido">*</span></label>
										<ul style="list-style:none">
											<li><input type="checkbox" id="Lunes" name="dias[]" value="Lunes" checked>
												<label for="Lunes">Lunes</label></li>
											<li><input type="checkbox" id="Martes" name="dias[]" value="Martes" checked>
												<label for="Martes">Martes</label></li>
											<li><input type="checkbox" id="Miércoles" name="dias[]" value="Miércoles" checked>
												<label for="Miércoles">Miércoles</label></li>
											<li><input type="checkbox" id="Jueves" name="dias[]" value="Jueves" checked>
												<label for="Jueves">Jueves</label></li>
											<li><input type="checkbox" id="Viernes" name="dias[]" value="Viernes" checked>
												<label for="Viernes">Viernes</label></li>
											<li><input type="checkbox" id="Sábado" name="dias[]" value="Sábado" checked>
												<label for="Sábado">Sábado</label></li>
											<li><input type="checkbox" id="Domingo" name="dias[]" value="Domingo" checked>
												<label for="Domingo">Domingo</label></li>
										</ul>
									</div>
									
									<div id="cita_c1" class="col-6 col-12-small" style="display:none;">
										<label for="fecha_actividad_inscripcion">Fecha de la actividad<span class="requerido">*</span></label>
										<input type="date" id="fecha_actividad_inscripcion" name="fecha_actividad_inscripcion" >
										
										<label for="tfecha_actividad_inscripcion">Hora de la actividad<span class="requerido">*</span></label>
										<input type="time" id="tfecha_actividad_inscripcion" name="tfecha_actividad_inscripcion" >
									</div>
									
									<div id="cita_c2" class="col-6 col-12-small" style="display:none;">
										<label for="correo_inscripcion">Url, correo o teléfono de inscripción<span class="requerido">*</span></label>
										<input type="text" size="30" maxlength="200" id="correo_inscripcion" name="correo_inscripcion" >
									</div>
									
									<div class="col-12" style="border-top:1px solid; margin-top:50px;">
									</div>
									
									<div class="col-6 col-12-small">
										<ul style="list-style:none">
											<li><label for="duracion" class="titulo">Duración de la actividad / evento en minutos<span class="requerido">*</span></label>
												<span id="muestre_duracion">10 minutos</span>
												<input type="range" id="duracion" name="duracion" style="margin-top:0; border:1px solid; width:90%" min="10" max="180" value="10" step="10" onchange="document.getElementById('muestre_duracion').innerHTML=this.value + ' minutos';">
											</li>
										
											<li><label for="nacionalidad" class="titulo">Nacionalidad del artista o de la agrupación<span class="requerido">*</span></label>
												<input size="30" type="text" id="nacionalidad" name="nacionalidad" maxlength="200" style="margin-top:0;" required>
											</li>
											<li><label for="pais_transmision" class="titulo">País sede de la institución desde donde se transmite la actividad o el evento</label>
												<input size="30" type="text" id="pais_transmision" name="pais_transmision" maxlength="200">
											</li>
											<li><label for="sitio_web" class="titulo">Web del artista / agrupación / institución<span class="requerido">*</span></label>
												<input size="30" maxlength="500" type="text" id="sitio_web" name="sitio_web" style="margin-top:0;" required>
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<span><strong>Redes sociales</strong></span>
										<ul style="list-style:none">
											<li><label for="facebook" class="titulo">Facebook</label>
												<input size="30" maxlength="200" type="text" id="facebook" name="facebook" style="margin-top:0;" >
											</li>
											<li><label for="twitter" class="titulo">Twitter</label>
												<input size="30" maxlength="200" type="text" id="twitter" name="twitter" style="margin-top:0;" >
											</li>
											<li><label for="instagram" class="titulo">Instagram</label>
												<input size="30" maxlength="200" type="text" id="instagram" name="instagram" style="margin-top:0;" >
											</li>
											<li><label for="youtube" class="titulo">YouTube</label>
												<input size="30" maxlength="200" type="text" id="youtube" name="youtube" style="margin-top:0;" >
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<span><strong>Público</strong></span>
										<ul style="list-style:none">
											<li>
												<input type="radio" id="Familiar" name="publico" value="Familiar" onclick="$('#cual2').fadeOut();" checked>
												<label for="Familiar">Familiar</label>
											</li>
											<li>
												<input type="radio" id="Adultos" name="publico" value="Adultos" onclick="$('#cual2').fadeOut();">
												<label for="Adultos">Adultos</label>
											</li>
											<li>
												<input type="radio" id="otro2" name="publico" value="Otro" onclick="$('#cual2').prop('value', ''); $('#cual2').fadeToggle();">
												<label for="otro2">Otro</label>
												<input maxlength="30" size="35" type="text" id="cual2" name="publico2" placeholder="Separe con punto y coma(;)" style="display:none;">
											</li>
										</ul>
									</div>
									<div class="col-6 col-12-small">
										<label for="subir_archivo" class="titulo">Imagen para promocionar la actividad<span class="requerido">*</span></label>
										<input name="subir_archivo" type="file" accept="image/*" required>
									</div>
									<div class="col-12" style="border-top:1px solid;">
										<span><strong>Datos de quien registra la actividad</strong></span>
										<ul style="list-style:none">
											<li>
												<label for="nombre_apellido" class="titulo">Nombres y apellidos<span class="requerido">*</span></label>
												<input size="30" type="text" id="nombre_apellido" name="nombre_apellido" maxlength="200" style="margin-top:0;" required>
												
											</li>
											<li>
												<label for="mail" class="titulo">Correo Electrónico<span class="requerido">*</span></label>
												<input size="30" type="email" id="mail" name="mail" maxlength="200" style="margin-top:0;" required>
												
											</li>
											<li>
												<label for="institucion" class="titulo">Institución  Organización (si aplica)</label>
												<input size="30" type="text" id="institucion" name="institucion" maxlength="200">
												
											</li>
										</ul>
									</div>
									<div id="desea_publicar" class="col-12" style="border-top:1px solid; display:none;">
										<span><strong>¿Desea Publicar?</strong></span>
										<ul style="list-style:none">
											<li>
												<input type="radio" id="si" name="publicar" value="Si">
												<label for="si">Si</label>
											</li>
											<li>
												<input type="radio" id="no" name="publicar" value="No" checked>
												<label for="no">No</label>
											</li>
										</ul>
									</div>
									<div id="desea_publicar2" class="col-12">
										<p style="text-align:center;"><span class="button large" onclick="test()">Enviar</span></p>
										<input id="boton_enviar" type="submit" class="button large" value="Enviar" style="display:none;">
									</div>
								</div>
							  <!-- Break -->
							</form>
						</section>
					</div>
				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>¿Tienes un comentario? <br />
								no dudes en dejarnos saberlo
							</h2>

							<form method="post" action="https://api.whatsapp.com/send?phone=numero&text=mensaje">
								<div class="fields">
									<div class="field">
										<label for="name">Nombre</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="telefono_cel">Número celular</label>
										<input type="text" name="celular" id="celular" />
									</div>
									<div class="field">
										<label for="message">Mensaje</label>
										<textarea name="mensaje" id="mensaje" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Enviar Mensaje"></li>
								</ul>
							</form>

						</section>
						<section class="split contact">
							<section>
								<h3>Teléfono</h3>
								<p><a name="teléfono">+57 300-8615056</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a name="correo">artecuida2020@suenos.in</a></p>
							</section>
							<section>
								<h3>Contactar WhatsApp</h3>
								<p><a href="https://chat.whatsapp.com/E6bMDKhT5oSLXOFZIY0lZh"><img src="images/WhatsApp.jpg" alt="whatsapp" height="50px" width="50px"/></a>
								</p>
							</section>
							<section>
								<h3>Siguenos en Redes</h3>
								<ul class="icons alt">
									<li><a href="https://www.twitter.com/artecuida2020" class="icon brands alt fa-twitter"  target="_blank"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/artecuida2020" class="icon brands alt fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/artecuida2020" class="icon brands alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
									<li><a href="https://chat.whatsapp.com/E6bMDKhT5oSLXOFZIY0lZh" class="icon brands alt fa-whatsapp" target="_blank"><span class="label">WhatsApp</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; @artecuida2020</li><li>Design: <span>oficina de suenos/LT</span></li></ul>
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
			<script>
				function test()
				{
					var verificar = new FormData(document.querySelector('form'));
					var ya1=0;
					var ya2=0;
					var ya3=0;
					if($('#practica1').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica2').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica3').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica4').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica5').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica6').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica7').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica8').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica9').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica10').prop('checked'))
					{	
						ya1=1;
					}
					if($('#practica11').prop('checked'))
					{	
						ya1=1;
					}
					
					if($('#tipo_actividad1').prop('checked'))
					{	
						ya2=1;
					}
					if($('#tipo_actividad2').prop('checked'))
					{	
						ya2=1;
					}
					if($('#tipo_actividad3').prop('checked'))
					{	
						ya2=1;
					}
					if($('#tipo_actividad4').prop('checked'))
					{	
						ya2=1;
					}
					if(ya1==0){
						$('#practica_error').show();
						$('#practica1').focus();
					}
					else{
						$('#practica_error').hide();
						ya3=1;
					}
					if(ya2==0)
					{
						$('#tip_error').show();
						$('#tipo_actividad1').focus();
					}
					else
					{
						$('#tip_error').hide();
						ya3+=1;
					}
					if(ya3==2)
					{
						$('#boton_enviar').click();
					}
					return false;
				}
				function countChars(obj)
				{
					document.getElementById("cuantos_va").innerHTML = 'Van '+obj.value.length+' de 600 máximo';
				}
			</script>
	</body>
</html>
