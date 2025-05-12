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

<div class="container mt-0 mt-lg-4 mt-md-4">

    <div class="row">
        <div class="col-12 text-center position-relative">
            <p class="text text-lb m-0 display-3" style="font-family: Zodiak">Velkommen til </p>
            <p class="text text-lb m-0 fw-medium display-3" style="font-family: Zodiak">Skønhedssalon THEIA</p>
            <p class="text text-lb m-0 fst-italic display-3" style="font-family: Zodiak">– din oase af skønhed og ro</p>

            <p class="text text-db mt-3 fs-3" style="font-family: Zodiak">
                Eksklusive behandlinger i rolige omgivelser – <br> negle, vipper & bryn
            </p>
            <div class="position-absolute monstera-bg">
                <!-- <img src="img/monstera.webp" class="" alt="monstera blad"> -->
            </div>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-0">
            <?php include "bookKnap.php"; ?>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <?php include "behandlingKnap.php"; ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


