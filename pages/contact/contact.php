<!doctype html>
<html lang="en">
<head>
    <title>TMN-Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--    Bootstrap-->
    <?php require("global_components/bootstrap.html"); ?>

    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../../global_components/default_layout.css">
</head>
<body>

<!--Navigation Bar-->
<?php require("global_components/navbar/navbar.html"); ?>

<header>
<h1>Laten we contact leggen?</h1>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Contacteer ons!</h1>
                <p>
                    Bel ons op het volgende nummer: 06-42002170
                    <br>
                    of stuur ons een mail via het onderstaande formulier
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="../../sendmail.php" method="get">
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