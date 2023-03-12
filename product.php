<?php require_once 'components/card.php'; ?>
<?php require_once 'components/login.php'; ?>
<?php require_once 'components/header.php'; ?>


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
          <?php card("Hertog jan pils 24stuks","Alcoholpercentage: 5.1%","20,-","./media/product1.png",); ?>
          <?php card("Birra Moretti L autentica krat","Alcoholpercentage: 4.6%","21,99","./media/product2.png",); ?>
          <?php card("Grolsch Pilsener krat","Alcoholpercentage: 5%","17,98","./media/product3.png",); ?>
          
        </ul>
      </section>
      <aside class="w-1/3 p-4 bg-gray-100">
        <div class="flex flex-row">
        <h2 class="p-5 mt-0 text-lg font-bold">Winkelmand</h2>
        <div class="w-2/12 p-3 "><img src="media/winkelmand.svg" alt="Winkelmand"></div>
        </div>
        <ul id="shopCartParent" class="p-4 m-0 list-none">


          <!-- <li class="font-bold">Totaal: €89.97</li> -->
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
