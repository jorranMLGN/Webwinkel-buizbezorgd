var loginToggle = false;

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
