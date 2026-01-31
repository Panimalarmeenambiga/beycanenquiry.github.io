<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name       = $_POST['name'];
    $class      = $_POST['class'];
    $course     = $_POST['course'];
    $mobile     = $_POST['mobile'];
    $alt_mobile = $_POST['alt_mobile'];
    $city       = $_POST['city'];

    mysqli_query($conn, "
        INSERT INTO enquiries (name, class, course, mobile, alt_mobile, city)
        VALUES ('$name', '$class', '$course', '$mobile', '$alt_mobile', '$city')
    ");

    // Redirect with success flag
    header("Location: index.php?success=1");
    exit;
}
?>
