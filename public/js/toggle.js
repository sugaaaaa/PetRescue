function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var icon = document.getElementById("showPasswordIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("fa-solid fa-eye");
        icon.classList.add("fa-eye-slash");
        document.getElementById("showPasswordLabel").textContent = "Hide";
    } else {
        passwordInput.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-solid fa-eye");
        document.getElementById("showPasswordLabel").textContent = "Show";
    }
}