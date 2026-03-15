const form = document.getElementById("form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const error_message = document.getElementById("error");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    var errors = getLoginFormErrors(emailInput.value, passwordInput.value);

    if (errors.length > 0) {
        error_message.innerText = errors.join(". ");
        return;
    }

    fetch('http://localhost:3000/login', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        credentials: 'include',
        body: JSON.stringify({ email: emailInput.value, password: passwordInput.value })
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (data.success) {
             localStorage.setItem('username', data.username);
            window.location.href = 'home.html';
        } else {
            error_message.innerText = data.message;
        }
    });
});

function getLoginFormErrors(email, password) {
    var errors = [];

    if (email === '' || email === null) {
        errors.push("Email is required");
    }
    if (password === '' || password === null) {
        errors.push("Password is required");
    }

    return errors;
}