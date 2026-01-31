<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM enquiries ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Enquiries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial; }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: #0a58ca;
            color: #fff;
        }
        a {
            text-decoration: none;
            color: #0a58ca;
        }
    </style>
</head>
<body>

<h2>Beycan Enquiries</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>Course</th>
    <th>Mobile</th>
    <th>Alt Mobile</th>
    <th>City</th>
    <th>Action</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['class']; ?></td>
    <td><?= $row['course']; ?></td>
    <td><?= $row['mobile']; ?></td>
    <td><?= $row['alt_mobile']; ?></td>
    <td><?= $row['city']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this enquiry?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
