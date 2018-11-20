<?php
session_start();

require ("db/db.php");

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($db, $_POST["adminUser"]);
    $pw = mysqli_real_escape_string($db, $_POST["adminPass"]);

    if(empty($email) || empty($pw)){
        header("Location: login.php?login=empty");
        exit();
    }else{

        $result = mysqli_query($db,"SELECT * FROM adminlogin WHERE aEmail = '$email'");
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: login.php?login=error");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //De-hashing PW
                $hashedPwCheck = password_verify($pw, $row['aPw']);
                if($hashedPwCheck == false){
                    header("Location: login.php?login=error");
                    exit();
                }elseif($hashedPwCheck == true){
                    //User gets logegd in
                    $_SESSION['id'] = $row['aId'];
                    $_SESSION['user'] = $row['aUser'];
                    $_SESSION['email'] = $row['aEmail'];
                    $_SESSION['pw'] = $row['aPw'];
                    header("Location: adminMovies.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: login.php?login=error");
    exit();
}



?>