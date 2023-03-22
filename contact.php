<?php require_once 'components/card.php'; ?>
<?php require_once 'components/login.php'; ?>
<?php require_once 'components/header.php'; ?>
<?php require_once 'components/headerLoggedIn.php'; ?>
<?php require_once 'pages/conn.php'; ?>

<?php session_start();?>

<!DOCTYPE html>
<html>
  <head>
    <title>BuisBezorgd</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/login-popup.js"></script>
    <link href="https://fonts.apple.com/fonts/san-francisco" rel="stylesheet" />
  </head>
  <body class="grid bg-gray-100">
  <?php 
  sessionValid();
  ?>

    <img src="media/bg-cocktail.png" alt="cocktails" class="w-full mb-4" />
    <main class="max-w-6xl mx-auto mt-1 mb-6 bg-white rounded-lg shadow-xl">
    <div class="relative">
      <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2"></div>
      </div>
      <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
        <div class="px-4 py-4 mt-16 sm:px-6 lg:col-span-2 lg:px-8 lg:py-10 xl:pr-12">
          <div class="max-w-lg mx-auto">
            <h3
              class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">
              Contact
            </h3>
            
            <p class="mt-2 text-lg leading-6 text-gray-500 lg:mt-5">
              Zet u informatie hier in zodat wij z.s.m contact met u opnemen!
            </p>
            <dl class="mt-8 text-base text-gray-500">
              <div>
                <dt class="sr-only">Postal address</dt>
                <dd>
                  <p>Millingen aan de Rijn</p>
                  <p>Spijkerhofdwarsweg 11, 6566CB</p>
                </dd>
              </div>
              <div class="mt-10">
                <dt class="sr-only">Telefoon</dt>
                <dd class="flex">
                  <!-- Heroicon name: outline/phone -->
                  <svg
                    class="flex-shrink-0 w-6 h-6 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                  </svg>
                  <span class="ml-3">+31 6-122-67-257</span>
                </dd>
              </div>
              <div class="mt-6">
                <dt class="sr-only">Email</dt>
                <dd class="flex">
                  <!-- Heroicon name: outline/envelope -->
                  <svg
                    class="flex-shrink-0 w-6 h-6 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    aria-hidden="true">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                  </svg>
                  <span class="ml-3">Jorranhoukes1@gmail.com</span>
                </dd>
              </div>
            </dl>
          </div>
        </div>
        <div
          class="px-4 py-16 bg-white rounded sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
          <div class="max-w-lg mx-auto lg:max-w-none">
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
              <div>
                <label for="full-name" class="sr-only">Volledige naam</label>
                <input
                  type="text"
                  name="full-name"
                  id="full-name"
                  autocomplete="name"
                  class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-md focus:border-indigo-500 focus:ring-indigo-500"
                  placeholder="Volledige naam" />
              </div>
              <div>
                <label for="email" class="sr-only">Email</label>
                <input
                  id="email"
                  name="email"
                  type="email"
                  autocomplete="email"
                  class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-md focus:border-indigo-500 focus:ring-indigo-500"
                  placeholder="Email" />
              </div>
              <div>
                <label for="phone" class="sr-only">Telefoon</label>
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  autocomplete="tel"
                  class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-md focus:border-indigo-500 focus:ring-indigo-500"
                  placeholder="Telefoon" />
              </div>
              <div>
                <label for="message" class="sr-only">Bericht</label>
                <textarea
                  id="message"
                  name="message"
                  rows="4"
                  class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-md focus:border-indigo-500 focus:ring-indigo-500"
                  placeholder="Bericht"></textarea>
              </div>
              <div>
                <button
                  type="button"
                  class="inline-flex justify-center px-6 py-3 text-base font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-800 ">
                  Verstuur
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
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
