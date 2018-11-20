<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Streaming</title>

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

    <!-- SLICK slider -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="icon" href="images/favicon.png" type="">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php

require ("db/db.php");



?>


<div class="backGroundImage">
    <div style="width: 90%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.4);">

    <?php
    require ("php/header.php");
    ?>

    <h1>FILM</h1>

        <?php
        $dbGenre = mysqli_query($db, "SELECT * FROM genre");

        $i = 1;
        while($dataG = mysqli_fetch_assoc($dbGenre)){
            $varG = $dataG["gName"];
            if(is_integer($i / 2)){
                echo "<section class='gyser sektionerMovies sektionBaggrundsfarver2'>";
            }else{
                echo "<section class='gyser sektionerMovies'>";

            }
            echo "<h2>".$dataG["gName"]."</h2>";
            echo "<div class=\"sektionStyling\">";

            $dbMovie = mysqli_query($db, "SELECT * FROM movies WHERE mGenre LIKE '%$varG%'");



            while ($data = mysqli_fetch_assoc($dbMovie)) {
                $var = $data ["mId"];
                ?>
                <div class="billedeStyling">
                    <a href="movie.php?variable=<?php echo $var ?>">
                        <img src="<?php echo $data["mImg"] ?>">
                        <br>
                        <h3>
                            <?php echo $data["mTitle"] ?>
                        </h3>
                    </a>
                </div>

                <?php
            }

            echo "</div></section>";

            $i++;
        }

        require ("php/footer.php");

        ?>

    </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript" src="slick/slick.min.js"></script>

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

<script>
    $(document).ready(function(){
        $('.sektionStyling').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: true,
            mobileFirst: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6,
                        arrows: true
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
