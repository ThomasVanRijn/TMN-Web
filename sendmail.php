<?php
if (isset($_GET['verzenden'])) {
    $naam = $_GET['naam'];
    $email = $_GET['email'];
    $onderwerp = $_GET['onderwerp'];
    $bericht = $_GET['bericht'];

    $mailTo = "contact@tmn-web.com";
    $headers = "From: " . $email;
    $txt = "Je hebt een mail ontvangen van " . $naam . ".\n\n" . $bericht;

    mail($mailTo, $onderwerp, $bericht, $headers);
    header("Location: pages/contact/contact.php?mailsend");
}