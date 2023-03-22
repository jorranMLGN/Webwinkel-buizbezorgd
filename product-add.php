<?php require_once 'components/card.php'; ?>
<?php require_once 'components/login.php'; ?>
<?php require_once 'components/header.php'; ?>
<?php require_once 'components/headerLoggedIn.php'; ?>
<?php require_once 'pages/conn.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>BuisBezorgd</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/login-popup.js"></script>
  </head>
  <body class="grid bg-gray-100">
  <?php 
  sessionValid();
  ?>
    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />
    <main class="max-w-6xl mx-auto mt-1 mb-3 rounded-lg ">
    <div class="z-20 transition-all ease-in-out rounded-lg shadow mb-28 place-self-center" id="productAdd">
    <form action="./pages/add-item.php"  enctype="multipart/form-data" method="post" class="flex flex-col max-w-4xl p-5 rounded-lg shadow bg-slate-50 lg:max-w-9xl lg:min-w-9xl">
        <div class="flex flex-row justify-between">
        <h1 class="p-1 ">Product toevoegen</h1>
        </div>
        <div class="p-4">
        <div class="w-11/12 h-px m-auto shadow-md bg-slate-200"></div>
        </div>
        <label for="name"><b>Naam Product</b></label>
        <input class="p-3 m-1 mb-3 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none"
        type="text" placeholder="Voer naam in" name="name" required />
        <label for="description"><b>Beschrijving</b></label>
        <input class="p-3 m-1 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none" type="description" placeholder="Vul beschrijving in" name="description" required />
        <div class="w-11/12 h-px m-auto mt-4 mb-4 shadow-md bg-slate-200"></div>
        <label for="name"><b>Bedrag €</b></label>
        <input class="p-3 m-1 mb-3 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none"
        type="number" min="0.00" max="10000.00" step="0.01" placeholder="Voer bedrag in € ( 00,00 )" name="price" required />
        <div class="w-11/12 h-px m-auto mt-4 mb-4 shadow-md bg-slate-200"></div>

        <label for="name"><b>Foto toevoegen</b></label>
        <input class="p-3 m-1 mb-3 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none"
        type="text" placeholder="Geef foto link" name="img" required />
        <button type="submit" class="w-3/4 p-2 m-auto font-semibold shadow rounded-xl">+ Toevoegen</button>
    </form>
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
