<?php
session_start();
include 'db-connect.php';

// Get posted information from the form
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$email = $_POST['email'];
$username = $_SESSION['username'];


// check if the old password is correct
$stmt = $conn->prepare("SELECT password FROM user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// if the oldpassword is correct 
if (password_verify($oldpassword, $row['password'])) {
    // check if the new password is not empty
    if (!empty($newpassword)) {
        $newhashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE user SET password = ? WHERE username = ?");
        $stmt->bind_param("ss", $newhashedpassword, $username);
        $stmt->execute();
        echo 'Your password has been changed successfully.';
    }
    // check if the email is not empty
    if (!empty($email)) {
        $stmt = $conn->prepare("UPDATE user SET email = ? WHERE username = ?");
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $_SESSION['email'] = $_POST['email'];
        echo 'Your email has been changed successfully.';
    }
} else {
    echo 'Your  password is incorrect.';
}
header('Refresh: 2; URL = ../profile.php');
?>
