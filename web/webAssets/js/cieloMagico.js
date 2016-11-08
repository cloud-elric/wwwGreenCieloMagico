/**
 * Cielo Mágico
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Cielo Mágico
 *
 */

/**
 * ---------------------------- Variables ----------------------------
 *  - Modal
 * 
 */

// modal - aviso de privacidad
var modalTerminosCondiciones = document
		.getElementById('modal-terminos-condiciones');
var closeTerminosCondiciones = document
		.getElementById('modal-terminos-condiciones-close');
var openTerminosCondiciones = document
		.getElementById('modal-terminos-condiciones-open');

// modal concursar - felicidades ganaste
var modalWin = document.getElementById('modal-consursar');
var openWin = document.getElementById('modal-consursar-open');

// Modal con premio
var modalPremio = document
.getElementById('modal-premio');;
var closeModalPremio =document
.getElementById('modal-premio-close');;

/**
 * ---------------------------- Document Ready ----------------------------
 *  - Animsition - Ladda - Modal
 * 
 */
$(document).ready(
		function() {
			
			
			$('.launch-modal').on('click', function(){
				modalPremio.style.display = "flex";
				//modalTerminosCondiciones.style.display = "none";
			});
			
			$(closeModalPremio).on('click', function(){
				modalPremio.style.display = "none";
			});

			$("#entusuarios-fch_nacimiento")
					.datepicker(
							{
								dateFormat : "dd-mm-yy",
								changeMonth : true,
								changeYear : true,
								yearRange : "1910:2005",
								monthNames : [ "Enero", "Febrero", "Marzo",
										"Abril", "Mayo", "Junio", "Julio",
										"Agosto", "Septiembre", "Octubre",
										"Noviembre", "Diciembre" ],
								monthNamesShort : [ "Ene", "Feb", "Mar", "Abr",
										"May", "Jun", "Jul", "Ago", "Sep",
										"Oct", "Nov", "Dic" ],
								dayNames : [ "Domingo", "Lunes", "Martes",
										"Miercoles", "Jueves", "Viernes",
										"Sabado" ],
								dayNamesMin : [ "Do", "Lu", "Ma", "Mi", "Ju",
										"Vi", "Sa" ]

							});

			$("#entusuarios-fch_nacimiento")
					.datepicker("setDate", "01-01-1990");
			$("#checkbox").prop("checked", false);

			/**
			 * Animsition
			 */
			// $('.animsition').animsition();

			// Deshabilitar btn de Juega ahora (Principal)
			// $("#principal-btn-juega-ahora").attr('disabled', true);
			$("#principal-btn-juega-ahora").removeAttr("href");
			$("#principal-btn-juega-ahora").addClass(
					"principal-btn-juega-ahora-disabled");
			// Deshabilitar btn de Juega ahora (Registro)
			$("#js-submit-form").attr("disabled", "disabled");

			$("#principal-btn-juega-ahora").on('click', function() {
				if (!$("#checkbox").is(':checked')) {
					modalTerminosCondiciones.style.display = "flex";
				} else {
					var l = Ladda.create(this);
					l.start();
				}

			});

			$("#js-canjea-tu-premio").on("click", function() {
				var l = Ladda.create(this);
				l.start();
				$('form').submit();
			});

			$("#js-submit-form").on("click", function(e) {
				if ($('#registro-form').find('.invalid').length) {

				} else {
					var l = Ladda.create(this);
					l.start();
					$('form').submit();
				}
			});

			/**
			 * Ladda
			 */
			$('.home-article-button').click(function(e) {

				var l = Ladda.create(this);
				l.start();
			});

			/**
			 * Modal - Términos y Condiciones
			 */
			// Open Modal
			$(openTerminosCondiciones).on("click", function() {
				modalTerminosCondiciones.style.display = "flex";
			});
			// Close Modal
			$(closeTerminosCondiciones).on("click", function() {
				modalTerminosCondiciones.style.display = "none";
			});

			/**
			 * Modal - Términos y Condiciones
			 */
			$(".form-registro .animated").animate({
				"opacity" : "0"
			}, 300, function() {
				$(".form-registro").show();
				$(".form-registro .animated").each(function(index) {
					$(this).addClass("delay-" + (index) + " fadeInUp");
				});
			});

			// 
			// Principal
			//
			/**
			 * Click - Mostar terminos y condiciones (Principal)
			 */
			$(".principal-aceptar-mask").on("click", function() {
				modalTerminosCondiciones.style.display = "flex";
			});

			/**
			 * Click - Boton de Aceptar terminos y condiciones (Principal)
			 */
			$(".aceptar-terminos-condiciones-btn").on(
					"click",
					function() {
						$(".principal-aceptar-mask").hide();
						// $("#principal-btn-juega-ahora").prop('disabled',
						// false);

						$("#principal-btn-juega-ahora").removeClass(
								"principal-btn-juega-ahora-disabled");
						$("#principal-btn-juega-ahora").attr("href",
								"site/concursar");

						$("#checkbox").prop("checked", true);
						modalTerminosCondiciones.style.display = "none";
					});

			/**
			 * Click - Checkbox (true/false) (Principal)
			 */
			$("#checkbox").click(function() {
				estadoCheckedPrincipal();
			});

			/**
			 * OnChange - Checkbox (true/false) (Principal)
			 */
			$("#checkbox").change(function() {
				estadoCheckedPrincipal();
			});

			/**
			 * Function - Checkbox (true/false) (Principal)
			 */
			function estadoCheckedPrincipal() {
				if ($("#checkbox").is(':checked')) {
					// $("#principal-btn-juega-ahora").prop('disabled', false);
					$("#principal-btn-juega-ahora").removeClass(
							"principal-btn-juega-ahora-disabled");
					$("#principal-btn-juega-ahora").attr("href",
							"site/concursar");
				} else {
					$(".principal-aceptar-mask").show();
					// $("#principal-btn-juega-ahora").prop('disabled', true);
					$("#principal-btn-juega-ahora").addClass(
							"principal-btn-juega-ahora-disabled");
					$("#principal-btn-juega-ahora").removeAttr("href");
				}
			}

			// 
			// Registro
			//
			/**
			 * Click - Mostar terminos y condiciones (Registro)
			 */
			$(".registro-aceptar-mask").on("click", function() {
				modalTerminosCondiciones.style.display = "flex";
			});

			/**
			 * Click - Boton de Aceptar terminos y condiciones (Registro)
			 */
			$(".aceptar-terminos-condiciones-btn-registro").on("click",
					function() {
						$(".registro-aceptar-mask").hide();
						$("#js-submit-form").prop('disabled', false);
						$("#checkbox-registro").prop("checked", true);
						modalTerminosCondiciones.style.display = "none";

					});

			/**
			 * Click - Checkbox (true/false) (Principal)
			 */
			$("#checkbox-registro").click(function() {
				estadoCheckedRegistro();
			});

			/**
			 * OnChange - Checkbox (true/false) (Principal)
			 */
			$("#checkbox-registro").change(function() {
				estadoCheckedRegistro();
			});

			/**
			 * Function - Checkbox (true/false) (Registro)
			 */
			function estadoCheckedRegistro() {
				if ($("#checkbox-registro").is(':checked')) {
					$("#js-submit-form").prop('disabled', false);
				} else {
					$(".registro-aceptar-mask").show();
					$("#js-submit-form").prop('disabled', true);
				}
			}

		}); // end - READY

//
// Consursar
// 
function openModalWin() {
	modalWin.style.display = "flex";
}

/**
 * ---------------------------- Click Window ----------------------------
 *  - Modal
 * 
 */
window.onclick = function(event) {
	// Modal Agregar - Close
	if (event.target == modalTerminosCondiciones) {
		modalTerminosCondiciones.style.display = "none";
	}
}