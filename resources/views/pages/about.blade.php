@extends ('layout')
@include('includes.header-about')

@section('main')

<main id="contactColumn">
    <div class="contactItem primary">
        <p>Lamp Bureau is a graphic design agency that helps businesses, organizations, and people communicate their brand message through expressive and disciplined visual design.<br><br> Multidisciplinary and concept-driven, Lamp works across digital and print media. Our three main areas of service are:
        <ul class="servicesList">
            <li>Web design: interface design and front-end web development using CSS 3, HTML5, Javascript/jQuery, PHP, and Laravel 5
            </li>
            <li>Print design: posters, publications, catalogues and other associated collateral</li>
            <li>Identity and branding: logos and logo systems, style guides, brand concepting</li>
        </ul> 

        
        </p>
        </div>
    <div class="contactItem secondary">
        <p>
            <span class="noTop">
                <a class="phone-email" href="tel:+310615197033">+31 (0)6 151 97 033</a><br>
                <a class="phone-email" href="mailto:info@lampbureau.com" target="_top" class=''>info@lampbureau.com</a><br><br>
                
                <a class="no-underline" href="https://www.instagram.com/lampbureau/" target="_blank"><img class="social-icon" src="/images/instagram-icon.png" width=50px height=50px alt="instagramIcon"></a>&nbsp;&nbsp;
                <a class="no-underline" href="https://www.twitter.com/lamp_bureau" target="_blank"><img class="twitter-icon" src="/images/twitter-icon.png" width=50px height=50px alt="twitterIcon"></a>&nbsp;&nbsp;
                <a class="no-underline" href="https://www.pinterest.com/lampbureau" target="_blank"><img class="social-icon" src="/images/pinterest-icon.png" width=50px height=50px alt="pinterestIcon"></a>
                <br><br>

                Lamp Bureau<br>
                Minckelersstraat 18<br>
                6211 GX Maastricht<br>
                The Netherlands
            </span> <!-- end span.noTop -->
            
            <span class='blocky'>
                <span class='bold'>KVK</span> 65483820<br>
                <span class='bold'>BTW</span> NL366765899B01<br><br><br><br>
            </span> <!-- end span.blocky -->

        </p>
       </div>
</div>

@stop

@section('footer')

@stop