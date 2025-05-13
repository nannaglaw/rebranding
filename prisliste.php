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

<p class="text text-lb m-0 fw-medium display-5 text-center mt-3" style="font-family: Zodiak">Prisliste</p>

<ul class="nav justify-content-center py-3 border-start ">
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#">Brow- &
            Lash Lift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page"
           href="#">Vipper</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page"
           href="#">Bryn</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#">Mani- &
            Pedicure</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-end border-2 border-lb" aria-current="page"
           href="#">Japansk Lifting</a>
    </li>
</ul>

<p class="d-flex justify-content-center p-3 fs-6 text-lb fedkursiv">OBS! Ved aftagning af produkter fra andre behandlere
    pålægges et gebyr på min. 50 kr</p>

<div class="container-fluid bg-wd text-db py-3 ">
    <div class="row">
        <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-2">
            <p class="fed"> Brow- & Lash lift</p>
            <p>Brow & Lash Lift inkl. farve</p>
            <p>Brow Lift uden farve </p>
            <p>Brow Lift inkl. farve</p>
            <p>Lash Lift uden farve</p>
            <p>Lash Lift inkl. farve</p>
        </div>
        <div class="col-3 col-md-3 col-lg-3 fs-5">
            <p class="fed">Tid</p>
            <p>55 min.</p>
            <p>30 min.</p>
            <p>40 min.</p>
            <p>40 min.</p>
            <p>60 min.</p>
        </div>
        <div class="col-3 col-md-3 col-lg-3 fs-5">
            <p class="fed">Pris</p>
            <p>800 kr.</p>
            <p>400 kr.</p>
            <p>450 kr.</p>
            <p>400 kr.</p>
            <p>450 kr.</p>
        </div>
    </div>
</div>

<div class="container my-4">
    <!-- PRISLISTE SEKTIONSOVERSKRIFT -->
    <div class="bg-wd p-3 mb-3">
        <div class="row fw-bold pb-2">
            <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1 fed ">Brow- & Lash lift</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-md-1">Tid</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-1 offset-lg-0 offset-md-1">Pris</div>
        </div>

        <div class="row py-2">
            <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Brow & Lash Lift inkl. farve</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">55 min.</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">800 kr.</div>
        </div>
        <div class="row py-2">
            <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Brow Lift uden farve</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">30 min.</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">400 kr.</div>
        </div>
        <div class="row py-2">
            <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Brow Lift inkl. farve</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">40 min.</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">450 kr.</div>
        </div>
        <div class="row py-2">
            <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Lash Lift uden farve</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">40 min.</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">400 kr.</div>
        </div>
        <div class="row py-2">
            <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Lash Lift inkl. farve</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">60 min.</div>
            <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">450 kr.</div>
        </div>
    </div>
</div>



<?php include "footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
