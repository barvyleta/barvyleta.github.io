<?php

if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $regbot = mysqli_real_escape_string($conn, $_POST['fax']);
    
    //Error handlers
    //Check if all fields are filled
    if (empty($first) || empty($last) || empty($email) || empty($login) || empty($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else if (!empty($regbot)) {
        //If we're here, we're in the honeypot
        //Hashing the password - in case of false positive
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        //Insert the false positive into the database to later confirm if valid
        $sql = "INSERT INTO honeypotlog (user_first, user_last, user_email, user_name, user_pwd, reg_bot) VALUES ('$first', '$last', '$email', '$login', '$hashedPwd', '$regbot');";
        
        mysqli_query($conn, $sql);
        header("Location: ../signup.php?signup=success");
        exit();
    } else {
        //Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            //Check if E-mail is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?signup=email");
            exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_login='$login'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                } else {
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_login, user_pwd) VALUES ('$first', '$last', '$email', '$login', '$hashedPwd');";
                    mysqli_query($conn, $sql);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    
} else {
    header("Location: ../signup.php");
    exit();
}