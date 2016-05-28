<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>decodage home</title>
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <script src="shared/javascript.js"></script> 
    @yield('header')
    </head>
<body>
<div class="deco titre">
    <hr>
    <a class="headerSpecial" href="/">decodage</a>

</div>

<div>
    graphic design
    <br><br>
</div>

<div>
    <span class="deco"> | </span>
    <a class="activePage" href="javascript:location.replace(chemin + '/interactive' + '?' + pos)">Interactive</a>
    <span class="deco"> | </span>
    <a class="inactivePage" href="javascript:location.replace(chemin + '/print' + '?' + pos)">Print</a>
    <span class="deco"> | </span>
    <a class="inactivePage" href="javascript:location.replace(chemin + '/contact' + '?' + pos)">Contact</a>
    <span class="deco"> | </span>
</div>

<div>
    <br>
     <a name="haut"></a>
    <hr>
    <br>
    <a href="javascript:location.replace(chemin + '/zune' + '?' + pos)"><img class="smallBorder" src="images/zune.png" width="175" height="273"></a> 

    <a href="javascript:location.replace(chemin + '/xbox' + '?' + pos)"><img class="smallBorder" src="images/xbox_email_450x577.png" width="200" height="256"></a> 

    <a href="javascript:location.replace(chemin + '/interProjectRed' + '?' + pos)"><img class="smallBorder" src="images/project_red.png" width="200" height="150"></a> 
    <br>
</div>

@yield ('content-work')
@yield ('footer')



   
