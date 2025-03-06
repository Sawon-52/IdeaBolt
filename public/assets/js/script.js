// Clear the error message when the user starts typing or focuses on the form fields
function clearErrorMessage() {
  document.getElementById("error-message").innerHTML = "";
}

// Attach event listeners to the form fields
document.addEventListener("DOMContentLoaded", function () {
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");

  if (emailInput) {
    emailInput.addEventListener("input", clearErrorMessage);
    emailInput.addEventListener("focus", clearErrorMessage);
  }

  if (passwordInput) {
    passwordInput.addEventListener("input", clearErrorMessage);
    passwordInput.addEventListener("focus", clearErrorMessage);
  }
});



document.getElementById('showButton').addEventListener('click', function() {
    const passwordField = document.getElementById('password');
    const showButton = document.getElementById('showButton');
    const hideButton = document.getElementById('hideButton');

    // Show the password
    passwordField.type = 'text';
    showButton.classList.add('hidden'); // Hide the "Show" button
    hideButton.classList.remove('hidden'); // Show the "Hide" button
});

document.getElementById('hideButton').addEventListener('click', function() {
    const passwordField = document.getElementById('password');
    const showButton = document.getElementById('showButton');
    const hideButton = document.getElementById('hideButton');

    // Hide the password
    passwordField.type = 'password';
    hideButton.classList.add('hidden'); // Hide the "Hide" button
    showButton.classList.remove('hidden'); // Show the "Show" button
});


