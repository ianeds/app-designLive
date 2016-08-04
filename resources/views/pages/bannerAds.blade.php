@extends ('layout')
@include('includes.header-home')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Interactive banner ads for telecommunications company AT&T
			</span>
			
			<div class="workImage bannerAds">
				<img class="" src="images/160x600_template.png">
			</div> <!-- end .workImages -->

			<div class="workImage bannerAds">
				<img class="" src="images/485x220_template.png">
			</div> <!-- end .workImages -->

			<div class="workImage bannerAds">
				<img class="" src="images/300x250_template.png">
			</div> <!-- end .workImages -->

			</div> <!-- end .workItem -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/sqpat' class="previous"></a>
			<a href='/' class="goback"></a>
			<a href='/trop' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
