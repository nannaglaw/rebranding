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
    <p class="fed text-lb text-center fs-2 my-lg-4">Brow- & Lash Lift</p>
    <div class="container">
        <div class="row">
            <!-- Accordion 1 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionOne">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Brow Lift
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                             data-bs-parent="#accordionOne">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3">Et Brow Lift er en behandling, der løfter og former brynene for at give et mere åbent, friskt og løftet udtryk.
                                    Velegnet til dig der ønsker at spare tid på daglig brynpleje, hvis du har flade eller nedadgående bryn.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 30 minutter </span> uden farvning, og 40 minutter hvis farvning er inkluderet.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Resultatet varer typisk i 4 til 6 uger, afhængigt af din hårvækst og efterpleje.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 400 kr. (inkl. farve 450 kr.) </p>
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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Lash Lift
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionTwo">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3">Et Lash Lift løfter og bukker dine naturlige vipper fra roden, hvilket giver et smukt, åbent blik uden behov for vippebukker eller extensions.
                                    Velegnet til dig der ønsker <span class="fedkursiv">et naturligt look.</span> </p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 40 minutter </span> uden farvning, og 60 minutter hvis farvning er inkluderet.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Effekten varer normalt i 4 til 6 uger, men kan vare længere med korrekt pleje</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 400 kr. (inkl. farve 450 kr.) </p>
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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Forberedelser &
                                efterpleje
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionThree">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Før:</span> Til behandlingen Lash Lift er det vigtigt at der ikke er nogle produkter på vipperne, herunder mascara. Hvis du fjerne mascara lige inden behandlingen anbefaler vi at bruge en øjenmakeupfjerne som ikke indeholder olie, for det bedst mulige resultat af behandlingen.</p>
                                    <p class="px-lg-5 px-4">Derudover må du ikke have kontaktlinser i under behandlingen. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Efter:</span> For at opretholde de bedste resultater anbefales det at undgå vand, damp og olieholdige produkter omkring øjnene i de første 24-48 timer efter behandlingen.</p>
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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                W-Lashes
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionFour">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3">W lash-extensions giver fyldige vipper, der er fyldigere end single lashes, men mindre tætte end volumen lashes.
                                    Vipperne er formet i et W, hvor de krydser hinanden for et smukt resultat.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 105 min.. </span> Her bruges UV-lim, der hærder på 1-2 sekunder under UV-lys. Denne lim bliver ikke påvirket af temperatur og luftfugtighed, hvilket giver en længere holdbarhed.
                                    Da limen hærder hurtigt og uden dampe, er den ideel til sarte øjne, da den eliminerer generende tåreflåd.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Typisk 3-4 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 730 kr. </p>
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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Opfyldning af W-Lashes
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                             data-bs-parent="#accordionFive">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 2-3 uger:</span><br> Denne opfyldning er til dig der ønsker at få dine W lashes opfrisket, hvis du stadig har mere end 15 vipper på hvert øje tilbage. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 55 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 430 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 4 uger:</span><br> Denne opfyldning er til dig der ønsker at få dine W lashes opfrisket, hvis du stadig har mere end 15 vipper på hvert øje tilbage, efter 4 uger. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 80 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 575 kr. </p>
                                <p class="px-lg-5 px-4"><span class="fedkursiv">OBS</span> Hvis der er mindre end 15 vipper tilbage på hver øje skal du bestille “NYT SÆT - W-Lashes”.</p>
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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Premade Volume-Lashes
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                             data-bs-parent="#accordionSix">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3">Premade Volume-Lashes er vipper, der allerede er forberedt og samlet i små vifteformede grupper, som er klar til at blive påført på dine naturlige vipper. I modsætning til individuelle vipper, som påsættes én ad gangen, sparer premade lashes tid, da flere vipper kan påsættes på én gang. De bruges ofte til volumenvippebehandlinger og kan skabe <span class="fedkursiv">et fyldigere og mere dramatisk look.</span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 115 min.. </span> Her bruges UV-lim, der hærder på 1-2 sekunder under UV-lys. Denne lim bliver ikke påvirket af temperatur og luftfugtighed, hvilket giver en længere holdbarhed.
                                    Da limen hærder hurtigt og uden dampe, er den ideel til sarte øjne, da den eliminerer generende tåreflåd.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Typisk 3-4 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 830 kr. </p>
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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Opfyldning af
                                Premade Volume
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                             data-bs-parent="#accordionSeven">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 1 uge:</span><br> Hvis du ønsker, at dine vipper altid skal være perfekte, kan du få dem opfyldt med max én uges mellemrum. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 40 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 350 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 2-3 uger:</span><br>Denne opfyldning er til dig der ønsker at få dine Premade Volume lashes opfrisket, hvis du stadig har mere end 15 vipper på hvert øje tilbage. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 80 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 450 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 4 uger:</span><br> Denne opfyldning er til dig der ønsker at få dine Premade Volume lashes opfrisket, hvis du stadig har mere end 15 vipper på hvert øje tilbage.</p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 80 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 575 kr.
                                <p class="px-lg-5 px-4"><span class="fedkursiv">OBS</span> Hvis der er mindre end 15 vipper tilbage på hver øje skal du bestille nyt sæt.</p></p>

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
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Single Lashes
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                             data-bs-parent="#accordionEight">
                            <div class="accordion-body">
                                <p class="px-lg-5 px-4 pt-3">Der er to typer Single Lashes som man kan vælge i mellem, <span class="fed">Laser Mink Lashes</span> og <span class="fed">Super Flat Lashes</span>, som har to forskellige udtryk.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Laser Mink Lashes</span> er syntetiske vipper, der ligner mink, men er lettere og blødere end traditionelle syntetiske vipper. De giver et naturligt og fyldigt look, perfekt til dem, der ønsker et elegant og blødt resultat uden tunge vipper.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Super Flat Single Lashes</span> er flade individuelle vipper, der dækker et større område af den naturlige vippe, hvilket skaber et fyldigt og dramatisk look med mindre vægt. De er ideelle til volumenvippebehandlinger, hvor du ønsker meget volumen.</p>
                               <p class="px-lg-5 px-4 kursiv">Oplys, hvilke af vipperne du ønsker inden din behandling. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 100 min.. </span> Her bruges UV-lim, der hærder på 1-2 sekunder under UV-lys. Denne lim bliver ikke påvirket af temperatur og luftfugtighed, hvilket giver en længere holdbarhed.
                                    Da limen hærder hurtigt og uden dampe, er den ideel til sarte øjne, da den eliminerer generende tåreflåd.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Typisk 3-4 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 695 kr. </p>
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
                    <button class="accordion-button collapsed text-db fs-4" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Opfyldning af
                        Single Lashes
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                     data-bs-parent="#accordionNine">
                    <div class="accordion-body">
                        <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 1 uge:</span><br>Hvis du ønsker, at dine vipper altid skal være perfekte, kan du få dem opfyldt med max én uges mellemrum.</p>
                        <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 40 min.</p>
                        <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 295 kr. </p>
                        <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 2-3 uger:</span><br>Denne opfyldning er til dig der ønsker at få dine Single Lashes opfrisket, hvis du stadig har mere end 15 vipper på hvert øje tilbage. </p>
                        <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 55 min.</p>
                        <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 400 kr. </p>
                        <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 4 uger:</span><br> Denne opfyldning er til dig der ønsker at få dine Single Lashes opfrisket, hvis du stadig har mere end 15 vipper på hvert øje tilbage efter 4 uger.</p>
                        <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 75 min.</p>
                        <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 500 kr.
                        <p class="px-lg-5 px-4"><span class="fedkursiv">OBS</span> Hvis der er mindre end 15 vipper tilbage på hver øje skal du bestille nyt sæt.</p></p>

                    </div>
                </div>
            </div>
            <!-- Accordion 10 -->
            <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion rounded-2 custom-accordion" id="accordionTen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
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