$(function(){
	$('nav.mobile').click(function(){
		var listaMenu =  $('nav.mobile ul');

		//abrir menu pelo fadeIn
		/*if (listaMenu.is(':hidden')== true ) {	
			listaMenu.fadeIn();
		}else{
			listaMenu.fadeOut();
		}
	})*/

	
if (listaMenu.is(':hidden')== true ) {	
	   var icone = $('.botao-menu-mobile').find('i');
	    	icone.removeClass('fa-bars');
	    	icone.addClass('fa-times')
			listaMenu.slideToggle();
		}else{
			  var icone = $('.botao-menu-mobile').find('i');
	    	icone.removeClass('fa-times');
	    	icone.addClass('fa-bars')
			listaMenu.slideToggle();
		}


	})

})
