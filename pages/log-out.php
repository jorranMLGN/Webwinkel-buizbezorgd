<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$url = $_SERVER['HTTP_REFERER'];
var_dump($url);
session_unset();
session_destroy();
header('Location: '.$url.'#');
?>

</body>
</html> 