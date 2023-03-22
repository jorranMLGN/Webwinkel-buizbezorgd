<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db = "buisbezordbase";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully"."<br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function sessionValid(){
  if($_SESSION){
  
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $db = "buisbezordbase";
  
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $conn->prepare("SELECT email FROM `users` WHERE email=:email AND id=:id");
    $stmt->bindParam(':email', $_SESSION['email']);
    $stmt->bindParam(':id', $id);
  
    $stmt->execute();
  
      $email = $_SESSION['email'];
      $name = explode('@', $email); // Get the part of email before '@'
      headerCompLogged($name[0]);
  
    // var_dump($email);
    var_dump($name);
    echo"Session is set!<BR>";
  
  }else{
    headerComp();
    login();
    echo"Session is not set!";
  }
}

  
?> 