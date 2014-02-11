jQuery(document).ready(function($) {
	$('#commercial').click(function() {
		$('.com').addClass('show');
		$('.inst').removeClass('show');
		$('.res').removeClass('show');
	});

	$('#institutional').click(function() {
		$('.inst').addClass('show');
		$('.com').removeClass('show');
		$('.res').removeClass('show');
	});

	$('#residential').click(function() {
		$('.res').addClass('show');
		$('.com').removeClass('show');
		$('.inst').removeClass('show');
	});

	$('#people').click(function() {
		$('.ppl').addClass('show'); 

	});
});
