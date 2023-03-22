<?php

function login() {
    require_once './pages/conn.php';

    echo <<<LOGIN
    <div class="fixed z-20 hidden transition-all ease-in-out rounded-lg opacity-0 top-20 place-self-center" id="loginForm">
    <form action="./pages/inlog.php" method="post" class="flex flex-col max-w-4xl p-5 rounded-lg shadow bg-slate-50 lg:max-w-9xl lg:min-w-9xl">
        <div class="flex flex-row justify-between">
        <h1 class="p-3 ">Inloggen</h1>
        <button type="button" class="justify-center w-6 p-2 text-2xl font-medium mb-7 " onclick="popupLogin()">X</button>
        </div>
        <div class="mb-5">
        <button type="submit" class="flex flex-row items-center w-11/12 p-3 m-auto mb-5 shadow rounded-xl">
          <div class="w-4 h-4 mr-2">  
            <img src="media/google.svg" alt="Google svg" class="w-full h-full ">
          </img>
        </div>Google</button>
        <button type="submit" class="flex flex-row items-center w-11/12 p-3 m-auto mt-3 shadow rounded-xl">
        <div class="w-4 h-4 mr-2">
        <img src="media/facebook.svg" alt="Facebook svg" class="w-full h-full"></img>
        </div>Facebook</button>
        </div>

        <div class="p-4">
        <div class="w-11/12 h-px m-auto shadow-md bg-slate-200"></div>
        </div>
        <label for="email"><b>E-mailadres</b></label>
        <input class="p-3 m-1 mb-3 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none"
        type="text" placeholder="Vul in Email" name="email" required />
        <label for="psw"><b>Wachtwoord</b></label>
        <input class="p-3 m-1 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none" type="password" placeholder="Vul in Wachtwoord" name="password" required />
        <div class="p-4">
        <div class="w-11/12 h-px m-auto shadow-md bg-slate-200"></div>
        </div>
        <button type="submit" class="w-3/4 p-2 m-auto font-semibold shadow rounded-xl">Login</button>
        <a class="p-1 text-xs text-center">Nog geen account?</a>
        <button type="button" onclick="popupRegister()" class="w-1/2 m-auto mt-2 text-xl font-semibold text-gray-600 decoration-dashed rounded-xl">Registreer hier</button>
    </form>
    </div>
    <div class="fixed z-10 hidden w-full h-full transition-all ease-in-out opacity-0 bg-black/50" id="backgroundOpacity"></div>

    <div class="fixed z-20 hidden transition-all ease-in-out rounded-lg opacity-0 top-20 place-self-center" id="registerForm">
    <form action="./pages/register.php" method="post" class="flex flex-col max-w-4xl p-5 rounded-lg shadow bg-slate-50 lg:max-w-9xl lg:min-w-9xl">
        <div class="flex flex-row justify-between">
        <h1 class="p-3 ">Registreren</h1>
        <button type="button" class="justify-center w-6 p-2 text-2xl font-medium mb-7 " onclick="popupRegister()">X</button>
        </div>
        
        <label for="email"><b>E-mailadres</b></label>
        <input class="p-3 m-1 mb-3 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none"
        type="text" placeholder="Vul in Email" name="email" required />
        <div class="w-11/12 h-px m-auto my-2 shadow-md bg-slate-200"></div>

        <label for="psw"><b>Wachtwoord</b></label>
        <input class="p-3 m-1 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none" type="password" placeholder="Vul in Wachtwoord" name="password" required />
        <label for="psw-repeat"><b>Herhaal wachtwoord</b></label>
        <input class="p-3 m-1 shadow rounded-xl w-96 focus:bg-slate-200 focus:outline-none" type="password" placeholder="Herhaal Wachtwoord" name="passwordconfirm" required />
        <div class="p-4">
        <div class="w-11/12 h-px m-auto shadow-md bg-slate-200"></div>
        </div>
        <button type="submit" class="w-3/4 p-2 m-auto font-semibold shadow rounded-xl">Registreren</button>
        <a class="p-1 text-xs text-center">Heb je al een account?</a>
        <button onclick="popupSwitchLogin()" class="w-1/2 m-auto mt-2 text-xl font-semibold text-gray-600 decoration-dashed rounded-xl">Log hier in</button>
    </form>
    </div>
    <div class="fixed z-10 hidden w-full h-full transition-all ease-in-out opacity-0 bg-black/50" id="backgroundOpacity"></div>
  LOGIN;
  }

  