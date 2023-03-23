<?php

function footer() {
    echo <<<FOOTER
        <footer class="static bottom-0 flex w-full bg-gray-200 ">
            <div class="container flex items-center justify-between px-6 py-4 m-auto ">
                <p class="mt-2 text-gray-600">© 2023 Buisbezorgd</p>
                <a class="text-gray-600 hover:text-gray-800" href="/contact.php">Contact</a>
            </div>
        </footer>
  FOOTER;

  }