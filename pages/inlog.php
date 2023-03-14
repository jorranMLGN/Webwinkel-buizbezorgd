<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>  

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$db = "buisbezordbase";

$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

// $delay = $_POST[""];

$email = $_POST["email"];
$psw = $_POST["password"];
// $role = "";


if (empty($_POST["email"])) {
  echo $emailErr = "Email is required";
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $emailErr = "Invalid email format";
  }else{
    echo "Your E-mail address is: ".$email."<br>";
    echo "Your Password is: ".$psw."<br>";
    try{
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT username FROM `users` WHERE username=:email AND pass=:pass");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':pass', $psw);
      // $stmt->bindParam(':role', $role);

      $stmt->execute();      

      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      $rows = $stmt->fetchAll();
      if(count($rows) > 0){
        echo "User logged in successfully!";
      }else{
        echo "Invalid email or password!";
      }
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
header('refresh:5; url=../index.php#');
$conn = null;
?>
</body>
</html>