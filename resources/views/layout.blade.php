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

        <meta name="keywords" content="graphic design,web,branding">
        <meta name="author" content="Lamp Bureau">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lamp Bureau | Graphic design studio</title>
        <link rel="stylesheet" href="/css/normalize.css" type="text/css">
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <meta property="og:title" content="Lamp Bureau" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://lampbureau.com" />
        <meta property="og:image" content="http://lampbureau.com/images/lamp_logo2.png" />
        <meta name="p:domain_verify" content="4981f8f0b238c485a0cc493d2d644411"/>
    </head>
<body>
<?php include_once("analyticstracking.php") ?>

<!-- start header -->
<header id="siteheader" class="">
    <div id="top-bar">
        <div class="container">
            <div class="row">

<!-- nav menu button -->

                <div class="topRow-4"> 
                    <div class="dropnav" id="dropnav">
                            <div class="dropnavIcon" id="dropnavIcon">    
                            </div> 
                    </div>

            <!-- header wordmark -->
                    <div class="headerLogo">
                        <div id="logo">
                            <a href="/"><img src="/images/lamp_logo.svg" alt="Lamp logo" class="h2Logo"></a>
                        </div>
                    </div>
                </div>

                <div class="topRow-8"> 

        <!-- hideable dropdown menu  -->
                    <div class="" id="dropnavMenu">
                              <ul>
                                <li class="mobile"><a href="/about">About</a></li>
                                <li class="mobile"><a href="/">Work</a></li>
                              </ul> 
                    </div> <!-- #dropnavMenu --> 
                </div> <!-- topRow-8 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #top-bar -->
</header>

<!-- end header -->

@yield('main')

@yield('bottom')
   
@yield('footer')
        <script src="/shared/jquery-2.2.4.js"></script>
        <script src="/shared/javascript.js"></script> 

    </body>
</html>