<?php
session_start();

if(isset($_SESSION['user'])){

}else{
    header("Location: login.php?login=notloggedin");
    exit();
}
?>