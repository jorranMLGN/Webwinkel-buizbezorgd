<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if (isset($_POST['message'])) {
  $fullname = $_POST['fullName'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];
  
  $_SESSION['message'] = $message;

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $db = "buisbezordbase";
  
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  
  
  if (empty($_POST["fullName"])) {
    echo $infoErr = "Unsuccessful";
  } else {
      try{
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO `messages` (`fullName`, `email`, `phone`, `body`) VALUES ('$fullname', '$email', '$phone', '$message')");
        $stmt->execute();      
      }
      catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      echo "Succes";
  
  }
  header('refresh:2; url=../contact.php#');
  $conn = null;

}
?>


</body>
</html> 