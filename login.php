<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Admin Login</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- Tillader brug af Font Awesome ikoner -->
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Stardos+Stencil" rel="stylesheet">
    <!-- Googlefonts -->

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>
<div style="width: 90%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.4);">
    <?php
    require ("db/db.php");
    require("php/header.php");
    ?>
    <h1>Admin Login</h1>

    <div class="adminLogin">
        <form action="login2.php" method="post">
            <label for="adminUser">Email:</label><br>
            <input type="text" name="adminUser" id="adminUser" placeholder="Email"><br><br>
            <label for="adminPass">Password:</label><br>
            <input type="password" name="adminPass" id="adminPass" placeholder="Password"><br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

</div>
<?php
require ("php/footer.php");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

</script>

</body>
</html>