var loginToggle = false;
var registerToggle = false;

function personalMenuToggle() {
  document.addEventListener("click", (event) => {
    const isClickInside =
      personalMenu.contains(event.target) ||
      personalMenuToggle.contains(event.target);
    if (!isClickInside) {
      personalMenu.classList.add("hidden");
    }
  });
}

function popupLogin() {
  if (!loginToggle) {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("backgroundOpacity").style.display = "block";

    setTimeout(function () {
      document.getElementById("loginForm").style.opacity = "1";
      document.getElementById("backgroundOpacity").style.opacity = "1";
    }, 150);
    loginToggle = true;
  } else {
    document.getElementById("loginForm").style.opacity = "0";
    document.getElementById("backgroundOpacity").style.opacity = "0";

    setTimeout(function () {
      document.getElementById("loginForm").style.display = "none";
      document.getElementById("backgroundOpacity").style.display = "none";
    }, 150);

    loginToggle = false;
  }
}

function popupRegister() {
  if (!registerToggle) {
    if (loginToggle) {
      document.getElementById("loginForm").style.opacity = "0";
      setTimeout(function () {
        document.getElementById("loginForm").style.display = "none";
      }, 150);
      loginToggle = false;
    }
    document.getElementById("registerForm").style.display = "block";
    document.getElementById("backgroundOpacity").style.display = "block";

    setTimeout(function () {
      document.getElementById("registerForm").style.opacity = "1";
      document.getElementById("backgroundOpacity").style.opacity = "1";
    }, 150);

    registerToggle = true;
  } else {
    document.getElementById("registerForm").style.opacity = "0";
    document.getElementById("backgroundOpacity").style.opacity = "0";

    setTimeout(function () {
      document.getElementById("registerForm").style.display = "none";
      document.getElementById("backgroundOpacity").style.display = "none";
    }, 150);

    registerToggle = false;
  }
}

function popupSwitchLogin() {
  if (!loginToggle) {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("backgroundOpacity").style.display = "block";

    setTimeout(function () {
      document.getElementById("loginForm").style.opacity = "1";
      document.getElementById("backgroundOpacity").style.opacity = "1";
    }, 150);
    loginToggle = true;
    document.getElementById("registerForm").style.opacity = "0";

    setTimeout(function () {
      document.getElementById("registerForm").style.display = "none";
    }, 150);

    registerToggle = false;
  }
}
