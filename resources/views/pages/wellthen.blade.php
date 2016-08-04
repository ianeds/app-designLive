@extends ('layout')
@include('includes.header-home')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			<span class="ital">Well then</span>typographic study
			</span>

			<div class="workImage markstwo">
			<img class="" src="images/well-then-2_700x540.png">
			</div> <!-- end .workImages -->

			</div> <!-- end .workItems -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/qualitytime' class="previous"></a>
			<a href='/' class="goback"></a>
			<a href='/touchscreen' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
