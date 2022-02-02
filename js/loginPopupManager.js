function showLoginPopup() {
    document.getElementById("login-register-popup").style.visibility = "visible";
    document.getElementById("login-register-popup").style.opacity = "100%";
    document.getElementById("div-login-actioner-popup").classList.add("bluesky-tint");
    document.getElementById("div-login-actioner-popup").classList.remove("opacity06"); 
    document.getElementById("div-login-actioner-popup").classList.add("opacity1");
}

function hideLoginPopup() {
    document.getElementById("login-register-popup").style.visibility = "hidden";
    document.getElementById("login-register-popup").style.opacity = "0%";
    document.getElementById("div-login-actioner-popup").classList.remove("bluesky-tint");
    document.getElementById("div-login-actioner-popup").classList.add("opacity06");
    document.getElementById("div-login-actioner-popup").classList.remove("opacity1");
}