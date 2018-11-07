<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_database = "gyserbasen";

$db =
    mysqli_connect($db_host, $db_user, $db_password, $db_database)
or die("error - cant connect to, or find, db");

?>