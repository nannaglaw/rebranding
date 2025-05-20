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
    <img src="img/prisliste4.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste4.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<p class="text text-db ps-lg-5 display-4 text-center mt-5 mb-3 text-overlay">Behandlinger</p>
<ul class="nav justify-content-center pt-3 border-start pb-5">
    <li class="nav-item">
        <a class="nav-link navlink active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec1">Brow-
            & Lash Lift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link navlink active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec2">Vipper</a>
    </li>
    <li class="nav-item">
        <a class="nav-link navlink active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page"
           href="#sec3">Bryn</a>
    </li>
    <li class="nav-item">
        <a class="nav-link navlink active text-lb fs-5 fed border-start border-2 border-lb" aria-current="page" href="#sec4">Mani-
            &
            Pedicure</a>
    </li>
    <li class="nav-item">
        <a class="nav-link navlink active text-lb fs-5 fed border-start border-end border-2 border-lb" aria-current="page"
           href="#5">Japansk Lifting</a>
    </li>
</ul>

<div class="position-relative">
    <img src="img/prisliste.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<div class="mt-3 text-overlay" id="sec1">
    <p class="fed text-lb text-center fs-2 my-lg-2">Brow- & Lash Lift</p>
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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Et Brow Lift er en behandling, der løfter og former brynene
                                    for at give et mere åbent, friskt og løftet udtryk.
                                    Velegnet til dig der ønsker at spare tid på daglig brynpleje, hvis du har flade
                                    eller nedadgående bryn.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 30 minutter </span> uden
                                    farvning, og 40 minutter hvis farvning er inkluderet.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Resultatet varer typisk i 4
                                    til 6 uger, afhængigt af din hårvækst og efterpleje.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 400 kr. (inkl. farve 450 kr.)
                                </p>
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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Et Lash Lift løfter og bukker dine naturlige vipper fra
                                    roden, hvilket giver et smukt, åbent blik uden behov for vippebukker eller
                                    extensions.
                                    Velegnet til dig der ønsker <span class="fedkursiv">et naturligt look.</span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 40 minutter </span> uden
                                    farvning, og 60 minutter hvis farvning er inkluderet.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Effekten varer normalt i 4
                                    til 6 uger, men kan vare længere med korrekt pleje</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 400 kr. (inkl. farve 450 kr.)
                                </p>
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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Før:</span> Til behandlingen Lash Lift er
                                    det vigtigt at der ikke er nogle produkter på vipperne, herunder mascara. Hvis du
                                    fjerne mascara lige inden behandlingen anbefaler vi at bruge en øjenmakeupfjerne som
                                    ikke indeholder olie, for det bedst mulige resultat af behandlingen.</p>
                                <p class="px-lg-5 px-4">Derudover må du ikke have kontaktlinser i under
                                    behandlingen. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Efter:</span> For at opretholde de bedste
                                    resultater anbefales det at undgå vand, damp og olieholdige produkter omkring øjnene
                                    i de første 24-48 timer efter behandlingen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative">
    <img src="img/prisliste2.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste2.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">

</div>

<div class="mt-5 text-overlay" id="sec2">
    <p class="fed text-lb text-center fs-2 my-2">Vipper</p>
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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">W lash-extensions giver fyldige vipper, der er fyldigere
                                    end single lashes, men mindre tætte end volumen lashes.
                                    Vipperne er formet i et W, hvor de krydser hinanden for et smukt resultat.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 105 min.. </span> Her
                                    bruges UV-lim, der hærder på 1-2 sekunder under UV-lys. Denne lim bliver ikke
                                    påvirket af temperatur og luftfugtighed, hvilket giver en længere holdbarhed.
                                    Da limen hærder hurtigt og uden dampe, er den ideel til sarte øjne, da den
                                    eliminerer generende tåreflåd.</p>

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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 2-3 uger:</span><br>
                                    Denne opfyldning er til dig der ønsker at få dine W lashes opfrisket, hvis du stadig
                                    har mere end 15 vipper på hvert øje tilbage. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 55 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 430 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 4 uger:</span><br> Denne
                                    opfyldning er til dig der ønsker at få dine W lashes opfrisket, hvis du stadig har
                                    mere end 15 vipper på hvert øje tilbage, efter 4 uger. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 80 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 575 kr. </p>
                                <p class="px-lg-5 px-4"><span class="fedkursiv">OBS</span> Hvis der er mindre end 15
                                    vipper tilbage på hver øje skal du bestille “NYT SÆT - W-Lashes”.</p>
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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Premade Volume-Lashes er vipper, der allerede er forberedt
                                    og samlet i små vifteformede grupper, som er klar til at blive påført på dine
                                    naturlige vipper. I modsætning til individuelle vipper, som påsættes én ad gangen,
                                    sparer premade lashes tid, da flere vipper kan påsættes på én gang. De bruges ofte
                                    til volumenvippebehandlinger og kan skabe <span class="fedkursiv">et fyldigere og mere dramatisk look.</span>
                                </p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 115 min.. </span> Her
                                    bruges UV-lim, der hærder på 1-2 sekunder under UV-lys. Denne lim bliver ikke
                                    påvirket af temperatur og luftfugtighed, hvilket giver en længere holdbarhed.
                                    Da limen hærder hurtigt og uden dampe, er den ideel til sarte øjne, da den
                                    eliminerer generende tåreflåd.</p>

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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 1 uge:</span><br> Hvis
                                    du ønsker, at dine vipper altid skal være perfekte, kan du få dem opfyldt med max én
                                    uges mellemrum. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 40 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 350 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 2-3 uger:</span><br>Denne
                                    opfyldning er til dig der ønsker at få dine Premade Volume lashes opfrisket, hvis du
                                    stadig har mere end 15 vipper på hvert øje tilbage. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 80 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 450 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 4 uger:</span><br> Denne
                                    opfyldning er til dig der ønsker at få dine Premade Volume lashes opfrisket, hvis du
                                    stadig har mere end 15 vipper på hvert øje tilbage.</p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 80 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 575 kr.
                                <p class="px-lg-5 px-4"><span class="fedkursiv">OBS</span> Hvis der er mindre end 15
                                    vipper tilbage på hver øje skal du bestille nyt sæt.</p></p>

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
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Der er to typer Single Lashes som man kan vælge i mellem,
                                    <span class="fed">Laser Mink Lashes</span> og <span
                                            class="fed">Super Flat Lashes</span>, som har to forskellige udtryk.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Laser Mink Lashes</span> er syntetiske vipper,
                                    der ligner mink, men er lettere og blødere end traditionelle syntetiske vipper. De
                                    giver et naturligt og fyldigt look, perfekt til dem, der ønsker et elegant og blødt
                                    resultat uden tunge vipper.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Super Flat Single Lashes</span> er flade
                                    individuelle vipper, der dækker et større område af den naturlige vippe, hvilket
                                    skaber et fyldigt og dramatisk look med mindre vægt. De er ideelle til
                                    volumenvippebehandlinger, hvor du ønsker meget volumen.</p>
                                <p class="px-lg-5 px-4 kursiv">Oplys, hvilke af vipperne du ønsker inden din
                                    behandling. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 100 min.. </span> Her
                                    bruges UV-lim, der hærder på 1-2 sekunder under UV-lys. Denne lim bliver ikke
                                    påvirket af temperatur og luftfugtighed, hvilket giver en længere holdbarhed.
                                    Da limen hærder hurtigt og uden dampe, er den ideel til sarte øjne, da den
                                    eliminerer generende tåreflåd.</p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Typisk 3-4 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 695 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 9 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionNine">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                Opfyldning af
                                Single Lashes
                            </button>
                        </h2>

                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                             data-bs-parent="#accordionNine">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 1 uge:</span><br>Hvis du
                                    ønsker,
                                    at dine vipper altid skal være perfekte, kan du få dem opfyldt med max én uges
                                    mellemrum.
                                </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 40 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 295 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 2-3 uger:</span><br>Denne
                                    opfyldning er til dig der ønsker at få dine Single Lashes opfrisket, hvis du stadig
                                    har
                                    mere
                                    end 15 vipper på hvert øje tilbage. </p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 55 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 400 kr. </p>
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Opfyldning efter 4 uger:</span><br> Denne
                                    opfyldning er til dig der ønsker at få dine Single Lashes opfrisket, hvis du stadig
                                    har
                                    mere
                                    end 15 vipper på hvert øje tilbage efter 4 uger.</p>
                                <p class="px-lg-5 px-4 m-0"><span class="fed">Varighed:</span> 75 min.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 500 kr.
                                <p class="px-lg-5 px-4"><span class="fedkursiv">OBS</span> Hvis der er mindre end 15
                                    vipper
                                    tilbage på hver øje skal du bestille nyt sæt.</p></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 10 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionTen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                Aftagning af vipper
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                             data-bs-parent="#accordionTen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Aftagning af vipper er <span class="kursiv">gratis</span>
                                    hvis
                                    du har fået lavet vipperne her i skønhedssalonen. Hvis du ønsker aftagning af vipper
                                    som
                                    er lavet hos en anden er <span class="fed">prisen 100 kr.</span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 25 min. </span></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accordion 11 -->
            <div class="col-12 col-lg-6 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion custom-accordion" id="accordionEleven">
                    <div class=" accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseEleven" aria-expanded="false"
                                    aria-controls="collapseEleven">
                                Farve af vipper
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                             data-bs-parent="#accordionEleven">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Farvning af vipper giver dine øjne et mere defineret og
                                    vågent
                                    look
                                    uden behov for mascara.
                                    Behandlingen er ideel for dem, der ønsker mørkere vipper, men ikke vil bruge makeup
                                    dagligt.
                                    Det er velegnet til personer med lyse vipper, aktive livsstile eller dem med sarte
                                    øjne,
                                    der
                                    ønsker at undgå irritation fra mascara.
                                    Resultatet holder i flere uger og sparer tid i din daglige skønhedsrutine.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 30 min. </span>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Typisk 3-4 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 75 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 12 -->
            <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4 mt-4">
                <div class="accordion rounded-2 custom-accordion" id="accordionTwelve">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwelve" aria-expanded="false"
                                    aria-controls="collapseTwelve">
                                Forberedelser & efterpleje
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                             data-bs-parent="#accordionTwelve">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3"><span class="fed">Før:</span>Til behandlingen
                                    Eyelash-extensions er
                                    det vigtigt at der ikke er
                                    nogle produkter på vipperne, herunder mascara. Hvis du fjerne mascara lige inden
                                    behandlingen anbefaler vi at bruge en
                                    øjenmakeupfjerne som ikke indeholder olie, for det bedst mulige resultat af
                                    behandlingen.
                                </p>
                                <p class="px-lg-5 px-4">Derudover må du ikke have kontaktlinser i under
                                    behandlingen. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Efter:</span> Efter at have fået lash
                                    extensions,
                                    bør
                                    du undgå vand på vipperne i de
                                    første 24-48 timer, da limen skal hærde. Brug ikke olieholdige produkter eller
                                    mascara
                                    på
                                    vipperne, da det kan forkorte deres
                                    holdbarhed. Vask dine vipper regelmæssigt med en mild, olie-fri rens og undgå at
                                    gnide
                                    eller
                                    trække i dem. Sørg for at sove på
                                    ryggen eller bruge en satin-pude for at minimere friktion. For at bevare et fyldigt
                                    look,
                                    anbefales opfyldning hver 2-3 uge.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative">
    <img src="img/prisliste.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">
</div>

<div class="mt-5 text-overlay" id="sec3">
    <p class="fed text-lb text-center fs-2 my-2">Bryn</p>
    <div class="container">
        <div class="row">
            <!-- Accordion 13 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionThirteen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThirteen" aria-expanded="false"
                                    aria-controls="collapseThirteen">
                                Ret af bryn m. pincet
                            </button>
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                             data-bs-parent="#accordionThirteen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">At plukke sine bryn med en pincet giver præcise og
                                    definerede bryn, da du kan fjerne
                                    de enkelte hår, der ikke passer til din ønskede form. Det giver et skarpere og mere
                                    naturligt resultat sammenlignet
                                    med voks eller trådning. Pincetmetoden er ideel til små justeringer og for dem, der
                                    ønsker fuld kontrol over formen
                                    og tyndheden af deres bryn.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 20 min. </span></p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Variere meget ift. hårtype
                                    og hårvækst</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 45 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 14 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionFourteen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFourteen" aria-expanded="false"
                                    aria-controls="collapseFourteen">
                                Farve af bryn
                            </button>
                        </h2>
                        <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                             data-bs-parent="#accordionFourteen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Farvning af øjenbryn giver et mere defineret og fyldigt
                                    look,
                                    samtidig med at det sparer tid på makeup. Det er ideelt for dem med lyse eller tynde
                                    bryn,
                                    da det skaber en markeret og naturlig farve, der holder i flere uger. Farvning gør
                                    brynene mere fremtrædende og
                                    passer perfekt til en skarpere ansigtsprofil uden behov for daglig påføring af
                                    brynfarve.</p>
                                <p class="px-lg-5 px-4 ">Behandlingen kan ligges til <span class="kursiv">Ret af bryn m. pincet.</span>
                                </p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 25 min. </span></p>

                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Typisk 3-4 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 70 kr. (inkl. ret af bryn med
                                    pincet) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 text-overlay" id="sec4">
    <p class="fed text-lb text-center fs-2 my-2">Manicure & Pedicure</p>
    <div class="container">
        <div class="row">
            <!-- Accordion 15 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionFifteen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingFifteen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFifteen" aria-expanded="false"
                                    aria-controls="collapseFifteen">
                                Shellac hel farve
                            </button>
                        </h2>
                        <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen"
                             data-bs-parent="#accordionFifteen">
                            <div class="accordion-body text-db ">
                                <p class="px-lg-5 px-4 pt-3">Behandlingen inkluderer valgfri shellac-farve på dine
                                    naturlige negle,
                                    samt formning af neglene og klipning af neglebånd.</p>
                                <p class="px-lg-5 px-4">Shellac hel farve er perfekt til dig, der ønsker glansfulde,
                                    ensfarvede negle med lang holdbarhed.
                                    Behandlingen passer til en travl hverdag og giver stærkere negle uden
                                    afskalning.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 60 min. </span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Anbefaler opfriskning efter
                                    2-3 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 350 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 16 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionSixteen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingSixteen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSixteen" aria-expanded="false"
                                    aria-controls="collapseSixteen">
                                Shellac m. design
                            </button>
                        </h2>
                        <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen"
                             data-bs-parent="#accordionSixteen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Behandlingen inkluderer valgfri shellac-farve på egne
                                    negle,
                                    formning af neglene samt klip af neglebånd. Denne behandling er til dig, der ønsker
                                    negledesign
                                    – f.eks. fransk kant, blomster eller kreative mønstre på mere end to negle</p>
                                <p class="px-lg-5 px-4">
                                    Hvis du ønsker et mere specifikt design, er du meget velkommen til at kontakte mig
                                    inden behandlingen, så jeg kan vurdere, om det er muligt for mig at udføre.
                                    <br>Du kan kontakte mig på:<br>
                                    <span class="fed">Telefon:</span> +45 61 47 73 00</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 75 min. </span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Anbefaler opfriskning efter
                                    2-3 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 350 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 17 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionSeventeen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingSeventeen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeventeen" aria-expanded="false"
                                    aria-controls="collapseSeventeen">
                                Aftagning af shellac & ny shellac
                            </button>
                        </h2>
                        <div id="collapseSeventeen" class="accordion-collapse collapse"
                             aria-labelledby="headingSeventeen"
                             data-bs-parent="#accordionSeventeen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Behandlingen inkluderer aftagning af nuværende shellac,
                                    samt formning
                                    af neglene og klipning af neglebånd. Herefter påføres ny valgfri shellac-farve på
                                    dine naturlige negle evt. med design. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 80 min. </span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Anbefaler opfriskning efter
                                    2-3 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 350 kr. </p>
                                <p class="px-lg-5 px-4 fed"><span class="fedkursiv">OBS.</span> For nye kunder tillægges
                                    der et ekstra beløb på 50 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 18 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionEighteen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingEighteen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseEighteen" aria-expanded="false"
                                    aria-controls="collapseEighteen">
                                Shellac & forstærkning
                            </button>
                        </h2>
                        <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen"
                             data-bs-parent="#accordionEighteen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Behandlingen inkluderer formning af neglene, samt klipning
                                    af neglebånd og forstærkning.
                                    Herefter påføres ny valgfri shellac-farve evt. med design. </p>
                                <p class="px-lg-5 px-4">Forstærkning er ideelt, hvis du ønsker ekstra holdbarhed og
                                    beskyttelse af dine naturlige negle.
                                    Forstærkningen gør neglene mere modstandsdygtige over for brud og giver et flot,
                                    glansfuldt resultat, der holder endnu
                                    længere end almindelig shellac.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 90 min. </span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Anbefaler opfriskning efter
                                    2-3 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 395 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 19 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionNineteen">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingNineteen">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseNineteen" aria-expanded="false"
                                    aria-controls="collapseNineteen">
                                Opfyldning af forstærkning
                            </button>
                        </h2>
                        <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen"
                             data-bs-parent="#accordionNineteen">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Behandlingen inkluderer opfyldning af forstærkning samt
                                    påføring
                                    af ny valgfri shellac-farve evt. med design. </p>
                                <p class="px-lg-5 px-4">Forstærkning er ideelt, hvis du ønsker ekstra holdbarhed og
                                    beskyttelse af
                                    dine naturlige negle. Forstærkningen gør neglene mere modstandsdygtige over for brud
                                    og giver et flot,
                                    glansfuldt resultat, der holder endnu længere end almindelig shellac.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 95 min. </span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Anbefaler opfriskning efter
                                    2-3 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 370 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 20 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionTwenty">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwenty">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwenty" aria-expanded="false"
                                    aria-controls="collapseTwenty">
                                Shellac Pedicure
                            </button>
                        </h2>
                        <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty"
                             data-bs-parent="#accordionTwenty">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Behandlingen inkluderer valgfri shellac-farve på dine
                                    naturlige negle,
                                    samt formning af neglene og klipning af neglebånd.</p>
                                <p class="px-lg-5 px-4">
                                    Da tånegle vokser langsommere end fingernegle, kan resultatet ofte holde længere –
                                    især hvis du undgår sko, der klemmer, og plejer neglene med fugt og olie.</p>
                                <p class="px-lg-5 px-4"><span class="fed">Behandlingen varer 60 min. </span></p>
                                <p class="px-lg-5 px-4"><span class="fed">Holdbarhed:</span> Anbefaler opfriskning efter
                                    3-5 uger</p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 350 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 21 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionTwentyone">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwentyone">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwentyone" aria-expanded="false"
                                    aria-controls="collapseTwentyone">
                                Aftagning af shellac
                            </button>
                        </h2>
                        <div id="collapseTwentyone" class="accordion-collapse collapse"
                             aria-labelledby="headingTwentyone"
                             data-bs-parent="#accordionTwentyone">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Shellac fjernes skånsomt ved at file det øverste lag let og
                                    derefter opløse lakken med acetone-indpakkede vatrondeller i 10-15 minutter.
                                    Herefter skubbes
                                    lakken forsigtigt af uden at skade den naturlige negl.</p>

                                <p class="px-lg-5 px-4 m-0"><span class="fed">Behandlingen varer 35 min. </span></p>
                                <p class="px-lg-5 px-4 kursiv">Behandlingen kan variere alt efter hvordan standen på
                                    shellacen ser ud. </p>
                                <p class="px-lg-5 px-4"><span class="fed">Pris:</span> Gratis, hvis du har fået lavet
                                    shellac-behandling her. For nye kunder koster det 100 kr. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordion 22 -->
            <div class="col-12 col-lg-6 mt-4">
                <div class="accordion custom-accordion" id="accordionTwentytwo">
                    <div class="accordion-item border border-wd rounded shadow-sm">
                        <h2 class="accordion-header" id="headingTwentytwo">
                            <button class="accordion-button collapsed text-db fs-4" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwentytwo" aria-expanded="false"
                                    aria-controls="collapseTwentytwo">
                                Produkter
                            </button>
                        </h2>
                        <div id="collapseTwentytwo" class="accordion-collapse collapse"
                             aria-labelledby="headingTwentytwo"
                             data-bs-parent="#accordionTwentytwo">
                            <div class="accordion-body text-db">
                                <p class="px-lg-5 px-4 pt-3">Vi arbejder med kvalitetsmærker som CND, Kandii og N4Y for
                                    at sikre smukke,
                                    holdbare resultater. Med disse brands får du professionelle behandlinger, der både
                                    skåner negle og holder længere.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative">
    <img src="img/prisliste4.webp" class="d-block img-fluid monstera-bg justify-content-center" alt="monstera blad">
    <img src="img/prisliste4.webp" class="d-block img-fluid telefon-bg justify-content-center" alt="monstera blad">
</div>
            <div class="mt-5 text-overlay" id="sec5">
                <p class="fed text-lb text-center fs-2 my-2">Japansk Lifting</p>
                <div class="container">
                    <div class="row">
                        <!-- Accordion 23 -->
                        <div class="col-12 col-lg-6 offset-lg-3 mt-lg-4 mt-md-4 mt-4">
                            <div class="accordion custom-accordion" id="accordionTwentytree">
                                <div class="accordion-item border border-wd rounded shadow-sm">
                                    <h2 class="accordion-header" id="headingTwentytree">
                                        <button class="accordion-button collapsed text-db fs-4" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwentytree" aria-expanded="false"
                                                aria-controls="collapseTwentytree">
                                            Japansk Lifting
                                        </button>
                                    </h2>
                                    <div id="collapseTwentytree" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwentytree"
                                         data-bs-parent="#accordionTwentytree">
                                        <div class="accordion-body text-db">
                                            <p class="px-lg-5 px-4 pt-3">Japansk Lifting er en afstressende og
                                                opstrammende ansigtsbehandling, der både udrenser
                                                og stimulerer huden. Denne behandling kombinerer massageteknikker, der
                                                fremmer blodcirkulationen, lindrer spændinger
                                                og giver et friskt, ungdommeligt udseende. Japansk Lifting er ikke kun
                                                godt for huden, men også for krop og sjæl, da
                                                den skaber balance og velvære.</p>
                                            <p class="px-lg-5 px-4"><span class="fed">Behandlingenstiden kan variere mellem 45-70 min. </span>
                                            </p>
                                            <p class="px-lg-5 px-4"><span class="fed">Pris:</span> 500 kr. </p>
                                            <p class="px-lg-5 px-4 kursiv">OBS. Behandlingen laves af en elev,
                                                normalpris er 795 kr. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="text-center p-3 mt-5 fs-4 text-db fedkursiv">Hvis du har lyst til at vide mere om din
                    behandler
                    og om skønhedssalonen, <br>kan du læse mere under <a class="text-db" href="omTheia.php">Om THEIA!</a>

                </p>
                <div class="justify-content-center d-flex gap-4">
                    <?php include "bookKnap.php"; ?>
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