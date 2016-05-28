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
    @yield('head')
    </head>
<body>
<?php include_once("analyticstracking.php") ?>
    <header>
        <div class="header">
            <a href="/" ><img src="images/apparent-logo.png" width="231" height="70"></a>
            <br>
            <span>
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