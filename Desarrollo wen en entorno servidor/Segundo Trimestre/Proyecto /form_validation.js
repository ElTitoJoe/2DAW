document.getElementById("loginForm").addEventListener("submit", function(event) {
    if (!validateLoginForm()) {
        event.preventDefault(); // Cancela el envío del formulario si la validación falla
    }
});

function validateLoginForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username.trim() === "" || password.trim() === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }
    return true;
}

