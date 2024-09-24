<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Process the data (e.g., save to database)
    // ...

    // Redirect to sign-up success page
    header("Location: signup.html");
    exit();
}
?>
