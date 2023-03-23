<?php require_once 'components/card.php'; 
 require_once 'components/cardRemove.php'; 
 require_once 'components/login.php'; 
 require_once 'components/header.php'; 
 require_once 'components/headerLoggedIn.php'; 
 require_once 'pages/conn.php'; 
 require_once 'components/footer.php';
 require_once 'components/messageContainer.php';
 session_start(); 
  if(!isset($_SESSION['email'])){ 
    header('Location: index.php#');
  }
  else{
    if($_SESSION['role'][0] < 2){
      header('Location: index.php#');
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>BuisBezorgd</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/login-popup.js"></script>
    <link href="https://fonts.apple.com/fonts/san-francisco" rel="stylesheet" />
  </head>
  <body class="grid bg-gray-100">
  <?php 
  sessionValid();
  ?>

    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />
    <div class="flex justify-center p-2">
    <form class="flex m-auto" method="post" action="messageHub.php">
        <label class="p-4 text-center" for="search">Zoek Bericht</label>
        <input
          name="search"
          class="w-2/4 p-2 mt-4 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500"
          type="text"
          placeholder="Zoek een Bericht"
        />
        <button
          class="w-20 p-1 m-auto ml-4 text-white bg-green-600 rounded-lg max-h-10 hover:bg-green-700 focus:outline-none focus:bg-green-800"
          type="submit">Zoek</button>
        <button
          class="w-20 p-1 m-auto ml-4 text-white bg-red-600 rounded-lg max-h-8 hover:bg-red-700 focus:outline-none focus:bg-red-800"
          name="searchReset" type="submit">Reset</button>
      </form>
    </div>
    <main class="max-w-6xl mx-auto mt-1 mb-6 bg-white rounded-lg shadow-xl">
        <?php
            try{
            if (empty($_POST["search"])||isset($_POST["searchReset"])) {
                
                
            $stmt = $conn->prepare("SELECT id, fullName, email, phone, body FROM `messages`");
            $stmt->execute();      

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $rows = $stmt->fetchAll();

            foreach ($rows as $row) {
                message($row['id'],$row['fullName'], $row['email'], $row['phone'], $row['body']);
            }
            }else{
                $stmt = $conn->prepare("SELECT id, fullName, email, phone, body FROM `messages` WHERE fullName LIKE :search OR email LIKE :search OR phone LIKE :search OR body LIKE :search");
                $stmt->execute(['search' => '%' . $_POST["search"] . '%']);
                

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $rows = $stmt->fetchAll();

            foreach ($rows as $row) {
                message($row['id'],$row['fullName'], $row['email'], $row['phone'], $row['body']);
            }
            }
            }catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        ?>
    </main>

  </body>
</html>
