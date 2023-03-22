<?php
session_start(); 

require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>  
<?php




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $email = $_POST['email'];
    $psw = $_POST['password'];
    $confirm_password = $_POST['passwordconfirm'];
    // Validate inputs
    $errors = [];
    if (empty($email)) {
        $errors['email'] = 'E-mailadres is verplicht';
        echo $errors['email'];

    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Ongeldig e-mailadres';
        echo $errors['email'];
    }
    if (empty($psw)) {
        
        $errors['pass'] = 'Wachtwoord is verplicht';
        echo $errors['pass'];

    } else if ($psw !== $confirm_password) {
        $errors['passwordconfirm'] = 'Wachtwoorden komen niet overeen';
        echo $errors['passwordconfirm'];

    }

    if (empty($errors)) {
        var_dump($_POST);

    // Save user to database and redirect to home page
        // (Note: this is just a sample implementation, you should use prepared statements and password hashing for security)
        $stmt = $conn->prepare("INSERT INTO `users` (email, pass) VALUES (:email, :pass)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $psw);
        $stmt->execute();

    }
    header('refresh:5; url=../index.php#');


}
