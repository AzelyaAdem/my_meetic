$(document).ready(function() {
 
	$('.toggle-nav').click(function() {

	  $this = $(this);
	  $nav = $('.nice-nav');
	  $nav.toggleClass('open');
	});
	 
	$('.body-part').click(function(){
	  $nav.addClass('open');
	});

	$submenu = $('.child-menu-ul');
	$('.child-menu .toggle-right').on('click', function(e) {
	  e.preventDefault();
	  $this = $(this);
	  $parent = $this.parent().next();
	  $tar = $('.child-menu-ul');
	  if (!$parent.hasClass('active')) {
		$tar.removeClass('active').slideUp('fast');
		$parent.addClass('active').slideDown('fast');
	  } else {
		$parent.removeClass('active').slideUp('fast');
	  }
	});
  });
var currentSlide = 1;
var $slider = $(".slides");
var slideCount = $slider.children().length;
var slideTime = 3000;
var animationTime = 800;

setInterval(function(){
	$slider.animate({
		marginLeft : '-=900px'
	} , animationTime , function(){
		currentSlide++;
		if(currentSlide === slideCount) {
			currentSlide = 1;
			$(this).css("margin-left" , "0px");
		}
	});
} , slideTime);