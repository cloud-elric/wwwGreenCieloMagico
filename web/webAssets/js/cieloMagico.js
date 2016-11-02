/**
 * Cielo Mágico
 *
 * # author      Damián <@damian>
 * # copyright   Copyright (c) 2016, Cielo Mágico
 *
 */

/**
 * ----------------------------
 *		Variables
 * ----------------------------
 *
 * - Modal
 *
 */

// modal - aviso de privacidad
var modalTerminosCondiciones = document.getElementById('modal-terminos-condiciones');
var closeTerminosCondiciones = document.getElementById('modal-terminos-condiciones-close');
var openTerminosCondiciones = document.getElementById('modal-terminos-condiciones-open');

/**
 * ----------------------------
 *		Document Ready
 * ----------------------------
 *
 * - Animsition
 * - Ladda
 * - Modal
 *
 */
$(document).ready(function(){

	/**
	 * Animsition
	 */
	// $('.animsition').animsition();


	/**
	 * Ladda
	 */

	$('.home-article-button').click(function(e){

		var l = Ladda.create(this);
		l.start();
	});
	
	/**
	 * Modal - Términos y Condiciones
	 */
	// Open Modal
	$(openTerminosCondiciones).on("click", function(){
		modalTerminosCondiciones.style.display = "flex";
	});
	// Close Modal
	$(closeTerminosCondiciones).on("click", function(){
		modalTerminosCondiciones.style.display = "none";
	});

	/**
	 * Modal - Términos y Condiciones
	 */
	$(".form-registro .animated").animate({ "opacity": "0" }, 300, function() {
		$(".form-registro").show();
		$(".form-registro .animated").each(function(index) {$( this ).addClass("delay-"+(index)+" fadeInUp");});
	});

}); // end - READY


/**
 * ----------------------------
 *		Click Window
 * ----------------------------
 *
 * - Modal
 *
 */
window.onclick = function(event) {
	// Modal Agregar - Close
	if (event.target == modalTerminosCondiciones) {
		modalTerminosCondiciones.style.display = "none";
	}
}