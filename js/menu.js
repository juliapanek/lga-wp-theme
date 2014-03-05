jQuery(document).ready(function($) {
	$('#commercial').click(function() {
		$('.com').toggleClass('show');

		//$('.inst').removeClass('show');
		//$('.res').removeClass('show');
	});

	$('#institutional').click(function() {
		$('.inst').toggleClass('show');
		//$('.com').removeClass('show');
		//$('.res').removeClass('show');
	});

	$('#residential').click(function() {
		$('.res').toggleClass('show');
		//$('.com').removeClass('show');
		//$('.inst').removeClass('show');
	});

	$('#people').click(function() {
		$('.ppl').addClass('show'); 
	});
});
