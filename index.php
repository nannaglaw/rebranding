<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Skønhedssalon Theia</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-wh">

<?php include "navbar.php"; ?>

<div class="position-relative">
    <img src="img/forsideM.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/mTelefon.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>


<div class="container mt-0 mt-lg-5 mt-md-5 pt-lg-4 pt-md-4">

    <div class="row">
        <div class="col-12 text-overlay text-center position-relative">
            <p class="text text-lb m-0 fw-medium display-3" style="font-family: Zodiak">Velkommen til </p>
            <p class="text text-lb m-0 fw-medium display-3" style="font-family: Zodiak">Skønhedssalon THEIA</p>
            <p class="text text-lb m-0 fst-italic display-3" style="font-family: Zodiak">– din oase af skønhed og ro</p>

            <p class="text-overlay text-db mt-3 fs-3" style="font-family: Zodiak">
                Eksklusive behandlinger i rolige omgivelser – <br> negle, vipper & bryn
            </p>
        </div>
    </div>
</div>


<div class="container mt-3 mb-5 pb-2">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-0 gap-5">
            <?php include "bookKnap.php"; ?>
            <?php include "behandlingKnap.php"; ?>
        </div>
    </div>
</div>


<div class="container-fluid bg-wd">
    <div class="row">
        <div class="col-12 col-lg-4 offset-lg-2">
            <img class="img-fluid ms-5 ms-lg-0 ms-md-0 my-5" src="img/profil.webp" alt="Billede af Charlotte Larsen">
        </div>
        <div class="col-12 col-lg-6">
            <p class="text-center text-lb display-6 pt-lg-5 pt-3" style="font-family:'Zodiak-Bold'">Mød behandleren</p>
            <p class="text-center text-lb display-5 " style="font-family:'Zodiak-Italic'">Charlotte Larsen</p>
            <p class="fs-5 text-db px-5 pb-5">Velkommen til min skønhedssalon.
                Mit navn er Charlotte Larsen, og jeg er indehaver af Skønhedssalon THEIA. Hvis du vil vide mere om mig
                og min salon kan du læse mere her. </p>
            <div class="text-center">
                <?php include "kontaktKnap.php"; ?>
            </div>
        </div>
    </div>
</div>

<div class="container bg-wh">
    <p class="text text-lb m-0 fw-medium display-5 text-center mt-3 my-4" style="font-family: Zodiak">Behandlinger</p>
    <p class="text text-db my-3 kursiv fs-3 text-center">Skønhed starter med selvforkælelse</p>

    <div class="row">
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4">
            <a class="btn btn-wd p-4" href="behandlinger.php" role="button"><img src="img/nails.gif"
                                                                                 alt="negle animation"
                                                                                 style="width:70px;height:70px;"></a>
        </div>
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4">
            <a class="btn btn-wd p-4" href="behandlinger.php" role="button"><img src="img/eyebrows.gif"
                                                                                 alt="øjnbryn animation"
                                                                                 style="width:70px;height:70px;"></a>
        </div>
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4">
            <a class="btn btn-wd p-4" href="behandlinger.php" role="button"><img src="img/eyelashes.gif"
                                                                                 alt="øjnvippe animation"
                                                                                 style="width:70px;height:70px;"></a>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


