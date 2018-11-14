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

    require ("php/header.php");
    require ("db/db.php");

    $var = mysqli_real_escape_string($db, $_GET["variable"]);
    $dbMovie = mysqli_query($db, "SELECT * FROM movies WHERE 
      mId = '$var'");

    $data = mysqli_fetch_assoc($dbMovie);
?>


<div class="backGroundImage">

    <h1><?php echo $data["mTitle"]; ?></h1>
    <h2 style="text-align: center;">(<?php echo $data["mYear"]; ?>)</h2>

    <div class="movie">

        <div class="movieposterTekst">

            <div class="movieposter">
                <img src="<?php echo $data["mImg"]; ?>">
            </div>

            <div class="movieTekst">

            </div>

        </div>

        <div class="movieInfo">
            <ul>
                <li id="aarstal">
                    <p><b>Udgivelsesår</b></p>
                    <?php
                        echo $data["mYear"];
                    ?>
                </li>
                <li id="tid"></li>
                <li id="rating"></li>
                <li id="genre">
                    <p><b>Genrer</b></p>
                    <?php
                        echo $data["mGenre"];
                    ?>
                </li>
            </ul>
        </div>

    </div>
</div>


<?php

    require ("php/footer.php");


?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/<?php
                    echo $data["mApi"];
                ?>",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },

            success: function (result) {
                console.log(result);

                if(result.overview === ''){
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "https://api.themoviedb.org/3/<?php
                            echo $data["mApi"];
                            ?>",
                        data: {
                            'api_key': '64b4491b45f63114a604290efac3e4e8',
                            'language': 'en-EN'
                        },

                        success: function (result) {
                            console.log(result);

                            $(".movieTekst").html("<p>" + result.overview + "</p>")
                            $("#tid").html("<p><b>Spilletid</b><br>" + result.runtime + " minutter</p>")
                            $("#rating").html("<p><b>Rating</b><br>" + result.vote_average + " / 10</p>")

                        },

                        error: function (error) {
                            console.log(error);
                        }
                    })
                }else{
                    $(".movieTekst").html("<p>" + result.overview + "</p>")
                    $("#tid").html("<p><b>Spilletid</b><br>" + result.runtime + " minutter</p>")
                    $("#rating").html("<p><b>Rating</b><br>" + result.vote_average + " / 10</p>")
                }
            },

            error: function (error) {
                console.log(error);
            }
        })
    });
</script>
</body>
</html>


