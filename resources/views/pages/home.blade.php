@extends ('layout')
@include('includes.header-home')

@section ('main')


<main id="mainColumn">
	<div class="container">

        <!--<div class="intro-p">
        <p>
        Welcome to Lamp Bureau, a graphic design agency  that helps businesses, organizations, and people communicate their brand message through expressive and disciplined visual design. Please see our work below.
        </p>
        </div>-->

       <div class="previewItem">
            <div class="chips">
                <a href="/chips">
                    <img src="/images/cornet-de-frites-700x540.png">

                        <div class="hover-bg">

                            <span class="hover-text">Chips & mayo illustration</span>

                        </div>
            </div>

                        <span class="preview-mobile-text ">Chips &&nbsp;</span><span class="preview-mobile-text">mayo illustration
                        </span>
                </a>
 
        </div> 

        <div class="previewItem"><div class="qualitytime"><a href="/qualitytime">

        <img src="/images/quality-time_700x540.svg">

            <div class="hover-bg">

                <span class="hover-text"><span class="ital">Quality Time </span>illustration</span>

            </div>

            </div>


        <span class="preview-mobile-text"><span class="ital">Quality time</span> illustration</span></a>


        </div>
        
		<div class="previewItem"><div class="wellthen"><a href="/wellthen">
        <img src="images/well-then-2_700x540.png">

            <div class="hover-bg">

                <span class="hover-text"><span class="ital">Well then </span>illustration</span>

            </div>


        </div><span class="preview-mobile-text"><span class="ital">Well then</span> illustration</span></a></div>

        <div class="previewItem"><div class="touchscreen">
        <a href="/touchscreen">
        <img src="images/touchscreens_pre.png">
            <div class="hover-bg">

                <span class="hover-text"><span class="ital">Touch-screen kiosk designs</span>

            </div>
        </div>
        <span class="preview-mobile-text top-padding">Touch-screen&nbsp;</span><span class="preview-mobile-text">kiosk designs</span></a></div>

        <div class="previewItem"><div class="diamonds"><a href="/diamonds"><img src="images/diamond_1_700x540.png">
            <div class="hover-bg">

                <span class="hover-text"><span class="ital"><span class="ital">Diamonds</span> illustrations</span>

            </div>

        </div><span class="preview-mobile-text top-padding"><span class="ital">Diamonds</span> illustrations</span></a></div>

        <div class="previewItem"><div class="inter"><a href="/inter"><img src="images/inter-700x540.png">
        
        <div class="hover-bg">
                <span class="hover-text"><span class="ital"><span class="ital">Web design</span>

            </div>


        </div>
        <span class="preview-mobile-text top-padding">Web design</span></a></div>

        <div class="previewItem"><div class="simplethings"><a href="/simplethings"><img src="images/simple_things_700x540.png">
            
            <div class="hover-bg">

                <span class="hover-text"><span class="ital"><span class="ital">Simple things</span> illustration</span>

            </div>

        </div><span class="preview-mobile-text">Simple things&nbsp;</span><span class="preview-mobile-text">illustration</span></a></div>

        <div class="previewItem"><div class="jusquabout"><a href="/jusquabout"><img src="images/jusqu-au-bout-700x540.png">

        <div class="hover-bg">

                <span class="hover-text"><span class="ital">Jusqu'au bout&nbsp;</span><span class="preview-mobile-text">illustration</span>

            </div>

        </div><span class="preview-mobile-text"><span class="ital">Jusqu'au bout</span> illustration</span></a></div>

        <div class="previewItem"><div class="sqpat"><a href="/sqpat"><img src="images/squarePattern1_700x540.png">


         <div class="hover-bg">

                <span class="hover-text">Square pattern illustrations</span>

        </div>

            </div><span class="preview-mobile-text">Square pattern&nbsp;</span><span class="preview-mobile-text">illustrations</span></a></div>

        <div class="previewItem"><div class="trop"><a href="/trop"><img src="images/trop_700x540.png">
            <div class="hover-bg">

                <span class="hover-text"><span class="ital">Trop</span> illustration</span>

        </div>


        </div><span class="preview-mobile-text"><span class="ital">Trop</span> illustration</span></a></div>

    </div> <!-- end .container -->

</main> <!-- end #mainColumn -->
@stop

@section('footer')
<footer>
    <div class="footerContainer">
        <div class="footerBtn">
            <a href='#siteheader' class="goback scrollupButton">
            </a>
        </div> <!-- end .footerBtn -->
    </div> <!-- end .footerContainer -->
</footer>
@stop

   
