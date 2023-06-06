
<!doctype html>
<html lang="en">


<head>
  <title>Home</title>
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
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-8 col-xl-6 col-lg-4 col-md-2 col-sm-1">
            <h1>
                <img src="../VorbereitungPruefung/Bilder/Logo.png" class="img-fluid" alt="Hotel am Schneeberg" style="margin-top: -600px;">             
            </h1>
          </div>
        </div>
      </div>
    </main>
  </section>

  
<section class="our-service">
    <h1 style="margin-bottom: 50px;" ;>Our Service</h1>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-sm-12">
        <?php if ($_SESSION['username']) { ?>
          <a class="nav-link  ps-2" href="roomreservieren.php">
            <img class="pic-service" src="./Bilder/room.jpg" href="roomreservieren.php" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <a href="roomreservieren.php" class="card-text">Room</a>
          </div>
        </div>
        <?php } else { ?>

            <img class="pic-service" src="./Bilder/room.jpg" href="" class="card-img-top" alt="...">

          <div class="card-body">
            <p class="card-text">Room</p>
          </div>
        </div>
        <?php } ?>

        <div class="col-lg-4 col-sm-12">
        <?php if ($_SESSION['username']) { ?>
          <a class="nav-link  ps-2" href="restaurant.php">
            <img class="pic-service" src="./Bilder/restaurant.jpg" href="restaurant.php" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <a href="restaurant.php" class="card-text">Restaurant</a>
          </div>
        </div>
        <?php } else { ?>
            <img class="pic-service" src="./Bilder/restaurant.jpg" href="" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Restaurant</p>
          </div>
        </div>
        <?php } ?>
      </div>
  </section>
  <div class="mt-2">
  


<div class="mt-2">

    
  <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="..//VorbereitungPruefung/Bilder/Breathe.png" class="d-block h-75 w-100" alt="...">
        <div class="carousel-caption">
          <h2>Breath</h2>
          <p>Atme die frische Bergluft, und spühre die Natur</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../VorbereitungPruefung/Bilder/Relax.png" class="d-block  w-100" alt="...">
        <div class="carousel-caption">
          <h2>Relax</h2>
          <p>Gib dich unserem Spa hin und lass dich verwöhnen.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../VorbereitungPruefung/Bilder/Conquer.png" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h2>Conquer</h2>
          <p>Ob mit dem Bike zu Fuß oder an der Steilwand. Erklimme den Berg </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../VorbereitungPruefung/Bilder/Spot.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h2>Entdecke</h2>
          <p>Entdecke Historische Plätze und ergötze dich an der Kultur</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../VorbereitungPruefung/Bilder/Feast.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h2>Delikatessen</h2>
          <p>Erlebe Delikatessen von unseren verschiedensten Gastköchen.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- test end -->

  </section>
  </main>
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