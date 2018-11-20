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
<?php

require ("db/db.php");

?>


<div class="backGroundImage">
    <div style="width: 90%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.4);">
        <?php
        include ("php/header.php");
        ?>
        <h1>Admin</h1>

        <div class="adminCreateBtn">
            <a href="adminMoviesCreate.php" target="_blank">
                <button>
                    Opret ny film
                </button>
            </a>
        </div>

        <div class="adminCreateBtn" style="margin-top: 3%">
            <a href="adminUserCreate.php?signup=createnewuser" target="_blank">
                <button>
                    Opret ny admin konto
                </button>
            </a>
        </div>

        <?php
        if(isset($_SESSION['user'])){
            echo "<br><br><p style='color: white; width: 100%; text-align: center'>Du er logged ind som ".$_SESSION["user"]."</p>";
            ?>
            <div style="width: 20%; margin: 0 auto">
                <form action="logout.php" method="post">
                    <button type="submit" name="logout" style="width: 100%; height: 40px; font-size: 25px">
                        Log ud
                    </button>
                </form>
            </div>
            <?php



        }
        ?>

        <div class="adminFlex">
        <?php

        $dbMovie = mysqli_query($db, "SELECT * FROM movies");

        while($data = mysqli_fetch_assoc($dbMovie)){
            $var = $data["mId"];
            ?>
                <div class="admin">
                    <div class="adminMovie">
                        <img src="<?php echo $data["mImg"] ?>">
                        <br>
                        <h3>
                            <?php echo $data["mTitle"] ?>
                        </h3>
                    </div>

                    <div class="adminBtn">
                        <a href="adminMoviesUpdate.php?variable=<?php echo $var; ?>">
                            <button>Opdater Oplysninger</button>
                        </a>
                        <a href="adminMoviesDelete.php?variable=<?php echo $var; ?>">
                            <button>Slet Film</button>
                        </a>
                    </div>
                </div>
            <?php
        }

        ?>
        </div>


        <?php
        include ("php/footer.php");
        ?>

    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript"></script>

</body>
</html>
