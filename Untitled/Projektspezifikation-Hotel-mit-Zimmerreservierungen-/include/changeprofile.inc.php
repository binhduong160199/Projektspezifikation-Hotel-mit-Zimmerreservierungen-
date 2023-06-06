<?php
session_start();

include 'db-connect.php';

// Get posted information from the profil page
$user_id = $_POST['user_id'];
$newusername = $_POST['newusername'];
$newpassword = $_POST['newpassword'];
$newemail = $_POST['newemail'];
$newgeschlecht = $_POST['newgeschlecht'];
$newgeburtsdatum = $_POST['newgeburtsdatum'];
$newvorname = $_POST['newvorname'];
$newnachname = $_POST['newnachname'];
$newstatus = $_POST['newstatus'];


$update = "";
$update_params = array();

if (!empty($newpassword)) {
    $newhashedpassword = password_hash($newpassword, PASSWORD_DEFAULT);
    $update .= "password = ?,";
    $update_params[] = $newhashedpassword;
}

if (!empty($newusername)) {
    $update .= "username = ?,";
    $update_params[] = $newusername;
}

if (!empty($newvorname)) {
    $update .= "vorname = ?,";
    $update_params[] = $newvorname;
}

if (!empty($newnachname)) {
    $update .= "nachname = ?,";
    $update_params[] = $newnachname;
}

if (!empty($newemail)) {
    $update .= "email = ?,";
    $update_params[] = $newemail;
}

if (!empty($newgeschlecht)) {
    $update .= "geschlecht = ?,";
    $update_params[] = $newgeschlecht;
}

if (!empty($newgeburtsdatum)) {
    $update .= "geburtsdatum = ?,";
    $update_params[] = $newgeburtsdatum;
}

if (!empty($newstatus)) {
    $update .= "status = ?,";
    $update_params[] = $newstatus;
}

//remove trailing comma
$update = rtrim($update, ",");

if(empty($update)) {
    echo 'No changes were made';
    header('Refresh: 3; URL =../showprofile.php');
    exit();
}

$sql = "SELECT vorname, nachname, email, geschlecht, geburtsdatum, username, password, status
    FROM user WHERE 
    id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if (mysqli_num_rows($result) === 1) {

$sql_to_change = "UPDATE user SET  $update WHERE id=?";

$stmt = $conn->prepare($sql_to_change);
$update_params[] = $user_id;
$stmt->bind_param(str_repeat("s", count($update_params)), ...$update_params);
$result = $stmt->execute();
echo 'You have changed user daten successfully.';
header('Refresh: 3; URL =../showprofile.php');
exit();
} else {
echo 'Error';
exit();
}
?>