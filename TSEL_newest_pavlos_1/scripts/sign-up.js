function validateForm() {
    var firstName = document.getElementById("name").value;
    var lastName = document.getElementById("surname").value;
    var studentId = document.getElementById("am").value;
    var phoneNumber = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password2").value;

    // Check first name
    if (/\d/.test(firstName)) {
        alert("First name cannot contain digits");
        return false;
    }

    // Check last name
    if (/\d/.test(lastName)) {
        alert("Last name cannot contain digits");
        return false;
    }

    // Check student ID
    if (!/^\d{13}$/.test(studentId) || !/^2022|2024|2025/.test(studentId.substr(0, 4))) {
        alert("Invalid student ID. It should consist of 13 digits, and the first four digits must be 2022, 2024, or 2025.");
        return false;
    }

    // Check phone number
    if (!/^\d{10}$/.test(phoneNumber)) {
        alert("Invalid phone number. It should consist of 10 digits.");
        return false;
    }

    // Check email
    if (!/^\S+@\S+\.\S+$/.test(email)) {
        alert("Invalid email address");
        return false;
    }

    // Check password
    if (password.length < 5 || !/[!#$]/.test(password)) {
        alert("Password should be at least 5 characters long and contain at least one symbol character (!, #, $)");
        return false;
    }

    // Check confirm password
    if (confirmPassword !== password) {
        alert("Confirm password should be identical to the password");
        return false;
    }

    // All checks passed
    return true;
}