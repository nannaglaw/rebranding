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
    <script src="https://kit.fontawesome.com/056ca3e665.js" crossorigin="anonymous"></script>

</head>

<body class="bg-wh">

<?php include "navbar.php"; ?>

<div class="position-relative">
    <img src="img/omT.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/omTTelf.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">
    <img src="img/omThM.webp" class="d-block img-fluid tablet-bg justify-content-center" alt="monstera blad">

</div>

<div class="container">
    <div class="row">
        <div class="justify-content-center align-items-center text-overlay">

            <h1 class="text text-db ps-lg-5 display-4 text-center mt-5 mb-3">Om Skønhedssalon THEIA</h1>

            <div class="col-12 col-lg-10 col-md-10 fs-5 text-db">
                <p class="col-12 offset-lg-4 col-lg-7 offset-md-3 col-md-10 fs-5 text-lb">Vi startede vores rejse i 2022
                    under navnet <span
                            class="fw-semibold">Klinik S.K.Ø.N</span>, og vi er stolte af den udvikling, vi har
                    gennemgået
                    siden da. I takt med at vi voksede, blev det tid til forandring: nyt navn, nye rammer, samme
                    passion.
                </p>
                <p class="col-12 offset-lg-4 col-lg-7 offset-md-3 col-md-10 fs-5 text-lb"> Vi har skiftet navn fra <span
                            class="fw-semibold">Klinik S.K.Ø.N</span> til
                    Skønhedssalon THEIA og er flyttet lige ind ved siden af den gamle adresse, så nu har vi lokale på
                    <a class="link-gr fw-medium"
                       href="https://www.google.com/maps/place/Skovs%C3%B8gade+9,+4200+Slagelse/@55.4032068,11.3544408,17z/data=!3m1!4b1!4m6!3m5!1s0x464d617c0ddf17b5:0x4e6fdabb9a326701!8m2!3d55.4032038!4d11.3570211!16s%2Fg%2F11c19xck96?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D">
                        Skovsøgade 9, 4200 Slagelse. </a>
                    Her har vi skabt en endnu mere indbydende og afslappende atmosfære, hvor du kan forkæle dig selv og
                    finde ro fra hverdagens travlhed.</p>
                <p class="col-12 offset-lg-4 col-lg-7 offset-md-3 col-md-10 fs-5 text-lb">Vores mission, som hos <span
                            class="fw-semibold">Klinik S.K.Ø.N</span>, er fortsat
                    den
                    samme – at give dig en <span class="fst-italic">personlig, professionel og skøn oplevelse</span>
                    hver
                    gang du besøger os.
                <p class="text-center text-lb fw-semibold fs-4 col-md-12 col-lg-9 offset-lg-3 offset-md-2">Vi glæder os
                    til at byde dig velkommen i vores nye
                    omgivelser!</p>
            </div>
        </div>
    </div>

    <div class="justify-content-center d-flex gap-4 pb-4">
        <?php include "bookKnap.php"; ?>
        <?php include "behandlingKnap.php"; ?>
    </div>

</div>

<div class="container-fluid bg-wd">
    <div class="row">
        <div class="col-lg-5 offset-lg-1 col-12 col-md-4 ">
            <img class="ms-lg-0 ms-md-0 my-5 img-fluid rounded-3" src="img/behandler.webp"
                 alt="Billede af Charlotte Larsen">
        </div>
        <div class="col-12 col-lg-6 col-md-8">
            <h2 class="text-center text-db display-6 pt-lg-5 col-md-12 m-0 fed">Mød
                behandleren</h2>
            <p class="text-center text-db display-5 kursiv">Charlotte Larsen</p>
            <div class="col-lg-9 offset-lg-2">
                <p class="fs-5 text-lb px-4 py-lg-2 text-start">Bag <span style="font-family:'Zodiak-Bold' ">Skønhedssalon THEIA</span>
                    står en passioneret og professionel behandler, der er certificeret lash- og browlift-stylist
                    med fokus på smukke, holdbare resultater. Derudover er hun certificeret i Shellac-behandlinger og
                    arbejder med stor omhu for
                    at sikre både æstetik og kvalitet i hver eneste behandling. Med faglig stolthed og øje for detaljen
                    skabes en tryg og personlig
                    oplevelse <span style="font-family: 'Zodiak-BoldItalic'">– hver gang.</span></p>
            </div>
            <div class="text-center py-4">
                <?php include "kontaktKnap.php"; ?>
            </div>
        </div>
    </div>
</div>


<div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="container cuBorder mt-5">
        <h2 class="text text-lb m-0 fw-medium display-5 text-center pt-5 text-overlay">Udtalelser</h2>

        <div class="row justify-content-center">
            <div class="col-9 col-md-10 col-lg-8">
                <div class="carousel-inner text-center text-db mt-4">

                    <div class="carousel-item active">
                        <p class="fs-5 fst-italic"><span class="fedkursiv">Billig og professionel</span>
                            skønhedssalon i Slagelse! Mine negle blev
                            perfekte – super pris og høj kvalitet.</p>
                        <p class="mb-5 fs-5">– Sara R.</p>
                    </div>

                    <div class="carousel-item">
                        <p class="fs-5 fst-italic">THEIA i Slagelse er mit valg til vipper og bryn.<span
                                    class="fedkursiv"> Fantastisk
                                    service og gode priser!</span></p>
                        <p class="mb-5 fs-5">– Matilda V.F.</p>
                    </div>

                    <div class="carousel-item">
                        <p class="fs-5 fst-italic">THEIA er en <span
                                    class="fedkursiv">ægte selvforkælelses oplevelse</span>
                            i Slagelse – billigt, luksuriøst og
                            perfekt til negle og bryn.</p>
                        <p class="mb-5 fs-5">– Cecilie M.</p>
                    </div>

                    <div class="carousel-item">
                        <p class="fs-5 fst-italic"><span class="fedkursiv">Rolig og hyggelig</span> skønhedssalon i
                            Slagelse. Elsker deres arbejde
                            med vipper og negle – billigt og godt!</p>
                        <p class="mb-5 fs-5">– Emma V.</p>
                    </div>

                    <div class="carousel-item">
                        <p class="fs-5 fst-italic">Fik lavet gele-negle i Slagelse – <span class="fedkursiv">bedste resultat nogensinde.</span>
                            THEIA er både billig og luksuriøs.</p>
                        <p class="mb-5 fs-5">– Line A.</p>
                    </div>

                    <div class="carousel-item">
                        <p class="fs-5 fst-italic"><span class="fedkursiv">Top kvalitet på lash lift og bryn</span>
                            hos THEIA i Slagelse. Rimelige
                            priser og skøn service!</p>
                        <p class="mb-5 fs-5">– Isabella F.</p>
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


<h2 class="text text-db ps-lg-5 display-4 text-center mt-5 mb-5">Yderligere informationer</h2>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 px-4">
            <h3 class="text-db fs-3 fed mb-2 ">Stempelkort</h3>
            <p class="fs-5 text-lb ">På bagsiden af visitkortet er der et stempelkort. Ved hver behandling modtager du
                ét stempel.<span
                        class="fed"> Når du har opnået 6 stempler, tilbyder vi 25 % rabat på din 7. behandling.</span>
            </p>
        </div>
        <div class="col-12 col-lg-4 px-4">
            <h3 class="text-db fs-3 fed mb-2 pe-5">Aldersgrænse</h3>
            <p class="fs-5 text-lb">Alle behandlinger har en aldersgrænse på minimum 15 år, medmindre der er samtykke
                fra en forældre. </p>
        </div>
        <div class="col-12 col-lg-4 px-4">
            <h3 class="text-db fs-3 fed mb-2">Afbudspolitik</h3>
            <p class="fs-5 text-lb">Afbud skal meldes mindst <span class="fed">24 timer</span> før behandlingstiden
                starter.
                Herefter vil der blive opkrævet det fulde beløb for behandlingen.
                Dette gælder også ved udeblivelse eller hvis man melder afbud to gange inden for 2 uger. </p>
        </div>

    </div>
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
