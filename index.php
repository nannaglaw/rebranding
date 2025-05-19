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
            <p class="text text-lb m-0 extra display-2">Velkommen til </p>
            <p class="text text-lb m-0 extra display-2">Skønhedssalon THEIA</p>
            <p class="text text-lb m-0 kursiv display-3">– din oase af skønhed og ro</p>

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
        <div class="col-12 col-lg-5 offset-lg-1">
            <img class="img-fluid ms-lg-0 ms-md-0 my-lg-5 mt-5 rounded-3" src="img/behandler.webp" alt="Billede af Charlotte Larsen">
        </div>
        <div class="col-12 col-lg-6 px-lg-5 ">
            <p class="text-center text-lb display-6 pt-lg-5 pt-3 m-0 fed">Mød
                behandleren</p>
            <p class="text-center text-lb display-5 kursiv">Charlotte Larsen</p>
            <p class="fs-5 text-db px-4 px-lg-5">Velkommen til min skønhedssalon.
                Mit navn er Charlotte Larsen, og jeg er indehaver af Skønhedssalon THEIA. Hvis du vil vide mere om mig
                og min salon kan du læse mere <a class="link-gr fed"
                                                 href="omTheia.php">her.</a></p>
            <div class="d-flex justify-content-center align-items-center"><img class="img-fluid pt-3 pb-2"
                                                                               src="img/ii.webp" alt="ii"></div>
            <p class="fs-5 text-db px-4 px-lg-5 pb-3 text-center">Jeg brænder for at fremhæve din naturlige skønhed med faglighed, præcision
                og æstetisk sans – altid med respekt for dig og dit udtryk.</p>
            <div class="d-flex justify-content-center mb-5 mb-md-0 gap-lg-5 gap-2">
                <?php include "omTheiaKnap.php"; ?>
                <?php include "kontaktKnap.php"; ?>
            </div>
        </div>
    </div>
</div>

<div class="container bg-wh">

    <p class="text text-lb m-0 fw-medium display-5 text-center pt-5">Behandlinger</p>
    <p class="text text-db mb-3 kursiv fs-2 text-center">Skønhed starter med selvforkælelse</p>

    <div class="row">
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4 text-center mt-5 d-flex justify-content-center">
            <a class="btn knapperne btn-wd py-4 px-5" href="behandlinger.php" role="button"><img src="img/nails.gif"
                                                                                                 alt="negle animation"
                                                                                                 style="width:75px;height:75px;">
                <p class="text text-db fs-3">Negle</p></a>
        </div>
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4 text-center mt-5 d-flex justify-content-center">
            <a class="btn btn-wd knapperne p-4 px-5 " href="behandlinger.php" role="button"><img
                        src="img/eyebrows.gif"
                        alt="øjenbryn animation"
                        style="width:75px;height:75px;">
                <p class="text text-db fs-3">Bryn</p></a>
        </div>
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4 text-center mt-5 d-flex justify-content-center">
            <a class="btn btn-wd knapperne p-4 px-5" href="behandlinger.php" role="button"><img
                        src="img/eyelashes.gif"
                        alt="Øjenvippe animation"
                        style="width:75px;height:75px;">
                <p class="text text-db fs-3">Vipper</p></a>
        </div>
        <div class="d-lg-grid col-lg-4 col-12 mx-auto text-center pt-5">
            <?php include "prislisteKnap.php"; ?>

        </div>
    </div>
</div>


<?php include "footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


