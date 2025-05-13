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

<p class="text text-lb m-0 fw-medium display-5 text-center mt-3" style="font-family: Zodiak">Behandlinger</p>

<ul class="nav justify-content-center pt-3 border-start pb-5">
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec1">Brow- & Lash Lift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#">Vipper</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#">Bryn</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#">Mani- & Pedicure</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-end border-2 border-lb" aria-current="page" href="#">Japansk Lifting</a>
    </li>
</ul>


<div class="mt-3" id="sec1">
    <p class="fed text-lb text-center fs-2 my-lg-4">Brow- & Lash lift</p>
    <div class="container">
        <div class="row">
            <!-- Accordion 1 -->
            <div class="col-12 col-lg-6">
                <div class="accordion custom-accordion" id="accordionOne">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed text-db fs-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Brow Lift
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                             data-bs-parent="#accordionOne">
                            <div class="accordion-body">
                                <strong>Dette er accordion 1’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 2 -->
            <div class="col-12 col-lg-6">
                <div class="accordion custom-accordion" id="accordionTwo">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed text-db fs-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Lash Lift
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionTwo">
                            <div class="accordion-body">
                                <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 3 -->
            <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4">
                <div class="accordion rounded-2 custom-accordion" id="accordionThree">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed text-db fs-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Forberedelser &
                                efterbehandling
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionThree">
                            <div class="accordion-body">
                                <strong>Dette er accordion 3’s indhold.</strong> Du kan også tilføje formularer eller
                                billeder her.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>