<?php
include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $quantity = $_POST["quantity"];

    $query = "INSERT INTO books (title, author, quantity) VALUES ('$title', '$author', $quantity)";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Title: <input type="text" name="title" required><br>
        Author: <input type="text" name="author" required><br>
        Quantity: <input type="number" name="quantity" required><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
