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

<div class="container">
    <div class="row">
        <!-- Accordion 1 -->
        <div class="col-12 col-lg-6">
            <div class="accordion custom-accordion" id="accordionOne">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
                        <div class="accordion-body">
                            <strong>Dette er accordion 1’s indhold.</strong> Her kan du placere tekst, billeder eller andet.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accordion 2 -->
        <div class="col-12 col-lg-6">
            <div class="accordion custom-accordion" id="accordionTwo">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionTwo">
                        <div class="accordion-body">
                            <strong>Dette er accordion 2’s indhold.</strong> Her kan du placere tekst, billeder eller andet.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accordion 3 -->
        <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4">
            <div class="accordion custom-accordion" id="accordionThree">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionThree">
                        <div class="accordion-body">
                            <strong>Dette er accordion 3’s indhold.</strong> Du kan også tilføje formularer eller billeder her.
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