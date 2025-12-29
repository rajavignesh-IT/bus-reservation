<?php
include 'db.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$bus = $_POST['bus_name'];
$seat = $_POST['seat_no'];

$sql = "INSERT INTO bookings (name, phone, bus_name, seat_no)
        VALUES ('$name', '$phone', '$bus', '$seat')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../frontend/view.php");
} else {
    echo "Booking Failed";
}
?>
