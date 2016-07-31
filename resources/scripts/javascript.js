// makes "see more" and "go back" buttons turn white on touch

$('body').bind('touchstart', function() {});


// dropnavmenu open and close
$('body').on('click', '.dropnav', function() {
	var droopnav = $( '#dropnav:nth-child(1)' );
	droopnav.attr('class', 'dropnavOpen');

	// slide menu up/down
	$( "#dropnavMenu" ).slideToggle(300);
	//$( "#dropnavMenu" ).slideToggle(500);
	//$( ".dropnav.open.closed" ).removeClass( "open" ); 
});

$('body').on('click', '.dropnavOpen', function() {
	var droopnav = $( '#dropnav:nth-child(1)' );
	droopnav.attr('class', 'dropnavClosed');

	// slide menu up/down
	$( "#dropnavMenu" ).slideToggle(300);
	//$( "#dropnavMenu" ).slideToggle(500);
	//$( ".dropnav.open.closed" ).removeClass( "open" ); 
});

$('body').on('click', '.dropnavClosed', function() {
	var droopnav = $( '#dropnav:nth-child(1)' );
	droopnav.attr('class', 'dropnavOpen');

	// slide menu up/down
	$( "#dropnavMenu" ).slideToggle(300);
	//$( "#dropnavMenu" ).slideToggle(500);
	//$( ".dropnav.open.closed" ).removeClass( "open" ); 
});

//FlexSlider
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});




