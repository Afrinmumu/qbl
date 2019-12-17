$(document).ready(function(){

	/* default settings */
	$('.venobox').venobox(); 


	/* open content with custom settings */
	$('.venobox_custom').venobox({
		framewidth: '400px',
		frameheight: '300px',
		border: '10px solid white',
		bordercolor: '#ba7c36',
		numeratio: false
	});

	/* auto-open #firstlink on page load */
	$("#firstlink").venobox().trigger('click');
});