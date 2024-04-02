<?php
// Include database connection file
include_once 'db_connect.php';

// Fetch product details
$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h1><?php echo $row['name']; ?></h1>
    <p><?php echo $row['description']; ?></p>
    <p>Price: $<?php echo $row['price']; ?></p>
    <a href="add_to_cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a>
</body>
</html>
