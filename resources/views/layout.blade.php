<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="graphic design branding interactive web print">
        <script>
          (function(d) {
            var config = {
              kitId: 'iet7irr',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
          })(document);
        </script>

        <meta name="keywords" content="graphic design,web,branding,identity,logo,print design">
        <meta name="author" content="Lamp Bureau">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lamp Bureau | Graphic design agency</title>
        <link rel="stylesheet" href="/css/normalize.css" type="text/css">
        <!-- <link rel="stylesheet" href="/css/jquery.svg.css" type="text/css"> -->
        <link rel="stylesheet" href="/css/flexslider.css" type="text/css">
        <link rel="stylesheet" href="/css/main.css" type="text/css">
        <meta property="og:title" content="Lamp Bureau" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://lampbureau.com" />
        <meta property="og:image" content="http://lampbureau.com/images/lamp_logo2.png" />
        <meta name="p:domain_verify" content="4981f8f0b238c485a0cc493d2d644411"/>
    </head>
<body>
<?php include_once("analyticstracking.php") ?>
<!-- start header -->

@yield('main')

@yield('bottom')
   
@yield('footer')
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/velocity.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <!--<script type="text/javascript" src="js/jquery.svg.min.js"></script>
        <script type="text/javascript" src="js/jquery.svgdom.min.js"></script> -->
        <script type="text/javascript" src="js/javascript.js"></script>
    </body>
</html>