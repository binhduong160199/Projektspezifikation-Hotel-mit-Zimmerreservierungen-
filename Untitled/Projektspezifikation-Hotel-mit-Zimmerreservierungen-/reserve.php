<?php
session_start();

// Connect to the database
$db = new mysqli("localhost", "root", "", "test");

// Check if the form has been submitted
if (isset($_POST['room_type']) && isset($_POST['start_date']) && isset($_POST['end_date'])) {
  // Get the form data
  $room_type = $db->real_escape_string($_POST['room_type']);
  $start_date = $db->real_escape_string($_POST['start_date']);
  $end_date = $db->real_escape_string($_POST['end_date']);
  $breakfast = (isset($_POST['breakfast'])) ? 1 : 0;
  $parking = (isset($_POST['parking'])) ? 1 : 0;
  $pets = (isset($_POST['pets'])) ? 1 : 0;
  $user_id = $_SESSION['id'];
  
  // Get the room price based on the room type
  switch ($room_type) {
    case 'VIP':
      $room_price = 189.99;
      break;
    case 'Classic_Balcony':
      $room_price = 159.99;
      break;
    default:
      $room_price = 109.99;
  }
  
  // Calculate the total price
  $days = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24);
  $total_price = $room_price * $days;
  if ($breakfast) {
    $total_price += $days * 10;
  }
  if ($parking) {
    $total_price += 30;
  }
  if ($pets) {
    $total_price += 5;
  }
  
  // Insert the data into the database
  $query = "INSERT INTO reservations (user_id, room_type, start_date, end_date, breakfast, parking, pets, price) VALUES ('$user_id', '$room_type', '$start_date', '$end_date', '$breakfast', '$parking', '$pets', '$total_price')";
  $db->query($query);

  // Redirect to the reservations page
  header('Location: roomreservieren.php');
  exit;
}
?>
