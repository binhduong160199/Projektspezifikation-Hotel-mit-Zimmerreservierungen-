<!doctype html>
<html lang="en">


<head>
    <title>Reservieren</title>
    <!-- my Style sheet -->

    <link rel="stylesheet" type="text/css" href="../VorbereitungPruefung/Mystyle/Styling.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script for Drop Down und Co -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

</head>

<body>
    <section id="mainBackground">
        <header>
            <div>
                <?php include "Navbars1.php"; ?>
            </div>
        </header>
        <main class="mb-5">

            <h2 style="padding-top: 100px;" class="text-center text-white">Room reservation</h2>

            <div class="margin-body">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">
                            <div class="card text-bg-first p-3" style="opacity: 80%;">
                                <h5 class="card-header" style="background-color: grey;">Vip Room</h5>
                                <img src="./Bilder/viproom.jpg">
                                <p>Completely refurbished in 2017, Luxury rooms offers modernly furnished accommodation.
                                    Free Wi-Fi is available in all areas.

                                    All units at the property are equipped with a seating area that features a
                                    flat-screen TV with satellite channels, as well as a desk and a water kettle. Guests
                                    staying at the property are provided with a free stocked minibar, coffee and tea, as
                                    well as fresh fruit. Private bathrooms include a shower, free toiletries and a
                                    hairdryer.

                                    A breakfast is available every morning. Local points of interest like National
                                    Museum and Archaeological Museum are reachable within 100 metres,
                                    respectively.<br />
                                </p>
                                <p> € 189.99</p>

                                                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">
  Zimmer reservieren
</button>

                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">
                            <div class="card text-bg-first p-3" style="opacity: 80%;">
                                <h5 class="card-header" style="background-color: grey;">Normal room</h5>
                                <img src="./Bilder/normal room.jpg">
                                <p> Single: A room assigned to one person. May have one or more beds.

                                    The room size or area of Single Rooms are generally between 37 m² to 45 m².

                                </p>

                                <p> Double: A room assigned to two people. May have one or more beds.

                                    The room size or area of Double Rooms are generally between 40 m² to 45 m². </p>
                                <br />
                                </p>
                                <p> € 109.99</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">
  Zimmer reservieren
</button>
                                <div class="card-body">
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-6 col-sm-12 gy-5">
                            <div class="card text-bg-first p-3" style="opacity: 80%;">
                                <h5 class="card-header" style="background-color: grey;">Room with balcony</h5>
                                <img src="./Bilder/room with balcony.jpg">
                                <p>Large suite with private terrace. Charming. This suite features a balcony, seating
                                    area and cable TV. About the hotel: Vienna's oldest hotel is located directly in the
                                    city centre, only 50 metres away from Saint Stephen's Cathedral and in the immediate
                                    vicinity of many other sights. </p>
                                <br>
                                </p>
                                <p> € 159.99</p>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">
  Zimmer reservieren
</button>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



<!-- Modal HTML -->
<div id="reservationModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="reserve.php" method="post">
        <div class="modal-header">
          <h4 class="modal-title">New Reservation</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Room Type</label>
            <select name="room_type" class="form-control">
              <option value="VIP">VIP</option>
              <option value="Classic_Balcony">Classic with balcony</option>
              <option value="Normal">Normal</option>
            </select>
          </div>
          <div class="form-group">
            <label>Start Date</label>
            <input type="date" name="start_date" class="form-control" required>
          </div>
          <div class="form-group">
            <label>End Date</label>
            <input type="date" name="end_date" class="form-control" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="breakfast" id="breakfastCheckbox">
              <label class="form-check-label" for="breakfastCheckbox">
                Breakfast
              </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="parking" id="parkingCheckbox">
              <label class="form-check-label" for="parkingCheckbox">
                Parking
              </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="pets" id="petsCheckbox">
              <label class="form-check-label" for="petsCheckbox">
                Pets
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>Total Price: <span id="totalPrice"></span> €</label>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Book">
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // Room prices
  var roomPrices = {
    'VIP': 189.99,
    'Classic_Balcony': 159.99,
    'Normal': 109.99
  };
  // Additional options prices
  var breakfastPrice = 10;
  var parkingPrice = 30;
  var petsPrice = 5;

  // Update the total price when the form values change
  $('#reservationModal').on('change', 'input, select', updateTotalPrice);

  function updateTotalPrice() {
    // Get the selected room type
    var roomType = $('[name="room_type"]').val();
    var roomPrice = roomPrices[roomType];
    // Get the start and end date
    var startDate = new Date($('[name="start_date"]').val());
    var endDate = new Date($('[name="end_date"]').val());
    var days = (endDate - startDate) / (1000 * 60 * 60 * 24);
    // Calculate the total price
    var totalPrice = roomPrice * days;
    if ($('[name="breakfast"]').is(':checked')) {
      totalPrice += days * breakfastPrice;
    }
    if ($('[name="parking"]').is(':checked')) {
      totalPrice += parkingPrice;
    }
    if ($('[name="pets"]').is(':checked')) {
      totalPrice += petsPrice;
    }
    // Update the total price in the modal
    $('#totalPrice').text(totalPrice.toFixed(2));
  }
</script>

    <footer>
        <?php include "navbarbot.php"; ?>
    </footer>

</html>