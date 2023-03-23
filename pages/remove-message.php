<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

  $id = $_POST["id"];

  $servername = "localhost";
  $username = "root";
  $password = "password";
  $db = "buisbezordbase";
  
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  
  
  if (empty($_POST["id"])) {
    echo $infoErr = "Unsuccessful";
  } else {
      try{
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("DELETE FROM `messages` WHERE `id` = '$id'");
        $stmt->execute();      
      }
      catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      echo "Succes";
  
  }
  header('refresh:2; url=../messageHub.php#');
  $conn = null;

?>


</body>
</html> 