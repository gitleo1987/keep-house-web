/*
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '981px',   '1280px' ],
			narrow:    [ '841px',   '980px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ '481px',   '736px'  ],
			mobilep:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

})(jQuery);
/*Scroll to top when arrow up clicked BEGIN*/
$(window) .scroll(function() {
    var height = $(window).scrollTop();
    if (height >350) {
        $('#wssp').fadeIn();
    } else {
        $('#wssp').fadeOut();
    }
});



 /*Scroll to top when arrow up clicked END*/

$(document).ready(function() {
    $('.js-servicios-basic-multiple').select2({
          placeholder: {
            text: 'Servicios seleccionados'
        }
    });
    seleccionarServicio('BA');
    $('.js-inmueble-basic-single').select2({
        placeholder: 'Tipo de Inmueble',
        minimumResultsForSearch: Infinity
    });
});

function seleccionarServicio(codigo) {
    // obtener seleccionados
    var seleccionados = $('#mySelect2').select2('data');
    // limpiar seleccion
    $('#mySelect2').val(null);
    // armar nueva lista, si el enviado ya estaba, quitarlo
    var arrayLength = seleccionados.length;
    var arrayLista = new Array();
    arrayLista.push(codigo);
    for (var i = 0; i < arrayLength; i++) {
        var cod = seleccionados[i]['id'];
        if (cod == codigo) {
            // si el elemento ya estaba, lo quito
            delete arrayLista[0];
        } else {
            // sino lo agrego
            arrayLista.push(cod);
        }

    }
    $('#mySelect2').val(arrayLista); // Select the options
    $('#mySelect2').trigger('change'); // Notify any JS components that the value changed
}

$('#mySelect2').on('select2:unselect', function (e) {
    // si quita básico, lo vuelve a agregar
    var data = e.params.data;
    if (data['id'] == 'BA') {
        seleccionarServicio('BA');
    } else {
        $('#'+data['id']).removeClass('imagen-seleccionada');
    }
    $('#mySelect2').trigger('change'); // Notify any JS components that the value changed
});

$('#mySelect2').on('select2:select', function (e) {
    var data = e.params.data;
    $('#'+data['id']).addClass('imagen-seleccionada');

});

$('.image').click(function() {
    $(this).toggleClass('imagen-seleccionada');
});

$("#mySelect2").on("select2:unselecting", function (e) {
    $(this).on("select2:opening.cancelOpen", function (evt) {
        evt.preventDefault();

        $(this).off("select2:opening.cancelOpen");
  });
});

$(".abrir-selector-servicios").on("click", function () {
    $('#mySelect2').select2("open");
});

$("#mySelect2").on('select2:opening select2:closing', function( event ) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
});
