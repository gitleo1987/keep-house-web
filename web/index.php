<?php include('procesar_form.php'); ?>
<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Keep House</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/keep.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	</head>
    	<body class="is-preload">
            <?php
            if (!empty($exito)) {
                echo "<script> $(function() {
                $('html, body').animate({
                scrollTop: $('#resultado').offset().top}, 1000);
                });
            </script>";
            }
            ?>
		<!-- Header -->
			<div id="header">
                <div class="header-logo">
				    <img class= "img-responsive logotipo" id="logokeep" src="images/logo.png">
                </div>
                <div class="logo-vertical">
                <img class="img-responsive" id= "logocel" src= "images/logo-vertical2.png">
                </div>
                <div class="header-slogan"><img class="img-responsive" id="slogan" src="images/slogan.png"></div>
                <div class="header-consulta"><a href="https://wa.me/5492921408809?text=Me%20interesa%20saber%20más%20del%20servicio" target="_blank"><img class="tel img-responsive" id="telefono" src="images/consulta.png"></a></div>
			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container medium">
					<h2>Disfrutá la tranquilidad de que alguien se ocupe de tu casa mientras no estás.
                    <br>Así cuando vuelvas vas a encontrar "todo bien y en funcionamiento".
                    <br>Y si hubiera algún inconveniente, te lo avisaremos a tiempo y nos ocuparemos de resolverlo.
                    </h2><br>
                    <h2>Por un conveniente abono mensual te ofrecemos un servicio básico, al que podés sumar los adicionales que te parezcan.
                    <br/>A continuación cliqueá sobre las fotos de los servicios que te interesen y solicitá presupuesto.
                    </h2>
				</header>
                <!-- Servicios -->
                <!-- Servicio Básico -->
				<div class="box alt container">
					<section class="feature left">
						<div class="image icon solid fas keep-letra-b"> <img src="images/serv-basico.png" alt="" /></div>
						<div class="content">
                            <a id="wssp" style="display: scroll;border:none; width: 50px; height: 50px; position: fixed; bottom: 50px; right: 20px; z-index: 2000;" title="Contactanos por Whatsapp" href="https://wa.me/5492921408809?text=Me%20interesa%20saber%20más%20del%20servicio" target="_blank"><img class="img-responsive" src="images/whatsapp.png"></a>
                            <div id="logoflot" style="display: scroll;border:none; width: 50px; height: 50px; position: fixed; bottom: 50px; left: 20px; z-index: 2000;"><img class="img-responsive" src="images/logo-flotante.png"></div>
							<h3>Servicio Básico</h3>
                            <p>   Visita quincenal con revisión de:</p>
                            <ul class="keep-lista-servicios">
                                <li>Grifería y sanitarios, para evitar pérdidas de agua.</li>
                                <li>Luces y sistema de alarma.</li>
                                <li>Adecuado cierre de puertas y ventanas.</li>
                                <li>Chequeo de humedad interior y exterior.</li>
                                <li>Gas y electricidad.</li>
                                <li>Airear la vivienda.</li>
                            </ul>
                                 <a href="#ex1" rel="modal:open">Ver más..</a>

                            <!-- The Modal -->
                            <div id="ex1" class="modal">
                                <h3>Servicio Básico</h3>
                            <p>   Visita quincenal con revisión de:</p>
                            <ul class="keep-lista-servicios">
                                <li>Grifería y sanitarios, para evitar pérdidas de agua.</li>
                                <li>Luces y sistema de alarma.</li>
                                <li>Adecuado cierre de puertas y ventanas.</li>
                                <li>Chequeo de humedad interior y exterior.</li>
                                <li>Gas y electricidad.</li>
                                <li>Airear la vivienda.</li>
                                <li>Puesta en marcha de electrodomésticos, aire acondicionados, etc.</li>
                                <li>Custodia de Llaves: Nos ocupamos de la entrega de llaves a invitados y personas autorizadas.</li>
                                <li>Informe mensual del estado de la propiedad, incluye material fotográfico.</li>
                            </ul>

                              <a href="#" rel="modal:close">Cerrar</a>
                            </div>
                        </div>
                        </section>
                      <!-- Control de averías -->
					<section class="feature right">
						<div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="GA" class="service-selector" onclick="seleccionarServicio('GA')"></div>
                            <img src="images/serv-averias.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Gestión de averías</h3>
                            <p>Nuestra tarea es prever los problemas. Pero si ocurren, contamos con un robusto equipo de expertos en Plomería,
                            Aire Acondicionado y Calefacción, Electricidad, Carpintería, Cerrajería y reparaciones en general. Detectado el inconveniente, informamos, presupuestamos y supervisamos la reparación hasta su conclusión.
                            </p>
                        </div>
  					</section>
                     <!-- Casa Lista -->
					<section class="feature left">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="CL" class="service-selector" onclick="seleccionarServicio('CL')"></div>
                            <img src="images/serv-casa-lista.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Casa Lista</h3>
                            <p>Si estás por venir a pasar la temporada o un fin de semana en cualquier momento del año, avisanos con 48hs de anticipación y nos ocuparemos de que la casa esté ventilada,
                            calefaccionada y con una compra mínima de supermercado en la heladera, para aprovechar la estadía a pleno.
                            </p>

						</div>
					</section>
				 <!-- Otras opciones nuevas!-->
                 <!-- Representación ante el consorcio-->

					<section class="feature right">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="RC" class="service-selector" onclick="seleccionarServicio('RC')"></div>
                            <img src="images/serv-representacion.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Representación ante el consorcio</h3>
                            <p>Venir a Monte sólo por una reunión del edificio es muy molesto. Autorización mediante te representaremos y rendiremos un informe para mantenerte al tanto. </p>
						</div>
  					</section>
                     <!-- Gestión y pago de proveedores-->
					<section class="feature left">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="PP" class="service-selector" onclick="seleccionarServicio('PP')"></div>
                            <img src="images/serv-gestion-pago.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Gestión y pago de proveedores</h3>
							<p>Desligate del pago de servicios, proveedores y gestiones municipales. </p>
                        </div>
                    </section>
                    <!-- Reformas en la Vivienda -->
					<section class="feature right">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="RV" class="service-selector" onclick="seleccionarServicio('RV')"></div>
                            <img src="images/serv-reformas.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Reformas en la Vivienda</h3>
							<p>Cambiar un piso del departamento, instalar una reja y proyectos más ambiciosos, todo proyecto se puede abordar.</p>
						</div>
					</section>
				 <!-- Transfer desde el Aeropuerto o Bahía Blanca -->
					<section class="feature left">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="TA" class="service-selector" onclick="seleccionarServicio('TA')"></div>
                            <img src="images/serv-transfer.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Transfer desde el Aeropuerto <br>o Bahía Blanca</h3>
                            <p>¿Visitas que llegan en otro medio que no sea en auto? Nosotros nos ocupamos de traerlos sin que pierdas un minuto de playa. Contratación puntual, no se incorpora al abono.
                            </p>
						</div>
                    </section>
                      <!-- Envío / Recepción -->
					<section class="feature right">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="ER" class="service-selector" onclick="seleccionarServicio('ER')"></div>
                            <img src="images/serv-envio-recep.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Envío / Recepción</h3>
							<p>¿Compraste una heladera o un mueble nuevo? Nosotros lo recibimos, instalamos y damos el destino que indiques al aparato reemplazado.
                            Lo mismo ocurre con paquetería de todos los tamaños.
                            </p>

                        </div>
                    </section>
                      <!-- Leña y Carbón  -->
					<section class="feature left">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="LC" class="service-selector" onclick="seleccionarServicio('LC')"></div>
                            <img src="images/serv-lena-carbon.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Leña y Carbón</h3>
							<p>Nos ocupamos de mantener tu leñera y carbonera siempre lista para un buen asado o un cálido fuego en el invierno. </p>
						</div>
					</section>

                    <!-- Servivio antiplagas -->
                    <section class="feature right">
                        <div class="image icon solid fas keep-check imagen-no-seleccionada">
                            <div id="SA" class="service-selector" onclick="seleccionarServicio('SA')"></div>
                            <img src="images/serv-antiplagas.jpg" alt="" />
                        </div>
						<div class="content">
							<h3>Servicio antiplagas</h3>
							<p>Fumigación sistemática del hogar, jardín y parque, para mantener la higiene y asegurarte que tu momento de relax no se convierta en algo desagradable.</p>

                        </div>
                    </section>
                </div>
				<!--
				<div class="box container">

					<section>
						<header>
							<h3>Form</h3>
						</header>
						<form method="post" action="#">
							<div class="row">
								<div class="col-6 col-12-mobilep">
									<label for="name">Name</label>
									<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
								</div>
								<div class="col-6 col-12-mobilep">
									<label for="email">Email</label>
									<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
								</div>
								<div class="col-12">
									<label for="subject">Subject</label>
									<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
								</div>
								<div class="col-12">
									<label for="subject">Message</label>
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Send" /></li>
										<li><input type="reset" value="Reset" class="alt" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>


            -->
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container medium">

					<header class="major last">
						<h2>Solicitud de Presupuesto</h2>
					</header>
                    <span id="resultado" class="exito"><?= $exito ?></span>
					<p>¿Querés saber cuál es el valor de nuestro servicio? <br>Agregá los adicionales que sean de tu interés y te enviaremos un presupuesto a medida. </p>

					<form  id="form-solicitud" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
						<div class="row">
                            <div class="col-12">
                             <ul class="actions special">
						          <li><div class="button abrir-selector-servicios">Agregá Servicio</div></li>
					           </ul>

                                <select id="mySelect2" class="js-servicios-basic-multiple" name="servicios[]" multiple="multiple" lang="es">
                                    <option value="BA" disabled="disabled">Servicio Básico</option>
                                    <option value="GA">Gestión de Averías</option>
                                    <option value="CL">Casa Lista</option>
                                    <option value="RC">Representación ante el consorcio</option>
                                    <option value="PP">Gestión y pago de proveedores</option>
                                    <option value="RV">Reformas en la Vivienda</option>
                                    <option value="TA">Transfer desde el Aeropuerto o Bahía Blanca</option>
                                    <option value="ER">Envío/Recepción</option>
                                    <option value="LC">Leña y Carbón</option>
                                    <option value="SA">Servicio antiplagas</option>
                                </select>
                            </div>

							<div class="col-6 col-12-mobilep">
								<input type="text" name="nombre" required value="<?= $nombre ?>" placeholder="Nombre" />
                                <span class="error"><?= $nombre_error ?></span>
							</div>
                            <div class="col-6 col-12-mobilep">
								<input type="text" name="apellido" required value="<?= $apellido ?>" placeholder="Apellido" />
							</div>
							<div class="col-12">
								<input type="email" name="email" required value="<?= $email ?>" placeholder="Correo Electrónico" />
                                <span class="error"><?= $email_error ?></span>
							</div>
                            <div class="col-6 col-12-mobilep">
								<input type="text" id="input-tel" required name="telefono" value="<?= $telefono ?>" placeholder="Teléfono / WhatsApp" />
                                <span class="error"><?= $telef_error ?></span>
							</div>
							<div class="col-6 col-12-mobilep">
								<select id="mySelect2-inm" required class="js-inmueble-basic-single" name="inmueble" lang="es">
                                    <option></option>
                                    <option value="CA">Casa</option>
                                    <option value="DE">Departamento</option>
                                    <option value="LC">Local Comercial</option>
                                    <option value="PH">PH</option>
                                    <option value="TE">Terreno</option>
                                </select>
                                <span class="error"><?= $inmueble_error ?></span>
							</div>
							<div class="col-12">
								<input type="text" name="calle" required value="<?= $calle ?>" placeholder="Calle y Número" />
							</div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Enviar" /></li>
								</ul>
							</div>
						</div>
					</form>
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12406.09133193535!2d-61.313595455310335!3d-38.980562342553924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x958d5290cbca6087%3A0x6250958d52aefc8a!2sMonte%20Hermoso%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1592172069662!5m2!1ses!2sar" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <br>
                    <ul>
                        <li>+54 9 2921 40-8809</li>
                    </ul>
					<ul class="icons">
						<li><a href="https://wa.me/5492921408809?text=Me%20interesa%20saber%20más%20del%20servicio" target="_blank" class="icon brands fa-whatsapp"><span class="label">WhatsApp</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					<ul class="copyright">
						<li>Keep-House Cuidado y mantenimiento de propiedades. De Alejandro Lemus – Monte Hermoso</li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/jquery.inputmask.js"></script>
            <script src="assets/js/bindings/inputmask.binding.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
            <!-- Libreria español -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/i18n/es.js"></script>
            <script>
                $('#mySelect2-inm').val('<?= $inmueble ?>');
                $('#mySelect2-inm').trigger('change');
                $('#mySelect2').val([<?= $servicios ?>]);
                $('#mySelect2').trigger('change');
            </script>


	</body>
</html>
