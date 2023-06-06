<?php

    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    include 'db-connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

 


    $sql_check_login = "SELECT id, vorname, nachname, email, geschlecht, geburtsdatum, username, password, status  FROM `user` WHERE `username` = ? ";
    $stmt = $conn->prepare($sql_check_login);

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($userid, $vorname, $nachname, $mail, $geschlecht, $datum, $username, $hashed_password, $status);
    // check if user is in the database to login
    if($stmt->num_rows == 1){
        $stmt->fetch();
        if(password_verify($password, $hashed_password)){
            echo "Login sucessful";
            $_SESSION['username'] = $username;
            $_SESSION['vorname'] = $vorname;
            $_SESSION['nachname'] = $nachname;
            $_SESSION['geburtsdatum'] = $datum;
            $_SESSION['id'] = $userid;
            $_SESSION['password'] = $hashed_password;
            $_SESSION['email'] = $mail;
            header('Refresh: 1; URL = ../index.php');
        }else{
            echo "Error with this username and password";
            $_SESSION = [];
            session_destroy();
        }
    }else{
        echo "Error with this username and password";
        $_SESSION = [];
        session_destroy();
    }
    header('Refresh: 0; URL = ../index.php');
?>