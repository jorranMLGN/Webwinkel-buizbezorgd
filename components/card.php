<?php

function card($name, $description, $price, $imageLink) {
    echo <<<CARD
      <li class="bg-white shadow rounded-lg p-4">
        <img src="$imageLink" alt="Product 1" class="w-full mb-4" />
        <h3 class="text-lg font-bold mb-2">$name</h3>
        <p class="text-gray-700 mb-2">$description</p>
        <p class="text-green-600 font-bold text-lg mb-2">€ $price</p>
        <button class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 mt-3">Toevoegen</button>
      </li>
  CARD;
  }