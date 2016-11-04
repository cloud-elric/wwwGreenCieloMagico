$('#registro-form').on(
		'afterValidate',
		function(e) {

			if ($('#registro-form').find('.has-error').length) {
				
				$("#message-error").addClass("aqua-body-error");
				
				$("#message-error").text(
						$('.has-error:eq(0) .help-block-error').text());
				return false;
			}else{
				//$("#message-error").removeClass("aqua-body-error");
				$("#message-error").text("");
			}

		});
var gano = false;
/**
 * 
 */
$(document).ready(function(){
	 $("#entusuarios-tel_numero_celular").keydown(function (e) {
		 validarSoloNumeros(e);
	    });
	 
	 $("#entusuarios-txt_cp").keydown(function (e) {
		 validarSoloNumeros(e);
	    });
	 
	 $('.js-balloon').on('click', function(e){
		 
		 if(!gano){
		gano = true; 
		 var audio = new Audio('../webAssets/audio/audio.mp3');
		 audio.play();
		 
		 var offset = $(this).offset();
		 var color = $(this).data('color');
		 
		 $(this).hide();
		 
		 pop(e.pageX, e.pageY, 13, $(this), color);
		 
		 $('.js-balloon').removeClass('js-balloon');
		 openModalWin();
		 }
	 });
	
});

function r2d(x) {
    return x / (Math.PI / 180);
  }

  function d2r(x) {
    return x * (Math.PI / 180);
  }

  function pop(start_x, start_y, particle_count, elemento, color) {
    arr = [];
    angle = 0;
    particles = [];
   
    offset_x = elemento.next(".debris").width() / 2;
    offset_y = elemento.next(".debris").height() / 2;

    
    for (i = 0; i < particle_count; i++) {
      rad = d2r(angle);
      x = Math.cos(rad)*(200+Math.random()*20);
      y = Math.sin(rad)*(200+Math.random()*20);
      arr.push([start_x + x, start_y + y]);
      z = $('<div class="debris" ></div>');
      z.css({
          "left": start_x - offset_x,
          "top": start_y - offset_x,
          "background-color": color
      }).appendTo(elemento.parents(".content"));
      particles.push(z);
      angle += 360/particle_count;
    }
    
    $.each(particles, function(i, v){
      $(v).show();
      $(v).animate(
        {
          top: arr[i][1], 
          left: arr[i][0],
          width: 4, 
          height: 4, 
          opacity: 0
        }, 900, function(){$(v).remove()
      });
    });
  }

function validarSoloNumeros(e){
	 // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
         // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
         // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
}