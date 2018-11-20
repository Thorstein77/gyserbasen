<?php
require ("php/inclLoginCheck.php");
?>

<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Opret ny Admin</title>

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

<div class="backGroundImage">
    <div style="width: 90%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.4);">

        <?php
        include ("php/header.php");
        require ("db/db.php");

        $create = mysqli_real_escape_string($db, $_GET["signup"]);

        if($create == 'createnewuser'){

        }else {
            if ($create == 'empty') {
                echo "Udfyld venligst alle felter<br><br>";
            } else {
                if ($create == 'invalidname') {
                    echo "Intast venligst et gyldigt brugernavn<br><br>";
                } else {
                    if ($create == 'invalidemail') {
                        echo "Intast venligst en gyldig email<br><br>";
                    } else {
                        if ($create == 'nametaken') {
                            echo "Det brugernavn er allerede i brug<br><br>";
                        } else {
                            if ($create == 'emailtaken') {
                                echo "Der findes allerede en bruger med den email<br><br>";
                            } else {
                                if ($create == 'success') {
                                    echo "<span style='color: white'>Brugeren er blevet oprettet</span><br><br><a href='adminMovies.php' style='color: white'>Tilbage til admin siden</a><br><br>";
                                } else {
                                    echo "Der er opstået en fejl, prøv igen<br><br>";
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>

        <h1>Opret ny Admin Bruger</h1>

        <form method="POST" action="adminUserCreate2.php">
            <label for="aUser">Brugernavn:</label>
            <input type="text" name="aUser" id="aUser" placeholder="Brugernavn">

            <br><br>

            <label for="aEmail">Email:</label>
            <input type="text" name="aEmail" id="aEmail" placeholder="Email">

            <br><br>

            <label for="aPw">Password:</label>
            <input type="password" name="aPw" id="aPw" placeholder="Password">

            <button type="submit" name="createUser">Opret</button>
        </form>


    </div>
</div>

<?php
include ("php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>
