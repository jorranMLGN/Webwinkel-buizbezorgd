<?php

function cardRemove($id,$name, $description, $price, $imageLink) {
    echo <<<CARD
    
      <li id="$id" class="p-4 bg-white rounded-lg shadow">
        <img src="$imageLink" alt="Product 1" class="w-full mb-4" />
        <h3 class="mb-2 text-lg font-bold">$name</h3>
        <p class="mb-2 text-gray-700">$description</p>
        <p class="mb-2 text-lg font-bold text-green-600">€ $price</p>
        <form action="./pages/remove-item.php" method="post" class="flex flex-col max-w-4xl p-5 rounded-lg shadow bg-slate-50 lg:max-w-9xl lg:min-w-9xl">
          <input type="hidden" name="id" value="$id">
          <input name="name" type="submit" value="Verwijderen" required>
        </form>
      </li>
  CARD;

  }