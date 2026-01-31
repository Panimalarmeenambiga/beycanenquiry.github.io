<?php
include "db.php";

$id         = $_POST['id'];
$name       = $_POST['name'];
$class      = $_POST['class'];
$course     = $_POST['course'];
$mobile     = $_POST['mobile'];
$alt_mobile = $_POST['alt_mobile'];
$city       = $_POST['city'];

mysqli_query($conn, "
    UPDATE enquiries SET
        name='$name',
        class='$class',
        course='$course',
        mobile='$mobile',
        alt_mobile='$alt_mobile',
        city='$city'
    WHERE id=$id
");

header("Location: view.php");
?>
