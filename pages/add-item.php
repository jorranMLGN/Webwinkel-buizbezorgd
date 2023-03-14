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

$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$img = $_POST['img'];

if (empty($_POST["name"])) {
  echo $infoErr = "Unsuccessful";
} else {
    try{
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("INSERT INTO `product` (`name`, `description`, `price`, `img`) VALUES ('$name', '$description', '$price', '$img')");
      $stmt->execute();      
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    echo "Succes";

}
header('refresh:5; url=../product-add.php#');
$conn = null;
?>
</body>
</html>