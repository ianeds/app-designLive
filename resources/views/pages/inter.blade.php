@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Web layout designs for Microsoft
			</span>
			
			<div class="workImage inter">
				<img class="" src="images/xbox_vertical.png">
			</div> <!-- end .workImages -->

			<div id="horiz" class="workImage inter">
				<img src="images/xbox_horiz.png">
			</div> <!-- end .workImages -->
			
			<div class="workImage search">
				<img class="" src="images/search_a.png">
			</div> <!-- end .workImages -->

			<div class="workImage search">
				<img class="" src="images/search_c.png">
			</div> <!-- end .workImages -->

			<div class="workImage search">
				<img class="" src="images/search_b.png">
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
			<a href='/type' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop


