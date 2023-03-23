<?php

function message($id,$Fullname, $email, $phone, $body) {
    echo <<<MESSAGE
    
    <li id="$id" class="flex flex-row justify-between gap-4 p-10 bg-white rounded-lg shadow">
        <div class="flex items-center justify-between">
            <span class="font-semibold text-gray-800">$Fullname</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-sm text-gray-600">$email</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-sm text-gray-600">$phone</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-2xl text-gray-600">$body</span>
        </div>
        <div class="flex items-center justify-between">
            <form action="pages/remove-message.php" method="post">
               <input type="hidden" name="id" value="$id">
                <button class="p-1 m-4 text-white bg-red-600 rounded shadow-md" type="submit" value="Delete">Verwijder</button>
            </form>
        </div>
    </li>
  MESSAGE;

  }