var pos_precedente;
pos_precedente = location.search.substring(1, location.search.length);

var pos;
function position(){
if (document.documentElement && document.documentElement.scrollTop)
        pos = document.documentElement.scrollTop;
   

else if (document.body)
        pos = document.body.scrollTop
}

/*
position = document.onmousedown;
*/

var timeout;
var y = 0;
var step;
var step_up = 10;

function scroll_down() {
 	if (y < Number(pos_precedente))
 		{
 				y = Number(pos_precedente);
 		}
 	
 		window.scroll(0,y);
 		y += step;
 		timeout = setTimeout("scroll_down()",10);
 	
 		if (y > document.getElementsByName("ancre")[0].offsetTop)
 		{
 			clearTimeout(timeout);
 		}
	}

function scroll_up() {
 		if (y > Number (pos))
 		{
 			y = Number (pos);
 		}
 	
 		window.scroll (0,y);
 		y -= step_up;
 		timeout = setTimeout ("scroll_up()", 1);
 	
 		if ( y < document.getElementsByName("haut")[0].offsetTop )
 		{
 			clearTimeout(timeout);
 		}
	}

function MM_callJS(jsStr) {
	return eval(jsStr)
	}