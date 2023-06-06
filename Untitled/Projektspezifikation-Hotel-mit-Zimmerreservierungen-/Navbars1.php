<!DOCTYPE html>
<html>

<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-lib fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="../VorbereitungPruefung/Bilder/Logo Hotel.png" height="40px" width="40px" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon btn btn-light"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNav">
    <?php if ($_SESSION['username']) { ?>
    <div class="navbar-nav mr-auto" style="float: left;">
      <li class="nav-item navcenter"><a class="nav-link text-white" href="#">Welcome, <?php echo $_SESSION['username'];?></a></li>
    </div>
    <?php } ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item navcenter"><a class="nav-link text-white" href="index.php?menu=home">Home</a></li>

        <?php if ($_SESSION['username']) { ?>
        <li class="nav-item navcenter"><a class="nav-link text-
white" href="profile.php">My Profile</a></li>
        <?php } ?>

       
        <li class="nav-item navcenter"><a class="nav-link text-white" href="Blog.php">Blog</a></li>
       

        <?php if ($_SESSION['username'] ) { ?>
        <li class="nav-item"><a class="nav-link text-white" href="logout.php">Logout</a></li>
        <?php } else { ?>
        <li class="nav-item navcenter"><a class="nav-link text-white" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="login1.php">Login</a></li>
        <?php } ?>

        <?php if ($_SESSION['username'] == 'admin') { ?>
        <li class="nav-item navcenter"><a class="nav-link text-white" href="BlogUpload.php">Upload to Blog</a></li>
        <?php } ?>

        <?php if ($_SESSION['username'] == 'admin') { ?>
        <li class="nav-item navcenter"><a class="nav-link text-white" href="showprofile.php">Show Profiles</a></li>
        <?php } ?>

        <?php if ($_SESSION['username']) { ?>
        <li class="nav-item navcenter"><a class="nav-link text-white" href="roomreservieren.php">Zimmer Buchen</a></li>
        <?php } ?>

        <?php if ($_SESSION['username']) { ?>
        <li class="nav-item navcenter"><a class="nav-link text-white" href="myreservation.php">My Reservation</a></li>
        <?php } ?>

        <?php if ($_SESSION['username'] == 'admin') { ?>
        <li class="nav-item navcenter"><a class="nav-link text-white" href="allreservation.php">All Reservations</a></li>
        <?php } ?>

      </ul>
    </div>
  </div>
  </div>
</nav>
</body>
</nav> 