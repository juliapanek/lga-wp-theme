$( document ).ready(function() {
    console.log( "julia i am so ready" );


	// NAVIGATION 

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
		$('.ppl').toggleClass('hide');
	});



}); // end of doc ready 