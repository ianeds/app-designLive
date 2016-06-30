@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Interactive designs for Microsoft Xbox
			</span>
			
			<div class="workImage inter">
				<img class="" src="images/xbox_vertical.png">
			</div> <!-- end .workImages -->

			<div id="horiz" class="workImage inter">
				<img src="images/xbox_horiz.png">
			</div> <!-- end .workImages -->

			</div> <!-- end .workItem -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
				<a href='/touchscreen' class="previous"></a>
			<a href='/' class="goback"></a>
			<a href='/search' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop


