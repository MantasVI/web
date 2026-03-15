const form = document.getElementById("form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const usernameInput = document.getElementById("username");
const error_message = document.getElementById("error");

form.addEventListener("submit", function(e) {
    e.preventDefault();

    var errors = getSignupFormErrors(emailInput.value, passwordInput.value,usernameInput.value);

    if (errors.length > 0) {
        error_message.innerText = errors.join(". ");
        return;
    }

    fetch('http://localhost:3000/signup', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ email: emailInput.value, password: passwordInput.value, username: usernameInput.value})
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (data.success) {
            window.location.href = 'login.html';
        } else {
            error_message.innerText = data.message;
        }
    });
});

function getSignupFormErrors(email, password,username) {
    var errors = [];

    if (email === '' || email === null) {
        errors.push("Email is required");
    }
    if (password === '' || password === null) {
        errors.push("Password is required");
    }
     if (username === '' || username === null) {
        errors.push("Username is required");
    }
    return errors;
}