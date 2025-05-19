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
    <img src="img/prisliste4.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste4.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<p class="text text-overlay text-db ps-lg-5 display-4 text-center mt-5 mb-3">Prisliste</p>

<ul class="nav justify-content-center py-3 border-start ">
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec1">Brow-
            &
            Lash Lift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page"
           href="#sec2">Vipper</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page"
           href="#sec3">Bryn</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec4">Mani-
            &
            Pedicure</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-end border-2 border-lb" aria-current="page"
           href="#sec5">Japansk Lifting</a>
    </li>
</ul>

<p class="d-flex justify-content-center p-3 fs-6 text-lb fedkursiv">OBS! Ved aftagning af produkter fra andre behandlere
    pålægges et gebyr på min. 50 kr</p>

<div class="position-relative">
    <img src="img/prisliste.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<div id="sec1">
    <div class="container my-4 text-overlay">
        <!-- PRISLISTE SEKTIONSOVERSKRIFT -->
        <div class="bg-wd p-3 mb-3">
            <div class="row pb-2">
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
</div>

<div class="position-relative">
    <img src="img/prisliste2.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste2.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<div id="sec2">
    <div class="container my-4 text-overlay">
        <!-- PRISLISTE SEKTIONSOVERSKRIFT -->
        <div class="bg-wd p-3 mb-3">
            <div class="row fw-bold pb-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1 fed ">Vipper</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-md-1">Tid</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-1 offset-lg-0 offset-md-1">Pris</div>
            </div>

            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">W-Lashes (Nyt sæt)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">105 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">750 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">W-Lashes (opfyldning 2-3 uger)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">55 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">430 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">W-Lashes (opfyldning 4 uger)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">65 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">530 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Premade Volume (nyt sæt)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">115 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">830 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Premade Volume (opfyldning 1 uge)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">40 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">350 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Premade Volume (opfyldning 2-3 uger)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">80 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">450 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Premade Volume (opfyldning 4 uger)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">80 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">575 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Single lashes (nyt sæt)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">100 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">695 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Single lashes (opfyldning 1 uge)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">40 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">295 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Single lashes (opfyldning 2-3 uger)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">55 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">400 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Single lashes (opfyldning 4 uger)</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">75 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">500 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Aftagning af vipper</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">25 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">0 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Farve af naturlige vipper</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">30 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">75 kr.</div>
            </div>
        </div>
    </div>
</div>

<div id="sec3">
    <div class="container my-4">
        <!-- PRISLISTE SEKTIONSOVERSKRIFT -->
        <div class="bg-wd p-3 mb-3">
            <div class="row fw-bold pb-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1 fed ">Bryn</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-md-1">Tid</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-1 offset-lg-0 offset-md-1">Pris</div>
            </div>

            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Ret af bryn m. pincet</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">20 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">45 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Ret og farve af bryn m. pincet</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">25 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">70 kr.</div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative">
    <img src="img/prisliste3.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste3.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<div id="sec4">
    <div class="container my-4 text-overlay">
        <!-- PRISLISTE SEKTIONSOVERSKRIFT -->
        <div class="bg-wd p-3 mb-3">
            <div class="row fw-bold pb-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1 fed ">Manicure & Pedicure</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-md-1">Tid</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-1 offset-lg-0 offset-md-1">Pris</div>
            </div>

            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Shellac hel farve</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">60 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">350 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Shellac m. Design</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">75 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">350 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Aftagning af shellac + ny farve</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">80 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">350 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Aftagning af shellac + ny farve m. design</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">80 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">350 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Shellac hel farve + forstærkning</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">90 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">395 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Shellac m. design + forstærkning</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">95 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">395 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Opfyldning af forstærkning m. hel farve eller
                    design
                </div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">95 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">370 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Pedicure</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">60 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">350 kr.</div>
            </div>
            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Aftagning af shellac</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">35 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">100 kr.</div>
            </div>
        </div>
    </div>
</div>

<div id="sec5">
    <div class="container my-4">
        <!-- PRISLISTE SEKTIONSOVERSKRIFT -->
        <div class="bg-wd p-3 mb-3">
            <div class="row fw-bold pb-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1 fed ">Japansk lifting</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-md-1">Tid</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 fed offset-1 offset-lg-0 offset-md-1">Pris</div>
            </div>

            <div class="row py-2">
                <div class="col-4 col-md-4 col-lg-4 fs-5 offset-lg-1">Japansk lifting</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-md-1">70 min.</div>
                <div class="col-3 col-md-3 col-lg-3 fs-5 offset-1 offset-lg-0 offset-md-1">500 kr.</div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <p class="text-center p-3 m-4 fs-4 text-lb fedkursiv">Altid tjek oplysningerne om din behandling ud inden du møder
        op
        til din tid, da der kan være vigtige ting du skal forbedre dig på inden!
    </p>
    <div class="justify-content-center d-flex gap-4">
        <?php include "bookKnap.php"; ?>
        <?php include "behandlingKnap.php"; ?>
    </div>
</div>


<?php include "footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
