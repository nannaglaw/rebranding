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

<div class="container">
    <div class="row">
        <div class="justify-content-center align-items-center">

            <p class="text text-db ps-lg-5 display-4 text-center mt-5 mb-3"">Om Skønhedssalon THEIA</p>

            <div class="col-12 col-lg-10 col-md-10 fs-5 text-db">
                <p class="col-12 offset-lg-4 col-lg-7 offset-md-3 col-md-10 fs-5 text-lb">Vi startede vores rejse i 2022 under navnet <span
                            class="fw-semibold">Klinik S.K.Ø.N</span>, og vi er stolte af den udvikling, vi har
                    gennemgået
                    siden da. I takt med at vi voksede, blev det tid til forandring: nyt navn, nye rammer, samme
                    passion.
                </p>
                <p class="col-12 offset-lg-4 col-lg-7 offset-md-3 col-md-10 fs-5 text-lb"> Vi har skiftet navn fra <span class="fw-semibold">Klinik S.K.Ø.N</span> til
                    Skønhedssalon THEIA og er flyttet lige ind ved siden af den gamle adresse, så nu har vi lokale på
                    <a class="link-gr fw-medium"
                       href="https://www.google.com/maps/place/Skovs%C3%B8gade+9,+4200+Slagelse/@55.4032068,11.3544408,17z/data=!3m1!4b1!4m6!3m5!1s0x464d617c0ddf17b5:0x4e6fdabb9a326701!8m2!3d55.4032038!4d11.3570211!16s%2Fg%2F11c19xck96?entry=ttu&g_ep=EgoyMDI1MDQzMC4xIKXMDSoASAFQAw%3D%3D">
                        Skovsøgade 9, 4200 Slagelse. </a>
                    Her har vi skabt en endnu mere indbydende og afslappende atmosfære, hvor du kan forkæle dig selv og
                    finde ro fra hverdagens travlhed.</p>
                <p class="col-12 offset-lg-4 col-lg-7 offset-md-3 col-md-10 fs-5 text-lb">Vores mission, som hos <span class="fw-semibold">Klinik S.K.Ø.N</span>, er fortsat
                    den
                    samme – at give dig en <span class="fst-italic">personlig, professionel og skøn oplevelse</span>
                    hver
                    gang du besøger os.
                <p class="text-center text-lb fw-semibold fs-4 col-md-12 col-lg-9 offset-lg-3 offset-md-2">Vi glæder os til at byde dig velkommen i vores nye
                    omgivelser!</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-wd">
    <div class="row">
        <div class="col-lg-4 offset-lg-2 col-12 col-md-4">
            <img class="ms-5 ms-lg-0 ms-md-0 my-5 img-fluid" src="img/profil.webp" alt="Billede af Charlotte Larsen">
        </div>
        <div class="col-12 col-lg-6 col-md-8">
            <p class="text-center text-db display-6 pt-lg-5 pt-3 m-0 fed">Mød
                behandleren</p>
            <p class="text-center text-db display-5 kursiv">Charlotte Larsen</p>
            <div class="col-lg-9 offset-lg-2">
            <p class="fs-5 text-lb pb-5 px-4 text-start">Bag <span style="font-family:'Zodiak-Bold' ">Skønhedssalon THEIA</span>
                står en passioneret og professionel behandler, der er certificeret lash- og browlift-stylist
                med fokus på smukke, holdbare resultater. Derudover er hun certificeret i Shellac-behandlinger og
                arbejder med stor omhu for
                at sikre både æstetik og kvalitet i hver eneste behandling. Med faglig stolthed og øje for detaljen
                skabes en tryg og personlig
                oplevelse <span style="font-family: 'Zodiak-BoldItalic'">– hver gang.</span></p>
            </div>
            <div class="text-center m-0">
                <?php include "kontaktKnap.php"; ?>
            </div>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
