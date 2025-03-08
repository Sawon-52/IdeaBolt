function messageClearControl() {
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
}
messageClearControl();

// function togglePassword() {
//     const showButton = document.getElementById("showButton");
//     showButton.addEventListener("click", function () {
//     const passwordField = document.getElementById("password");

//     const hideButton = document.getElementById("hideButton");

//     // Show the password
//     passwordField.type = "text";
//     showButton.classList.add("hidden"); // Hide the "Show" button
//     hideButton.classList.remove("hidden"); // Show the "Hide" button
//   });

//   document.getElementById("hideButton").addEventListener("click", function () {
//     const passwordField = document.getElementById("password");
//     const showButton = document.getElementById("showButton");
//     const hideButton = document.getElementById("hideButton");

//     // Hide the password
//     passwordField.type = "password";
//     hideButton.classList.add("hidden"); // Hide the "Hide" button
//     showButton.classList.remove("hidden"); // Show the "Show" button
//   });
// }
// togglePassword();

// toggling  user and admin panel
function togglePanel() {
  document.getElementById("panel_menu").addEventListener("click", function () {
    const panelSidebar = document.getElementById("panel_sidebar");

    if (panelSidebar.classList.contains("hidden")) {
      panelSidebar.classList.remove("hidden");
    } else {
      panelSidebar.classList.add("hidden");
    }
  });
}

togglePanel();

//  Server message removing fuctionality
const cutMessage = document.getElementById("cut_message");
const messageBox = document.getElementById("message_box");
cutMessage.addEventListener("click", function () {
  messageBox.classList.add("hidden");
});
