
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
    <script src="https://kit.fontawesome.com/056ca3e665.js" crossorigin="anonymous"></script>
</head>

<body class="bg-wh">

<?php include "navbar.php"; ?>

<div class="position-relative">
    <img src="img/forsideM.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/mTelefon.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">
    <img src="img/forsideMd.webp" class="d-block img-fluid tablet-bg justify-content-center" alt="monstera blad">


</div>


<div class="container mt-0 mt-lg-5 mt-md-5 pt-lg-4 pt-md-4">

    <div class="row">
        <div class="col-12 text-overlay text-center position-relative">
            <p class="text text-lb m-0 extra display-2">Velkommen til </p>
            <h1 class="text text-lb m-0 extra display-2">Skønhedssalon THEIA</h1>
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
        <div class="col-12 col-lg-5 offset-lg-1 offset-md-1 ps-md-4">
            <img class="img-fluid ms-lg-0 ms-md-0 my-lg-5 mt-5 rounded-3" src="img/behandler.webp"
                 alt="Billede af Charlotte Larsen">
        </div>
        <div class="col-12 col-lg-6 px-lg-5 ">
            <h2 class="text-center text-lb display-6 pt-lg-5 pt-3 m-0 fed">Mød
                behandleren</h2>
            <p class="text-center text-lb display-5 kursiv">Charlotte Larsen</p>
            <p class="fs-5 text-db px-4 px-lg-5">Velkommen til min skønhedssalon.
                Mit navn er Charlotte Larsen, og jeg er indehaver af Skønhedssalon THEIA. Hvis du vil vide mere om mig
                og min salon kan du læse mere <a class="link-gr fed"
                                                 href="omTheia.php">her.</a></p>
            <div class="d-flex justify-content-center align-items-center"><img class="img-fluid pt-3 pb-2"
                                                                               src="img/ii.webp" alt="ii"></div>
            <p class="fs-5 text-db px-4 px-lg-5 pb-3 text-center">Jeg brænder for at fremhæve din naturlige skønhed med
                faglighed, præcision
                og æstetisk sans – altid med respekt for dig og dit udtryk.</p>
            <div class="d-flex justify-content-center mb-5 mb-md-0 gap-lg-5 gap-2">
                <?php include "bookKnap.php"; ?>
                <?php include "omTheiaKnap.php"; ?>

            </div>
        </div>
    </div>
</div>

<div class="position-relative">
    <img src="img/plante.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/plante.webp" class="d-block img-fluid telefon-bg justify-content-center mt-4" alt="monstera blad">

</div>

<div class="container">

    <h2 class="text text-lb m-0 fw-medium display-5 text-center pt-5 text-overlay">Behandlinger</h2>
    <p class="text text-db mb-3 kursiv fs-2 text-center text-overlay">Skønhed starter med selvforkælelse</p>

    <div class="row">
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4 text-center mt-5 d-flex justify-content-center text-overlay">
            <a class="btn knapperne btn-wd py-4 px-5" href="behandlinger.php" role="button"><img src="img/nails.gif"
                                                                                                 alt="negle animation"
                                                                                                 style="width:75px;height:75px;">
                <h3 class="text text-db fs-3 fw-normal">Negle</h3></a>
        </div>
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4 text-center mt-5 d-flex justify-content-center text-overlay">
            <a class="btn btn-wd knapperne p-4 px-5 " href="behandlinger.php" role="button"><img
                        src="img/eyebrows.gif"
                        alt="øjenbryn animation"
                        style="width:75px;height:75px;">
                <h3 class="text text-db fs-3 fw-normal">Bryn</h3></a>
        </div>
        <div class="rounded rounded-2 col-12 col-lg-4 col-md-4 text-center mt-5 d-flex justify-content-center text-overlay">
            <a class="btn btn-wd knapperne p-4 px-5" href="behandlinger.php" role="button"><img
                        src="img/eyelashes.gif"
                        alt="Øjenvippe animation"
                        style="width:75px;height:75px;">
                <h3 class="text text-db fs-3 fw-normal">Vipper</h3></a>
        </div>
        <div class="d-lg-grid col-lg-4 col-12 mx-auto text-center pt-5 pb-5">
            <?php include "prislisteKnap.php"; ?>

        </div>
    </div>
</div>


<div>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="container cBorder">
            <h2 class="text text-lb m-0 fw-medium display-5 text-center pt-5 text-overlay">Udtalelser</h2>

            <div class="row justify-content-center">
                <div class="col-9 col-md-10 col-lg-8">
                    <div class="carousel-inner text-center text-db mt-4">

                        <div class="carousel-item active">
                            <p class="fs-5 fst-italic"><span class="fedkursiv">Billig og professionel</span>
                                skønhedssalon i Slagelse! Mine negle blev
                                perfekte – super pris og høj kvalitet.</p>
                            <p class="mb-0 fs-5">– Sara R.</p>
                        </div>

                        <div class="carousel-item">
                            <p class="fs-5 fst-italic">THEIA i Slagelse er mit valg til vipper og bryn.<span
                                        class="fedkursiv"> Fantastisk
                                    service og gode priser!</span></p>
                            <p class="mb-0 fs-5">– Matilda V.F.</p>
                        </div>

                        <div class="carousel-item">
                            <p class="fs-5 fst-italic">THEIA er en <span class="fedkursiv">ægte selvforkælelses oplevelse</span>
                                i Slagelse – billigt, luksuriøst og
                                perfekt til negle og bryn.</p>
                            <p class="mb-0 fs-5">– Cecilie M.</p>
                        </div>

                        <div class="carousel-item">
                            <p class="fs-5 fst-italic"><span class="fedkursiv">Rolig og hyggelig</span> skønhedssalon i
                                Slagelse. Elsker deres arbejde
                                med vipper og negle – billigt og godt!</p>
                            <p class="mb-0 fs-5">– Emma V.</p>
                        </div>

                        <div class="carousel-item">
                            <p class="fs-5 fst-italic">Fik lavet gele-negle i Slagelse – <span class="fedkursiv">bedste resultat nogensinde.</span>
                                THEIA er både billig og luksuriøs.</p>
                            <p class="mb-0 fs-5">– Line A.</p>
                        </div>

                        <div class="carousel-item">
                            <p class="fs-5 fst-italic"><span class="fedkursiv">Top kvalitet på lash lift og bryn</span>
                                hos THEIA i Slagelse. Rimelige
                                priser og skøn service!</p>
                            <p class="mb-0 fs-5">– Isabella F.</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <i class="fa-solid fa-arrow-left fa-2xl" aria-hidden="true" style="color: #664b3c;"></i>
            <span class="visually-hidden">Forrige</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <i class="fa-solid fa-arrow-right fa-2xl" aria-hidden="true" style="color: #664b3c;"></i>
            <span class="visually-hidden">Næste</span>
        </button>

    </div>


    <div class="sticky-bottom d-md-none d-lg-none">

        <a href="https://klinik-skoen.planway.com/" class="btn book-btn btn-primary w-100"><i
                    class="fa-solid fa-calendar-days pe-4" style="color: #ffffff;"></i><span class="btn-text">Book en tid her</span><i
                    class="fa-solid fa-calendar-days ps-4" style="color: #ffffff;"></i></a>

    </div>


    <?php include "footer.php"; ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


