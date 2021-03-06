<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Gyser Basen</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil" rel="stylesheet">
    <!-- Til CSS: font-family: 'Stardos Stencil', cursive; -->
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

            <section class="nyheder">


                <h1 class="nyhederOverskrift">
                    NYHEDER
                </h1>

                <div class="videoSlideshowContainer">

                    <div class="videoSlideshow fade">

                        <div class="videoSlideNumbertext">1 / 3</div>
                        <div class="responsive-video">
                            <iframe width="720" height="405" src="https://www.youtube.com/embed/pzD9zGcUNrw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="videoSlideText"><h2>The Nun er nu i biograferne</h2><br><p>Se traileren her! <br> Hvis du kunne tænke dig at læse mere om The Nun kan du gøre det <a href="#">her</a></p></div>

                    </div>

                    <div class="videoSlideshow fade">

                        <div class="videoSlideNumbertext">2 / 3</div>
                        <div class="responsive-video">
                            <iframe width="720" height="405" src="https://www.youtube.com/embed/xLCn88bfW1o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="videoSlideText"><h2>Ny Venom trailer</h2><br><p>Der er udgivet en ny Venom trailer! Se den her. <br> Husk også at læse <a href="#">vores anmelderes</a> mening om filmen! </p></div>

                    </div>

                    <div class="videoSlideshow fade">

                        <div class="videoSlideNumbertext">3 / 3</div>
                        <div class="responsive-video">
                            <iframe width="720" height="405" src="https://www.youtube.com/embed/89OP78l9oF0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="videoSlideText"><h2>Annihilation er fantastisk</h2><br><p>Hvem kan få nok af Annihilation? Ikke os! Se traileren igen. <br> Huske også at læse hvad vores anmelder havde at <a href="#">sige om Annihilation!</a> </p></div>

                    </div>

                    <a class="forrige" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="naeste" onclick="plusSlides(1)">&#10095;</a>

                </div>

                <div class="beskrivelseGraaBoks">
                    <div class="videoSlideTextWeb"><h2>The Nun er nu i biograferne</h2><br><p>Se traileren her! <br> Hvis du kunne tænke dig at læse mere om The Nun kan du gøre det <a href="#">her</a></p></div> <br>
                    <div class="videoSlideTextWeb"><h2>Ny Venom trailer</h2><br><p>Der er udgivet en ny Venom trailer! Se den her. <br> Husk også at læse <a href="#">vores anmelderes</a> mening om filmen! </p></div> <br>
                    <div class="videoSlideTextWeb"><h2>Annihilation er fantastisk</h2><br><p>Hvem kan få nok af Annihilation? Ikke os! Se traileren igen. <br> Huske også at læse hvad vores anmelder havde at <a href="#">sige om Annihilation!</a> </p></div> <br>
                </div>

            </section>




            <section class="genreSection">
                <h1>
                    FILM
                </h1>

                <div>
                    <div class="genreSlide">
                        <h2>
                            Gyser
                        </h2>

                        <div class="genreSlideMobile">
                            <div class="genreSlideObject">
                                <div class="genre1-1"></div>
                            </div>

                            <div class="genreSlideObject">
                                <div class="genre1-2"></div>
                            </div>

                            <div class="genreSlideObject">
                                <div class="genre1-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="genreSlide2">
                        <h2>
                            Action / Gyser
                        </h2>

                        <div class="genreSlideMobile2">
                            <div class="genreSlideObject2">
                                <div class="genre2-1"></div>
                            </div>

                            <div class="genreSlideObject2">
                                <div class="genre2-2"></div>
                            </div>

                            <div class="genreSlideObject2">
                                <div class="genre2-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="genreSlideWeb">
                    <div class="genreSlideWebObject">
                        <h2>
                            GYSER
                        </h2>

                        <div class="flex">
                            <div class="genre1-1"></div>

                            <div class="genre1-2"></div>

                            <div class="genre1-3"></div>
                        </div>
                    </div>

                    <div class="genreSlideWebObject">
                        <h2>
                            ACTION / GYSER
                        </h2>

                        <div class="flex">
                            <div class="genre2-1"></div>

                            <div class="genre2-2"></div>

                            <div class="genre2-3"></div>
                        </div>
                    </div>
                </div>
            </section>

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
                    </ol>

                    <div class="flex">
                        <button><a href="blog_underside.php">
                                LÆS HELE INDLÆGGET
                            </a></button>
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



    $(document).ready(function (e) {
        var slideIndex1 = 0;
        showSlides1();

        function showSlides1() {
            var m;
            var slides1 = document.getElementsByClassName("genreSlideObject");
            for (m = 0; m < slides1.length; m++) {
                slides1[m].style.display = "none";
            }
            slideIndex1++;
            if (slideIndex1 > slides1.length) {slideIndex1 = 1}
            slides1[slideIndex1-1].style.display = "block";
            setTimeout(showSlides1, 3500); // Change image every 2 seconds
        }

        var slideIndex2 = 0;
        showSlides2();

        function showSlides2() {
            var u;
            var slides2 = document.getElementsByClassName("genreSlideObject2");
            for (u = 0; u < slides2.length; u++){
                slides2[u].style.display = "none";
            }
            slideIndex2++;
            if (slideIndex2 > slides2.length) {slideIndex2 = 1}
            slides2[slideIndex2-1].style.display = "block";
            setTimeout(showSlides2, 3500);
        }

        var slideIndexW = 0;
        showSlidesW();

        function showSlidesW(){
            var w;
            var slidesW = document.getElementsByClassName("genreSlideWebObject");
            for (w = 0; w < slidesW.length; w++){
                slidesW[w].style.display = "none";
            }
            slideIndexW++;
            if (slideIndexW > slidesW.length){slideIndexW = 1}
            slidesW[slideIndexW-1].style.display = "block";
            setTimeout(showSlidesW, 5000);
        }

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/movie/439079",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },

            success: function(result) {
                console.log(result);

                $(".genre1-1").html("<img src='https://image.tmdb.org/t/p/w342"
                    + result.poster_path + "'>");

                $(".genre1-1").append("<br><h3>" + result.title + " " +
                    "<br>(" + result.release_date + ") </h3><br>" + "Rating: "
                    +result.vote_average + "/10" + "<br><br><b>Genres: </b>");

                $.each(result.genres, function (k, v) {
                    if(++k > 3) {
                        return false;
                    }
                    $(".genre1-1").append("<br>" + v.name);
                })

                $(".genre1-1").append("<br><a href='movie.php?variable=2' target='_blank'>Læs Mere ...</a>")
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/movie/460019",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },
            success: function(result) {
                console.log(result);

                $(".genre1-2").html("<img src='https://image.tmdb.org/t/p/w342"
                    + result.poster_path + "'>");

                $(".genre1-2").append("<br><h3>" + result.title + " " +
                    "<br>(" + result.release_date + ") </h3><br>" + "Rating: "
                    +result.vote_average + "/10" + "<br><br><b>Genres: </b>");
                $.each(result.genres, function (k, v) {
                    if(++k > 3) {
                        return false;
                    }
                    $(".genre1-2").append("<br>" + v.name);
                })
                $(".genre1-2").append("<br><a href='movie.php?variable=12' target='_blank'>Læs Mere ...</a>")
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/movie/346364",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },
            success: function(result) {
                console.log(result);

                $(".genre1-3").html("<img src='https://image.tmdb.org/t/p/w342"
                    + result.poster_path + "'>");

                $(".genre1-3").append("<br><h3>" + result.title + " " +
                    "<br>(" + result.release_date + ") </h3><br>" + "Rating: "
                    +result.vote_average + "/10" + "<br><br><b>Genres: </b>");
                $.each(result.genres, function (k, v) {
                    if(++k > 3) {
                        return false;
                    }
                    $(".genre1-3").append("<br>" + v.name);
                })
                $(".genre1-3").append("<br><a href='movie.php?variable=13' target='_blank'>Læs Mere ...</a>")
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/movie/335983",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },
            success: function(result) {
                console.log(result);

                $(".genre2-1").html("<img src='https://image.tmdb.org/t/p/w342"
                    + result.poster_path + "'>");

                $(".genre2-1").append("<br><h3>" + result.title + " " +
                    "<br>(" + result.release_date + ") </h3><br>" + "Rating: "
                    +result.vote_average + "/10" + "<br><br><b>Genres: </b>");
                $.each(result.genres, function (k, v) {
                    if(++k > 3) {
                        return false;
                    }
                    $(".genre2-1").append("<br>" + v.name);
                })
                $(".genre2-1").append("<br><a href='movie.php?variable=1' target='_blank'>Læs Mere ...</a>")
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/movie/485415",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },
            success: function(result) {
                console.log(result);

                $(".genre2-2").html("<img src='https://image.tmdb.org/t/p/w342"
                    + result.poster_path + "'>");

                $(".genre2-2").append("<br><h3>" + result.title + " " +
                    "<br>(" + result.release_date + ") </h3><br>" + "Rating: "
                    +result.vote_average + "/10" + "<br><br><b>Genres: </b>");
                $.each(result.genres, function (k, v) {
                    if(++k > 3) {
                        return false;
                    }
                    $(".genre2-2").append("<br>" + v.name);
                })
                $(".genre2-2").append("<br><a href='movie.php?variable=9' target='_blank'>Læs Mere ...</a>")
            },
            error: function (error) {
                console.log(error);
            }
        });

        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/movie/381237",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },
            success: function(result) {
                console.log(result);

                $(".genre2-3").html("<img src='https://image.tmdb.org/t/p/w342"
                    + result.poster_path + "'>");

                $(".genre2-3").append("<br><h3>" + result.title + " " +
                    "<br>(" + result.release_date + ") </h3><br>" + "Rating: "
                    +result.vote_average + "/10" + "<br><br><b>Genres: </b>");
                $.each(result.genres, function (k, v) {
                    if(++k > 3) {
                        return false;
                    }
                    $(".genre2-3").append("<br>" + v.name);
                })
                $(".genre2-3").append("<br><a href='movie.php?variable=10' target='_blank'>Læs Mere ...</a>")
            },
            error: function (error) {
                console.log(error);
            }
        });


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
