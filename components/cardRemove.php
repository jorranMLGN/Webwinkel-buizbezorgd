<?php

function cardRemove($id,$name, $description, $price, $imageLink) {

    $idChange = $id."0";
    $idMain = $id."1";
    echo <<<CARD
    
      <li id="$id" class="p-4 mx-4 bg-white rounded-lg shadow ">
        <div class="flex flex-col justify-between min-h-full" id="$idMain">
          <img src="$imageLink" alt="Product 1" class="w-full mb-4" />
          <h3 class="mb-2 text-lg font-bold">$name</h3>
          <p class="mb-2 text-gray-700">$description</p>
          <p class="mb-2 text-lg font-bold text-green-600">€ $price</p>
          <button class="max-w-4xl p-3 mb-4 font-semibold align-middle rounded-lg shadow bg-slate-100" onclick="changeDescPopup($idMain,$idChange)"  value="Wijzig" required>Wijzig</button>
          <form action="./pages/remove-item.php" method="post" class="flex flex-col max-w-4xl p-3 font-semibold text-white bg-red-600 rounded-lg shadow hover:bg-red-700 focus:bg-red-800">
            <input type="hidden" name="id" value="$id">
            <button class="" name="name" type="submit" value="Verwijderen" required>Verwijderen</button>
          </form>
        </div>

        <div class="hidden" id="$idChange">
        <button class="max-w-4xl p-3 mb-4 font-semibold align-middle rounded-lg shadow bg-slate-200" onclick="changeDescPopup($idMain,$idChange)"  value="Terug" required>Terug</button>
        <form  action="../pages/update-item.php" method="post" class="flex flex-col max-w-4xl p-3 font-semibold rounded-lg shadow bg-slate-100 ">
          <input type="hidden" name="id" value="$id">
          <label for="name">Product Name:</label>
          <input class="p-2 rounded-lg shadow" type="text" name="name" value="$name" required>
          <label for="description">Description:</label>
          <textarea class="p-2 mt-3 align-middle rounded-lg shadow" name="description" required>$description</textarea>
          <label for="price">Price:</label>
          <input class="p-2 mt-3 align-middle rounded-lg shadow" type="number" name="price" value="$price" step="0.01" required>
          <input class="p-2 mt-3 align-middle rounded-lg shadow" type="text" name="image" value="$imageLink" required>

          <button class="p-2 mt-3 align-middle rounded-lg shadow bg-slate-100" type="submit">Update</button>
        </form>
        </div>

      </li>
  CARD;

  }