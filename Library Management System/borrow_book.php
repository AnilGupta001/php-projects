<?php
include_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    $book_id = $_POST["book_id"];
    $borrow_date = date("Y-m-d");
    $return_date = date("Y-m-d", strtotime("+1 week"));

    $query = "INSERT INTO borrowings (user_id, book_id, borrow_date, return_date) VALUES ($user_id, $book_id, '$borrow_date', '$return_date')";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Book</title>
</head>
<body>
    <h1>Borrow Book</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        User ID: <input type="number" name="user_id" required><br>
        Book ID: <input type="number" name="book_id" required><br>
        <input type="submit" value="Borrow">
    </form>
</body>
</html>
