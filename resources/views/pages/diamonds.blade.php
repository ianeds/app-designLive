@extends ('layout')
@include('includes.header-home')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			<span class="ital">Diamonds</span>illustrations
			</span>
		
			<div class="workImage markstwo">
			<img class="" src="images/diamond_2_700x540.png">
			</div> <!-- end .workImages -->

			<div class="workImage markstwo">
			<img class="" src="images/diamond_1_700x540.png">
			</div> <!-- end .workImages -->


			<div class="workImage markstwo">
			<img class="" src="images/diamond_3_700x540.png">
			</div> <!-- end .workImages -->


		</div> <!-- end workitems

			<!-- flex slider section
			<div class="flexslider workImage marks">
				<ul class="slides">
		        	<li><img class="" src="images/triptych_2_700x540.png"></li>
		        	<li><img class="" src="images/triptych_1_700x540.png"></li>
		        	<li><img class="" src="images/triptych_3_700x540.png"></li>
		    	</ul>
	    	</div> <!-- end .flexslider -->

		</div> <!-- end .container -->

	</div> <!-- end #workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/touchscreen' class="previous"></a>
			<a href='/' class="goback"></a>
			<a href='/inter' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
