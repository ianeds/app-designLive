@extends ('layout')

@section ('nav')
    <nav>
      <ul>
          <li><a href='/work' class="active">Work</a></li>
          <li><a href='/contact'>Contact</a></li>
        </ul>
    </nav>
@stop

@section ('main-gallery')
<div id="wrapper">
    <section>
        <ul id="gallery">
           <li class="first"><a href="/xbox"><img class="smallBorder" src="images/xbox_150x150.png"></a></li>
           <li><a href="/touchscreen"><img class="smallBorder" src="images/touchscreen150x150.png"></a></li>

           <li><a href="/msSearch"><img class="smallBorder" src="images/msLandingpage_150x150.png"></a></li>

           <li><a href="/heavymetal"><img class="smallBorder" src="images/heavyMetal_150x150.png"></a></li>

           <li><a href="/bannerAds"><img class="smallBorder" src="images/attBanner_150x150.png"></a></li>

            <li><a href="/wvposter"><img class="smallBorder" src="images/wvPoster_150x150.png"></a></li>

           <li><a href="/trifold"><img class="smallBorder" src="images/triFold_150x150.png"></a></li>

	         </ul>
    </section>
</div>
@stop

@section('footer')
<footer>
  <div>
  </div>
</footer>
@stop

   
