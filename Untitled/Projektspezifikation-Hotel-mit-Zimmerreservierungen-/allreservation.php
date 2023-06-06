
<!doctype html>
<html lang="en">


<head>
    <title>All Reservations</title>
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
$query = "SELECT * FROM reservations ";
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
    <h2 style="color:white;" class="text-center mb-5">All Reservations</h2>
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
          <td><?php echo $row['parking'] ? 'Yes' : 'No'; ?>
          <td><?php echo $row['pets'] ? 'Yes' : 'No'; ?></td>
          <td><?php echo $row['price']; ?> €</td>
          <td>
  <?php echo $row['status']; ?>
  <?php if ($_SESSION['username'] == 'admin'): ?>
    <form action="" method="post">
      <select name="status">
        <option value="new" <?php echo $row['status'] == 'new' ? 'selected' : ''; ?>>new</option>
        <option value="confirmed" <?php echo $row['status'] == 'confirmed' ? 'selected' : ''; ?>>confirmed</option>
        <option value="cancelled" <?php echo $row['status'] == 'cancelled' ? 'selected' : ''; ?>>cancelled</option>
      </select>
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <input type="submit" value="Change Status">
    </form>
  <?php endif; ?>
</td>

</tr>
        <?php endwhile;
         ?>
      </tbody>
    </table>
  </div>
</body>
<?php
if (isset($_POST['status'], $_POST['id'])) {
  $conn = mysqli_connect("localhost", "root", "", "test");
  $status = mysqli_real_escape_string($conn, $_POST['status']);
  $id = (int) $_POST['id'];
  $sql = "UPDATE reservations SET status = '$status' WHERE id = $id";
  if (mysqli_query($conn, $sql)) {
    echo '<div class="text-center text-white" style="font-size: 2rem;">When changing status pleace refrsh so it displays correctly</div> ';
  }
}
?>
</html>
</html>
        <footer>
            <?php include "navbarbot.php"; ?>
        </footer>

</html>