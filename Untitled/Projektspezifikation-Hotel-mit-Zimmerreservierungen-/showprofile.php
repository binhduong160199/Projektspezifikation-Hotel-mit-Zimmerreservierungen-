<?php

// Username is username
$user = 'root';
$password = '';

// Database name is datenbank2
$database = 'test';

// Server is localhost 

$servername = 'localhost';
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM user ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Show all user data</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <!-- my Style sheet -->

    <link rel="stylesheet" type="text/css" href="../VorbereitungPruefung/Mystyle/Styling.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script for Drop Down und Co -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</head>

<body>
    <section id="mainBackground">
        <?php include "Navbars1.php" ?>
        <h1 style="margin-top: -630px;">Show all user data</h1>
        <!-- TABLE CONSTRUCTION -->
        <div style="padding-top: 150px;">
            <table>
                <tr style="color: white;">
                    <th>Id</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>E-mail</th>
                    <th>Geschlecht</th>
                    <th>Geburtsdatum</th>
                    <th>Username</th>
                    <th>Status</th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                // LOOP TILL END OF DATA
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['vorname']; ?></td>
                        <td><?php echo $rows['nachname']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['geschlecht']; ?></td>
                        <td><?php echo $rows['geburtsdatum']; ?></td>
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['status']; ?></td>
                    </tr>
                
                <?php
                }
                ?>
            </table>
            
        </div>

        <div class="card mx-auto" style="background-color: white; opacity: 1; padding: 20px; margin: 20px; width: 48rem;">
        <h1 style="color: black ;margin-top: -480px;">Do you want to change user's Profile</h1>
<form action="include/changeprofile.inc.php" method="post">
            <div class="margin-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">
                        </div>
                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">

                        <label for="ID" class="form-label" style="color:black">ID: </label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="text" class="form-control" name="user_id" id="ID" placeholder="ID" required>
                            </div>

                            <label for="newusername" class="form-label" style="color:black">Username: </label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="text" class="form-control" name="newusername" id="newusername" placeholder="Username" >
                            </div>

                            <label for="newpassword" class="form-label" style="color:

black">New Password:</label>
<div class="mb-4 input-group">
<span class="input-group-text">
<i class="bi bi-key-fill"></i> </span>
<input typetype="password" class="form-control" name="newpassword" id="newpassword" placeholder="Password" >
                            </div>

                            <label for="Gender" class="form-label" style="color:black">Gender:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="text" class="form-control" name="newgeschlecht" id="newusername" placeholder="Gender" >
                            </div>

                            <label for="newname" class="form-label" style="color:black">New Name:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="text" class="form-control" name="newvorname" id="newvorname" placeholder="Name" >
                            </div>


                            <label for="newsurname" class="form-label" style="color:black">New Surname:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="text" class="form-control" name="newnachname" id="newnachname" placeholder="Surname" >
                            </div>


                            <label for="newbirthdate" class="form-label" style="color:black">New Birthdate:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="date" class="form-control" name="newgeburtsdatum" id="newgeburtsdatum" placeholder="Birthdate" >
                            </div>


                            <label for="newmail" class="form-label" style="color:black">New E-mail:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key-fill"></i> </span>
                                <input type="mail" class="form-control" name="newemail" id="newemail" placeholder="Email" >
                            </div>

                            <label for="status" class="form-label" style="color:black">New Status:</label>
                            <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i> </span>
                                <input type="mail" class="form-control" name="newstatus" id="newtatus" placeholder="active" >
                            </div>
                            <input type="submit" class="btn btn-primary me-1" value="Change">
                           
</form>
</div>

   


    
</body>

</html>