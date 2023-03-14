<?php

function card($name, $description, $price, $imageLink) {
    echo <<<CARD
    
      <li class="p-4 bg-white rounded-lg shadow">
        <img src="$imageLink" alt="Product 1" class="w-full mb-4" />
        <h3 class="mb-2 text-lg font-bold">$name</h3>
        <p class="mb-2 text-gray-700">$description</p>
        <p class="mb-2 text-lg font-bold text-green-600">€ $price</p>
        <button id="addCart" class="px-4 py-2 mt-3 text-white bg-green-600 rounded hover:bg-green-700" onclick="addCart('$name','$price')">Toevoegen</button>
      </li>
  CARD;
  }