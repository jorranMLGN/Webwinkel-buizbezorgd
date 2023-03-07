var loginToggle = false;

function popupLogin() {
  if (!loginToggle) {
    document.getElementById("loginForm").style.display = "block";
    loginToggle = true;
  } else {
    document.getElementById("loginForm").style.display = "none";
    loginToggle = false;
  }
}
