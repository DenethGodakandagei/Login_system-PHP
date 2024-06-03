
function Submit() {
    const oldPassword = document.getElementById("old-password").value;
    const newPassword = document.getElementById("new-password").value;
    const confirmPassword = document.getElementById("confirm-password").value;

    if (newPassword !== confirmPassword) {
        alert("New password and confirm password do not match.");
        return;
    }

    if (oldPassword === newPassword) {
        alert("New password must be different from the old password.");
        return;
    }

    // Here, you can add logic to update the password.
    // This can include sending a request to a server to change the password.

    console.log("Password updated successfully!");
    alert("Password updated successfully.");
}