<?php
include '../backend/db.php';
$result = mysqli_query($conn, "SELECT * FROM bookings");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Bookings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>📋 Booked Tickets</h2>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Bus</th>
        <th>Seat</th>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['bus_name']}</td>
            <td>{$row['seat_no']}</td>
          </tr>";
}
?>

</table>

</body>
</html>
