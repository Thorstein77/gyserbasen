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
<title>Opdater Film</title>

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
        include ("php/header.php");
        require ("db/db.php");
        require ("php/movieReq.php");
        ?>

        <?php

            $id = mysqli_real_escape_string($db, $_GET["variable"]);
            if (isset($_POST["mTitle"]) && !empty($_POST["mTitle"]) ){
                $title = mysqli_real_escape_string($db, $_POST["mTitle"]);
                mysqli_query($db, "UPDATE movies SET mTitle = '$title' WHERE mId = '$id'");
            }

            if (isset($_POST["mGenre"]) && !empty($_POST["mGenre"]) ){
                $genre = mysqli_real_escape_string($db, $_POST["mGenre"]);
                mysqli_query($db, "UPDATE movies SET mGenre = '$genre' WHERE mId = '$id'");
            }
            if (isset($_POST["mYear"]) && !empty($_POST["mYear"]) ){
                $year = mysqli_real_escape_string($db, $_POST["mYear"]);
                mysqli_query($db, "UPDATE movies SET mYear = '$year' WHERE mId = '$id'");
            }
            if (!empty($_FILES["mImg"]) ){
                $img = ($_FILES['mImg']['name']);
                $target = "images/";
                $target = $target .basename($_FILES['mImg']['name']);
                mysqli_query($db, "UPDATE movies SET mImg = 'images/$img' WHERE mId = '$id'");
                if(move_uploaded_file($_FILES['mImg']['tmp_name'],$target)){
                    echo "Billedet er blevet opdateret.";
                }else{
                    echo "Der er sket en fejl.";
                }
            }
            if (isset($_POST["mApi"]) && !empty($_POST["mApi"]) ){
                $api = mysqli_real_escape_string($db, $_POST["mApi"]);
                mysqli_query($db, "UPDATE movies SET mApi = '$api' WHERE mId = '$id'");
            }

        ?>

                <form method="POST" action="adminMoviesUpdate.php?variable=<?php echo $var; ?>" enctype="multipart/form-data">
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
                    <input type="file" name="mImg" id="mImg" value="">

                    <br><br>

                    <label for="mApi">API</label>
                    <input type="text" name="mApi" id="mApi">

                    <button type="submit">Opdater</button>
                </form>

        <br>

        <a href="adminMovies.php" style="color: white">Tilbage til admin side</a>

        <br><br><br>


        <?php

        include ("php/footer.php");
        ?>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>
