@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Interactive designs<br> for a touch-screen kiosk
			</span>
			
			<div class="workImage touchscreen">
				<img class="" src="images/ts_projectRed.png">
			</div>
			
			<div class="workImage touchscreen">
				<img class="" src="images/ts_tonesthemes.png">
			</div>
			
			<div class="workImage touchscreen">
				<img class="" src="images/ts_hotspots.png">
			</div>
			
			<div class="workImage touchscreen">
				<img class="" src="images/ts_biz.png">
			</div>
			
		</div>
	</div>
</main>

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/posters'><img src="images/previous_btn.png" width="70" height="70"></a>
			<a href='/'><img src="images/goback_btn.png" width="70" height="70"></a>
			<a href='/inter'><img src="images/seemore_btn.png" width="70" height="70"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop


