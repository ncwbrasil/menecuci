jQuery(document).ready(function($){
	var $objetos = $('.wrapper');

	//hide timeline blocks which are outside the viewport
	$objetos.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.content').addClass('hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$objetos.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.content').hasClass('hidden') ) {
				$(this).find('.content').removeClass('hidden').addClass('visible');			
			}
		});
	});
});


jQuery(document).ready(function($){
	var $objetos = $('.noticias');

	//hide timeline blocks which are outside the viewport
	$objetos.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.content_not').addClass('hidden');
		}
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$objetos.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.90 && $(this).find('.content_not').hasClass('hidden') ) {
				$(this).find('.content_not').removeClass('hidden').addClass('visible');			
			}
		});
	});
});
