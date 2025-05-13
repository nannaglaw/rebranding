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

<ul class="nav justify-content-center pt-3 border-start">
    <li class="nav-item">
        <a class="nav-link active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#">Brow- & Lash Lift</a>
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

<div class="container">
    <div class="row">
        <div></div>

    </div>
</div>

<?php include "footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
