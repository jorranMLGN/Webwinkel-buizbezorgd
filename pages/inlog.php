<?php session_start(); ?>

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
$_SESSION['email'] = $email;

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
      $stmt = $conn->prepare("SELECT email FROM `users` WHERE email=:email AND pass=:pass");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':pass', $psw);

      // $stmt->bindParam(':role', $role);

      $stmt->execute();

      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      $rows = $stmt->fetchAll();
      if(count($rows) > 0){
        echo "User logged in successfully!<br>";
        $stmt = $conn->prepare("SELECT id FROM `users` WHERE email=:email");
        $stmt->bindParam(':email', $email);
          
        $stmt->execute();
        $id = $stmt->fetch();


        // $token = bin2hex(random_bytes(16)); // generate 16 bytes of random data and convert it to a hexadecimal string
        $_SESSION['user_id'] = $id;
        
        echo "Session ID: <BR>";
        echo ($id[0]);

        
      }else{
        echo "Invalid email or password!";
      }
    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
}
header('refresh:1; url=../index.php#');
?>
</body>
</html>