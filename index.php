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
    <link href="https://fonts.apple.com/fonts/san-francisco" rel="stylesheet" />
  </head>
  <body class="grid bg-gray-100">
    <?php headerComp(); ?>
    <?php login(); ?>

    <?php 
      // var_dump($_SESSION);
      ?>
    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />
    <main class="max-w-6xl mx-auto mt-1 mb-3 bg-white rounded-lg shadow-xl">
      <div class="flex flex-wrap">
        <div class="w-full p-6 md:w-1/2">
          <h2 class="text-2xl font-bold text-gray-800">
            Bestel gemakkelijk en snel
          </h2>
          <p class="mt-2 text-gray-600">
            Bij Buisbezorgd bieden we een uitgebreid assortiment aan dranken,
            waaronder bier, wijn, sterke drank en mixdrankjes. Of je nu thuis
            bent of op een feestje, wij zorgen ervoor dat je nooit zonder drank
            zit.
          </p>
          <p class="mt-2 text-gray-600">
            Onze bezorgservice is snel, betrouwbaar en discreet. We bezorgen je
            dranken op een veilige en verantwoorde manier, zodat jij kunt
            genieten van je avond zonder zorgen.
          </p>
          <p class="mt-2 text-gray-600">
            Dus waar wacht je nog op? Plaats vandaag nog je bestelling en laat
            ons je dranken bij je thuis bezorgen. Bij Buisbezorgd staan we
            altijd voor je klaar!
          </p>
          <div class="flex flex-row justify-between">
            <div class="h-32 mr-3">
              <img class="w-full h-full" src="media/rating.png" alt="Rating" />
            </div>
            <a
              href="product.php"
              class="px-2 py-2 mt-24 font-bold text-white bg-green-500 rounded max-h-10 hover:bg-green-700"
              >Bestel nu</a
            >
          </div>
        </div>

        <div class="w-full p-6 md:w-1/2">
          <img
            class="object-cover object-center w-full h-full rounded-lg"
            src="media/bier.png"
            alt="Bier" />
        </div>
      </div>
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
