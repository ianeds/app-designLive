@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Poster
			</span>

			<div class="workImage posters">
				<img class="" src="images/argo-rocco_pre.png">
			</div> <!-- end .workImages -->

			</div> <!-- end .workItem -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/bannerAds'><img src="images/previous_btn.png" width="70" height="70"></a>
			<a href='/'><img src="images/goback_btn.png" width="70" height="70"></a>
			<a href='/marks'><img src="images/seemore_btn.png" width="70" height="70"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
