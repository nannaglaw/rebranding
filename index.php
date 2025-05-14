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


<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center mb-3 mb-md-0 gap-5">
            <?php include "bookKnap.php"; ?>
            <?php include "behandlingKnap.php"; ?>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


