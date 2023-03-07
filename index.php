<?php require_once 'components/card.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>BuisBezorgd</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/login-popup.js"></script>
  </head>
  <body class="bg-gray-100 grid">
    <header class="bg-teal-800 px-4 py-2 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-white">BuisBezorgd</h1>
      <nav>
        <ul class="flex">
          <li class="mr-2 lg:mr-4">
            <a href="#" class="text-white font-bold text-xs lg:text-lg hover:text-gray-900 ">Home</a>
          </li>
          <li class="mr-2 lg:mr-4">
            <a href="#" class="text-white font-bold text-xs lg:text-lg hover:text-gray-900">Products</a>
          </li>
          <li class="mr-2 lg:mr-4">
            <a href="#" class="text-white font-bold text-xs lg:text-lg hover:text-gray-900">About</a>
          </li>
          <li class="mr-2 lg:mr-4">
            <a href="#" class="text-white font-bold text-xs lg:text-lg hover:text-gray-900">Contact</a>
          </li>
          <li>
            <a href="#"  onclick="popupLogin()" class="text-white font-bold text-xs lg:text-lg hover:text-gray-900">Login</a>
          </li>
        </ul>
      </nav>

    </header>
    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />

    <div class="hidden fixed rounded z-20 place-self-center" id="loginForm">
        <form action="/action_page.php" class="flex flex-col max-w-4xl p-5 shadow bg-white lg:max-w-9xl lg:min-w-9xl">
            <h1 class="py-3 ">Login</h1>
            <label for="email"><b>Email</b></label>
            <input class="w-72 p-2 m-1 rounded focus:bg-slate-400 focus:outline-none shadow"
            type="text" placeholder="Enter Email" name="email" required />
            <label for="psw"><b>Password</b></label>
            <input class="w-72 p-3 m-1 border-none focus:bg-slate-400 focus:outline-none shadow"
            type="password" placeholder="Enter Password" name="psw" required />
            <button type="submit" class="w-3/4 m-auto p-2 mt-5 rounded shadow">Login</button>
            <button type="button" class="w-3/4 m-auto p-2 mt-2 rounded shadow" onclick="popupLogin()">
            Close
            </button>
        </form>
    </div>

    <main class="px-4 py-8 flex flex-wrap justify-between">
      <section class="products w-full lg:w-2/3">
        <h2 class="text-2xl font-bold mb-4">Featured Products</h2>
        <ul class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <?php card("Hertog jan pils 24stuks","Alcoholpercentage: 5.1%","20,-","./media/product1.png",); ?>
          <?php card("Birra Moretti L'autentica krat","Alcoholpercentage: 4.6%","21.99,-","./media/product2.png",); ?>
          <?php card("Grolsch Pilsener krat","Alcoholpercentage: 5%","17.98,-","./media/product3.png",); ?>
        </ul>
      </section>
      <aside class="cart w-1/3 bg-gray-100 p-4">
        <h2 class="mt-0">Shopping Cart</h2>
        <ul class="list-none m-0 p-0">
          <li class="mb-2">Product 1 - $19.99</li>
          <li class="mb-2">Product 2 - $29.99</li>
          <li class="mb-2">Product 3 - $39.99</li>
          <li class="font-bold">Total: $89.97</li>
        </ul>
        <button
          class="bg-gray-800 text-white border-none py-2 px-4 mt-4 cursor-pointer hover:bg-gray-900">
          Checkout
        </button>
      </aside>
    </main>
    <footer class="bg-gray-200 py-4 text-center">
      <p>&copy; 2023 My Webshop Store. All rights reserved.</p>
    </footer>
  </body>
</html>
