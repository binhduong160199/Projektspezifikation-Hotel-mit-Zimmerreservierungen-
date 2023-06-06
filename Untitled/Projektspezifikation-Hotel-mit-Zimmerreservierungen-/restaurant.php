<!doctype html>
<html lang="en">


<head>
    <title>Restaurant</title>
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
            <div>
                <?php include "Navbars1.php"; ?>
            </div>
        </header>
        <div class="margin-body">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xxl-12 col-md-8 col-sm-4 gy-5">
                        <div style="margin-top: 70px;" class="card text-bg-secondary p-3" style="opacity: 80%;">
                            <h5 class="card-header" style="background-color: blue;">Our Restaurant</h5>
                            <img src="./Bilder/restaurant.png" alt="">
                            <h2>Opening hours: Monday-Friday: 10:00 - 22:00</h2>
                            <h2>Staurday-Sunday: 10:00 - 24:00</h2>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Menu</button>

                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Speisekarte</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="" class="form-label" style="color: black;"></label>
                        <img src="./Bilder/Speisekarte.jpg" alt="">


                    </div>




                    <footer>
                        <?php include "navbarbot.php"; ?>
                    </footer>

</html>