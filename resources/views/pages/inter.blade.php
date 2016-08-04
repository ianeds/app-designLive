@extends ('layout')
@include('includes.header-home')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Web layout designs for Microsoft
			</span>
			
			<div class="workImage inter">
				<img class="" src="images/xbox_vertical.png">
			</div> <!-- end .workImage -->

			<div id="horiz" class="workImage inter">
				<img src="images/xbox_horiz.png">
			</div> <!-- end .workImage -->
			
			<div class="workImage search">
				<img class="" src="images/search_a.png">
			</div> <!-- end .workImage -->

			</div> <!-- end .workItems -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/diamonds' class="previous"></a>
			<a href='/' class="goback"></a>
			<a href='/simplethings' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop


