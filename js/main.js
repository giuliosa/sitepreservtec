//Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Rslides
$(function() {
    $(".rslides").responsiveSlides();
});

$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 650,            // Integer: Speed of the transition, in milliseconds
  timeout: 9000000000,    // Integer: Time between slide transitions, in milliseconds
});

// Fixar o nav no topo da página
// $(function(){
//  var nav = $('nav');
//  var section = $('.servicos');
//  $(window).scroll(function () {
//    if ($(this).scrollTop() > $('header').innerHeight()) {
//      nav.addClass("menu-fixo");
//      section.addClass('ajustar-tudo');

//    } else {
//      nav.removeClass("menu-fixo");
//      section.removeClass("ajustar-tudo");
//    }
//  });
// });

//Hamburguer Menu Dropdown
$('.menu-hamburguer').click(function() {
  // $(this).toggleClass('desativar');
  $('.drop').toggleClass('ativar');
});


// animação no scroll
debounce = function(func, wait, immediate){
  var timeout;
  return function(){
    var context = this, args = arguments;
    var later = function(){
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

(function(){
  var $target = $('.odometer'),
      offset = $(window).height() +3/4;

  function animaNumber(){
    var documentTop = $(document).scrollTop();

    $target.each(function(){
      var itemTop = $(this).offset().top;
      if (documentTop > itemTop - offset) {
        $('.num0').html(7654233);
        $('.num1').html(82);
        $('.num2').html(1326858);
        $('.num3').html(9);
        $('.num4').html(23);
      }
    });
  }

  animaNumber();

  $(document).scroll(debounce(function(){
    animaNumber();
  },200));
}());

// Adicionar animação de entrada
// Visibility.onVisible(function(){
//   setTimeout(function(){
//     $(".barra-info h1").addClass("animated fadeInDown");
//   }, 400);

//   setTimeout(function(){
//     $(".barra-info h3").addClass("animated fadeInDown");
//   }, 450);

//   setTimeout(function(){
//     $(".barra-info ul a").addClass("animated fadeInDown");
//   }, 500);

//   setTimeout(function(){
//     $(".barra-info .action").addClass("animated fadeInDown");
//   }, 600);
// });


/*Identificar o clique no menu
  Verificar o item que foi clicado e fazer a referência com o alvo
  Verificar a distância entre o alvo e o topo
  Animar o scrool até o alvo*/

$('header .barra-info .action a').click(function(e){
  e.preventDefault();

  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top

  $('html, body').animate({
    scrollTop: targetOffset
  }, 500);
});

// Menu Modal Login
$('.menu-login').click(function() {
  window.location.href = "https://sistema.preservtec.com.br/";
  // $(this).toggleClass('ativar');
  // $('.modal-login').toggleClass('ativar');
});

// Mudar tab ao click
$('[data-group]').each(function(){
	var $allTarget = $(this).find('[data-target]'),
			$allClick = $(this).find('[data-click]'),
			activeClass = 'active';

	$allTarget.first().addClass(activeClass);
	$allClick.first().addClass(activeClass);

	$allClick.click(function(e){
		e.preventDefault();

		var id = $(this).data('click'),
				$target = $('[data-target="' + id + '"]');

		$allClick.removeClass(activeClass);
		$allTarget.removeClass(activeClass);

		$target.addClass(activeClass);
		$(this).addClass(activeClass);
	});
});
