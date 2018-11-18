<?php
require ("php/inclLoginCheck.php");
require ("db/db.php");

if (isset($_POST["createUser"])){
    $user = mysqli_real_escape_string($db, $_POST["aUser"]);
    $email = mysqli_real_escape_string($db, $_POST["aEmail"]);
    $pw = mysqli_real_escape_string($db, $_POST["aPw"]);

    if(empty($user) || empty($email) || empty($pw)){
        header("Location: adminUserCreate.php?signup=empty");
        exit();
    }else {
        if(!preg_match("/^[a-zA-Z]*$/", $user)){
            header("Location: adminUserCreate.php?signup=invalidname");
            exit();
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: adminUserCreate.php?signup=invalidemail");
                exit();
            }else{
                $result = mysqli_query($db, "SELECT * FROM adminlogin WHERE aUser = '$user'");
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: adminUserCreate.php?signup=nametaken");
                    exit();
                }else{
                    $eResult = mysqli_query($db, "SELECT * FROM adminlogin WHERE aEmail = '$email'");
                    $eResultCheck = mysqli_num_rows($eResult);

                    if($eResultCheck > 0){
                        header("Location: adminUserCreate.php?signup=emailtaken");
                        exit();
                    }else{
                        //Password hashing
                        $hashedPw = password_hash($pw, PASSWORD_DEFAULT);
                        //admin bruger oprettes
                        mysqli_query($db, "INSERT INTO adminlogin VALUES ('', '$user', '$email', '$hashedPw')");
                        header("Location: adminUserCreate.php?signup=success");
                        exit();
                    }


                }
            }
        }
    }

}

?>
