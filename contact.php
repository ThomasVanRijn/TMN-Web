<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    Bootstrap-->
    <?php require("global_components/bootstrap.html"); ?>

    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="global_components/default_layout.css">
</head>
<body>

<!--Navigation Bar-->
<?php require("global_components/navbar.html"); ?>

<header>
    <div class="container">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col text-center">
                <h1>[TITLE]</h1>
                <p>[TEXT]</p>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Contacteer ons!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p>
                    bel ons op het volgende nummer: 06-42002170 <br>
                    of stuur een mail via het onderstaande formulier.
                </p>
            </div>
        </div>
<!--        formulier-->
        <div class="row">
            <div class="col">
                <form action="sendmail.php" method="get">
                    <div class="form-group">
                        <input class="form-control" type="text" name="naam" placeholder="Voer uw naam in">
                        <br>
                        <input class="form-control" type="text" name="email" placeholder="Voer uw email in">
                        <br>
                        <input class="form-control" type="text" name="onderwerp" placeholder="Voer het onderwerp in">
                        <br>
                        <textarea class="form-control" name="bericht" placeholder="Type uw bericht"></textarea>
                        <br><br>
                        <input type="submit" name="verzenden" value="verzenden">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!--Footer-->
<?php require("global_components/footer.html"); ?>

</body>
</html>