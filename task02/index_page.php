<?php
// Database connection
$servername = "localhost";
$username = "dharani";
$password = "dharani";
$dbname = "people";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check if email and password match
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User authenticated
        echo "Authentication successful!";
        // You can redirect the user to another page after authentication
        header("Location: success.html");
    } else {
        // Authentication failed
        echo "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
        <label>Email:</label>
        <input type="text" name="email" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>
