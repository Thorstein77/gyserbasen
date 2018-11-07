<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!-- Titel, description og keywords skal være forskellige på alle undersider -->

    <meta property="og:title" content="titel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.domain.dk">
    <meta property="og:image" content="https://www.domain.dk/img.jpg">
    <meta property="og:description" content="Beskrivelse">
    <meta property="og:locale" content="da_DK">


    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil" rel="stylesheet">


</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php

require ("db/db.php");
require ("php/header.php");

?>


<div class="backGroundImage">

    <h1>FILM</h1>



    <section class="gyser sektionerMovies sektionBaggrundsfarver1">

        <h2>Gyser</h2>

        <div class="sektionStyling">

            <i class="fas fa-chevron-left"></i>

            <div class="billedeStyling">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling">
                <img src="images/bohianrhapsody.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/venom.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/bohianrhapsody.jpg">
            </div>


            <i class="fas fa-chevron-right"></i>

        </div>

    </section>

    <section class="gyser sektionerMovies sektionBaggrundsfarver2">

        <h2>Gyser</h2>

        <div class="sektionStyling">

            <i class="fas fa-chevron-left"></i>

            <div class="billedeStyling">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling">
                <img src="images/bohianrhapsody.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/venom.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/bohianrhapsody.jpg">
            </div>


            <i class="fas fa-chevron-right"></i>

        </div>

    </section>
    <section class="gyser sektionerMovies sektionBaggrundsfarver1">

        <h2>Gyser</h2>

        <div class="sektionStyling">

            <i class="fas fa-chevron-left"></i>

            <div class="billedeStyling">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling">
                <img src="images/bohianrhapsody.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/venom.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/halloween.jpg">
            </div>

            <div class="billedeStyling billedeStylingWeb">
                <img src="images/bohianrhapsody.jpg">
            </div>


            <i class="fas fa-chevron-right"></i>

        </div>

    </section>


</div>

<?php

require ("php/footer.php");

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        // Din kode her
    });
</script>

<script>



    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("videoSlideshow");
        var text = document.getElementsByClassName("videoSlideTextWeb")
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < text.length; i++) {
            text[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
        text[slideIndex-1].style.display = "block";
    }

</script>

</body>
</html>
