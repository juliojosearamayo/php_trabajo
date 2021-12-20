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
			<h1 class="name"><a href="#">Optica ROVER</a></h1>
			<ul class="main-nav">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="galeria.php">Galeria</a></li>
				<li><a href="contacto.php">Contacto</a></li>
				<li><a href="tarea2.php">Tarea2</a></li>
                <li><a href="tarea3.php">Tarea3</a></li>
			</ul>
		</div>

		
	</header><!--/.main-header-->

    <div class="contact-area default-padding";>
        <div class="container">
            <div class="contact-items">
                <div class="row">

                    <div class="col-lg-8 right-item">
                    <br>    
					<h2>Formulario:</h2>
                        <form action="conexion.php" method="post" >

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="Nombre" name="Nombre" placeholder="Nombre*" type="text" required/>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="Apellido" name="Apellido" placeholder="Apellido*" type="text" required/>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
										<input class="form-control" id="Correo" name="Correo" placeholder="Correo Electrónico*" type="email" pattern=".[a-zA-Z0-9]+@gmail.com|.[a-zA-Z0-9]+@hotmail.com" required/>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="Telefono" name="Telefono" placeholder="Teléfono*" type="number" required/>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                        <select class="form-control" name="Ciudad" required>
                                          <option value="" disabled selected>Ciudad Origen</option>
                                          <option value="Santa Cruz">Santa Cruz</option>
                                          <option value="La Paz">La Paz</option>
                                          <option value="Cochabamba">Cochabamba</option>
                                          <option value="Tarija">Tarija</option>
                                          <option value="Oruro">Oruro</option>
                                          <option value="Potosi">Potosi</option>
                                          <option value="Sucre">Sucre</option>
                                          <option value="Beni">Beni</option>
                                          <option value="Pando">Pando</option>
                                        </select>
                                        <span class="alert-error"></span>
                                  </div>
                              </div>
							  <div class="col-lg-6">
                                  <div class="form-group">
                                      <input class="form-control" id="Mensaje" name="Mensaje" maxlength="200"  placeholder="Mensaje*" type="text" required/>
                                      <span class="alert-error"></span>
                                  </div>
                              </div>
                            </div>
							<div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                        <select class="form-control" name="tipo_servicio" required multiple="multiple">
                                          <option value="" disabled selected>Servicios</option>
                                          <option value="Oftalmologia">Oftalmologia</option>
                                          <option value="Optometria">Optometria</option>
                                        </select>
                                        <span class="alert-error"></span>
                                  </div>
                              </div>
                            </div>
							
							

                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" >
                                        Enviar Inscripción <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>