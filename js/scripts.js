jQuery.noConflict();
jQuery(document).ready(function($){
	var offset = 0;
	var limit = 4;
	var abierto = false;
	const cantElem = document.querySelectorAll('#info > .slide > .contenido-container');

	setInterval(function(){
		if (!abierto){
			moverSlide("right");
		}
	}, 5000);

	loopHide();
	cargarSlider();

	verificarAncho();

	$('.arrow').click(function(){
		if ($(this).parent().attr('id') == "info"){
			moverSlide(this);
		}
	});

	$('.location').mouseover(function(){
		agregarColor(this, 'white', 'text-black');
	});

	$('.location').mouseout(function(){
		quitarColor(this, 'white', 'text-black');
	});

	$('.contenido-container').click(function(e){
		abierto = abrirPop(e, this); 
	});

	$('.location').parent().click(function(e){
		abierto = abrirPop(e, this); 
		var altura = $(this).find('.popup').outerHeight();
		altura -= $(this).find('.cerrar').outerHeight();
		altura -= $(this).find('.pop-title').outerHeight();
		altura -= $(this).find('.pop-button').outerHeight();
		altura -= 10;
		$('iframe').css("height", altura + "px");
	});

	$('.cerrar').click(function(e){
		abierto = cerrarPop(e, this);
	});

	$('.menu-burger').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.menu-block').css("display", "none");
			desbloquearHTML();
		} else {
			$(this).addClass('active');
			$('.menu-block').css("display", "block");
			bloquearHTML();
		}
	});

	$('.prof-posts').mouseover(function(){
		agregarColor(this, 'black', 'text-white');
	});

	$('.prof-posts').mouseout(function(){
		quitarColor(this, 'black', 'text-white');
	});

	function verificarAncho(){
		anchoDispositivo = $(window).width();
		if (anchoDispositivo <= 768){
			$('.articulo').after('<hr class="wrapper text-black">');
		}
	}

	function bloquearHTML(){
		$('html, body').css('overflow-y', 'hidden');
	}

	function desbloquearHTML(){
		$('html, body').css('overflow-y', 'initial');
	}

	function agregarColor(elem, fondo, letra){
		$(elem).addClass(fondo);
		$(elem).addClass(letra);
	}

	function quitarColor(elem, fondo, letra){
		$(elem).removeClass(fondo);
		$(elem).removeClass(letra);
	}

	function abrirPop(ev, elem){
		var altura;
		ev.stopPropagation();
		$(window).scrollTop(0);
		$(elem).children('.back-pop').fadeIn(500);
		bloquearHTML();
		altura = $(elem).find('.popup').offset().top;
		altura += $(elem).find('.popup').outerHeight(true);
		altura -= $(elem).find('.popup').outerHeight(true)/4;
		$(elem).find('.popup').css("padding-bottom", altura);
		return true;
	}

	function cerrarPop(ev, elem){
		ev.preventDefault();
		ev.stopPropagation();
		$(elem).parents('.back-pop').fadeOut(500);
		desbloquearHTML();
		return false;
	}

	function cargarSlider(){
		for(i=offset; i<cantElem.length; i++){
			cantElem[i].setAttribute('id', i);
		}
		resetSlider(0);
	}

	function resetSlider(num){
		if (num == 0 || num == 1){
			offset = 0;
			limit = 4;
		} else {
			limit = cantElem.length;
			offset = limit - 4;
		}
		loopShow();
	}

	function loopShow(){
		for(i=offset; i<limit; i++){
			if(i<cantElem.length && !(i<0)){
				cantElem[i].setAttribute('style', 'display:initial;');
			} else {
				break;
			}
		}
	}

	function loopHide(){
		cantElem.forEach(function(val, i){
			cantElem[i].setAttribute('style', 'display:none;');
		});
	}

	function moverSlide(elemClick){
		if (($(elemClick).hasClass('right') && limit < cantElem.length) || (elemClick == "right" && limit < cantElem.length)){
			cantElem[offset].setAttribute('style', 'display:none;');
			offset++;
			limit++;
			cantElem[limit-1].setAttribute('style', 'display:initial;');
			//loopHide();
			//loopShow();
		} else if (($(elemClick).hasClass('right') && limit >= cantElem.length-1) || (elemClick == "right" && limit >= cantElem.length-1)){
			resetSlider(1);
			loopHide();
			loopShow();
		} else if ($(elemClick).hasClass('left') && offset > 0){
			cantElem[limit-1].setAttribute('style', 'display:none;');
			offset--;
			limit--;
			cantElem[offset].setAttribute('style', 'display:initial;');
		} else if ($(elemClick).hasClass('left') && offset <= 0){
			resetSlider(2);
			loopHide();
			loopShow();
		}
	}
});