<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Process the data (e.g., validate user credentials)
    // ...

    // Redirect to sign-in success page
    header("Location: signin.html");
    exit();
}
?>
