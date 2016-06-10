
// media query event handler
/*
if (matchMedia) {
  var mq = window.matchMedia("screen and (min-width: 640px)");
  mq.addListener(WidthChange);
  WidthChange(mq);
}

// media query change

function WidthChange(mq) {
  if (mq.matches) {
    console.log("The condition has been met");
	var appHead = document.getElementById("menu1-1-text");
	appHead.innerHTML = "about";
	var appHeadA = document.getElementById("menu1-1-A");
	appHeadA.setAttribute('href', "/about");
  } else {
    console.log("The condition has been met");
	var appHead = document.getElementById("menu1-1-text");
	appHead.innerHTML = "apparent";
	var appHeadA = document.getElementById("menu1-1-A");
	appHeadA.setAttribute('href', "/"); 
  }
}
*/

//dropdown Menu

/*
$( ".dropnav" ).click(function() {
	$( ".dropnav" ).attr('class', 'dropnavOpen')
 	$( "#dropnavMenu" ).slideToggle(500);
});
*/

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

	/*
	// make dropmenu appear when it is closed and 840 menu query engages
	var droopmenu = $( '.topRow-8:nth-child(1)' );
	droopmenu.css("display", "block");
	*/

	// slide menu up/down
	$( "#dropnavMenu" ).slideToggle(300);
	//$( "#dropnavMenu" ).slideToggle(500);
	//$( ".dropnav.open.closed" ).removeClass( "open" ); 
});



/*
$( "#cross" ).hide();

$( "#dropnavMenu" ).hide();
$( "#dropnavIcon" ).click(function() {
$( "#dropnavMenu" ).slideToggle( "slow", function() {

});

});


$( "#dropnavIcon" ).click(function() {
    $( "#dropnavIcon" ).css({'background-image': "url(/images/burger.png)"}).animate({
	'background-position': '+=100%'},{});
}); 
*/





