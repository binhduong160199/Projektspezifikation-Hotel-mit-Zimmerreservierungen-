<?php

include 'db-connect.php';

$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$mail = $_POST['email'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$geschlecht = $_POST['geschlecht'];
$datum = $_POST['geburtsdatum'];
$hashed_password = password_hash($password1, PASSWORD_DEFAULT);
$status = 'active';

echo "<h2> .$username . $password1 . $password2 . $mail. $geschlecht </h2";
// echo "Passwords do not match";

//check if two password match of not
if($password1 !== $password2){
    echo "Passwords do not match";
    exit;
}

// check if user is already existed
$sql_check = "SELECT * FROM `user` WHERE `username` = '$username';";
if (mysqli_query($conn, $sql_check)->num_rows > 0) {
    echo "<h3>User is already existing.";
    exit;
} 

//insert user to database
$sql_insert = "INSERT INTO `user` 
(`vorname`, `nachname`, `email`, `geschlecht`, `geburtsdatum`, `username`, `password`, `status`) 
VALUES 
(?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql_insert);
$stmt->bind_param("ssssssss", $vorname, $nachname, $mail, $geschlecht, $datum, $username, $hashed_password, $status);
$result = $stmt->execute();


if ($result) {
    $_SESSION['status'] = $status;
    echo "<h3>data stored in a database successfully.";
} else {
    echo "ERROR: Hush! Sorry. ";
}

header('Refresh: 3; URL =../index.php');

// Close connection
// mysqli_close($conn);

?>