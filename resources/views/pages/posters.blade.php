@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Posters/Projects
			</span>

			<div class="workImage marks">
				<img class="" src="images/blauw-kruis_700x540.png">
			</div> <!-- end .workImages -->

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
			<a href='/type'><img src="images/previous_btn.png" width="70" height="70"></a>
			<a href='/'><img src="images/goback_btn.png" width="70" height="70"></a>
			<a href='/touchscreen'><img src="images/seemore_btn.png" width="70" height="70"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
