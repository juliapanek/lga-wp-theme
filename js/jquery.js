$( document ).ready(function() {
    console.log( "julia i am so ready" );


// MENU + NAVIGATION 

// opens / closes menu on tablet and phone 
//$('h1.navicon').click(function(){
//	console.log('omfg'); 
//	$('#side_nav').toggleClass('hide');
	//$('#side_nav').addClass('hide');
//	$('#side_content').toggleClass('hide');
//});

// opens/closes main menu 1 folder
$('#project_menu').click(function(){
    $('.project_option').toggleClass('hide');
    $('.residential_projects').toggleClass('hide');
    $('.commercial_projects').toggleClass('hide');
    $('.institutional_projects').toggleClass('hide');
}); 

/*
// opens/closes residential
$('.residential').click(function(){
	$('.residential_projects').toggleClass('hide');
}); 

// opens/closes commercial
$('.commercial').click(function(){
  $('.commercial_projects').toggleClass('hide');
}); 

// opens/closes institutional
$('.institutional').click(function(){
 $('.institutional_projects').toggleClass('hide');
}); 
*/

// opens/closes studio
$('#studio_menu').click(function() {
  $('.studio_option').toggleClass('hide');
}); 


});