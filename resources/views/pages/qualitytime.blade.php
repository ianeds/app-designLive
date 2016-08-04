@extends ('layout')
@include('includes.header-home')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			<span class="ital">Quality time</span>typographic study
			</span>

			<div class="workImage markstwo">
			<img class="" src="images/quality-time_700x540.svg">
			</div> <!-- end .workImages -->

			</div> <!-- end .workItems -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/' class="goback"></a>
			<a href='/wellthen' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
