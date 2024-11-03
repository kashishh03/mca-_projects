<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "cuims";

$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    // Capture and sanitize user input to prevent SQL injection
    $user_name = mysqli_real_escape_string($conn, $_POST['username']);
    $pass_word = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the username already exists for registration
    $check_query = "SELECT * FROM login_table WHERE username = '$user_name'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Username exists, attempt login
        $login_query = "SELECT * FROM login_table WHERE username = '$user_name' AND password = '$pass_word'";
        $login_result = mysqli_query($conn, $login_query);

        if (mysqli_num_rows($login_result) > 0) {
            // Valid credentials, set session and redirect
            $_SESSION['username'] = $user_name;
            header("Location: landingPage.html");
            exit();
        } else {
            echo "Invalid credentials. Please try again.";
        }
    } else {
        // Username does not exist, proceed with registration
        $sql_query = "INSERT INTO login_table (username, password) VALUES ('$user_name', '$pass_word')";

        if (mysqli_query($conn, $sql_query)) {
            // Registration successful, redirect to landing page
            $_SESSION['username'] = $user_name;
            header("Location: landingPage.html");
            exit();
        } else {
            echo "ERROR: " . $sql_query . " " . mysqli_error($conn);
        }
    }

    // Close connection
    mysqli_close($conn);
}
?>
