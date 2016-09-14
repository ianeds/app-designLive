@extends ('layout')
@include('includes.header-about')

@section ('main')

<main id="contactColumn">
    <div class="contactItem primary">
        <p>Lamp Bureau is a graphic design studio that helps businesses, organizations, and people communicate their message through expressive and disciplined design. <br><br>Multidisciplinary in vision and concept-driven, Lamp works across digital and print media. Our three main areas of service are:
        <ul class="servicesList">
            <li>Web design: interface design and front-end web development using CSS 3, HTML5, Javascript/jQuery, PHP, and Laravel 5
            </li>
            <li>Print design: posters, publications, catalogues and other associated collateral</li>
            <li>Identity: logos and logo systems, style guides, brand concepting</li>
        </ul> 

        </p>
        </div>
    <div class="contactItem secondary">
        <p>
            <span class="noTop">
    
                <a class="phone-email" href="mailto:info@lampbureau.com" target="_top" class=''>info@lampbureau.com</a><br><br>
                
                <a class="no-underline" href="https://www.instagram.com/lampbureau/" target="_blank"><img class="social-icon" src="/images/instagram-icon.png" width=50px height=50px alt="instagramIcon"></a>&nbsp;&nbsp;
                <a class="no-underline" href="https://www.twitter.com/lamp_bureau" target="_blank"><img class="twitter-icon" src="/images/twitter-icon.png" width=50px height=50px alt="twitterIcon"></a>&nbsp;&nbsp;
                <a class="no-underline" href="https://www.pinterest.com/lampbureau" target="_blank"><img class="social-icon" src="/images/pinterest-icon.png" width=50px height=50px alt="pinterestIcon"></a>
                <br><br>
            </span> <!-- end span.noTop -->


        </p>
       </div>
</div>

@stop

@section('footer')
<footer>
</footer>
@stop