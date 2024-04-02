<?php
include_once 'db_connect.php';

$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
</head>
<body>
    <h1>Books</h1>
    <ul>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <li><?php echo $row['title']; ?> by <?php echo $row['author']; ?> (Available: <?php echo $row['quantity']; ?>)</li>
        <?php } ?>
    </ul>
</body>
</html>
