<?php require_once 'components/card.php'; ?>
<?php require_once 'components/login.php'; ?>
<?php require_once 'components/header.php'; ?>
<?php require_once 'pages/conn.php';?> 
<?php require_once 'components/headerLoggedIn.php'; 
 require_once 'components/footer.php';
 require_once 'components/messageContainer.php';?>


<?php session_start(); ?>
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
  <?php 
  sessionValid();
  ?>

    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />
    <div class="flex justify-center p-2">
    <form class="flex m-auto" method="post" action="product.php">
        <label class="p-4 text-center" for="search">Zoek product</label>
        <input
          name="search"
          class="w-2/4 p-2 mt-4 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500"
          type="text"
          placeholder="Zoek een product"
        />
        <button
          class="w-20 p-1 m-auto ml-4 text-white bg-green-600 rounded-lg max-h-10 hover:bg-green-700 focus:outline-none focus:bg-green-800"
          type="submit">Zoek</button>
        <button
          class="w-20 p-1 m-auto ml-4 text-white bg-red-600 rounded-lg max-h-8 hover:bg-red-700 focus:outline-none focus:bg-red-800"
          name="searchReset" type="submit">Reset</button>
      </form>
    </div>

    <main class="flex flex-wrap justify-between px-4 py-8">
      
      <section class="w-full lg:w-2/3">
        <h2 class="mb-4 text-2xl font-bold">Uitgelichte Producten</h2>
        <ul class="grid grid-cols-1 gap-6 lg:grid-cols-3">
          <?php
          if (empty($_POST["search"])||isset($_POST["searchReset"])) {
            $stmt = $conn->prepare("SELECT id, name, description, price, img FROM `product`");
            $stmt->execute();      
    
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $rows = $stmt->fetchAll();
    
            foreach ($rows as $row) {
              card($row['id'],$row['name'], $row['description'], $row['price'], $row['img']);
            }
          }else{
            $stmt = $conn->prepare("SELECT id, name, description, price, img FROM `product` WHERE name LIKE :search");
            $stmt->execute(['search' => '%' . $_POST["search"] . '%']);      
    
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            $rows = $stmt->fetchAll();
    
            foreach ($rows as $row) {
              card($row['id'],$row['name'], $row['description'], $row['price'], $row['img']);
            }
          }
          ?>
        </ul>
      </section>
      <aside class="w-1/3 p-4 bg-gray-100">
        <div class="flex flex-row">
        <h2 class="p-4 mt-0 text-3xl font-bold">Winkelmand</h2>
        <div class="w-2/12 p-3 "><img src="media/winkelmand.svg" alt="Winkelmand"></div>
        </div>
        <h1 id="emptyCard" class="p-4 mt-0 text-lg">Winkelmand is leeg!</h1>
        <ul id="shopCartParent" class="p-4 m-0 list-none">
        </ul>
        <button
          class="px-4 py-2 mt-4 ml-4 text-white bg-green-700 rounded cursor-pointer hover:bg-green-800 active:bg-green-900">
          Checkout
        </button>

      </aside>
    </main>
    <?php footer();?>

  </body>
</html>
