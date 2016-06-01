<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Apparent Design Marketing graphic interactive design">
        <meta name="keywords" content="graphic design,web,interactive">
        <meta name="author" content="Apparent Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Apparent | Graphic and interactive design studio</title>
        <link rel="stylesheet" href="/css/normalize.css" type="text/css">
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <script src="shared/javascript.js"></script> 
        </head>
<body>
<?php include_once("analyticstracking.php") ?>
    <header>
        <div class="title">
            <span class="text-logo"><h1>apparent</h1></span>
            <span class="logo"><a href="/work"><img src="/images/app-logo.svg"></a></span>
            <span class="tag">
            graphic and interactive design
            </span>
        </div>
    </header>

<nav>
      <ul>
          <li><a href='/work' class="active">Work</a></li>
          <li><a href='/contact'>Contact</a></li>
        </ul>
</nav>

@yield('main-gallery')

@yield('content-work')
   
@yield('footer')

    </body>
</html>