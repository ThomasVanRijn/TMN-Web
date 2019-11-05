<!DOCTYPE html>
<html lang="en">
<head>
    <title>TMN-Web</title>
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--bootstrap-->
    <?php require("global_components/bootstrap.html"); ?>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<!--loading screen-->
<?php require("global_components/loadingScreen.html"); ?>

<!--navigation bar-->
<?php require("global_components/navbar.html"); ?>

<header>
    <div class="container">
        <div class="row align-items-center" style="height: 40vh;">
            <div class="col text-center">
                <h1>[TITLE]</h1>
                <p>[TEXT]</p>
            </div>
        </div>
    </div>
</header>

<main class="container-fluid" style="max-width: 1300px;">
    <div class="row align-items-center">
        <div class="col text-center">
            <h2>Wat hebben wij allemaal te bieden?</h2>
        </div>
    </div>

<!--web development-->
    <div class="row align-items-center blok1">
        <div class="col-md-7 image">
            <img class="img-fluid" src="img/web_development.png" alt="Web development">
        </div>
        <div class="col-md-5 text">
            <h3>Web development</h3>
            <p>
                Een website, webshop of webapplicatie voor de lange termijn? Dan heb je een goede basis nodig. Deze basis
                leg je door middel van...
            </p>
            <a href="websites.php">
                <button type="button" class="btn btn-dark">Meer informatie</button>
            </a>
        </div>
    </div>

<!--web design-->
    <div class="row align-items-center blok2">
        <div class="col-md-5 text">
            <h3>Web design</h3>
            <p>
                Als wij een web ontwerp voor jou gaan maken wil je natuurlijk weten hoe wij dit doen en wat je kunt
                verwachten. Wij zorgen ervoor...
            </p>
            <a href="websites.php">
                <button type="button" class="btn btn-dark">Meer informatie</button>
            </a>
        </div>
        <div class="col-md-7 image">
            <img class="img-fluid" src="img/web_design.jpg" alt="Web development">
        </div>
    </div>

<!--logo design-->
    <div class="row align-items-center blok3">
        <div class="col-md-7 image">
            <img class="img-fluid" src="img/logo_design.jpg" alt="Web development">
        </div>
        <div class="col-md-5 text">
            <h3>Logo design</h3>
            <p>
                Een logo is een uithangbord, het geeft in één oogopslag een indruk van jouw bedrijf. Het logo is een
                belangrijk onderdeel van jouw visuele identiteit. Ga bijvoorbeeld...
            </p>
            <a href="websites.php">
                <button type="button" class="btn btn-dark">Meer informatie</button>
            </a>
        </div>
    </div>
</main>

<!--footer-->
<?php require("global_components/footer.html"); ?>

</body>
</html>