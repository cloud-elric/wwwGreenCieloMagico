<?php

/* @var $this yii\web\View */
$this->title = 'Bienvenido';
use yii\helpers\Url;

?>


<!-- .principal -->
<div class="principal">

	<!-- .principal-header -->
	<div class="principal-header">
		<img class="cielo-magico"
			src="<?=Url::base()?>/webAssets/images/cielo-magico.png"
			alt="Cielo Másgico"> <img class="suenos-compartir"
			src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png"
			alt="Sueños para Compartir">
	</div>
	<!-- end - .principal-header -->

	<!-- .principal-texto -->
	<div class="principal-texto">
		<p>Juega y gana descuentos, entradas gratis, vuelos, cortesías en tus
			próximas vacaciones...</p>
	</div>
	<!-- end - .principal-texto -->

	<!-- .principal-globo -->
	<img class="principal-globo"
		src="<?=Url::base()?>/webAssets/images/principal/globo.png"
		alt="Globo">

	<!-- .principal-check-terminos -->
	<div class="principal-check-terminos">

		<ul class="list">
			<li class="list__item"><label class="label--checkbox">

					<div class="label--checkbox-row">
						<div class="label--checkbox-row-col">
							<input type="checkbox" id="checkbox" class="checkbox">
						</div>
						<div class="label--checkbox-row-col">
							<span>Acepto Términos y Condiciones</span>
						</div>
					</div>
			</label></li>
		</ul>
		<div class="principal-aceptar-mask"></div>

	</div>

	<!-- .principal-btn-juega-ahora -->
	<a class="btn principal-btn-juega-ahora ladda-button"
		id="principal-btn-juega-ahora" data-style="zoom-out"
		href="site/concursar"><span class="ladda-label">¡Juega ahora! <span>Todos
				tienen premio</span></span></a>


</div>
<!-- end - .principal -->


<!-- .modal (Términos y Condiciones) -->
<div id="modal-terminos-condiciones"
	class="modal modal-terminos-condiciones">
	<!-- .modal-content -->
	<div class="modal-content">

		<!-- .modal-header -->
		<div class="modal-header">
			<span class="close" id="modal-terminos-condiciones-close">×</span>
			<h2>Términos y condiciones "Globos mágicos"</h2>
		</div>
		<!-- end - .modal-header -->

		<!-- .modal-body -->
		<div class="modal-body">

			<p><strong>&iquest;C&Oacute;MO PARTICIPAR?</strong></p>
<ol style="list-style-type: circle;">
<li>Debes ser mayor de edad e ingresar al sitio web <a href="http://www.participagana.com.mx/cielomagico">participagana.com.mx/cielomagico</a></li>
<li>Solo participan personas con nacionalidad mexicana (o con FM2 vigente) y residan en el territorio nacional.</li>
<li>Para poder participar deber&aacute;s ingresar al sitio web <a href="http://www.participagana.com.mx/cielomagico">participagana.com.mx/cielomagico</a> y participar en el juego de globos.</li>
<li>Los registros ser&aacute;n del 4 al 13 de noviembre de 2016.</li>
<li>Se cierran las participaciones el 13 de noviembre a las 2:00 pm.</li>
<li>Todos los participantes ganan.</li>
</ol>
<p><strong>&iquest;QU&Eacute; PUEDO GANAR?</strong></p>
<p>Uno de los siguientes beneficios:</p>
<ol style="list-style-type: circle;">
<li>50 Entradas generales al evento de Cielo M&aacute;gico</li>
<li>5 vuelos anclados</li>
<li>Estancia a Villas Canc&uacute;n 3 d&iacute;as 2 noches para 2 adultos y 2 menores de 12 a&ntilde;os (vigencia de 6 meses para hacer uso del certificado).</li>
<li>70 desayunos, comida o cena para 4 personas en hoteles Fiesta Americana.</li>
<li>950 Certificados 2x1 en la compra de una noche, la segunda noche es gratis en hoteles participantes de Fiesta Americana. Con vigencia de 6 meses.</li>
<li>950 Certificados v&aacute;lidos por descuento del 40% de descuento en hoteles participantes de Fiesta Americana. Con vigencia de 6 meses.</li>
<li>Limitado a 2,025 participaciones</li>
</ol>
<p><strong>AL REGISTRARSE DEBER&Aacute;N PROPORCIONAR LA SIGUIENTE INFORMACI&Oacute;N:</strong></p>
<ol style="list-style-type: circle;">
<li>Nombre completo</li>
<li>&nbsp;Mail</li>
<li>Tel&eacute;fono celular y fijo</li>
<li>&nbsp;Edad</li>
<li>C&oacute;digo postal</li>
<li>Ocupaci&oacute;n</li>
<li>Firmar y aceptar el aviso de privacidad</li>
</ol>
<p><strong>RESTRICCIONES</strong></p>
<ol style="list-style-type: circle;">
<li>No participan personas involucradas en la realizaci&oacute;n de la activaci&oacute;n.</li>
<li>No participan menores de edad.</li>
<li>Limitado a una participaci&oacute;n por persona.</li>
</ol>
<p><strong>ESPECIFICACIONES PARA &nbsp;LA ESTANCIA EN EL HOTEL FIESTA AMERICANA &nbsp;VILLAS CANC&Uacute;N</strong></p>
<p>La vigencia para hacer valido este certificado es de 6 meses a partir de la entrega del mismo. El ganador deber&aacute; enviar al correo electr&oacute;nico <a href="mailto:promociones@participagana.com.mx">promociones@participagana.com.mx</a>&nbsp; la siguiente documentaci&oacute;n:&nbsp;</p>
<ol style="list-style-type: circle;">
<li>Copia simple por los dos lados IFE/INE o cualquier otra identificaci&oacute;n oficial con firma aut&oacute;grafa (para extranjeros FM2 vigente).</li>
<li>Notificaci&oacute;n de ganador.</li>
</ol>
<p>El canje del certificado se entrega v&iacute;a correo electr&oacute;nico una vez PGREEN haya constatado la entrega en su totalidad la documentaci&oacute;n solicitada al ganador y firme la carta de aceptaci&oacute;n de premio.</p>
<p>La solicitud de fechas deber&aacute; realizarse con un m&iacute;nimo de 30 d&iacute;as de anticipaci&oacute;n, indicando los nombres y fechas de nacimiento de las personas que viajar&aacute;n, contemplando que el incentivo incluye 2 adultos y 2 ni&ntilde;os menores de 12 a&ntilde;os.</p>
<p>La fecha seleccionada para realizar la estancia no podr&aacute; ser modificada, por lo que en caso de que el ganador no viaje en esa fecha, perder&aacute; su derecho de reclamar el incentivo, y no&nbsp; podr&aacute; ser utilizado en fechas de temporada alta, tales como: del 19 de diciembre de 2016 al 8 de enero de 2017; del 8 al 23 de abril de 2017, d&iacute;as festivos. El incentivo tiene una vigencia de 6 meses a partir de la entrega del mismo.</p>
<p>El incentivo no podr&aacute; ser canjeado por dinero en efectivo y no ser&aacute; de ninguna manera extendido. El incentivo no es transferible. El canje del certificado est&aacute; sujeto a disponibilidad.</p>
<p>El incentivo incluye:</p>
<p>Hospedaje por 3 d&iacute;as y 2 noches para 2 adultos y 2 ni&ntilde;os menores de 12 a&ntilde;os, en hotel Fiesta Americana Villas Canc&uacute;n, compartiendo habitaci&oacute;n con sus padres.</p>
<p>No incluye: alimentos ni bebidas.</p>
<p><strong><em>Las presentes bases de participaci&oacute;n est&aacute;n sujetas a cambio sin previo aviso, te recomendamos consultar nuestras actualizaciones, as&iacute; como el aviso de privacidad en la p&aacute;gina </em></strong><strong><a href="http://www.facebook.com/ParticipaGanaOficial">www.facebook.com/ParticipaGanaOficial</a></strong></p>
<p><strong><em>Para cualquier duda acerca de la activaci&oacute;n comun&iacute;cate al 01 800 46</em></strong><strong><em>7 1897&nbsp; o escr&iacute;benos al correo electr&oacute;nico </em></strong><strong><em><a href="mailto:promociones@participagana.com.mx">promociones@participagana.com.mx</a></em></strong></p>
<p><strong><em>ParticipaGana&nbsp; deslinda a Facebook de toda responsabilidad, patrocinio y administraci&oacute;n de la Din&aacute;mica de referencia, incluyendo la premiaci&oacute;n.</em></strong></p>

			<span class="aceptar-terminos-condiciones-btn"> Acepto los términos y
				condiciones </span>

		</div>
		<!-- end - .modal-body -->

	</div>
	<!-- end - .modal-content -->
</div>
<!-- end - .modal -->