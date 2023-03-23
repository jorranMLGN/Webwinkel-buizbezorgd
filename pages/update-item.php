<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product add</title>
</head>
<body>  

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$db = "buisbezordbase";

$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$img = $_POST['image'];


// Connect to the database

// Update the product with the new information

$stmt = $conn->prepare('UPDATE product SET name = ?, description = ?, price = ?, img = ? WHERE id = ?');


$stmt->execute([$name, $description, $price, $img, $id]);

// Redirect back to the page that displays the product list
header('Location: ../product-add.php');
?>

</body>
</html>