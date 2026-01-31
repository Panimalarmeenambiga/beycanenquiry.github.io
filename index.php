<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beycan Enquiry</title>

    <!-- IMPORTANT viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Background Video -->
<video autoplay muted loop id="bgVideo">
    <source src="bg enquiry.mp4" type="video/mp4">
</video>

<!-- Center Wrapper -->
<div class="form-wrapper">

    <div class="container">
<?php if (isset($_GET['success'])) { ?>
    <div class="success-box">
        ✅ Enquiry Submitted Successfully!
    </div>
<?php } ?>

        <!-- Logo -->
        <div class="logo-box">
            <img src="logo.png" alt="Beycan Logo">
        </div>

        <!-- Form -->
        <form action="save.php" method="POST">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="text" name="class" placeholder="Class / Qualification">
            <input type="text" name="course" placeholder="Interested Course">
            <input type="tel" name="mobile" placeholder="Mobile Number" required>
            <input type="tel" name="alt_mobile" placeholder="Alternative Number">
            <input type="text" name="city" placeholder="City">

            <button type="submit" name="submit">Submit Enquiry</button>
        </form>

    </div>

</div>

</body>
</html>
