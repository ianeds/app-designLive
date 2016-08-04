//test thign
$( document ).ready(function() {
    console.log( "ready!" );
});

// makes "see more" and "go back" buttons turn white on touch
$('body').bind('touchstart', function() {});


//Velocity.js 
console.log( $("#playButton") );
console.log( $(".qualitytime") );

// Animations on css-anim page

$('.scaling-svg').on('click', function(){
  withVelocity();
});

function withVelocity() 
{
  	$('.scaling-svg').velocity
  		(
  			{ opacity: 0 }, 
  			{ duration: 1000 }
  		);  
}

// Animations on home page

// for the work images

$( document ).ready(function() {

    $('.qualitytime')
      .velocity
  		(
  			{ opacity: 1 }, 
  			{ duration: 700,
  			  delay: 300 });


  	$('.wellthen')
    .velocity
  		(
  			{ opacity: 1 }, 
  			{ duration: 700,
  			  delay: 300 });


  	$('.touchscreen').velocity
  		(
  			{ opacity: 1 }, 
  			{ duration: 700,
  			  delay: 300 }
  		);

    $('.diamonds').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 }
      );

    $('.inter').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 }
      );


    $('.simplethings').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 }
      );

    $('.jusquabout').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 }
      );

    $('.sqpat').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 }
      );

    $('.trop').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 }
      );

    $('.preview-mobile-text').velocity
      (
        { opacity: 1 }, 
        { duration: 700,
          delay: 300 })
});

// Scroll up function
$('.scrollupButton').on('click', function(){
  scrollUp();
});

function scrollUp() 
{

$('#siteheader').velocity
      ("scroll", { duration: 1500}
      );
}



