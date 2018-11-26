<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Signage</title>
    <link rel="stylesheet" href="digital%20signage.css" type="text/css">
    <link rel="stylesheet" href="media.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="mediaipad.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129446527-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-129446527-1');
    </script>

</head>
<body>

<!-- Start header -->
<header>
    <div class="headlogo">
        <img id="fotoLogo" src="winsys.png">
    </div>

    <div id="sidenav" class="sidenav">
        <a href="https://www.facebook.com/WinSysIT" target="_blank" id="facebook"><i style="font-size: 30px"
        class="fab fa-facebook-square"></i> Facebook</a>
        <a href="https://twitter.com/serverloos?lang=nl" target="_blank" id="twitter"><i style="font-size: 30px"
        class="fab fa-twitter-square"></i> Twitter</a>
        <a href="tel:+31255 540 333" id="phone"><i style="font-size: 30px" class="fas fa-phone-square"></i>
            +31255 540 333</a>
    </div>
</header>

<div class="deco"></div>
<!-- End Header -->


<!-- Start firstsection -->
<div id="firstsectionpicture">
    <a href="#midsection"><i id="firstdown" class="fas fa-angle-double-down"></i></a>
    <h1 class="head-text">Digital Signage</h1>
</div>
<!-- End firstsection -->

<!-- Start midstsection -->
<div id="midsection">
    <a href="#sidenav"><i id="up" class="fas fa-angle-double-up"></i></a>
    <p class="tekst">
        Het Digital Signage pakket van WinSys maakt het inzicht krijgen in het kijkgedrag van personen makkelijker
        en veel uigebreider dan alternatieve oplossingen.<br>
        Met een sensor wordt real-time data gegenereerd en opgeslagen in de cloud.<br>
        Vanuit de cloud kun je op een super eenvoudig portaal kijken naar de gegenereerde data zoals het geslacht,
        de leeftijd, het aantal mensen,<br> het kijkgedrag, de positie en de tijdsduur.<br>
        Ook het beheren en uploaden van content is gemakkelijk op afstand te managen via het cloud-gestuurde portaal.<br>
        Zo biedt WinSys een totaaloplossing voor jouw Digital Signage.<br></p>
    <a href="#thirdsection"><i id="seconddown" class="fas fa-angle-double-down"></i></a>
</div>
<!-- End midsection -->

<div id="thirdsection">
    <a href="#midsection"><i id="secondup" class="fas fa-angle-double-up"></i></a>
    <p class="tekst2">
        Onze digital signage software maakt het gemakkelijk voor adverteerders om hun campagnes te ontwerpen
        en te plannen en aan te passen aan lokale
        factoren.<br> Speciale promoties, aanbiedingen met beperkte tijd of flash-verkoop kunnen snel worden
        geïmplementeerd<br> dankzij de hoge mate van
        flexibiliteit bij het beheren van de inhoud.<br> Een regiospecifieke klantbenadering is net zo eenvoudig
        te implementeren als aangepaste
        prijsbepaling of adverteren op het POS.<br>
    </p>
    <a href="#contactform"><i id="thirddown" class="fas fa-angle-double-down"></i></a>
</div>

<!-- Start contactform -->
<div class="contactbackground"></div>
<div id="contactform" class="content">
    <a href="#thirdsection"><i id="thirdup" class="fas fa-angle-double-up"></i></a>
    <div id="information">
        <h1 class="contact">contact gegevens </h1><br>
        <p>Je kan altijd even langskomen voor een kopje koffie</p><br>
        <p>K.v.K. Amsterdam: 34100113</p><br>
        <p>IBAN: NL63 INGB 0651096642</p><br>
        <p>
            <i class="fas fa-phone"></i>
            +31255 540 333
        </p>
        <p class="mailenlocatie">
            <i class="far fa-envelope"></i>
            <a href="mailto:koffie@winsys.nl" target="_top" class="email">email</a>
        </p>
        <p>
            <i class="fas fa-map-marker"></i>
            <a href="https://www.google.nl/maps/place/WinSys+B.v./@52.4625612,4.5763273,17z/data=!3m1!
             4b1!4m5!3m4!1s0x47c5f1e862f3fbd5:0xb7cbe045e641a4b9!8m2!3d52.462558!4d4.578516"
               target="_blank" class="locatie">
                locatie
            </a>
        </p>
    </div>
    <div id="intputcontact">
        <form class="contact-form" action="contactform.php" method="post">
            <br>
            <br>
            <input type="text" name="name" placeholder="Volledige naam">
            <input type="text" name="mail" placeholder="Je email">
            <input type="text" name="subject" placeholder="Onderwerp">
            <textarea name="message" placeholder="Schrijf iets..."></textarea>
            <button class="button" type="submit" name="submit"><span>Verzenden</span></button>
        </form>
    </div>
</div>
<!-- End contactform -->

<!-- Start footer -->

<div class="footer">
    &#9400; WinSys
</div>

<!-- End footer -->