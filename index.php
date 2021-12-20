<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<header class="main-header">
		<div class="container clearfix">
			<h1 class="name"><a href="#">Optica ROVER - TRABAJO INTEGRADOR</a></h1>
			<ul class="main-nav">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="galeria.php">Galeria</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="tarea2.php">Tarea2</a></li>
                <li><a href="tarea3.php">Tarea3</a></li>
			</ul>
		</div>

		
	</header><!--/.main-header-->

	<?php
		function obtiene_mensaje($opcion){
			$res = "";
			if ($opcion=="1"){
				$res = "Pensando en usted c&oacute;mo cliente nuestro y quien merece siempre lo mejor, hemos desarrollado este nuevo sitio web. Un sitio fresco, din&aacute;mico, flexible y con nuestros productos insignia que nos han caraterizado siempre. Dese la oportunidad de navegar en &eacute;l y encontrar el producto que se adapte a sus necesidades.";
			}
			if ($opcion=="2"){
				$res = "Actualmente disponemos de más de 6.000 artículos en nuestras ópticas y óptica online. Ofrecemos en nuestras tiendas y en nuestra óptica online monturas, gafas graduadas de vista monofocales y progresivas, gafas de sol, gafas deportivas, lentillas y líquidos de lentillas, productos de cuidado visual y gotas para los ojos de las primeras marcas a los mejores precios. Somos distribuidores oficiales de las principales marcas de gafas de sol y de gafas graduadas como Ray-Ban, Oakley, Polaroid, Persol, Dior, Dolce & Gabbana, Munich, Carrera, Arnette, Prada, Carolina Herrera o Tous entre las más de 50 marcas de gafas con las que trabajamos.";
			}
			if ($opcion=="3"){
				$res = "Nuestra óptica online de gafas de vista, gafas de sol, lentillas y productos de cuidado visual realiza envíos seguros y gratuitos a nivel nacional, a nuestras tiendas o a domicilio particular a partir de 10 Bs., y las devoluciones son siempre gratuitas durante 1 mes.";
			}
			if ($opcion=="4"){
				$res = "Nuestro portfolio de productos de las principales marcas del sector, nuestros precios competitivos y la atención al cliente son las 3 características que más valoran nuestros clientes.";
			}
			return $res;
		}
		
		$titulo = "OPTICA LENTES Y GAFAS ";
		$tsecundario = "TODO LO QUE NECESITAS PARA TUS OJOS";

		$Mensaje_bienvenida="Bienvenido!";
		
		function obtiene_turno(){
			$res = "";
		
			$Fecha1=date("Y");
			$Fecha2=date("Y/m/d");
			
			$fechahoraactual = date("Y-m-d H:i:s");
			$dateTimestamp = strtotime($fechahoraactual);
			$fh_0_ini = date("Y-m-d")." 00:00:00";
			$fh_0_fin = date("Y-m-d")." 06:59:59";
			$fechahora_0_ini = strtotime($fh_0_ini);
			$fechahora_0_fin = strtotime($fh_0_fin);
			$fh_1_ini = date("Y-m-d")." 07:00:00";
			$fh_1_fin = date("Y-m-d")." 11:59:59";
			$fechahora_1_ini = strtotime($fh_1_ini);
			$fechahora_1_fin = strtotime($fh_1_fin);
			$fh_2_ini = date("Y-m-d")." 12:00:00";
			$fh_2_fin = date("Y-m-d")." 17:59:59";
			$fechahora_2_ini = strtotime($fh_2_ini);
			$fechahora_2_fin = strtotime($fh_2_fin);
			$fh_3_ini = date("Y-m-d")." 18:00:00";
			$fh_3_fin = date("Y-m-d")." 23:59:59";
			$fechahora_3_ini = strtotime($fh_3_ini);
			$fechahora_3_fin = strtotime($fh_3_fin);
			
			
			if (($dateTimestamp >= $fechahora_0_ini) && ($dateTimestamp <= $fechahora_0_fin)){
				$turno = "MADRUGADA";
			}
			elseif (($dateTimestamp >= $fechahora_1_ini) && ($dateTimestamp <= $fechahora_1_fin)){
				$turno = "MAÑANA";
			}
			elseif (($dateTimestamp >= $fechahora_2_ini) && ($dateTimestamp <= $fechahora_2_fin)){
				$turno = "TARDE";
			}
			elseif (($dateTimestamp >= $fechahora_3_ini) && ($dateTimestamp <= $fechahora_3_fin)){
				$turno = "NOCHE";
			}
			else{
				$turno = "NINGUNO";
			}
			$res = $turno;
			return $res;
		}
		
		
	?>
	<div class="banner">
		<h1 class="headline" ><?php echo "TENGA USTED BUENA ".obtiene_turno()." QUERIDO VISITANTE<br/>".$titulo; ?></h1>
		<span class="tagline"><?php echo $tsecundario; ?></span>
	
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="img/a2.jpg" class="img-fluid" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="img/a5.jpg" class="img-fluid" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="img/a4.jpg" class="img-fluid" alt="...">
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<div class="container clearfix">
		<div class="accordion" id="accordionPanelsStayOpenExample">
			<div class="accordion-item">
			  <h2 class="accordion-header" id="panelsStayOpen-heading1">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
				Agudeza visual
				</button>
			  </h2>
			  <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
				<div class="accordion-body">
				  es la capacidad de discernir objetos y detalles a cualquier distancia, lejos o cerca.
				</div>
			  </div>
			</div>
			<div class="accordion-item">
			  <h2 class="accordion-header" id="panelsStayOpen-heading2">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
					Refracción
				</button>
			  </h2>
			  <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
				<div class="accordion-body">
				  es la evaluación del sistema óptico el cual nos permite ver la información visual con definición o nitidez.
				</div>
			  </div>
			</div>
			<div class="accordion-item">
			  <h2 class="accordion-header" id="panelsStayOpen-heading3">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
					Movimientos oculares
				</button>
			  </h2>
			  <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
				<div class="accordion-body">
					es la revisión del movimiento de los ojos. Éstos deben ser suaves coordinados y precisos para darnos la mayor información de nuestro entorno en un mínimo de tiempo y esfuerzo.
				</div>
			  </div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="panelsStayOpen-heading4">
				  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
					Coordinación de ambos ojos como equipo o binocularidad
				  </button>
				</h2>
				<div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
				  <div class="accordion-body">
					en este examen se evalúa la habilidad de los dos ojos para apuntar al mismo lugar de forma rápida y coordinada. La falta de binocularidad puede afectar a la atención y calidad de ejecución del paciente.
				  </div>
				</div>
			  </div>
		</div>
		<div class="secondary col">
			<h2><?php echo $Mensaje_bienvenida; ?></h2>
			<p><?php echo obtiene_mensaje("1"); ?></p>
			<p><?php echo obtiene_mensaje("2"); ?></p>
		</div><!-- Contenedor secundario-->
		<div class="primary col">
			<h2>Diseños</h2>

			<!--featured image-->
			<figure>
				<img class="icon-location" src="img/location.svg">
				<img class="feat-img" src="img/lentes.svg">
				<figcaption>
					<h4>Lentes &amp; Gafas! </h4>
					Medición Ocular
				</figcaption>
			</figure>

			<p><?php echo obtiene_mensaje("3"); ?></p>
		</div><!--/.primary-->
		<div class="tertiary col">
			<h2>Nosotros</h2>
			<p><strong><?php echo obtiene_mensaje("4"); ?><strong></p>
			
		</div><!-- Contenedor Terciario-->

	</div><!--/.container-->
	
	
	

	

	<footer class="main-footer">
		<!--<div class="social">
			<ul>
				<li><a href="http://www.facebook.com/falconmasters" target="_blank" class="icon-facebook"></a></li>
				<li><a href="http://www.twitter.com/falconmasters" target="_blank" class="icon-twitter"></a></li>
				<li><a href="http://www.googleplus.com/falconmasters" target="_blank" class="icon-googleplus"></a></li>
				<li><a href="http://www.pinterest.com/falconmasters" target="_blank" class="icon-pinterest"></a></li>
				<li><a href="mailto:contacto@falconmasters.com" class="icon-mail"></a></li>
			</ul>
		</div>-->
		<span>&copy; 2021 CRECE</span>
	</footer>


	<script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
