<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Bus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Select Bus</h2>

<form action="../backend/book.php" method="post">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <input type="hidden" name="phone" value="<?php echo $phone; ?>">

    <select name="bus_name" required>
        <option value="Volvo AC">Volvo AC</option>
        <option value="Sleeper Coach">Sleeper Coach</option>
        <option value="Express Bus">Express Bus</option>
    </select>

    <input type="number" name="seat_no" placeholder="Seat Number" required>
    <button type="submit">Book Seat</button>
</form>

</body>
</html>
