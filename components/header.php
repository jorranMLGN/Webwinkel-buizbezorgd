<?php

function headerComp() {

    echo <<<HEADERCOMP
    
    <header class="flex items-center justify-between px-4 py-2 bg-teal-800">
    <h1 class="text-2xl font-bold text-white">BuisBezorgd</h1>
    <nav>
      <ul class="flex">
        <li class="mr-2 lg:mr-4">
          <a href="index.php" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900 ">Home</a>
        </li>
        <li class="mr-2 lg:mr-4">
          <a href="product.php" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">Products</a>
        </li>
        <li class="mr-2 lg:mr-4">
          <a href="contact.php" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">Contact</a>
        </li>
        <li>
          <a href="#"  onclick="popupLogin()" class="text-xs font-bold text-white lg:text-lg hover:text-gray-900">Login</a>
        </li>
      </ul>
    </nav>
  </header>
  HEADERCOMP;
  }



