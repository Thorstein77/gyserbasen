<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Gyser basens blogs</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="titel">

    <meta property="og:type" content="website">

    <meta property="og:url" content="http://www.domain.dk">

    <meta property="og:image" content="https://www.domain.dk/img.jpg">

    <meta property="og:description" content="Beskrivelse">

    <meta property="og:locale" content="da_DK">

    <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" href="images/favicon.png" type="">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>


<div class="backGroundImage">
    <div class="content">


        <?php
        require ("php/header.php");
        ?>

        <main>

            <section class="blog">
                <img src="images/blogBlood.png">
                <div class="blogTxt">
                    <h1>
                        BLOG
                    </h1>

                    <h3>5 gysere du SKAL se dette efterår – i kronologisk rækkefølge</h3>
                    <p>
                        Er du også vild med blod, mystiske mord, og uforklarlige eksistenser der for svedet til at løbe koldt ned ad ryggen og mangler du noget at lave i de lange kolde timer, mens efterårsmørket lægger sig? 2018 har stadig kvalitets gyserfilm til gode, der er garanteret til at bringe adrenalinen i omløb. Vi har samlet de 5 bedste gysere du SKAL se dette efterår og vinter.
                    </p>

                    <ol>
                        <li><b>The Nun</b></li>
                        <p>
                            I dette <i>spinoff</i> at Nattens Dæmoner 2 følger man Fader Burke og en novice der er udsendt af Vatikanet til at stoppe en dæmonisk nonne i Rumænien. Filmen benytter sig, som sine forgængere i franchisen af chokerende elementer og uhyggelig stemning.
                        </p>
                        <li><b>Halloween</b></li>
                        <p>
                            Til oktober udkommer Halloween, der er en fortsættelse på 1978’er slasher-gyseren af samme navn, mens handlingen finder sted 40 år senere. Psykopaten Michael Myers er sluppet fri fra den anstalt han har været fængslet i, og søger sit gamle offer, Laurie Strode, der dog nu er klar til at tage kampen op.
                        </p>
                        <li><b>Bad times at the El Royale</b></li>
                        <p>
                            Syv fremmede mennesker ankommer til hotellet El Royale i 1960’erne, og deres skæbner bliver nu på grufuld vis flettet sammen.
                        </p>
                        <li><b>The girl in the spider´s web - det der ikke står os ihjel</b></li>
                        <p>
                            I filmatiseringen af den 4. bog om hackeren Lisbeth Salander bliver Salander hjemsøgt af fortiden, og sammen med journalisten Mikael Blomkvist bliver hun fanget i et netværk af spioner, cyberkriminelle og korrupte embedsmænd.
                        </p>
                        <li><b>The house that jack build</b></li>
                        <p>
                            nstrueret af den kontroversielle danske filminstruktør, Lars Von Trier, kommer sidst i november The House That Jack Built, der over 12 år følger seriemorderen Jack mord, som han selv påstår er kunstværker.
                        </p>
                    </ol>

                    <div class="flex">
                        <button><a href="#">
                                LÆS FLERE BLOGS
                            </a></button>
                    </div>
                </div>
            </section>

            <section class="kommentar">
                <h1>
                    Kommentar
                </h1>

                <div class="kommentarContent">

                    <br> <br>

                    <form>
                        <input type="text" placeholder="Skriv din menning her">
                    </form>

                    <div class="knap_underside">

                        <button>
                            SLÅ OP
                        </button>

                    </div>

                    <br>  <br>
                    <div class="kommentar1">

                        <div class="date1">
                            <p>02/09/2018</p>
                        </div>

                        <div class="billedeTilkommentar1">
                            <i class="fas fa-laugh-beam fa-4x"></i>
                        </div>

                        <div class="txtTilkomentar1">

                            <br>
                            <h3>flotte_fyr</h3>
                            <br> <br>
                            <p>
                                #1 og #5 er virkelig grineren
                            </p>
                        </div>

                    </div>
                    <br> <br> <br>
                    <div class="kommentar2">

                        <div class="date2">
                            <p>27/06/2018</p>
                        </div>


                        <div class="billedeTilkommentar2">
                            <i class="fas fa-laugh-beam fa-4x"></i>
                        </div>

                        <div class="txtTilkomentar2">
                            <br>
                            <h3>HotteConnie! </h3> <br> <br>
                            <p>
                                LOL !!!!!!!!
                            </p>
                        </div>

                    </div>

                </div>
            </section>


        </main>

        <?php
        require ("php/footer.php");
        ?>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    $('.drop').click(function () {
        $('.dropDowncontent').toggle("slow")
    })


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
        var text = document.getElementsByClassName("videoSlideshowTextContainer");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
    }



</script>

<script>
    $(".knap_underside").click(function () {
        alert("Tak for din kommentar, din menning er vigtig for os")
    })
</script>


</body>
</html>