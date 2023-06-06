<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Manage Account</title>
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
        <h1 style="margin-top: -500px;">Your information</h1>
        <header>
            <div>
                <?php include "Navbars1.php"; ?>
            </div>
        </header>
        <main>
            <div class="margin-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">
                        </div>
                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">
                            <div style="text-align: center; color: white; margin-top: 200px;">
                                <?php echo "Username: ";
                                echo $_SESSION['username']; ?>
                                <br>
                                <?php echo "Vorname: ";
                                echo $_SESSION['vorname']; ?>
                                <br>
                                <?php echo "Nachname: ";
                                echo $_SESSION['nachname']; ?>
                                <br>
                                <?php echo "Geburtsdatum: ";
                                echo $_SESSION['geburtsdatum']; ?>
                                <br>
                                  <?php echo "E-Mail: ";
                                echo $_SESSION['email']; ?>
                                <br>
                                <br>
                                <?php echo "If anything else has to be changed please contact us.";?>
                            </div>
                            
                            <br>

                            <form action="include/changepw.inc.php" method="post">
    <label for="oldpassword" class="form-label" style="color: azure;">Old Password:</label>
    <div class="mb-2 input-group">
        <span class="input-group-text">
            <i class="bi bi-person-circle"></i>
        </span>
        <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="oldpassword" required>
    </div>
    <label for="newpassword" class="form-label" style="color:azure">New Password:</label>
    <div class="mb-4 input-group">
        <span class="input-group-text">
            <i class="bi bi-key-fill"></i>
        </span>
        <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="newpassword">
    </div>
    <label for="email" class="form-label" style="color:azure">New Email:</label>
    <div class="mb-4 input-group">
        <span class="input-group-text">
            <i class="bi bi-envelope"></i>
        </span>
        <input type="email" class="form-control" name="email" id="email" placeholder="newemail">
    </div>
    <div class="mt-3 d-flex justify-content-center">
        <input type="submit" class="btn btn-primary me-1" value="Update">
    </div>
</form>

                            </h1>
                        </div>
                    </div>
                </div>
        </main>
    </section>

</body>

<footer>
    <?php include "navbarbot.php"; ?>
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</div>
</body>

</html>