<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

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

<!-- SLICK slider -->
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<div class="backGroundImage">
    <div style="width: 90%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.4);">

        <?php
        include ("php/header.php");
        require ("db/db.php");
        ?>


        <?php

        if (isset($_POST["mTitle"]) && !empty($_POST["mTitle"])
        && isset($_POST["mGenre"]) && !empty($_POST["mGenre"])
        && isset($_POST["mYear"]) && !empty($_POST["mYear"])
        && isset($_POST["mApi"]) && !empty($_POST["mApi"])
        && !empty($_FILES["mImg"])) {
            $title = mysqli_real_escape_string($db, $_POST["mTitle"]);
            $genre = mysqli_real_escape_string($db, $_POST["mGenre"]);
            $year = mysqli_real_escape_string($db, $_POST["mYear"]);
            $img = ($_FILES['mImg']['name']);
            $api = mysqli_real_escape_string($db, $_POST["mApi"]);
            $target = "images/";
            $target = $target .basename($_FILES['mImg']['name']);

            mysqli_query($db, "INSERT INTO movies VALUES ('', '$title', '$genre', '$year', 'images/$img', '$api')");

            if(move_uploaded_file($_FILES['mImg']['tmp_name'],$target)){
                echo "Filmen er tilføjet til databasen.";
            }else{
                echo "Der er sket en fejl.";
            }
        }else {

            ?>

            <form method="POST" action="adminMoviesCreate.php" enctype="multipart/form-data">
                <label for="mTitle">Title</label>
                <input type="text" name="mTitle" id="mTitle">

                <br><br>

                <label for="mGenre">Genre</label>
                <input type="text" name="mGenre" id="mGenre">

                <br><br>

                <label for="mYear">År</label>
                <input type="text" name="mYear" id="mYear">

                <br><br>

                <label for="mImg">Vælg billede</label>
                <input type="file" name="mImg" id="mImg">

                <br><br>

                <label for="mApi">API</label>
                <input type="text" name="mApi" id="mApi">

                <button type="submit">Opret</button>
            </form>

            <?php
        }
        include ("php/footer.php");
        ?>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>
