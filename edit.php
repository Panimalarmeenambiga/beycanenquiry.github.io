<?php
include "db.php";
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM enquiries WHERE id=$id")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Enquiry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h2>Edit Enquiry</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    Name:<br>
    <input type="text" name="name" value="<?= $data['name']; ?>"><br><br>

    Class:<br>
    <input type="text" name="class" value="<?= $data['class']; ?>"><br><br>

    Course:<br>
    <input type="text" name="course" value="<?= $data['course']; ?>"><br><br>

    Mobile:<br>
    <input type="text" name="mobile" value="<?= $data['mobile']; ?>"><br><br>

    Alternative Mobile:<br>
    <input type="text" name="alt_mobile" value="<?= $data['alt_mobile']; ?>"><br><br>

    City:<br>
    <input type="text" name="city" value="<?= $data['city']; ?>"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
