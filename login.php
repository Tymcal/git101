<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulate user credentials (replace with database check in a real-world scenario)
    $validUsername = "user";
    $validPassword = "password";

    // Get user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the credentials are valid
    if ($username == $validUsername && $password == $validPassword) {
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        // Redirect to the welcome page
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

<?php
// Display error message if login fails
if (isset($error)) {
    echo "<p>$error</p>";
}
?>

</body>
</html>
