<!doctype html>
<html lang="en">
<head>
    <title>TMN-Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../../global_components/default_layout.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <a href="../../index.php" class="navbar-brand">
        <img src="../../img/logo.png" alt="logo" style="width:75px;">
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="../../index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="../over-ons/over_ons.php" class="nav-link">Over ons</a>
        </li>
        <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
        </li>
    </ul>
</nav>

<header>
<h1>Laten we contact leggen?</h1>
</header>
<main>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Contacteer ons!</h1>
            <p>Bel ons op het volgende nummer: 06-42002170 <br>
            of stuur ons een mail via het onderstaande formulier</p>
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
</body>
</html>