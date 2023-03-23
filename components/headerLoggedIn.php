<?php
require_once "./pages/conn.php";

  function headerCompLogged($name,$admin) {

    echo <<<HEADERCOMPLOGGED
  <header class="flex items-center justify-between px-4 py-2 bg-teal-800">
  <h1 class="text-2xl font-bold text-white">BuisBezorgd</h1>
  <nav>
    <ul class="flex">
      <li class="mr-2 lg:mr-4">
        <a href="index.php" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">Home</a>
      </li>
      <li class="mr-2 lg:mr-4">
        <a href="product.php" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">Products</a>
      </li>
      <li class="mr-2 lg:mr-4">
        <a href="contact.php" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">Contact</a>
      </li>
      <li>
        <button onclick="personalMenuToggle()" id="personal-menu-toggle" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">$name</button>
      </li>
    </ul>
  </nav>
  </header>
  <div id="personal-menu" class="absolute hidden w-32 py-2 bg-white rounded-md shadow-xl right-2 top-10">
  <a href="#" class="block px-4 py-2 text-sm text-center text-gray-700 hover:bg-gray-100">Mijn bestellingen</a>
  <a href="./product-add.php" class="$admin px-4 py-2 text-sm text-center text-gray-700 hover:bg-gray-100">Admin Paneel</a>
  <a href="./messageHub.php" class="$admin px-4 py-2 text-sm text-center text-gray-700 hover:bg-gray-100">Berichten Hub</a>

  <form action="./pages/log-out.php" method="post">
  <button class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Uitloggen</button>
  </form>
  </div>


  HEADERCOMPLOGGED;
  }



