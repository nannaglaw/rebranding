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
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec1">Brow-
            & Lash Lift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec2">Vipper</a>
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


<div class="mt-3" id="sec1">
    <p class="fed text-lb text-center fs-2 my-lg-4">Brow- & Lash lift</p>
    <div class="container">
        <div class="row">
            <!-- Accordion 1 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionOne">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
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
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionTwo">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
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
            <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion rounded-2 custom-accordion" id="accordionThree">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
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

<div class="mt-5" id="sec2">
    <p class="fed text-lb text-center fs-2 my-3">Vipper</p>
    <div class="container">
        <div class="row">
            <!-- Accordion 4 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionFour">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                W lashes
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionFour">
                            <div class="accordion-body">
                                <strong>Dette er accordion 1’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 5 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionFive">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Opfyldning af W lashes
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                             data-bs-parent="#accordionFive">
                            <div class="accordion-body">
                                <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 6 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionSix">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Premade Volume -
                                lashes
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                             data-bs-parent="#accordionSix">
                            <div class="accordion-body">
                                <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 7 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionSeven">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Opfyldning af
                                Premade Volume
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                             data-bs-parent="#accordionSeven">
                            <div class="accordion-body">
                                <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 8 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionEight">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Single lashes
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                             data-bs-parent="#accordionEight">
                            <div class="accordion-body">
                                <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder
                                eller andet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 9 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionNine>
                    <div class=" accordion-item border border-wd rounded shadow-sm
                ">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed text-db fs-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Opfyldning af
                        Single lashes
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                     data-bs-parent="#accordionNine">
                    <div class="accordion-body">
                        <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder
                        eller andet.
                    </div>
                </div>
            </div>
            <!-- Accordion 10 -->
            <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion rounded-2 custom-accordion" id="accordionTen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed text-db fs-3" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Forberedelser &
                                efterbehandling
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                             data-bs-parent="#accordionTen">
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