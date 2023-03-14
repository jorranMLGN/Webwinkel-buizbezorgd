<?php require_once 'components/card.php'; ?>
<?php require_once 'components/login.php'; ?>
<?php require_once 'components/header.php'; ?>
<?php require_once 'pages/conn.php';?> 


<!DOCTYPE html>
<html>
  <head>
    <title>BuisBezorgd</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/login-popup.js"></script>
    <script src="js/shopping-add.js"></script>

  </head>
  <body class="grid bg-gray-100">
    <?php headerComp(); ?>
    <?php login(); ?>

    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />

    <main class="flex flex-wrap justify-between px-4 py-8">
      <section class="w-full lg:w-2/3">
        <h2 class="mb-4 text-2xl font-bold">Uitgelichte Producten</h2>
        <ul class="grid grid-cols-1 gap-6 lg:grid-cols-3">
          <?php
          $stmt = $conn->prepare("SELECT name, description, price, img FROM `product`");
          $stmt->execute();      
  
          $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
          $rows = $stmt->fetchAll();

          foreach ($rows as $row) {
            card($row['name'], $row['description'], $row['price'], $row['img']);
          }
          ?>
          
        </ul>
      </section>
      <aside class="w-1/3 p-4 bg-gray-100">
        <div class="flex flex-row">
        <h2 class="p-5 mt-0 text-lg font-bold">Winkelmand</h2>
        <div class="w-2/12 p-3 "><img src="media/winkelmand.svg" alt="Winkelmand"></div>
        </div>
        <ul id="shopCartParent" class="p-4 m-0 list-none">
        </ul>
        <button
          class="px-4 py-2 mt-4 ml-4 text-white bg-gray-800 border-none cursor-pointer hover:bg-gray-900">
          Checkout
        </button>
      </aside>
    </main>
    <footer class="bg-gray-200">
      <div
        class="container flex items-center justify-between px-6 py-4 mx-auto">
        <p class="mt-2 text-gray-600">© 2023 Buisbezorgd</p>
        <a class="text-gray-600 hover:text-gray-800" href="/contact">Contact</a>
      </div>
    </footer>
  </body>
</html>
