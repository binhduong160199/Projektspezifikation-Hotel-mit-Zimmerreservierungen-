<!doctype html>
<html lang="en">

<head>
  <title>Logout</title>
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
<?php include "Navbars1.php"?>

<header>

            <h1 style="margin-top:-300px ;">You will be logged out now!</h1>
        
    </header>
  <?php


unset($_SESSION['username']);
session_destroy();
header('Refresh: 1; URL =index.php');
?>

</section>

<?php include "navbarbot.php" ?>
</body>

</html>


