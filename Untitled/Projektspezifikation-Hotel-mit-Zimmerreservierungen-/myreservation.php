
<!doctype html>
<html lang="en">


<head>
    <title>My Reservation</title>
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
        <?php 
session_start();

// Connect to the database
$db = new mysqli("localhost", "root", "", "test");

// Get the user's reservations
$user_id = $_SESSION['id'];
$query = "SELECT * FROM reservations WHERE user_id = '$user_id'";
$result = $db->query($query);
?>

<body>
<section id="mainBackground">
        <header>
            <div>
                <?php include "Navbars1.php"; ?>
            </div>
        </header>
        
<body>
  <div class="container mt-5">
    <h2 style="color:white;"class="text-center mb-5">My Reservations</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Room Type</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Breakfast</th>
          <th>Parking</th>
          <th>Pets</th>
          <th>Price</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['room_type']; ?></td>
          <td><?php echo $row['start_date']; ?></td>
          <td><?php echo $row['end_date']; ?></td>
          <td><?php echo $row['breakfast'] ? 'Yes' : 'No'; ?></td>
          <td><?php echo $row['parking'] ? 'Yes' : 'No'; ?></td>
          <td><?php echo $row['pets'] ? 'Yes' : 'No'; ?></td>
          <td><?php echo $row['price']; ?> €</td>
          <td><?php echo $row['status']; ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
        </table>
  </div>
</body>
</html>
</html>
        <footer>
            <?php include "navbarbot.php"; ?>
        </footer>

</html>