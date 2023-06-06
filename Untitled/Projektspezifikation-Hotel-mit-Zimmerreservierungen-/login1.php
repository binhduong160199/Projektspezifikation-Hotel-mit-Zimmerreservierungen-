<?php
session_start();
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <title>Login</title>
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
      
        
            <header>
            <?php include "Navbars1.php" ?>

            </header>
            
            <main>
            <h4 style="padding-top: 150px;" class="text-center text-white ">Please log in.</h4> 
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                        <form action="include/login.inc.php" method="post">
                                <h5 class=" text-white text-center"><?php echo $msg; ?></h5>
                                <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
                                <input type="password" class="form-control" name="password" placeholder="passwort" required><br>
                                <input type="hidden" name="safeit" value="0" />
                                <input type="checkbox" name="safeit" value="1">
                                    <label class="text-white" for="safeit">Stay logged in!</label>
                                <div class="col text-center">
                   
                                    <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm">
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php
        include 'navbarbot.php';
        ?>
    </section>
</body>

</html>