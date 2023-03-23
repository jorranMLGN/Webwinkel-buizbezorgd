<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if (isset($_POST['message'])) {
  $fullname = $_POST['fullName'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];
  $url = "http://mail.google.com/mail/?view=cm&fs=1&to=1181889@student.roc-nijmegen.nl&su=Contact Buisbezorgd&body=Naam: " . urlencode($fullname) . "%0D%0ATelefoon: " . urlencode($phone) . "%0D%0A%0D%0A" . urlencode($message);
  header("refresh:2;url=$url");
  echo "<h2>Uw bericht word doorverwezen...</h2>";

}
?>


</body>
</html> 