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
    var_dump($_POST["name"]);
    $id = doubleval($_POST["id"]);


if (empty($_POST["id"])) {
  echo $infoErr = "Unsuccessful";
} else {
    try{
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("DELETE FROM `product` WHERE `id` = '$id'");
      $stmt->execute();      
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    echo "Succes";

}
header('refresh:2; url=../product-add.php#');
$conn = null;
?>
</body>
</html>